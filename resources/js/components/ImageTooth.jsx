import React from "react";
import {ReactSketchCanvas} from "react-sketch-canvas";
import * as CONSTANTS from "../config/constants";
import {Box} from "@mui/material";

export const ImageTooth = React.forwardRef(({item, finding, findingType, width, height, draw = null, guiding = null, fixing = null, model, onClick = null, onLoaded = null}, ref) => {
    const [loaded, setLoaded] = React.useState(false);

    const up = item.position === CONSTANTS.POSITION.UP;

    const config = {
        width: width,
        height: height,
        up: up,
        strokeWidth: 2,
        center: item.type !== CONSTANTS.TOOTH.INCISIVE,
        verticalLine: item.type === CONSTANTS.TOOTH.MOLAR,
        middleLine: [CONSTANTS.TOOTH.MOLAR, CONSTANTS.TOOTH.PREMOLAR].includes(item.type) || item.number === 24,
        edges: (item.type === CONSTANTS.TOOTH.MOLAR ? (up ? 3 : 2) : (item.type === CONSTANTS.TOOTH.CANINE ? 2 : 1)),
        justifyEdges: item.type === CONSTANTS.TOOTH.PREMOLAR,
    };

    const halfY = config.up ? 0 : config.height / 2;

    const widthTriangle = config.width * (config.justifyEdges ? 0.5 : 1.0) / (config.edges > 1 ? config.edges - (1.0 - 1.0 / config.edges) : 1);
    const offset = widthTriangle * (1.0 - 1.0 / config.edges);
    const startX = (config.width * 0.5) - (widthTriangle * ((config.edges & 1) ? 0.5 : 0.25));

    const Rect = ({x, y, width, height, fill = "transparent"}) => {
        return (
            <rect x={x} y={y - halfY} width={width} height={height} fill={fill} strokeWidth={config.strokeWidth} stroke={"rgb(0, 0, 0)"}/>
        )
    }

    const Triangle = ({halfLeft = false, halfRight = false, x1, y1, x2, y2, x3, y3}) => {
        const dist = Math.sqrt(Math.pow(x1 - x2, 2) + Math.pow(y1 - y2,  2));
        const [uX, uY] = [(x1 - x2) / dist, (y1 - y2) / dist];

        const f = dist / config.edges;
        return (
            <g>
                <line x1={x1-(halfLeft ? f*uX : 0)} y1={y1-(halfLeft ? f*uY : 0)} x2={x2} y2={y2} strokeWidth={config.strokeWidth} stroke={"rgb(0, 0, 0)"}/>
                <line x1={x3+(halfRight ? f*uX : 0)} y1={y3-(halfRight ? f*uY : 0)} x2={x2} y2={y2} strokeWidth={config.strokeWidth} stroke={"rgb(0, 0, 0)"}/>
            </g>
        )
    }

    const Line = ({x1, y1, x2, y2}) => {
        return (
            <line x1={x1} y1={y1 - halfY} x2={x2} y2={y2 - halfY} strokeWidth={config.strokeWidth} stroke={"rgb(0, 0, 0)"}/>
        )
    }

    return (
        <Box>
            <Box height={18} textAlign={'center'}>
                {finding.external !== undefined && finding.external(item, CONSTANTS.POSITION.UP, width, findingType)}
            </Box>
            <div style={{position: "relative", display: "flex", justifyContent: "center"}}>
                {draw !== null && <Box>
                    <ReactSketchCanvas
                        style={{
                            position: "absolute",
                            left: 0,
                            right: 0,
                            margin: 'auto',
                        }}
                        ref={ref}
                        onChange={() => {
                            if (!loaded) {
                                if (fixing && item.findingType !== findingType.value) {
                                    ref.current.resetCanvas();
                                    fixing(config.width, config.height, ref.current, item, findingType);
                                }
                                else if (item.canvasPaths.length > 0) {
                                    ref.current.loadPaths(item.canvasPaths);
                                }
                            }
                            setLoaded(true);
                        }}
                        width={`${config.width}px`}
                        height={`${config.height}px`}
                        canvasColor={"transparent"}
                        allowOnlyPointerType={fixing ? null : 'all'}
                        {...draw}
                    />
                    {guiding && guiding(config.width, config.height, ref.current)}
                </Box>}
                {item.url !== null && <img src={item.url} alt={'base64'} width={`${config.width}px`} height={`${config.height}px`} style={{position: 'absolute', zIndex: -1}}/>}
                <svg width={config.width} height={config.height} onClick={onClick}>
                    <g>
                        <Rect x={0} y={config.height*0.5} width={config.width} height={config.height*0.5}/>

                        <Line x1={0} y1={config.height*0.5} x2={config.width*0.26} y2={config.height*(config.center ? 0.63 : 0.75)} />
                        <Line x1={config.width*0.75} y1={config.height*(config.center ? 0.87 : 0.75)} x2={config.width} y2={config.height} />

                        <Line x1={0} y1={config.height} x2={config.width*0.26} y2={config.height*(config.center ? 0.87 : 0.75)} />
                        <Line x1={config.width*0.75} y1={config.height*(config.center ? 0.63 : 0.75)} x2={config.width} y2={config.height*0.5} />

                        {config.center && <Rect x={config.width*0.26} y={config.height*0.63} width={config.width*0.48} height={config.height*0.24}/>}

                        {(config.middleLine || !config.center) && <Line x1={config.width*0.26} y1={config.height*0.75} x2={config.width*0.75} y2={config.height*0.75} />}
                        {config.center && config.verticalLine && <Line x1={config.width*0.42} y1={config.height*0.63} x2={config.width*0.42} y2={config.height*0.87} />}
                        {config.center && config.verticalLine && <Line x1={config.width*0.58} y1={config.height*0.63} x2={config.width*0.58} y2={config.height*0.87} />}
                    </g>
                    <g>
                        {config.edges >= 2 && <Triangle halfRight={true} index={0} x1={startX - offset} y1={config.height/2} x2={startX + widthTriangle*0.5 - offset} y2={config.up ? 0 : config.height} x3={startX + widthTriangle - offset} y3={config.height/2}/>}
                        {config.edges >= 3 && <Triangle halfLeft={true} index={1} x1={startX + offset} y1={config.height/2} x2={startX + widthTriangle*0.5 + offset} y2={config.up ? 0 : config.height} x3={startX + widthTriangle + offset} y3={config.height/2}/>}
                        <Triangle index={2} x1={startX} y1={config.height/2} x2={startX + widthTriangle*0.5} y2={config.up ? 0 : config.height} x3={startX + widthTriangle} y3={config.height/2}/>
                    </g>
                </svg>
            </div>
            <Box height={18} textAlign={'center'}>
                {finding.external !== undefined && finding.external(item, CONSTANTS.POSITION.DOWN, width, findingType)}
            </Box>
        </Box>
    );
});

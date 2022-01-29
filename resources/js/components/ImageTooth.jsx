import {POSITION_TOOTH, TOOTH} from "../config/constants";

export default function ImageTooth({item, width, height, model, onClick = null}) {
    const up = item.position === POSITION_TOOTH.UP;

    const config = {
        width: width,
        height: height,
        up: up,
        strokeWidth: 2,
        center: item.type !== TOOTH.INCISIVE,
        verticalLine: item.type === TOOTH.MOLAR,
        middleLine: [TOOTH.MOLAR, TOOTH.PREMOLAR].includes(item.type) || item.number === 24,
        edges: (item.type === TOOTH.MOLAR ? (up ? 3 : 2) : (item.type === TOOTH.CANINE ? 2 : 1)),
        justifyEdges: item.type === TOOTH.PREMOLAR,
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

    const Triangle = ({x1, y1, x2, y2, x3, y3, fill = "white"}) => {
        return (
            <polygon points={`${x1},${y1} ${x2},${y2} ${x3},${y3}`} fill={fill} strokeWidth={config.strokeWidth} stroke={"rgb(0, 0, 0)"}/>
        )
    }

    const Line = ({x1, y1, x2, y2}) => {
        return (
            <line x1={x1} y1={y1 - halfY} x2={x2} y2={y2 - halfY} strokeWidth={config.strokeWidth} stroke={"rgb(0, 0, 0)"}/>
        )
    }

    return (
        <svg width={config.width} height={config.height} onClick={onClick}>
            <g>
                <Rect x={0} y={config.height*0.5} width={config.width} height={config.height*0.5}/>

                <Line x1={0} y1={config.height*0.5} x2={config.width*(config.center ? 0.5 : 0.26)} y2={config.height*0.75} />
                <Line x1={config.width*(config.center ? 0.5 : 0.75)} y1={config.height*0.75} x2={config.width} y2={config.height} />

                <Line x1={0} y1={config.height} x2={config.width*(config.center ? 0.5 : 0.26)} y2={config.height*0.75} />
                <Line x1={config.width*(config.center ? 0.5 : 0.75)} y1={config.height*0.75} x2={config.width} y2={config.height*0.5} />

                {config.center && <Rect x={config.width*0.26} y={config.height*0.63} fill={"white"} width={config.width*0.48} height={config.height*0.24}/>}

                {(config.middleLine || !config.center) && <Line x1={config.width*0.26} y1={config.height*0.75} x2={config.width*0.75} y2={config.height*0.75} />}
                {config.center && config.verticalLine && <Line x1={config.width*0.42} y1={config.height*0.63} x2={config.width*0.42} y2={config.height*0.87} />}
                {config.center && config.verticalLine && <Line x1={config.width*0.58} y1={config.height*0.63} x2={config.width*0.58} y2={config.height*0.87} />}
            </g>
            <g>
                {config.edges >= 2 && <Triangle x1={startX - offset} y1={config.height/2} x2={startX + widthTriangle*0.5 - offset} y2={config.up ? 0 : config.height} x3={startX + widthTriangle - offset} y3={config.height/2}/>}
                {config.edges >= 3 && <Triangle x1={startX + offset} y1={config.height/2} x2={startX + widthTriangle*0.5 + offset} y2={config.up ? 0 : config.height} x3={startX + widthTriangle + offset} y3={config.height/2}/>}
                <Triangle x1={startX} y1={config.height/2} x2={startX + widthTriangle*0.5} y2={config.up ? 0 : config.height} x3={startX + widthTriangle} y3={config.height/2}/>
            </g>
        </svg>
    );
}

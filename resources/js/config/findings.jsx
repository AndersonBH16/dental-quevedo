import FractureFinding from "../components/FractureFinding";
import EruptionFinding from "../components/EruptionFinding";
import {POSITION} from "./constants";
import SupernumeraryFinding from "../components/SupernumeraryFinding";
import {AddBoxOutlined, ArrowDownward, ArrowUpward, ChangeHistory, CircleOutlined} from "@mui/icons-material";
import React from "react";
import * as CONSTANTS from "./constants";
import curveUp from "../assets/curve-up.png";
import curveDown from "../assets/curve-down.png";
import oval from "../assets/oval.png";
import {Box} from "@mui/material";

export const ITEMS = [
    {
        value: 0,
        name: '-',
        draw: null,
        colorFindingType: 'black',
    },
    {
        value: 1,
        name: 'LESIÓN DE CARIES DENTAL',
        description: "Dibuje la lesión de caries dental según la forma en la que se evidencie:",
        colorFindingType: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 2,
        name: 'DEFECTOS DE DESARROLLO DEL ESMALTE (DDE)',
        colorFindingType: 'red',
        draw: null,
    },
    {
        value: 3,
        name: 'SELLANTES',
        description: "Dibuje el recorrido del sellante siguiendo la forma de las fosas y fisuras selladas:",
    },
    {
        value: 4,
        name: 'FRACTURA',
        colorFindingType: 'red',
        description: "Marque 2 veces sobre la pieza dentaria para dibujar una línea que represente la fractura de la corona y/o raíz según sea el caso:",
        draw: {},
        guiding: (width, height, canvas) => <FractureFinding width={width} height={height} canvas={canvas}/>,
    },
    {
        value: 5,
        name: 'FOSAS Y FISURAS PROFUNDAS (FFP)',
        colorFindingType: 'blue',
    },
    {
        value: 6,
        name: 'PIEZA DENTARIA AUSENTE',
        colorFindingType: 'blue',
        draw: {},
        fixing: (width, height, canvas) => {
            if (canvas) {
                const offset = 20;
                canvas.loadPaths([
                    {
                        drawMode: true,
                        paths: [
                            {x: offset, y: offset},
                            {x: width-offset, y: height-offset},
                        ],
                        strokeWidth: 15,
                        strokeColor: "blue",
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: width-offset, y: offset},
                            {x: offset, y: height-offset},
                        ],
                        strokeWidth: 15,
                        strokeColor: "blue",
                    },
                ]);
            }
        }
    },
    {
        value: 7,
        name: 'PIEZA DENTARIA EN ERUPCIÓN',
        colorFindingType: 'blue',
        description: "Marque las veces requeridas sobre la pieza dentaria para dibujar un zigzag dirigida hacia el plano oclusal:",
        draw: {},
        guiding: (width, height, canvas) => <EruptionFinding width={width} height={height} canvas={canvas}/>,
    },
    {
        value: 8,
        name: 'RESTAURACIÓN DEFINITIVA',
        description: "Dibuje la restauración acorde con la forma que se evidencie:",
    },
    {
        value: 9,
        name: 'RESTAURACIÓN TEMPORAL',
        description: "Dibuje el contorno de la restauración siguiendo su forma en las superficies comprometidas:",
        draw: {
            strokeWidth: 15,
            strokeColor: "red",
        },
    },
    {
        value: 10,
        name: 'EDÉNTULO TOTAL',
        draw: {},
        fixing: (width, height, canvas, tooth) => {
            if (canvas) {
                const factor = tooth.position === POSITION.UP ? 0.75 : 0.25;
                canvas.loadPaths([
                    {
                        drawMode: true,
                        paths: [
                            {x: 0, y: factor * height},
                            {x: width, y: factor * height},
                        ],
                        strokeWidth: 20,
                        strokeColor: "blue",
                    },
                ]);
            }
        }
    },
    {
        value: 11,
        name: 'PIEZA DENTARIA SUPERNUMERARIA',
        colorFindingType: 'blue',
        description: "Marque la ubicación de la pieza supernumeraria:",
        draw: {},
        guiding: (width, height, canvas) => <SupernumeraryFinding width={width} height={height} canvas={canvas}/>,
    },
    {
        value: 12,
        name: 'PIEZA DENTARIA EXTRUIDA',
        colorFindingType: 'blue',
        external: (tooth, position) => {
            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.DOWN)
                return (
                    <ArrowDownward sx={{fontSize: 18, color: 'blue'}}/>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.UP)
                return (
                    <ArrowUpward sx={{fontSize: 18, color: 'blue'}}/>
                );

            return null;
        }
    },
    {
        value: 13,
        name: 'PIEZA DENTARIA INTRUIDA',
        colorFindingType: 'blue',
        external: (tooth, position) => {
            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.DOWN)
                return (
                    <ArrowUpward sx={{fontSize: 18, color: 'blue'}}/>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.UP)
                return (
                    <ArrowDownward sx={{fontSize: 18, color: 'blue'}}/>
                );

            return null;
        }
    },
    {
        value: 14,
        name: 'DIASTEMA',
        draw: {},
        fixing: (width, height, canvas, tooth, findingType) => {
            if (canvas) {
                const dir = (findingType.value.split(' ')[2] === '0') ? 1 : -1;
                const h = (dir > 0 ? 0.64 : 0.36) * width;
                const k = 0.75 * height;
                const points = [];
                const delta = 0.5;
                const r = 70;
                for (let angle = (1.6 * Math.PI) ; angle <= (2.4 * Math.PI) ; angle += delta) {
                    const x = dir * r * Math.cos(angle);
                    const y = dir * r * Math.sin(angle);
                    points.push({x: x + h, y: y + k});
                }
                canvas.loadPaths([
                    {
                        drawMode: true,
                        paths: points,
                        strokeWidth: 15,
                        strokeColor: "blue",
                    },
                ]);
            }
        }
    },
    {
        value: 15,
        name: 'GIROVERSIÓN',
        external: (tooth, position) => {
            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.DOWN)
                return (
                    <img alt={"curveDown"} src={curveDown} style={{height: 8}}/>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.UP)
                return (
                    <img alt={"curveUp"} src={curveUp} style={{height: 8}}/>
                );

            return null;
        }
    },
    {
        value: 16,
        name: 'POSICIÓN DENTARIA',
        colorFindingType: 'blue',
    },
    {
        value: 17,
        name: 'PIEZA DENTARIA EN CLAVIJA',
        highlighting: (tooth, minWidth, width) => {
            const iconWidth = minWidth * 1.5;
            const offsetLeft = Math.max(iconWidth - width, 0) / 2;
            return (
                <Box
                    sx={{
                        position: 'absolute',
                        width: '100%',
                        top: -22,
                        textAlign: 'center',
                        left: -offsetLeft,
                    }}
                >
                    <ChangeHistory sx={{fontSize: 50, width: iconWidth, color: 'blue'}}/>
                </Box>
            );
        }
    },
    {
        value: 18,
        name: 'PIEZA DENTARIA ECTÓPICA',
        colorFindingType: 'blue',
    },
    {
        value: 19,
        name: 'MACRODONCIA',
        colorFindingType: 'blue',
    },
    {
        value: 20,
        name: 'MICRODONCIA',
        colorFindingType: 'blue',
    },
    {
        value: 21,
        name: 'FUSIÓN',
        highlighting: (tooth, minWidth, width, findingType) => {
            const dir = (findingType.value.split(' ')[2] === '0') ? 1 : -1;
            return (
                <Box
                    sx={{
                        position: 'absolute',
                        width: '100%',
                        top: -8,
                        left: dir < 0 ? -8 : 'auto',
                        right: dir > 0 ? -8 : 'auto',
                    }}
                >
                    <img src={oval} style={{width: '100%'}} alt="oval"/>
                </Box>
            );
        }
    },
    {
        value: 22,
        name: 'GEMINACIÓN',
        highlighting: (tooth, minWidth, width) => {
            const iconWidth = minWidth * 1.5;
            const offsetLeft = Math.max(iconWidth - width, 0) / 2;
            return (
                <Box
                    sx={{
                        position: 'absolute',
                        width: '100%',
                        top: -10,
                        textAlign: 'center',
                        left: -offsetLeft,
                    }}
                >
                    <CircleOutlined sx={{fontSize: 36, width: iconWidth, color: 'blue'}}/>
                </Box>
            );
        }
    },
    {
        value: 23,
        name: 'IMPACTACIÓN',
        colorFindingType: 'blue',
    },
    {
        value: 24,
        name: 'SUPERFICIE DESGASTADA',
        description: "Dibuje acorde a la forma en la que se evidencia:",
        colorFindingType: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 25,
        name: 'REMANENTE RADICULAR',
        colorFindingType: 'red',
    },
    {
        value: 26,
        name: 'MOVILIDAD PATOLÓGICA',
        colorFindingType: 'red',
    },
    {
        value: 27,
        name: 'CORONA TEMPORAL',
        colorFindingType: 'red',
        draw: {},
        fixing: (width, height, canvas, tooth) => {
            if (canvas) {
                const offsetY = (tooth.position === CONSTANTS.POSITION.UP) ? (height / 2) : 0;
                canvas.loadPaths([
                    {
                        drawMode: true,
                        paths: [
                            {x: 5, y: offsetY + 5},
                            {x: width-5, y: offsetY + 5},
                            {x: width-5, y: offsetY + 15},
                            {x: width-5, y: offsetY + height/2 - 22},
                            {x: width-5, y: offsetY + height/2 - 7},
                            {x: 5, y: offsetY + height/2 - 7},
                            {x: 5, y: offsetY + height/2 - 22},
                            {x: 5, y: offsetY + 5},
                        ],
                        strokeWidth: 15,
                        strokeColor: "red",
                    },
                ]);
            }
        }
    },
    {
        value: 28,
        name: 'CORONA',
        draw: {},
        fixing: (width, height, canvas, tooth, findingType) => {
            if (canvas) {
                const offsetY = (tooth.position === CONSTANTS.POSITION.UP) ? (height / 2) : 0;
                canvas.loadPaths([
                    {
                        drawMode: true,
                        paths: [
                            {x: 5, y: offsetY + 5},
                            {x: width-5, y: offsetY + 5},
                            {x: width-5, y: offsetY + 15},
                            {x: width-5, y: offsetY + height/2 - 22},
                            {x: width-5, y: offsetY + height/2 - 7},
                            {x: 5, y: offsetY + height/2 - 7},
                            {x: 5, y: offsetY + height/2 - 22},
                            {x: 5, y: offsetY + 5},
                        ],
                        strokeWidth: 15,
                        strokeColor: findingType.color,
                    },
                ]);
            }
        }
    },
    {
        value: 29,
        name: 'ESPIGO - MUÑÓN',
        draw: {},
        fixing: (width, height, canvas, tooth, findingType) => {
            if (canvas) {
                const isUp = (tooth.position === CONSTANTS.POSITION.UP);
                const w = 0.52 * width;
                const h = 0.27 * height;
                const strokeWidth = 15;
                const offsetX = width * 0.24;
                const offsetY = height * (isUp ? 0.63 : 0.12);
                canvas.loadPaths([
                    {
                        drawMode: true,
                        paths: [
                            {x: offsetX, y: offsetY},
                            {x: offsetX + w, y: offsetY},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: offsetX + w, y: offsetY},
                            {x: offsetX + w, y: offsetY + h},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: offsetX + w, y: offsetY + h},
                            {x: offsetX, y: offsetY + h},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: offsetX, y: offsetY + h},
                            {x: offsetX, y: offsetY},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: offsetX + (w / 2), y: offsetY + (isUp ? 0 : h)},
                            {x: offsetX + (w / 2), y: isUp ? 0 : height},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                ]);
            }
        }
    },
    {
        value: 30,
        name: 'IMPLANTE DENTAL',
    },
    {
        value: 31,
        name: 'APARATO ORTODÓNTICO FIJO',
        external: (tooth, position, width, findingType) => {
            const type = parseInt(findingType.value.split(' ')[2]);
            const w = width * (type === 2 ? 1 : 0.5);

            const LineBox = () => {
                return (
                    <Box
                        sx={{
                            border: "solid 2px " + findingType.color,
                            position: 'absolute',
                            width: (type === 2) ? w : w - 9,
                            top: 8,
                            left: ((type === 1 || type === 2) ? '50%' : 'auto'),
                            right: (type === 3 ? '50%' : 'auto'),
                            marginLeft: (type === 1) ? '5px' : `${-((width / 2) + 2)}px`,
                            marginRight: (type === 3) ? '5px' : `${-((width / 2) + 2)}px`
                        }}
                    />
                );
            }

            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.UP)
                return (
                    <Box position={'relative'}>
                        <LineBox/>
                        {type !== 2 && <AddBoxOutlined sx={{fontSize: 18, color: findingType.color}}/>}
                    </Box>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.DOWN)
                return (
                    <Box position={'relative'}>
                        <LineBox/>
                        {type !== 2 && <AddBoxOutlined sx={{fontSize: 18, color: findingType.color}}/>}
                    </Box>
                );

            return null;
        }
    },
    {
        value: 32,
        name: 'APARATO ORTODÓNTICO REMOVIBLE',
        external: (tooth, position, width, findingType) => {
            const isUp = (tooth.position === CONSTANTS.POSITION.UP);
            const type = parseInt(findingType.value.split(' ')[2]);

            const LineBox = ({dir}) => {
                return (
                    <Box
                        sx={{
                            border: "solid 2px " + findingType.color,
                            position: 'absolute',
                            width: width / 2,
                            top: 8,
                            left: ((dir > 0) ? '50%' : 'auto'),
                            right: ((dir < 0) ? '50%' : 'auto'),
                            marginLeft: (type === 1) ? '5px' : `${-((width / 2) + 2)}px`,
                            marginRight: (type === 3) ? '5px' : `${-((width / 2) + 2)}px`,
                            transform: `rotate(${(dir * 15 * (isUp ? -1 : 1))}deg)`
                        }}
                    />
                );
            }

            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.UP)
                return (
                    <Box position={'relative'}>
                        <LineBox dir={1}/>
                        <LineBox dir={-1}/>
                    </Box>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.DOWN)
                return (
                    <Box position={'relative'}>
                        <LineBox dir={1}/>
                        <LineBox dir={-1}/>
                    </Box>
                );

            return null;
        }
    },
    {
        value: 33,
        name: 'PRÓTESIS FIJA',
        external: (tooth, position, width, findingType) => {
            const type = parseInt(findingType.value.split(' ')[2]);
            const w = width * (type === 2 ? 1 : 0.5);

            const Bar = () => {
                return (
                    <Box
                        sx={{
                            position: 'absolute',
                            border: "solid 2px " + findingType.color,
                            height: 8,
                            left: '50%',
                            marginLeft: '-2px',
                            top: 2,
                        }}
                    />
                );
            }

            const LineBox = ({isUp}) => {
                return (
                    <Box
                        sx={{
                            border: "solid 2px " + findingType.color,
                            position: 'absolute',
                            width: w,
                            top: isUp ? 2 : 10,
                            left: ((type === 1 || type === 2) ? '50%' : 'auto'),
                            right: (type === 3 ? '50%' : 'auto'),
                            marginLeft: (type === 1) ? '-2px' : `${-((width / 2) + 2)}px`,
                            marginRight: (type === 3) ? '-2px' : `${-((width / 2) + 2)}px`
                        }}
                    />
                );
            }

            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.UP)
                return (
                    <Box position={'relative'}>
                        <LineBox isUp={true}/>
                        {type !== 2 && <Bar/>}
                    </Box>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.DOWN)
                return (
                    <Box position={'relative'}>
                        <LineBox isUp={false}/>
                        {type !== 2 && <Bar/>}
                    </Box>
                );

            return null;
        }
    },
    {
        value: 34,
        name: 'PRÓTESIS REMOVIBLE',
        external: (tooth, position, width, findingType) => {
            const DoubleLineBox = () => {
                return (
                    <Box
                        sx={{
                            borderTop: "solid 3px " + findingType.color,
                            borderBottom: "solid 3px " + findingType.color,
                            width: width,
                            margin: 'auto',
                            height: 3,
                        }}
                    />
                );
            }

            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.UP)
                return (
                    <Box position={'relative'} padding={'3px'}>
                        <DoubleLineBox/>
                    </Box>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.DOWN)
                return (
                    <Box position={'relative'} padding={'3px'}>
                        <DoubleLineBox/>
                    </Box>
                );

            return null;
        }
    },
    {
        value: 35,
        name: 'PRÓTESIS TOTAL',
        external: (tooth, position, width, findingType) => {
            const DoubleLineBox = () => {
                return (
                    <Box
                        sx={{
                            borderTop: "solid 3px " + findingType.color,
                            borderBottom: "solid 3px " + findingType.color,
                            width: width,
                            margin: 'auto',
                            height: 3,
                        }}
                    />
                );
            }

            if (tooth.position === CONSTANTS.POSITION.UP && position === CONSTANTS.POSITION.UP)
                return (
                    <Box position={'relative'} padding={'3px'}>
                        <DoubleLineBox/>
                    </Box>
                );

            if (tooth.position === CONSTANTS.POSITION.DOWN && position === CONSTANTS.POSITION.DOWN)
                return (
                    <Box position={'relative'} padding={'3px'}>
                        <DoubleLineBox/>
                    </Box>
                );

            return null;
        }
    },
    {
        value: 36,
        name: 'TRATAMIENTO PULPAR',
        draw: {},
        fixing: (width, height, canvas, tooth, findingType) => {
            const type = findingType.value.split(' ')[0];
            const strokeWidth = 15;

            const generateBox = (x, y, wx, hy) => {
                return [
                    {
                        drawMode: true,
                        paths: [
                            {x: x, y: y},
                            {x: x + wx, y: y},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: x + wx, y: y},
                            {x: x + wx, y: y + hy},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: x + wx, y: y + hy},
                            {x: x, y: y + hy},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                    {
                        drawMode: true,
                        paths: [
                            {x: x, y: y + hy},
                            {x: x, y: y},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                ];
            }

            if (canvas) {
                const isUp = (tooth.position === CONSTANTS.POSITION.UP);
                const w = 0.5 * width;
                const h = 0.24 * height;
                const offsetX = width * 0.25;
                const offsetY = height * (isUp ? 0.63 : 0.12);

                let paths = [];
                let wx = w;
                let hy = h;
                let x = offsetX;
                let y = offsetY;
                while (wx > 20 && (type === 'PP')) {
                    paths = paths.concat(generateBox(x, y, wx, hy));
                    x += strokeWidth - 2;
                    y += strokeWidth - 2;
                    wx -= (2 * strokeWidth) - 4;
                    hy -= (2 * strokeWidth) - 4;
                }

                canvas.loadPaths(paths.concat([
                    {
                        drawMode: true,
                        paths: [
                            {x: offsetX + (w / 2), y: offsetY + (h * 0.5)},
                            {x: offsetX + (w / 2), y: isUp ? 10 : height - 10},
                        ],
                        strokeWidth: strokeWidth,
                        strokeColor: findingType.color,
                    },
                ]));
            }
        }
    },
];

export const ITEM_TYPES = [
    {
        value: '-',
        name: '-',
        finding: 0,
    },
    {
        value: 'MB',
        name: 'MB - Mancha Blanca',
        finding: 1,
    },
    {
        value: 'CE',
        name: 'CE - A Nivel del Esmalte',
        finding: 1,
    },
    {
        value: 'CD',
        name: 'CD - A Nivel de la Dentina',
        finding: 1,
    },
    {
        value: 'CDP',
        name: 'CDP - A Nivel de la Dentina / Compromiso de la Pulpa',
        finding: 1,
    },
    {
        value: 'HP',
        name: 'HP - Hipoplasia',
        finding: 2,
    },
    {
        value: 'HM',
        name: 'HM - Hipo mineralización',
        finding: 2,
    },
    {
        value: 'O',
        name: 'O - Opacidades del Esmalte',
        finding: 2,
    },
    {
        value: 'D',
        name: 'D - Decoloración del Esmalte',
        finding: 2,
    },
    {
        value: 'FLUO.',
        name: 'FLUOROSIS',
        finding: 2,
    },
    {
        value: 'S B',
        name: 'S - Sellantes (Buen Estado)',
        finding: 3,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'S M',
        name: 'S - Sellantes (Mal Estado)',
        finding: 3,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: '_ 4',
        name: 'FRACTURA',
        finding: 4,
    },
    {
        value: 'FFP',
        name: 'FFP - Fosas y Fisuras Profundas',
        finding: 5,
    },
    {
        value: '_ 6',
        name: 'Pieza Dentaria Ausente',
        finding: 6,
    },
    {
        value: '_ 7',
        name: 'Pieza Dentaria en Erupción',
        finding: 7,
    },
    {
        value: 'AM B',
        name: 'AM - Amalgama Dental (Buen Estado)',
        finding: 8,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'R B',
        name: 'R - Resina (Buen Estado)',
        finding: 8,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'IV B',
        name: 'IV - Ionómero de Vidrio (Buen Estado)',
        finding: 8,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'IM B',
        name: 'IM - Incrustación Metálica (Buen Estado)',
        finding: 8,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'IE B',
        name: 'IE - Incrustación Estética (Buen Estado)',
        finding: 8,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'C B',
        name: 'C - Carilla Estética (Buen Estado)',
        finding: 8,
        color: 'blue',
        draw: {
            strokeWidth: 20,
            strokeColor: "blue",
        },
    },
    {
        value: 'AM M',
        name: 'AM - Amalgama Dental (Mal Estado)',
        finding: 8,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 'R M',
        name: 'R - Resina (Mal Estado)',
        finding: 8,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 'IV M',
        name: 'IV - Ionómero de Vidrio (Mal Estado)',
        finding: 8,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 'IM M',
        name: 'IM - Incrustación Metálica (Mal Estado)',
        finding: 8,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 'IE M',
        name: 'IE - Incrustación Estética (Mal Estado)',
        finding: 8,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: 'C M',
        name: 'C - Carilla Estética (Mal Estado)',
        finding: 8,
        color: 'red',
        draw: {
            strokeWidth: 20,
            strokeColor: "red",
        },
    },
    {
        value: '_ 9',
        name: 'Restauración Temporal',
        finding: 9,
    },
    {
        value: '_ 10',
        name: 'Edéntulo Total',
        finding: 10,
    },
    {
        value: '_ 11',
        name: 'Pieza Dentaria Supernumeraria',
        finding: 11,
    },
    {
        value: '_ 12',
        name: 'Pieza Dentaria Extruida',
        finding: 12,
    },
    {
        value: '_ 13',
        name: 'Pieza Dentaria Intruida',
        finding: 13,
    },
    {
        value: '_ 14 0',
        name: 'Diastema (Inicio)',
        finding: 14,
    },
    {
        value: '_ 14 1',
        name: 'Diastema (Fin)',
        finding: 14,
    },
    {
        value: '_ 15',
        name: 'Giroversión',
        finding: 15,
    },
    {
        value: 'M 16',
        name: "M - Mesializado",
        finding: 16,
    },
    {
        value: 'D 16',
        name: "D - Distalizado",
        finding: 16,
    },
    {
        value: 'V 16',
        name: "V - Vestibularizado",
        finding: 16,
    },
    {
        value: 'P 16',
        name: "P - Palatinizado",
        finding: 16,
    },
    {
        value: 'L 16',
        name: "L - Lingualizado",
        finding: 16,
    },
    {
        value: '_ 17',
        name: 'Pieza Dentaria en Clavija',
        finding: 17,
    },
    {
        value: 'E 18',
        name: 'Pieza Dentaria Ectópica',
        finding: 18,
    },
    {
        value: 'MAC',
        name: 'Macrodoncia',
        finding: 19,
    },
    {
        value: 'MIC',
        name: 'Microdoncia',
        finding: 20,
    },
    {
        value: '_ 21 0',
        name: 'Fusión (Inicio)',
        finding: 21,
    },
    {
        value: '_ 21 1',
        name: 'Fusión (Fin)',
        finding: 21,
    },
    {
        value: '_ 22',
        name: 'Geminación',
        finding: 22,
    },
    {
        value: 'I 23',
        name: 'Impactación',
        finding: 23,
    },
    {
        value: 'DES',
        name: 'DES - Superficie Desgastada',
        finding: 24,
    },
    {
        value: 'RR',
        name: 'Remanente Radicular',
        finding: 25,
    },
    {
        value: 'M1',
        name: 'M1 - Movilidad Patológia Grado 1',
        finding: 26,
    },
    {
        value: 'M2',
        name: 'M2 - Movilidad Patológia Grado 2',
        finding: 26,
    },
    {
        value: 'CT',
        name: 'CT - Corona Temporal',
        finding: 27,
    },
    {
        value: 'CM B',
        name: 'CM - Corona Metálica (Buen Estado)',
        finding: 28,
        color: 'blue',
    },
    {
        value: 'CF B',
        name: 'CF - Corona Fenestrada (Buen Estado)',
        finding: 28,
        color: 'blue',
    },
    {
        value: 'CMC B',
        name: 'CMC - Corona Metal Cerámica (Buen Estado)',
        finding: 28,
        color: 'blue',
    },
    {
        value: 'CV B',
        name: 'CV - Corona Veener (Buen Estado)',
        finding: 28,
        color: 'blue',
    },
    {
        value: 'CJ B',
        name: 'CJ - Corona Jacket (Buen Estado)',
        finding: 28,
        color: 'blue',
    },
    {
        value: 'CM M',
        name: 'CM - Corona Metálica (Mal Estado)',
        finding: 28,
        color: 'red',
    },
    {
        value: 'CF M',
        name: 'CF - Corona Fenestrada (Mal Estado)',
        finding: 28,
        color: 'red',
    },
    {
        value: 'CMC M',
        name: 'CMC - Corona Metal Cerámica (Mal Estado)',
        finding: 28,
        color: 'red',
    },
    {
        value: 'CV M',
        name: 'CV - Corona Veener (Mal Estado)',
        finding: 28,
        color: 'red',
    },
    {
        value: 'CJ M',
        name: 'CJ - Corona Jacket (Mal Estado)',
        finding: 28,
        color: 'red',
    },
    {
        value: '_ 29 B',
        name: 'Espigo - Muñón (Buen Estado)',
        finding: 29,
        color: 'blue',
    },
    {
        value: '_ 29 M',
        name: 'Espigo - Muñón (Mal Estado)',
        finding: 29,
        color: 'red',
    },
    {
        value: 'IMP B',
        name: 'IMP - Implante Dental (Buen Estado)',
        finding: 30,
        color: 'blue',
    },
    {
        value: 'IMP M',
        name: 'IMP - Implante Dental (Mal Estado)',
        finding: 30,
        color: 'red',
    },
    {
        value: '_ 31 1 B',
        name: 'Inicio (Buen Estado)',
        finding: 31,
        color: 'blue',
    },
    {
        value: '_ 31 2 B',
        name: 'Centro (Buen Estado)',
        finding: 31,
        color: 'blue',
    },
    {
        value: '_ 31 3 B',
        name: 'Fin (Buen Estado)',
        finding: 31,
        color: 'blue',
    },
    {
        value: '_ 31 1 M',
        name: 'Inicio (Mal Estado)',
        finding: 31,
        color: 'red',
    },
    {
        value: '_ 31 2 M',
        name: 'Centro (Mal Estado)',
        finding: 31,
        color: 'red',
    },
    {
        value: '_ 31 3 M',
        name: 'Fin (Mal Estado)',
        finding: 31,
        color: 'red',
    },
    {
        value: '_ 32 B',
        name: 'Aparato Ortodóntico Removible (Buen Estado)',
        finding: 32,
        color: 'blue',
    },
    {
        value: '_ 32 M',
        name: 'Aparato Ortodóntico Removible (Mal Estado)',
        finding: 32,
        color: 'red',
    },
    {
        value: '_ 33 1 B',
        name: 'Inicio (Buen Estado)',
        finding: 33,
        color: 'blue',
    },
    {
        value: '_ 33 2 B',
        name: 'Centro (Buen Estado)',
        finding: 33,
        color: 'blue',
    },
    {
        value: '_ 33 3 B',
        name: 'Fin (Buen Estado)',
        finding: 33,
        color: 'blue',
    },
    {
        value: '_ 33 1 M',
        name: 'Inicio (Mal Estado)',
        finding: 33,
        color: 'red',
    },
    {
        value: '_ 33 2 M',
        name: 'Centro (Mal Estado)',
        finding: 33,
        color: 'red',
    },
    {
        value: '_ 33 3 M',
        name: 'Fin (Mal Estado)',
        finding: 33,
        color: 'red',
    },
    {
        value: '_ 34 B',
        name: 'Prótesis Removible (Buen Estado)',
        finding: 34,
        color: 'blue',
    },
    {
        value: '_ 34 M',
        name: 'Prótesis Removible (Mal Estado)',
        finding: 34,
        color: 'red',
    },
    {
        value: '_ 35 B',
        name: 'Prótesis Total (Buen Estado)',
        finding: 35,
        color: 'blue',
    },
    {
        value: '_ 35 M',
        name: 'Prótesis Total (Mal Estado)',
        finding: 35,
        color: 'red',
    },
    {
        value: 'TC B',
        name: 'TC - Tratamiento de Conductos (Buen Estado)',
        finding: 36,
        color: 'blue',
    },
    {
        value: 'PC B',
        name: 'PC - Pulpectomía (Buen Estado)',
        finding: 36,
        color: 'blue',
    },
    {
        value: 'PP B',
        name: 'PP - Pulpotomía (Buen Estado)',
        finding: 36,
        color: 'blue',
    },
    {
        value: 'TC M',
        name: 'TC - Tratamiento de Conductos (Mal Estado)',
        finding: 36,
        color: 'red',
    },
    {
        value: 'PC M',
        name: 'PC - Pulpectomía (Mal Estado)',
        finding: 36,
        color: 'red',
    },
    {
        value: 'PP M',
        name: 'PP - Pulpotomía (Mal Estado)',
        finding: 36,
        color: 'red',
    },
];

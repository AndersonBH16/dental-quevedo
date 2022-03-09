import FractureFinding from "../components/FractureFinding";
import EruptionFinding from "../components/EruptionFinding";
import {POSITION} from "./constants";
import SupernumeraryFinding from "../components/SupernumeraryFinding";
import {ArrowDownward, ArrowUpward} from "@mui/icons-material";
import React from "react";
import * as CONSTANTS from "./constants";

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
];

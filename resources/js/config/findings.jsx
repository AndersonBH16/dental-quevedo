import FractureFinding from "../components/FractureFinding";
import EruptionFinding from "../components/EruptionFinding";

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
];

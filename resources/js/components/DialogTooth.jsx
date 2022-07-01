import React from "react";
import {
    Box,
    Button,
    FormControl, InputLabel,
    MenuItem, Select,
    Stack, Typography,
} from "@mui/material";
import {ImageTooth} from "./ImageTooth";
import * as FINDINGS from "../config/findings";

export default function DialogTooth({position, tooth, setTooth, modifying}) {
    if (!tooth) return (
        <div/>
    );

    const width = 200;
    const height = 300;
    const [selFindingType, setSelFindingType] = React.useState({value: FINDINGS.ITEM_TYPES[0].value});
    const [selFinding, setSelFinding] = React.useState({value: FINDINGS.ITEMS[0].value});
    const [findingsType, setFindingsType] = React.useState(FINDINGS.ITEM_TYPES);
    const canvas = React.useRef(null);

    React.useEffect(() => {
        const selFindingType = FINDINGS.ITEM_TYPES.find(item => item.value === tooth.findingTypes[position]);
        const selFinding = FINDINGS.ITEMS.find(item => item.value === selFindingType.finding);
        setSelFindingType(selFindingType);
        setSelFinding(selFinding);
        setFindingsType(FINDINGS.ITEM_TYPES.filter(item => item.finding === selFinding.value))
    }, [tooth, position]);

    const Selector = ({id, label, value, items, color = 'black', onChange = null}) => {
        return (
            <FormControl fullWidth>
                <InputLabel id={`label${id}`}>{label}</InputLabel>
                <Select
                    sx={{color: color}}
                    labelId={`label${id}`}
                    id={id}
                    value={value}
                    label={label}
                    onChange={onChange}
                >
                    {items.map((item, index) => (
                        <MenuItem key={index} value={item.value} sx={{color: item.color || color}}>{item.name}</MenuItem>
                    ))}
                </Select>
            </FormControl>
        )
    }

    return (
        <Box>
            <Stack spacing={2}>
                <Selector id={"finding"} label={"Hallazgo"} value={selFinding.value} items={FINDINGS.ITEMS} onChange={(event) => {
                    const selItem = FINDINGS.ITEMS.find(item => item.value === event.target.value);
                    const newItemsType = FINDINGS.ITEM_TYPES.filter(item => item.finding === selItem.value);
                    setSelFinding(selItem);
                    setFindingsType(newItemsType);
                    setSelFindingType(newItemsType[0]);
                    if (canvas.current) {
                        canvas.current.resetCanvas();
                        if (selItem.fixing)
                            selItem.fixing(width, height, canvas.current, tooth, newItemsType[0]);
                    }
                }}/>
                <Selector id={"findingType"} label={"Tipo Hallazgo"} color={selFindingType.color || selFinding.colorFindingType} value={selFindingType.value} items={findingsType} onChange={(event) => {
                    const findingType = FINDINGS.ITEM_TYPES.find(item => item.value === event.target.value);
                    setSelFindingType(findingType);
                    if (canvas.current) {
                        canvas.current.resetCanvas();
                        if (selFinding.fixing)
                            selFinding.fixing(width, height, canvas.current, tooth, findingType);
                    }
                }}/>
            </Stack>
            <Typography margin={2} fontSize={12}>{selFinding.description}</Typography>
            <div style={{padding: 20, textAlign: "center"}}>
                <ImageTooth
                    ref={canvas}
                    item={tooth}
                    finding={selFinding}
                    findingType={selFindingType}
                    draw={selFindingType.draw || selFinding.draw}
                    guiding={selFinding.guiding}
                    fixing={selFinding.fixing}
                    width={width}
                    height={height}
                    position={position}
                />
            </div>
            <Button
                onClick={() => {
                    if (canvas.current) {
                        canvas.current.exportPaths().then(result => {
                            modifying.current[tooth.number] = true;
                            tooth.findingTypes[position] = selFindingType.value;
                            tooth.canvasPaths[position] = result;
                            setTooth({
                                ...tooth,
                                draw: null,
                                url: null,
                                blob: null,
                            });
                        });
                    }
                    else {
                        modifying.current[tooth.number] = true;
                        tooth.findingTypes[position] = selFindingType.value;
                        tooth.canvasPaths[position] = [];
                        setTooth({
                            ...tooth,
                            draw: null,
                            url: null,
                            blob: null,
                        });
                    }
                }}
            >
                Conservar
            </Button>
            {(selFinding.fixing === undefined && selFinding.external === undefined &&
                    selFinding.highlighting === undefined && (selFindingType.draw || selFinding.draw) != null &&
                    selFinding.value > 0) &&
                <Button
                    onClick={() => {
                        if (canvas.current) canvas.current.undo();
                    }}
                >
                    Deshacer
                </Button>
            }
        </Box>
    );
};

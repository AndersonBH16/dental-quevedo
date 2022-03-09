import React from "react";
import {
    Button,
    Dialog,
    DialogContent, FormControl, InputLabel,
    MenuItem, Select,
    Stack, Typography,
} from "@mui/material";
import {ImageTooth} from "./ImageTooth";
import * as FINDINGS from "../config/findings";

export default function DialogTooth({setTooth, tooth, onClose}) {
    if (!tooth) return (
        <div/>
    );

    const width = 200;
    const height = 300;
    const [selFindingType, setSelFindingType] = React.useState(FINDINGS.ITEM_TYPES.find(item => item.value === tooth.findingType));
    const [selFinding, setSelFinding] = React.useState(FINDINGS.ITEMS.find(item => item.value === selFindingType.finding));
    const [findingsType, setFindingsType] = React.useState(FINDINGS.ITEM_TYPES.filter(item => item.finding === selFinding.value));
    const canvas = React.useRef(null);

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
        <Dialog onClose={onClose} open={true}>
            <DialogContent style={{padding: 20}}>
                <Stack spacing={2}>
                    <Selector id={"finding"} label={"Hallazgo"} value={selFinding.value} items={FINDINGS.ITEMS} onChange={(event) => {
                        const selItem = FINDINGS.ITEMS.find(item => item.value === event.target.value);
                        const newItemsType = FINDINGS.ITEM_TYPES.filter(item => item.finding === selItem.value);
                        setSelFinding(selItem);
                        setFindingsType(newItemsType);
                        setSelFindingType(newItemsType[0]);
                        if (canvas.current) {
                            canvas.current.resetCanvas();
                            if (selItem.fixing) {
                                selItem.fixing(width, height, canvas.current, tooth);
                            }
                        }
                    }}/>
                    <Selector id={"findingType"} label={"Tipo Hallazgo"} color={selFindingType.color || selFinding.colorFindingType} value={selFindingType.value} items={findingsType} onChange={(event) => {
                        const findingType = FINDINGS.ITEM_TYPES.find(item => item.value === event.target.value);
                        setSelFindingType(findingType);
                        if (findingType.draw && canvas.current)
                            canvas.current.resetCanvas();
                    }}/>
                </Stack>
                <Typography margin={2} fontSize={12}>{selFinding.description}</Typography>
                <div style={{padding: 20, textAlign: "center"}}>
                    <ImageTooth
                        ref={canvas}
                        item={tooth}
                        finding={selFinding}
                        draw={selFindingType.draw || selFinding.draw}
                        guiding={selFinding.guiding}
                        fixing={selFinding.fixing}
                        width={width}
                        height={height}
                    />
                </div>
                <Button
                    onClick={() => {
                        if (canvas.current) {
                            canvas.current.exportImage().then(base64 => {
                                canvas.current.exportPaths().then(result => {
                                    fetch(base64).then(res => {
                                        res.blob().then(res => {
                                            setTooth({
                                                ...tooth,
                                                findingType: selFindingType.value,
                                                canvasPaths: result,
                                                url: base64,
                                                blob: res,
                                            });
                                            onClose();
                                        });
                                    });
                                });
                            });
                        }
                        else {
                            setTooth({
                                ...tooth,
                                findingType: selFindingType.value,
                                draw: null,
                                url: null,
                                blob: null,
                            });
                            onClose();
                        }
                    }}
                >
                    Conservar
                </Button>
            </DialogContent>
        </Dialog>
    );
};

import React from "react";
import {
    Dialog,
    DialogContent,
    MenuItem,
    Stack,
    TextField
} from "@mui/material";
import ImageTooth from "./ImageTooth";

const itemsFinding = [
    {
        value: 0,
        name: '-',
    },
    {
        value: 1,
        name: 'LESIÓN DE CARIES DENTAL',
    },
    {
        value: 2,
        name: 'DEFECTOS DE DESARROLLO DEL ESMALTE (DDE)',
    },
    {
        value: 3,
        name: 'SELLANTES',
    },
];

const itemsFindingType = [
    {
        value: '-',
        name: '-',
        finding: 0,
    },
    {
        value: 'MB',
        name: 'MB',
        finding: 10,
    },
    {
        value: 'CE',
        name: 'CE',
        finding: 10,
    },
    {
        value: 'CD',
        name: 'CD',
        finding: 10,
    },
    {
        value: 'CDP',
        name: 'CDP',
        finding: 10,
    },
];

export default function DialogTooth({tooth, onClose}) {
    if (!tooth) return (
        <div/>
    );

    const Selector = ({id, label, value, items}) => {
        const [val, setVal] = React.useState(value);

        return (
            <TextField
                select
                id={id}
                value={val}
                label={label}
                onChange={(event) => {setVal(event.target.value)}}
            >
                {items.map((item, index) => (
                    <MenuItem key={index} value={item.value}>{item.name}</MenuItem>
                ))}
            </TextField>
        )
    }

    return (
        <Dialog onClose={onClose} open={true}>
            <DialogContent style={{padding: 20}}>
                <Stack spacing={2}>
                    <Selector id={"finding"} label={"Hallazgo"} value={tooth.finding} items={itemsFinding}/>
                    <Selector id={"findingType"} label={"Tipo Hallazgo"} value={tooth.findingType} items={itemsFindingType}/>
                </Stack>
                <div style={{width: 200, margin: 'auto'}}>
                    <ImageTooth item={tooth}/>
                </div>
            </DialogContent>
        </Dialog>
    );
};

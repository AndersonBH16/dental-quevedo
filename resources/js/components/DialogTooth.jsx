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
        finding: 1,
    },
    {
        value: 'CE',
        name: 'CE',
        finding: 1,
    },
    {
        value: 'CD',
        name: 'CD',
        finding: 1,
    },
    {
        value: 'CDP',
        name: 'CDP',
        finding: 1,
    },
];

export default function DialogTooth({tooth, onClose}) {
    if (!tooth) return (
        <div/>
    );

    const [selFinding, setSelFinding] = React.useState(tooth.findingType.finding);
    const [selFindingType, setSelFindingType] = React.useState(tooth.findingType.value);
    const [findingsType, setFindingsType] = React.useState(itemsFindingType.filter(item => item.finding === selFinding));

    const Selector = ({id, label, value, items, onChange = null}) => {
        return (
            <TextField
                select
                id={id}
                value={value}
                label={label}
                onChange={onChange}
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
                    <Selector id={"finding"} label={"Hallazgo"} value={selFinding} items={itemsFinding} onChange={(event) => {
                        const newItems = itemsFindingType.filter(item => item.finding === event.target.value);
                        setFindingsType(newItems);
                        setSelFindingType(newItems[0].value);
                        setSelFinding(event.target.value);
                    }}/>
                    <Selector id={"findingType"} label={"Tipo Hallazgo"} value={selFindingType} items={findingsType} onChange={(event) => {
                        setSelFindingType(event.target.value);
                    }}/>
                </Stack>
                <div style={{padding: 20, textAlign: "center"}}>
                    <ImageTooth item={tooth} width={200} height={300}/>
                </div>
            </DialogContent>
        </Dialog>
    );
};

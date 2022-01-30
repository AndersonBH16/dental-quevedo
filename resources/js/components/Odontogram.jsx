import Tooth from "./Tooth";
import * as CONSTANTS from "../config/constants";
import DialogTooth from "./DialogTooth";
import React from "react";
import {Stack, TextField} from "@mui/material";
import {FINDING_TYPE} from "../config/defaults";

const adultModel = [
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 18, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 17, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 16, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 15, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.CANINE,      position: CONSTANTS.POSITION_TOOTH.UP,     number: 14, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 13, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 12, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 11, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 21, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 22, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 23, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.CANINE,      position: CONSTANTS.POSITION_TOOTH.UP,     number: 24, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 25, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 26, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 27, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 28, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 48, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 47, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 46, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 45, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 44, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 43, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 42, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 41, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 31, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 32, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 33, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 34, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 35, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 36, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 37, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 48, findingType: FINDING_TYPE},
];

const childModel = [
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 55, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 54, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 53, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 52, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 51, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 61, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 62, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 63, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 64, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 65, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 85, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 84, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 83, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 82, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 81, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 71, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 72, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 73, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 74, findingType: FINDING_TYPE},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 75, findingType: FINDING_TYPE},
];

export function Odontogram() {
    const [selTooth, setSelTooth] = React.useState(null);

    return (
        <div style={{width: '100%'}}>
            <DialogTooth tooth={selTooth} onClose={() => {setSelTooth(null)}}/>
            <div style={{display: "flex", justifyContent: 'center'}}>
                {adultModel.filter(tooth => tooth.position === CONSTANTS.POSITION_TOOTH.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center', width: '60%', margin: 'auto'}}>
                {childModel.filter(tooth => tooth.position === CONSTANTS.POSITION_TOOTH.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center', width: '20%', margin: 'auto'}}>
                {childModel.filter(tooth => tooth.position === CONSTANTS.POSITION_TOOTH.DOWN).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center'}}>
                {adultModel.filter(tooth => tooth.position === CONSTANTS.POSITION_TOOTH.DOWN).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <Stack spacing={1}>
                <TextField
                    multiline
                    fullWidth
                    id={"specifications"}
                    label={"Especificaciones"}
                    rows={3}
                />
                <TextField
                    multiline
                    fullWidth
                    id={"notes"}
                    label={"Observaciones"}
                    rows={3}
                />
            </Stack>
        </div>
    );
}

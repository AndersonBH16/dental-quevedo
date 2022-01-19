import Tooth from "./Tooth";
import * as CONSTANTS from "../config/constants";
import DialogTooth from "./DialogTooth";
import React from "react";
import {Stack, TextField} from "@mui/material";

const adultModel = [
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 18, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 17, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 16, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 15, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.CANINE,      position: CONSTANTS.POSITION_TOOTH.UP,     number: 14, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 13, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 12, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 11, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 21, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 22, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 23, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.CANINE,      position: CONSTANTS.POSITION_TOOTH.UP,     number: 24, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 25, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 26, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 27, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 28, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 48, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 47, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 46, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 45, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 44, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 43, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 42, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 41, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 31, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 32, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 33, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 34, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.PREMOLAR,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 35, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 36, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 37, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 48, finding: 0, findingType: '-'},
];

const childModel = [
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 55, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 54, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 53, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 52, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 51, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 61, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 62, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.UP,     number: 63, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 64, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.UP,     number: 65, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 85, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 84, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 83, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 82, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 81, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 71, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 72, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.INCISIVE,    position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 73, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 74, finding: 0, findingType: '-'},
    {type: CONSTANTS.TOOTH.MOLAR,       position: CONSTANTS.POSITION_TOOTH.DOWN,   number: 75, finding: 0, findingType: '-'},
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
            <div style={{display: "flex", justifyContent: 'center'}}>
                {childModel.filter(tooth => tooth.position === CONSTANTS.POSITION_TOOTH.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center'}}>
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

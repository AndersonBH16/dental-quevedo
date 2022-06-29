import React from "react";
import {Box, TextField} from "@mui/material";
import {ImageTooth} from "./ImageTooth";
import * as FINDINGS from "../config/findings";
import * as CONSTANTS from "../config/constants";

export default function Tooth({model, item, onSelect, handleFindings}) {
    const selFindingType = FINDINGS.ITEM_TYPES.find(it => it.value === item.findingType);
    const selFinding = selFindingType === undefined ? 'black' : FINDINGS.ITEMS.find(it => it.value === selFindingType.finding);

    const maxWidth = 55.0;
    const minWidth = maxWidth * 0.65;
    const width = (item.type === CONSTANTS.TOOTH.INCISIVE) ? minWidth : maxWidth;
    const height = 80;

    const Order = () => (
        <Box position={'relative'}>
            {selFinding.highlighting && selFinding.highlighting(item, minWidth, width, selFindingType)}
            <p style={{textAlign: "center", margin: 0}}>{item.number}</p>
        </Box>
    );

    const Square = () => {
        const color = selFindingType?.color || selFinding.colorFindingType;
        const type = item.findingText || item.findingType.split(' ')[0].replace("_", " ");

        const CustomField = () => {
            return (
                <TextField
                    sx={{marginY: 1}}
                    defaultValue={type === '-' ? '' : type}
                    onKeyUp={(event) => {
                        handleFindings(item.number, event.target.value);
                    }}
                    inputProps={{ style: {padding: 5, fontSize: 12, color}}}
                />
            );
        }

        if (item.position !== CONSTANTS.POSITION.UP)
            return (
                <div>
                    <Order/>
                    <CustomField/>
                </div>
            );

        return (
            <div>
                <CustomField/>
                <Order/>
            </div>
        );
    }

    return (
        <div style={{width: width}}>
            {(item.position === CONSTANTS.POSITION.UP) && <Square/>}
            <ImageTooth item={item} finding={selFinding} findingType={selFindingType} width={width} height={height} model={model} onClick={() => {onSelect(item)}}/>
            {(item.position === CONSTANTS.POSITION.DOWN) && <Square/>}
        </div>
    );
}

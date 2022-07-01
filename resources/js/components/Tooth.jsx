import React from "react";
import {Box, TextField} from "@mui/material";
import {ImageTooth} from "./ImageTooth";
import * as FINDINGS from "../config/findings";
import * as CONSTANTS from "../config/constants";

export default function Tooth({model, item, onSelect, handleFindings, findings}) {
    const selFindingType = item.findingTypes.map(type => FINDINGS.ITEM_TYPES.find(item => item.value === type));
    const selFinding = selFindingType === undefined ? 'black' : selFindingType.map(type => FINDINGS.ITEMS.find(item => item.value === type.finding));

    const maxWidth = 55.0;
    const minWidth = maxWidth * 0.65;
    const width = (item.type === CONSTANTS.TOOTH.INCISIVE) ? minWidth : maxWidth;
    const height = 80;

    const Order = () => (
        <Box position={'relative'}>
            {!Array.isArray(selFinding) ? (selFinding.highlighting && selFinding.highlighting(item, minWidth, width, selFindingType)) :
                selFinding.map((find, index) => <Box key={index}>{find.highlighting && find.highlighting(item, minWidth, width, selFindingType[index])}</Box>)
            }
            <p style={{textAlign: "center", margin: 0}}>{item.number}</p>
        </Box>
    );

    const Square = () => {
        const colorFindingType = (Array.isArray(selFindingType) ? selFindingType.find(it => it.color !== undefined)?.color : selFindingType?.color);
        const colorFinding = (Array.isArray(selFinding) ? selFinding.find(it => it.colorFindingType !== undefined)?.colorFindingType : selFinding?.colorFindingType);
        const color = colorFindingType || colorFinding;
        const type = findings.current[item.number] || item.findingText;

        const CustomField = () => {
            return (
                <TextField
                    sx={{marginY: 2}}
                    defaultValue={type === '-' ? '' : type}
                    onKeyUp={(event) => {
                        handleFindings(item.number, event.target.value);
                    }}
                    inputProps={{ style: {padding: 5, fontSize: 12, color: color}}}
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

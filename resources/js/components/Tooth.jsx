import React from "react";
import {Typography} from "@mui/material";
import {ImageTooth} from "./ImageTooth";
import * as FINDINGS from "../config/findings";
import * as CONSTANTS from "../config/constants";

export default function Tooth({model, item, onSelect}) {
    const selFindingType = FINDINGS.ITEM_TYPES.find(it => it.value === item.findingType);
    const selFinding = selFindingType === undefined ? 'black' : FINDINGS.ITEMS.find(it => it.value === selFindingType.finding);

    const width = 55 * (item.type === CONSTANTS.TOOTH.INCISIVE ? 0.65 : 1.0);
    const height = 80;

    const Order = () => (
        <p style={{textAlign: "center", margin: 0}}>{item.number}</p>
    );

    const Square = () => (
        (item.position !== CONSTANTS.POSITION_TOOTH.UP) ? <div>
            <Order/>
            <Typography fontSize={12} textAlign={'center'} color={selFinding.colorFindingType}>{item.findingType}</Typography>
        </div> : <div>
            <Typography fontSize={12} textAlign={'center'} color={selFinding.colorFindingType}>{item.findingType}</Typography>
            <Order/>
        </div>
    )

    return (
        <div style={{width: width, padding: 2}}>
            {(item.position === CONSTANTS.POSITION_TOOTH.UP) && <Square/>}
            <ImageTooth item={item} width={width} height={height} model={model} onClick={() => {onSelect(item)}}/>
            {(item.position === CONSTANTS.POSITION_TOOTH.DOWN) && <Square/>}
        </div>
    );
}

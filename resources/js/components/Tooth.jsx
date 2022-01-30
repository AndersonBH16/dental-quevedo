import React from "react";
import {POSITION_TOOTH, TOOTH} from "../config/constants";
import {Typography} from "@mui/material";
import ImageTooth from "./ImageTooth";

export default function Tooth({model, item, onSelect}) {
    const width = 55 * (item.type === TOOTH.INCISIVE ? 0.65 : 1.0);
    const height = 80;

    const Order = () => (
        <p style={{textAlign: "center", margin: 0}}>{item.number}</p>
    );

    const Square = () => (
        (item.position !== POSITION_TOOTH.UP) ? <div>
            <Order/>
            <Typography textAlign={'center'}>{item.findingType.value}</Typography>
        </div> : <div>
            <Typography textAlign={'center'}>{item.findingType.value}</Typography>
            <Order/>
        </div>
    )

    return (
        <div style={{width: width, padding: 2}}>
            {(item.position === POSITION_TOOTH.UP) && <Square/>}
            <ImageTooth item={item} width={width} height={height} model={model} onClick={() => {onSelect(item)}}/>
            {(item.position === POSITION_TOOTH.DOWN) && <Square/>}
        </div>
    );
}

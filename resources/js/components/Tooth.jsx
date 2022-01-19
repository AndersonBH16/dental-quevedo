import React from "react";
import {widthTooth} from "../config/helpers";
import {POSITION_TOOTH} from "../config/constants";
import {Typography} from "@mui/material";
import ImageTooth from "./ImageTooth";

export default function Tooth({item, onSelect}) {
    const Order = () => (
        <p style={{textAlign: "center", margin: 0}}>{item.number}</p>
    );

    const Square = () => (
        (item.position === POSITION_TOOTH.UP) ? <div>
            <Order/>
            <Typography textAlign={'center'}>{item.findingType}</Typography>
        </div> : <div>
            <Typography textAlign={'center'}>{item.findingType}</Typography>
            <Order/>
        </div>
    )

    return (
        <div style={{width: widthTooth(), padding: 2}}>
            {(item.position === POSITION_TOOTH.UP) && <Square/>}
            <ImageTooth item={item} onClick={() => {onSelect(item)}}/>
            {(item.position === POSITION_TOOTH.DOWN) && <Square/>}
        </div>
    );
}

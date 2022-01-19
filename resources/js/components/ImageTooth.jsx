import React from "react";
import {POSITION_TOOTH, TOOTH} from "../config/constants";
import molarUp from "../images/molar_up.png";
import molarDown from "../images/molar_down.png";
import premolar from "../images/premolar.png";
import canine from "../images/canine.png";
import incisive from "../images/incisive.png";

export default function ImageTooth({item, onClick = null}) {
    const style = (item.position === POSITION_TOOTH.DOWN && item.type !== TOOTH.MOLAR ? {transform: 'rotate(180deg)'} : {});

    const imgType = () => {
        switch (item.type) {
            case TOOTH.MOLAR:
                return item.position === POSITION_TOOTH.UP ? molarUp : molarDown;
            case TOOTH.PREMOLAR:
                return premolar;
            case TOOTH.CANINE:
                return canine;
            case TOOTH.INCISIVE:
                return incisive;
        }
        return molarUp;
    }

    return (
        <img src={imgType()} width={'100%'} alt="" style={style} onClick={onClick}/>
    );
}

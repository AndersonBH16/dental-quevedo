import {POSITION_TOOTH, TOOTH} from "./constants";
import molarUp from "../images/molar_up.png";
import molarDown from "../images/molar_down.png";
import premolar from "../images/premolar.png";
import canine from "../images/canine.png";
import incisive from "../images/incisive.png";

export function imgType(item) {
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

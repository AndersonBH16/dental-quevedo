import React from "react";
import {
    Box,
    Button,
} from "@mui/material";
import {ImageTooth} from "./ImageTooth";
import * as FINDINGS from "../config/findings";

export default function DialogResult({position, tooth, setTooth, findings, modifying, onClose = null}) {
    if (!tooth) return (
        <div/>
    );

    const width = 200;
    const height = 300;
    const selFindingType = tooth.findingTypes.map(type => FINDINGS.ITEM_TYPES.find(item => item.value === type));
    const selFinding = selFindingType.map(type => FINDINGS.ITEMS.find(item => item.value === type.finding));
    const canvas = React.useRef(null);

    React.useEffect(() => {
        if (canvas.current) {
            canvas.current.loadPaths(tooth.canvasPaths.reduce((res, item) => res.concat(item), []));
            setTimeout(() => {
                canvas.current.exportImage().then(base64 => {
                    canvas.current.exportPaths().then(result => {
                        fetch(base64).then(res => {
                            res.blob().then(res => {
                                setTooth({
                                    ...tooth,
                                    findingText: modifying.current[tooth.number] ? selFindingType.map(type => type.value.split(' ')[0].replace("_", " ")).join(' ').trim() : findings.current[tooth.number],
                                    url: base64,
                                    blob: res,
                                });
                            });
                        });
                    });
                });
            }, 0);
        }
    }, []);

    return (
        <Box>
            <div style={{padding: 20, textAlign: "center"}}>
                <ImageTooth
                    ref={canvas}
                    item={tooth}
                    finding={selFinding}
                    findingType={selFindingType}
                    draw={{}}
                    guiding={selFinding.guiding}
                    fixing={selFinding.fixing}
                    width={width}
                    height={height}
                    position={position}
                    result={true}
                />
            </div>
            <Button onClick={onClose}>
                Cerrar
            </Button>
        </Box>
    );
};

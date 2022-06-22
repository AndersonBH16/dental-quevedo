import React from "react";
import {Box} from "@mui/material";

export default function EruptionFinding({width, height, canvas}) {
    const [curPoint, setCurPoint] = React.useState(null);

    return (
        <Box
            sx={{
                position: "absolute",
                left: 0,
                right: 0,
                margin: 'auto',
                width: width,
                height: height,
            }}
            onClick={(event) => {
                if (canvas) {
                    const curX = event.nativeEvent.offsetX;
                    const curY = event.nativeEvent.offsetY;
                    if (curPoint !== null) {
                        canvas.loadPaths([{
                            drawMode: true,
                            paths: [
                                {x: curPoint.x, y: curPoint.y},
                                {x: curX, y: curY},
                            ],
                            strokeWidth: 12,
                            strokeColor: "blue",
                        }]);
                    }
                    setCurPoint({x: curX, y: curY});
                }
            }}
        />
    );
}

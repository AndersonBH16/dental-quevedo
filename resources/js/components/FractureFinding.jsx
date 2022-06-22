import React from "react";
import {Box} from "@mui/material";

export default function FractureFinding({width, height, canvas}) {
    const [points, setPoints] = React.useState([]);

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
                    if (points.length === 0) {
                        setPoints([{x: curX, y: curY}]);
                    }
                    else {
                        canvas.loadPaths([{
                            drawMode: true,
                            paths: [
                                {x: points[0].x, y: points[0].y},
                                {x: curX, y: curY},
                            ],
                            strokeWidth: 15,
                            strokeColor: "red",
                        }]);
                        setPoints([]);
                    }
                }
            }}
        />
    );
}

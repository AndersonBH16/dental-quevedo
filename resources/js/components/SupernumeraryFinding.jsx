import React from "react";
import {Box} from "@mui/material";

export default function SupernumeraryFinding({width, height, canvas}) {
    const drawS = (h, k) => {
        const pointsA = [];
        const delta = 0.5;
        const r = 10;
        for (let angle = (0.5 * Math.PI) ; angle <= (1.8 * Math.PI) ; angle += delta) {
            const x = r * Math.cos(angle);
            const y = r * Math.sin(angle);
            pointsA.push({x: x + h, y: y + k - (r / 2)});
        }
        const pointsB = [];
        for (let angle = (1.5 * Math.PI) ; angle <= (2.8 * Math.PI) ; angle += delta) {
            const x = (r+1) * Math.cos(angle);
            const y = (r+1) * Math.sin(angle);
            pointsB.push({x: x + h, y: y + k + r + 6});
        }
        const pointsC = [];
        for (let angle = 0 ; angle <= (2.25 * Math.PI) ; angle += delta) {
            const x = (4*r) * Math.cos(angle);
            const y = (4*r) * Math.sin(angle);
            pointsC.push({x: x + h, y: y + k + (r / 2)});
        }
        return [pointsA, pointsB, pointsC];
    }

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
                    const pointsSet = drawS(curX, curY);
                    canvas.resetCanvas();
                    canvas.loadPaths([{
                        drawMode: true,
                        paths: pointsSet[0],
                        strokeWidth: 8,
                        strokeColor: "blue",
                    }]);
                    canvas.loadPaths([{
                        drawMode: true,
                        paths: pointsSet[1],
                        strokeWidth: 8,
                        strokeColor: "blue",
                    }]);
                    canvas.loadPaths([{
                        drawMode: true,
                        paths: pointsSet[2],
                        strokeWidth: 8,
                        strokeColor: "blue",
                    }]);
                }
            }}
        />
    );
}

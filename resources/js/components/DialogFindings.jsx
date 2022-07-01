import React from "react";
import {
    Box,
    Button, Dialog,
    DialogContent,
    Tab,
    Tabs,
} from "@mui/material";
import DialogTooth from "./DialogTooth";
import DialogResult from "./DialogResult";

const TabPanel = (props) => {
    const { children, value, index, ...other } = props;

    return (
        <Box
            role="tabpanel"
            hidden={value !== index}
            id={`simple-tabpanel-${index}`}
            aria-labelledby={`simple-tab-${index}`}
            {...other}
        >
            {value === index && (
                <Box sx={{ p: 3 }}>
                    {children}
                </Box>
            )}
        </Box>
    );
}

export default function DialogFindings({setTooth, tooth, findings, modifying, onClose}) {
    const [selected, setSelected] = React.useState(0);

    React.useEffect(() => {
        if (tooth) modifying.current[tooth.number] = false;
        setSelected(0);
    }, [tooth]);

    const handleChange = (event, newValue) => {
        setSelected(newValue);
    };

    if (tooth === null) return null;

    return (
        <Dialog open={true}>
            <DialogContent style={{padding: 20}}>
                <Button
                    onClick={() => {
                        tooth.findingTypes = tooth.findingTypes.concat(["-"]);
                        tooth.canvasPaths = tooth.canvasPaths.concat([[]]);
                        setTooth(tooth);
                        setSelected(tooth.findingTypes.length - 1);
                    }}
                >
                    Agregar
                </Button>
                {tooth.findingTypes.length > 0 && selected < tooth.findingTypes.length && <Button
                    color={'warning'}
                    onClick={() => {
                        modifying.current[tooth.number] = true;
                        tooth.findingTypes = tooth.findingTypes.filter((it, index) => index !== selected);
                        tooth.canvasPaths = tooth.canvasPaths.filter((it, index) => index !== selected);
                        setTooth(tooth);
                    }}
                >
                    Anular
                </Button>}
                <Tabs
                    value={selected}
                    onChange={handleChange}
                    variant="scrollable"
                    scrollButtons="auto"
                    aria-label="scrollable auto tabs example"
                >
                    {tooth.findingTypes.map((item, index) => (
                        <Tab key={index} label={"Hallazgo " + (index+1)} />
                    ))}
                    <Tab label={"Resultado"} />
                </Tabs>
                {tooth.findingTypes.map((item, index) => (
                    <TabPanel key={index} value={selected} index={index}>
                        <DialogTooth position={index} tooth={tooth} setTooth={setTooth} modifying={modifying} />
                    </TabPanel>
                ))}
                <TabPanel value={selected} index={tooth.findingTypes.length}>
                    <DialogResult position={tooth.findingTypes.length} tooth={tooth} setTooth={setTooth} findings={findings} modifying={modifying} onClose={onClose} />
                </TabPanel>
            </DialogContent>
        </Dialog>
    );
}

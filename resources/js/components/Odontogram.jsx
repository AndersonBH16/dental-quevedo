import React from "react";
import Tooth from "./Tooth";
import * as CONSTANTS from "../config/constants";
import * as DEFAULTS from "../config/defaults";
import * as PATHS from "../config/paths";
import DialogTooth from "./DialogTooth";
import {Box, Button, Stack, TextField} from "@mui/material";
import {post, put} from "../services/api";

export function Odontogram() {
    const [data, setData] = React.useState(DEFAULTS.ODONTOGRAM);
    const [selTooth, setSelTooth] = React.useState(null);

    React.useEffect(() => {
        const url = new URL(location.href);
        post(PATHS.ODONTOGRAM, {dni: url.searchParams.get('dni')}).then(data => {
            setData(data);
        })
    }, []);

    const adultModel = () => data.payload.filter(item => item.age === CONSTANTS.AGE.ADULT);
    const childModel = () => data.payload.filter(item => item.age === CONSTANTS.AGE.CHILD);

    const setTooth = (tooth) => {
        setData({
            ...data,
            payload: data.payload.map((item) => item.number === tooth.number ? tooth : item),
        });
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        const formData = new FormData(e.currentTarget);
        data.payload.forEach((tooth) => {
            if (tooth.blob !== undefined) {
                formData.append(`paths[${tooth.number}]`, JSON.stringify(tooth.canvasPaths));
                if (tooth.blob) formData.append(`images[${tooth.number}]`, tooth.blob);
                formData.append(`types[${tooth.number}]`, tooth.findingType);
            }
        });
        put(PATHS.ODONTOGRAM, formData).then(data => {
            setData(data);
            if (window.parent.closeOdontogramModal !== undefined) window.parent.closeOdontogramModal();
        });
    }

    return (
        <Box component={"form"} onSubmit={handleSubmit} style={{width: '100%'}}>
            <input type="hidden" name={"id"} defaultValue={data.id}/>
            <DialogTooth tooth={selTooth} setTooth={setTooth} onClose={() => {setSelTooth(null)}}/>
            <div style={{display: "flex", justifyContent: 'center'}}>
                {adultModel().filter(tooth => tooth.position === CONSTANTS.POSITION.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center', width: '60%', margin: 'auto'}}>
                {childModel().filter(tooth => tooth.position === CONSTANTS.POSITION.UP).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center', width: '20%', margin: 'auto'}}>
                {childModel().filter(tooth => tooth.position === CONSTANTS.POSITION.DOWN).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <div style={{display: "flex", justifyContent: 'center'}}>
                {adultModel().filter(tooth => tooth.position === CONSTANTS.POSITION.DOWN).map((tooth, index) => (
                    <Tooth key={index} item={tooth} onSelect={(tooth) => {setSelTooth(tooth)}}/>
                ))}
            </div>
            <Stack spacing={1}>
                <TextField
                    multiline
                    fullWidth
                    variant="outlined"
                    value={data.specifications}
                    name={"specifications"}
                    label={"Especificaciones"}
                    rows={3}
                    onChange={(e) => {
                        setData({
                            ...data,
                            specifications: e.currentTarget.value,
                        })
                    }}
                />
                <TextField
                    multiline
                    fullWidth
                    variant="outlined"
                    value={data.observations}
                    name={"observations"}
                    label={"Observaciones"}
                    rows={3}
                    onChange={(e) => {
                        setData({
                            ...data,
                            observations: e.currentTarget.value,
                        })
                    }}
                />
            </Stack>
            <Button type={"submit"}>
                Guardar
            </Button>
        </Box>
    );
}

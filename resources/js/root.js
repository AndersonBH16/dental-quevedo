import React from 'react';
import ReactDOM from 'react-dom';
import {Odontogram} from "./components/Odontogram";
import {LocalizationProvider} from "@mui/x-date-pickers";
import { AdapterDateFns } from '@mui/x-date-pickers/AdapterDateFns';

ReactDOM.render(
    <React.StrictMode>
        <LocalizationProvider dateAdapter={AdapterDateFns}>
            <Odontogram/>
        </LocalizationProvider>
    </React.StrictMode>,
    document.getElementById('root')
);

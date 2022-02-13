import axios from "axios";

export async function post(path, params) {
    const response = await axios.post(path, params);
    return response.data;
}

export async function put(path, params) {
    params.append('_method', 'PUT');
    const response = await axios.post(path, params);
    return response.data;
}

export async function get(path, params) {
    const response = await axios.get(path);
    return response.data
}

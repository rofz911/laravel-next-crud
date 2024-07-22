// utils/api.ts
import axios from 'axios';
import config from '../config';
import { UserData } from '../types/User';

const api = axios.create({
    baseURL: config.apiUrl,
    withCredentials: true,
    withXSRFToken: true,
    validateStatus: () => true,
});

api.get('/sanctum/csrf-cookie');

export const login = async (data: UserData) => {
    return api.post('/auth/login', data);
};

export const register = async (data: UserData) => {
    return api.post('/auth/register', data);
};

export default api;
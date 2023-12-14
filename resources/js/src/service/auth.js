import axios from "axios";

class TutorialDataService {
    authRegister() {
        return axios.post("http://127.0.0.1:8000/api/auth/register");
    }

    authLogin() {
        return axios.post(`http://127.0.0.1:8000/api/auth/login`);
    }

    authLogout() {
        return axios.post("http://127.0.0.1:8000/api/auth/logout");
    }
}

export default new TutorialDataService();

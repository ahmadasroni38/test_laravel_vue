class TutorialDataService {
    authRegister() {
        return http.post("http://127.0.0.1:8000/api/auth/register");
    }

    authLogin() {
        return http.post(`http://127.0.0.1:8000/api/auth/login`);
    }

    authLogout() {
        return http.post("http://127.0.0.1:8000/api/auth/logout");
    }
}

export default new TutorialDataService();

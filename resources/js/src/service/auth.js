import axios from "axios";

class auth {
    async authRegister(data) {
        return await axios.post(
            "http://127.0.0.1:8000/api/auth/register",
            data,
            {
                headers: {
                    "Content-Type": "application/json",
                },
            }
        );
    }

    async authLogin(data) {
        return await axios.post("http://127.0.0.1:8000/api/auth/login", data, {
            headers: {
                "Content-Type": "application/json",
            },
        });
    }

    // prettier-ignore
    async authLogout() {
        return await fetch("http://127.0.0.1:8000/api/auth/logout", {
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer " + localStorage.getItem("token"),
            },
        });
    }
}

export default new auth();

// https://www.bezkoder.com/vue-js-crud-app/
import axios from "axios";

class productService {
    // prettier-ignore
    async getAll() {
        return await axios.get("http://127.0.0.1:8000/api/product/list", {
            headers: {
                "Authorization": "Bearer " + localStorage.getItem("token"),
            },
        });
    }

    // prettier-ignore
    async getDetail(id) {
        return await axios.get(
            `http://127.0.0.1:8000/api/product/detail/${id}`,
            {
                headers: {
                    "Authorization": "Bearer " + localStorage.getItem("token"),
                },
            }
        );
    }

    // prettier-ignore
    async createData(data) {
        return await axios.post(
            "http://127.0.0.1:8000/api/product/create/action",
            data,
            {
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer " + localStorage.getItem("token"),
                },
            }
        );
    }

    // prettier-ignore
    async updateData(id, data) {
        return await axios.post(
            `http://127.0.0.1:8000/api/product/update/action/${id}`,
            data,
            {
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer " + localStorage.getItem("token"),
                },
            }
        );
    }

    // prettier-ignore
    async deleteData(id) {
        return await axios.post(`http://127.0.0.1:8000/api/product/delete/${id}`, {
            headers: {
                "Authorization": "Bearer " + localStorage.getItem("token"),
            },
        });
    }
}

export default new productService();

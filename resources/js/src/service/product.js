// https://www.bezkoder.com/vue-js-crud-app/
import axios from "axios";

class productService {
    async getAll() {
        return await axios.get("http://127.0.0.1:8000/api/product/list");
    }

    async getDetail(id) {
        return await axios.get(
            `http://127.0.0.1:8000/api/product/detail/${id}`
        );
    }

    async createData(data) {
        return await axios.post(
            "http://127.0.0.1:8000/api/product/create/action",
            data,
            {
                headers: {
                    "Content-Type": "application/json",
                },
            }
        );
    }

    async updateData(id, data) {
        return await axios.post(
            `http://127.0.0.1:8000/api/product/update/action/${id}`,
            data,
            {
                headers: {
                    "Content-Type": "application/json",
                },
            }
        );
    }

    async deleteData(id) {
        return await axios.post(
            `http://127.0.0.1:8000/api/product/delete/${id}`
        );
    }
}

export default new productService();

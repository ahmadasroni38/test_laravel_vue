// https://www.bezkoder.com/vue-js-crud-app/

class TutorialDataService {
    getAll() {
        return http.get("http://127.0.0.1:8000/api/product/list");
    }

    getDetail(id) {
        return http.get(`http://127.0.0.1:8000/api/product/detail/${id}`);
    }

    createData(data) {
        return http.post(
            "http://127.0.0.1:8000/api/product/create/action",
            data
        );
    }

    updateData(id, data) {
        return http.put(
            `http://127.0.0.1:8000/api/product/update/action/{id}`,
            data
        );
    }

    deleteData(id) {
        return http.delete(`http://127.0.0.1:8000/api/product/delete/{id}`);
    }
}

export default new TutorialDataService();

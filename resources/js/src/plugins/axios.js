import axios from "axios";

axios.defaults.baseURL = "/api";
axios.defaults.withCredentials = true;

// // Important: If axios is used with multiple domains, the AUTH_TOKEN will be sent to all of them.
// // See below for an example using Custom instance defaults instead.
// axios.defaults.headers.common["Authorization"] = AUTH_TOKEN;

// axios.defaults.headers.post["Content-Type"] =
//     "application/x-www-form-urlencoded";

// Add a request interceptor
axios.interceptors.request.use(
    function (config) {
        // Do something before request is sent
        return config;
    },
    function (error) {
        // Do something with request error
        return Promise.reject(error);
    }
);

export default axios;

// require("./bootstrap");

import { createApp } from "vue";
import router from "./src/router/router";
import axios from "./src/plugins/axios";

import App from "./src/App.vue";

// createApp(App).mount("#app");
const app = createApp(App);

app.use(router);
app.provide("axios", axios);

app.mount("#app");

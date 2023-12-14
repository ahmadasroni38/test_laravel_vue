import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../views/Home.vue";
// Layout
import Layout from "../layout/Layout.vue";
// Auth
import Login from "../views/Auth/Login.vue";
import Register from "../views/Auth/Register.vue";
// Product
import Dashboard from "../views/Product/Dashboard.vue";
import Create from "../views/Product/Create.vue";
import Update from "../views/Product/Update.vue";

const router = createRouter({
    history: createWebHashHistory("/"),
    routes: [
        {
            path: "/login",
            name: "Login",
            component: Login,
        },
        {
            path: "/register",
            name: "Register",
            component: Register,
        },
        {
            path: "/",
            name: "Product",
            component: Layout,
            redirect: "/",
            children: [
                {
                    path: "/",
                    name: "dashboard",
                    component: Dashboard,
                },
                {
                    path: "/Create",
                    name: "create",
                    component: Create,
                },
                {
                    path: "/update/:id",
                    name: "update",
                    component: Update,
                },
            ],
        },
    ],
});

export default router;

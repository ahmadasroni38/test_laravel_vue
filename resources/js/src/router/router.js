import { createRouter, createWebHashHistory } from "vue-router";
import Home from "../views/Home.vue";
// Layout Page
import Layout from "../layout/Layout.vue";
// Auth Page
import Login from "../views/Auth/Login.vue";
import Register from "../views/Auth/Register.vue";
// Product Page
import Dashboard from "../views/Product/Dashboard.vue";
import Create from "../views/Product/Create.vue";
import Update from "../views/Product/Update.vue";

// Auth middleware
import auth from "../middleware/auth";

const router = createRouter({
    history: createWebHashHistory("/"),
    routes: [
        {
            path: "/login",
            name: "login",
            component: Login,
        },
        {
            path: "/register",
            name: "register",
            component: Register,
        },
        {
            path: "/",
            name: "product",
            component: Layout,
            redirect: "/",
            beforeEnter: [auth],
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

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
    {
        path: "/dashboard",
        name: "Dashboard",
        component: require("./components/Modules/Dashboard/DashboardComponent.vue")
            .default
    },
    {
        path: "/users",
        name: "User",
        component: require("./components/Modules/User/UserComponent.vue")
            .default
    },
    {
        path: "/platinum",
        name: "Platinum",
        component: require("./components/Modules/Platinum/PlatinumComponent.vue")
            .default
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;

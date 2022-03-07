require("./bootstrap");
window.Vue = require("vue").default;

/**  Vue Globals */
Vue.prototype.$BASE_URL = window.location.origin;
Vue.prototype.$CONFIG = { headers: { "Content-Type": "application/json" } };
Vue.prototype.$SHOW_LOADING = () => {
    $("#cover-spin").show();
};
Vue.prototype.$HIDE_LOADING = () => {
    $("#cover-spin").hide();
};
/** end */

/** Imports */
import router from "./router";
import Vuetify from "vuetify";
import store from "./store";
import crud from "./src/CRUD";
import helpers from "./src/helpers";
/** end */

/** Vue Components */
Vue.component("welcome", require("./components/Welcome.vue").default);
Vue.component(
    "logout-component",
    require("./components/LogoutComponent.vue").default
);
/** end */

/** Vue Use */
Vue.use(Vuetify);
Vue.mixin(crud);
Vue.mixin(helpers);

/** end */

const app = new Vue({
    el: "#app",
    router,
    vuetify: new Vuetify(),
    store: store
});

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import MainLayout from "./layout/MainLayout.vue";
import { ZiggyVue } from "ziggy";
// import { InertiaProgress } from "@inertiajs/progress";
import "../css/app.css";

// InertiaProgress.init({
//     delay: 0,
//     color: "#29d",
//     includeCSS: true,
//     showSpinner: true,
// });

createInertiaApp({
    progress: {
        delay: 0,
        color: "#29d",
        includeCSS: true,
        showSpinner: true,
    },
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        console.log(pages);
        console.log(name);
        const page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || MainLayout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
});
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
const path = require("path");

export default defineConfig({
    // root: "resources/assets",
    // build: {
    //     outDir: "../assets",
    // },

    // root: "./",
    // build: {
    //     outDir: "public/build",
    // },
    // publicDir: [
    //     "../resources/assets/",
    //     "../resources/assets/img/*",
    //     "../resources/assets/img/about/*",
    //     "../resources/assets/img/logos/*",
    //     "../resources/assets/img/portfolio/*",
    //     "../resources/assets/img/team/*",
    // ],

    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/sass/styles.scss",
                "resources/sass/admin/sb-admin-2.scss",
                "resources/js/sb-admin-2.js"


              
            ],
            refresh: true,
        }),
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
});


import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require("path");

export default defineConfig({
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
    plugins: [
        
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/styles.scss'
            ],
            refresh: true,
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        inject({
            //Remember to add `"jquery": "^3.6.1"` in `dependencies` for `package.json`
            jQuery: "jquery",
            "window.jQuery": "jquery",
            $: "jquery"
        })
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/js/app.js',

                'resources/css/bootstrap.min.css',
                'resources/css/style.css',

                'resources/js/bootstrap.bundle.min.js',
                'resources/js/custom.js',

            ],
            refresh: true,
        }),
    ],
});

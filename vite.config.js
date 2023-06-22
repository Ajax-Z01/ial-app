import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            manifest: true,
            views: 'resources/views/**/*.blade.php',
            publicDir: 'public',
            assetsDir: 'assets',
        }),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/welcome.css', 'resources/css/admin.css', 'resources/css/aboutme.css', 'resources/css/profile.css', 'resources/css/allPosts.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

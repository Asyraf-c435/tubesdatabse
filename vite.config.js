import colors from 'tailwindcss/colors';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'; // ⬅️ WAJIB untuk Vue

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/filament/admin/theme.css',
                'resources/js/main.js', // ⬅️ Ganti dari app.js ke main.js
            ],
            refresh: true,
        }),
        vue() // ⬅️ Tambahkan plugin Vue
    ],
    css: {
        preprocessorOptions: {
            css: {
                charset: false,
            },
        },
    },
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
<<<<<<< HEAD
=======

            build: {
                manifest: true,
                outDir: 'public/build',
              }
>>>>>>> 92ea51cf52ebb43eb4436b16c46c42ab0997f364
        }),
    ],
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import FastGlob from 'fast-glob';

const cssFiles = FastGlob.sync([
    'resources/css/**/*.css'
]);

const jsFiles = FastGlob.sync([
    'resources/js/**/*.js',
]);

export default defineConfig({
    plugins: [
        laravel({
            input: [...cssFiles, ...jsFiles],
            refresh: true,
        }),
    ],
});

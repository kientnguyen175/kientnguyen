import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // css
                'resources/css/normalize.css',
                'resources/css/font-awesome.min.css',
                'resources/css/style.css',
                'resources/css/slick.css',
                'resources/css/lightgallery.css',
                'resources/css/colors.css',
                'resources/css/media.css',
                'resources/css/nojs.css',
                //js
                'resources/js/isg-panel.min.js',
                'resources/js/lightgallery.min.js',
                'resources/js/portfolio-filter.js',
                'resources/js/galleries.js',
                'resources/js/ajax-contact-form.js',
                'resources/js/home.js',
                'resources/js/custom.js',
            ],
            refresh: true,
        }),
    ],
});

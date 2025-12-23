import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    build: {
        manifest: true,
        rtl: true,
        outDir: 'public/build/',
        cssCodeSplit: true,
        
    },
    plugins: [
        // Laravel plugin registers build entry points and generates a manifest
        laravel({
            input: [
                'resources/js/main.js',
                'resources/css/style.css'
            ],
        }),
        viteStaticCopy({
            targets: [
                // copy contents of resources/css into public/build/css (avoid css/css)
                {
                    src: 'resources/css/*',
                    dest: 'css'
                },
                {
                    src: 'resources/fonts/*',
                    dest: 'fonts'
                },
                {
                    src: 'resources/images/*',
                    dest: 'images'
                },
                {
                    src: 'resources/js/*',
                    dest: 'js'
                },
                {
                    src: 'resources/maps/*',
                    dest: 'maps'
                },
                {
                    src: 'resources/scss/*',
                    dest: 'scss'
                },
            ],
        })
    ],
});

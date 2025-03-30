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
        }),
    ],
    build: {
        outDir: 'public', // `public/css/` & `public/js/` に出力
        emptyOutDir: false, // フォルダを削除しない（必要に応じて）
        manifest: false, // ファイル名のハッシュ化を無効化
        minify: false, // 圧縮を無効化（開発向け）
    },
});

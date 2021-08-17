const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss"); // 追加

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .setResourceRoot("../")
    .options({
        processCssUrls: false, // 追加
        postCss: [tailwindcss("./tailwind.config.js")] // 追加
    }); // 追加

// ESLintに関する設定（この部分を丸ごと追記するイメージです）
if (!mix.inProduction()) {
    // 本番環境ではESLintは使用しない
    mix.webpackConfig({
        module: {
            rules: [
                {
                    enforce: "pre",
                    exclude: /node_modules/,
                    loader: "eslint-loader",
                    test: /\.(js|vue)?$/
                }
            ]
        }
    });
}

// watchするファイルやポート番号などに関する設定（今回の内容とは関係ありません）
mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .browserSync({
        // browserSyncの設定
        files: [
            "resources/js/**/*",
            "resources/sass/**/*",
            "resources/views/**/*",
            "public/css/**/*"
        ],
        port: 3000,
        ui: {
            port: 3001
        },
        proxy: "localhost:8000" //php artisan serveで立ち上げた8000番をProxyする
    });

// 本番環境ではバージョン付けによるキャッシュ対策を施す（今回の内容とは関係ありません）
if (mix.inProduction()) {
    mix.version();
}

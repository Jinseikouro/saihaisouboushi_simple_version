import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { VitePWA } from 'vite-plugin-pwa';


const pwaOptions = {
    manifest: {
      name: 'No! re:配',
      short_name: 'NRH',
      description: '再配送を減らします',
      icons: [
        {
          src: 'public/assets/img/logo/android_logo.png',
          sizes: '192x192',
          type: 'image/png',
        }
      ],            // あとで追加します
      display: 'standalone',  // デフォルトなので不要
      background_color: '#FFF',
      theme_color: '#FFF',
      scope: '/',
      start_url: '/?source=pwa'
    },
    includeAssets: ['ui_icon/*.svg'],
    devOptions: {
      enabled: true,
    },
  }



export default defineConfig({
  plugins: [
    // Laravelビルドプラグイン
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),

    VitePWA(pwaOptions)
  ],

  // 他の設定...
});

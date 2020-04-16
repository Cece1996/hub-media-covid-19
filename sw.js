const staticCacheName = 'hub-media-1-00-33';
const assets = [
    '/',
    '/index.html',
    '/themes/covid/assets/img/logo-covid.png',
    '/themes/covid/assets/img/latest_bg_header_title.jpg',
    '/themes/covid/assets/css/read.css',
    '/themes/covid/assets/css/mobile.css',
    '/themes/covid/assets/fonts/century-gothic-regular.ttf',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
    'https://fonts.googleapis.com/css2?family=Open+Sans&display=swap',
];
// install event
self.addEventListener('install', evt => {
    evt.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            console.log('caching shell assets');
            cache.addAll(assets);
        })
    );
});
// activate event
self.addEventListener('activate', evt => {
    evt.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(keys
                .filter(key => key !== staticCacheName)
                .map(key => caches.delete(key))
            );
        })
    );
});
// fetch event
self.addEventListener('fetch', evt => {
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request);
        })
    );
});
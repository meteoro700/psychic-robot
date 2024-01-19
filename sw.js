self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open('mi-cache').then(function(cache) {
        return cache.addAll([
          '/',
          '/index.html',
          '/bolsaDinero.css',
          '/clasificacion.css',
          '/index.css',
          '/informacionCartas.css',
          '/jugadores.css',
          '/img/icono3.png'
        ]);
      })
    );
  });
  
  self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request).then(function(response) {
        return response || fetch(event.request);
      })
    );
  });
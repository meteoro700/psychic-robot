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

  document.addEventListener("DOMContentLoaded", function() {
    // Intenta bloquear la orientación de la pantalla a 'portrait'
    window.screen.orientation.lock('portrait').catch(function(error) {
        console.log("Error al bloquear la orientación de la pantalla: " + error);
    });
});
document.addEventListener("DOMContentLoaded", function() {
    // Intenta bloquear la orientación de la pantalla a 'portrait'
    window.screen.orientation.lock('portrait').catch(function(error) {
        console.log("Error al bloquear la orientación de la pantalla: " + error);
    });
});
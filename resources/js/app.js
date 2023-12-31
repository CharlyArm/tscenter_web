import './bootstrap';

/* Precargador */
window.addEventListener('load', () => {
    const container_loader = document.querySelector('.container_loader')
    container_loader.style.opacity = 0
    container_loader.style.visibility = 'hidden'
});

/* Boton volver arriba */
// Obtener el botón y el tamaño de la ventana
const scrollToTopButton = document.getElementById('scrollToTopButton');
const windowHeight = window.innerHeight;

// Mostrar u ocultar el botón según la posición de desplazamiento
window.addEventListener('scroll', () => {
    if (window.scrollY > windowHeight * 0.5) {
        scrollToTopButton.style.display = 'block';
    } else {
        scrollToTopButton.style.display = 'none';
    }
});

// Desplazarse suavemente hacia la parte superior al hacer clic en el botón
scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
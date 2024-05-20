// scripts.js
document.addEventListener('DOMContentLoaded', (event) => {
    const popUpBackground = document.getElementById('popUpBackground');
    const closeSvg = document.getElementById('closeSvg');

    // Función para abrir el pop-up
    function openPopUp() {
        popUpBackground.style.display = 'flex';
    }

    // Función para cerrar el pop-up
    function closePopUp() {
        popUpBackground.style.display = 'none';
    }

    // Cerrar el pop-up al hacer clic en el fondo o en el SVG
    popUpBackground.addEventListener('click', (event) => {
        if (event.target === popUpBackground || event.target === closeSvg) {
            closePopUp();
        }
    });
});

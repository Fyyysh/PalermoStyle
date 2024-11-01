const menu = document.getElementById('menu');
    const menuContent = document.getElementById('desplegable');
    let hideTimeout;

    // Mostrar el menú cuando el mouse está sobre el botón o el menú
    menu.addEventListener('mouseenter', () => {
      clearTimeout(hideTimeout); // Cancelar el temporizador de ocultación si lo hay
      menuContent.style.display = 'flex';
    });

    // Iniciar un temporizador cuando el mouse sale del botón o el menú
    menu.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
        menuContent.style.display = 'none';
      }, 500); // 1000=1s
    });
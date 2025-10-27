document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const menuPanel = document.getElementById('mobile-menu');
    const menuOverlay = document.getElementById('menu-overlay');
    const body = document.body;
    const header = document.querySelector('header.sticky');
    const navLinks = document.querySelectorAll('a[href^="#"]');

    let activeAnimation = {element: null, timeoutId: null};

    // --- Lógica para el menú deslizante ---
    const openMenu = () => {
        if (!menuPanel || !menuOverlay) return;
        menuPanel.classList.remove('translate-x-full');
        menuOverlay.classList.remove('opacity-0', 'pointer-events-none');
        body.style.overflow = 'hidden'; // Evita el scroll del fondo
    };

    const closeMenu = () => {
        if (!menuPanel || !menuOverlay) return;
        menuPanel.classList.add('translate-x-full');
        menuOverlay.classList.add('opacity-0', 'pointer-events-none');
        body.style.overflow = ''; // Restaura el scroll
    };

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', openMenu);
    }

    if (closeMenuButton) {
        closeMenuButton.addEventListener('click', closeMenu);
    }

    if (menuOverlay) {
        menuOverlay.addEventListener('click', closeMenu);
    }

    // Lógica para el scroll suave
    navLinks.forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                let offsetPosition = 0;

                // Si el objetivo NO es la sección de inicio, calculamos el offset del header.
                if (targetId !== '#inicio') {
                    const headerOffset = header ? header.offsetHeight : 0;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                }

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth',
                });

                // Si ya hay una animación activa, la detenemos inmediatamente.
                if (activeAnimation.element) {
                    activeAnimation.element.classList.remove('animate-pulsing-glow');
                    clearTimeout(activeAnimation.timeoutId);
                }

                // Aplicamos la nueva animación.
                targetElement.classList.add('animate-pulsing-glow');

                // Detener la animación después de 10 segundos.
                const newTimeoutId = setTimeout(() => {
                    targetElement.classList.remove('animate-pulsing-glow');
                }, 10000); // 10000 ms = 10 segundos

                // Actualizamos el estado de la animación activa.
                activeAnimation = {element: targetElement, timeoutId: newTimeoutId};

                // Cierra el menú móvil después de hacer clic en un enlace
                if (menuPanel && !menuPanel.classList.contains('translate-x-full')) {
                    closeMenu();
                }
            }
        });
    });
    // Cerrar menú con la tecla 'Escape'
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !menuPanel.classList.contains('translate-x-full')) {
            closeMenu();
        }
    });
});
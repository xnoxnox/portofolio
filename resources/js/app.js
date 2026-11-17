
document.addEventListener('DOMContentLoaded', () => {

    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    if (!menuToggle || !mobileMenu) return;

    menuToggle.addEventListener('click', () => {

        const isOpen = !mobileMenu.classList.contains('hidden');

        mobileMenu.classList.toggle('hidden');

        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');

        menuToggle.setAttribute('aria-expanded', String(!isOpen));

    });

    // Close menu after selecting navigation
    document.querySelectorAll('.mobile-link').forEach(link => {

        link.addEventListener('click', () => {

            mobileMenu.classList.add('hidden');
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            menuToggle.setAttribute('aria-expanded', 'false');

        });

    });

});

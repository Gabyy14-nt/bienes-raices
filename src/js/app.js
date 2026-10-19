document.addEventListener('DOMContentLoaded', function() {
    
    eventListener();

    darkMode();
});

function darkMode() {

    const prefiereDarkmode = window.matchMedia('preferens-color-scheme: dark')

    if(prefiereDarkmode.matches) {
        document.body.classList.add('dark-mode')
    } else {
        document.body.classList.remove('dark-mode')
    }
    
    prefiereDarkmode.addEventListener('change', function() {
        if(prefiereDarkmode.matches) {
            document.body.classList.add('dark-mode')
        } else {
            document.body.classList.remove('dark-mode')
        }
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    })
}

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    document.querySelector('.navegacion').classList.toggle('mostrar');
}
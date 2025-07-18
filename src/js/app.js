import '../scss/app.scss';

// Marcar que app.js se cargó correctamente
window.appJsLoaded = true;
console.log('App.js: Archivo cargado correctamente');

document.addEventListener('DOMContentLoaded', (e) => {
    console.log('App.js: DOM completamente cargado');
    
    // Función para inicializar dropdowns de Bootstrap
    const initializeDropdowns = () => {
        if (typeof bootstrap !== 'undefined') {
            console.log('App.js: Bootstrap disponible, inicializando dropdowns...');
            
            try {
                // Buscar todos los elementos dropdown
                const dropdownTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
                console.log('App.js: Dropdowns encontrados:', dropdownTriggerList.length);
                
                // Inicializar cada dropdown
                const dropdownList = dropdownTriggerList.map(function (dropdownTriggerEl) {
                    console.log('App.js: Inicializando dropdown:', dropdownTriggerEl);
                    return new bootstrap.Dropdown(dropdownTriggerEl, {
                        autoClose: true,
                        boundary: 'clippingParents'
                    });
                });
                
                console.log('App.js: Total dropdowns inicializados:', dropdownList.length);
                
                // Verificar que los dropdowns respondan a eventos
                dropdownTriggerList.forEach(trigger => {
                    trigger.addEventListener('show.bs.dropdown', function () {
                        console.log('App.js: Dropdown mostrándose:', this);
                    });
                    
                    trigger.addEventListener('shown.bs.dropdown', function () {
                        console.log('App.js: Dropdown mostrado:', this);
                    });
                });
                
            } catch (error) {
                console.error('App.js: Error al inicializar dropdowns:', error);
            }
            
        } else {
            console.warn('App.js: Bootstrap no disponible aún, reintentando en 100ms...');
            setTimeout(initializeDropdowns, 100);
        }
    };
    
    // Inicializar dropdowns con un pequeño delay para asegurar que Bootstrap esté listo
    setTimeout(initializeDropdowns, 50);

    // Configurar estilos de dropdown-menu
    const configureDropdownStyles = () => {
        const dropdownMenus = document.querySelectorAll('.dropdown-menu');
        console.log('App.js: Configurando estilos para', dropdownMenus.length, 'dropdown menus');
        
        dropdownMenus.forEach(dropdown => {
            dropdown.style.margin = 0;
            // Asegurar que el dropdown sea visible y clickeable
            dropdown.style.pointerEvents = 'auto';
        });
    };
    
    configureDropdownStyles();

    // Marcar enlaces activos en la navegación
    const markActiveLinks = () => {
        console.log('App.js: Marcando enlaces activos...');
        const items = document.querySelectorAll('.nav-link');
        
        items.forEach(item => {
            if (item.href === location.href) {
                item.classList.add('active');
                console.log('App.js: Enlace activo marcado:', item.href);
                
                // Si es un dropdown-item, marcar también el padre
                if (item.classList.contains('dropdown-item')) {
                    const parentDropdown = item.closest('.dropdown')?.querySelector('.dropdown-toggle');
                    if (parentDropdown) {
                        parentDropdown.classList.add('active');
                        console.log('App.js: Dropdown padre marcado como activo');
                    }
                }
            }
        });
    };
    
    markActiveLinks();

    // Configurar eventos adicionales para debugging
    document.addEventListener('click', function(e) {
        if (e.target.closest('[data-bs-toggle="dropdown"]')) {
            console.log('App.js: Click en dropdown detectado:', e.target);
        }
    });

    console.log('App.js: Inicialización completada');
});

// Manejo de estados de carga de la página
document.onreadystatechange = () => {
    console.log('App.js: Estado de documento cambió a:', document.readyState);
    
    switch (document.readyState) {
        case "loading":
            console.log('App.js: Documento cargando...');
            break;
            
        case "interactive": 
            console.log('App.js: Documento interactivo');
            const barInteractive = document.getElementById('bar');
            if (barInteractive) {
                barInteractive.style.width = '35%';
            }
            break;
            
        case "complete":
            console.log('App.js: Documento completamente cargado');
            const barComplete = document.getElementById('bar');
            if (barComplete) {
                barComplete.style.width = '100%';
                setTimeout(() => {
                    if (barComplete.parentElement) {
                        barComplete.parentElement.style.display = 'none';
                    }
                }, 1000);   
            }
            break;
    }
};

// Función global para reinicializar dropdowns si es necesario
window.reinitializeDropdowns = function() {
    console.log('App.js: Reinicializando dropdowns manualmente...');
    
    if (typeof bootstrap !== 'undefined') {
        const dropdownTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
        dropdownTriggerList.forEach(function (dropdownTriggerEl) {
            // Destruir instancia existente si existe
            const existingDropdown = bootstrap.Dropdown.getInstance(dropdownTriggerEl);
            if (existingDropdown) {
                existingDropdown.dispose();
            }
            // Crear nueva instancia
            new bootstrap.Dropdown(dropdownTriggerEl);
        });
        console.log('App.js: Dropdowns reinicializados');
    } else {
        console.error('App.js: Bootstrap no disponible para reinicialización');
    }
};

// Debug: Mostrar información del entorno
console.log('App.js: Información del entorno:', {
    bootstrap: typeof bootstrap !== 'undefined',
    jQuery: typeof $ !== 'undefined',
    location: window.location.href,
    userAgent: navigator.userAgent
});

export default {
    reinitializeDropdowns: window.reinitializeDropdowns
};
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= asset('images/cit.png') ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Sistema de Dotación - IMG</title>
    <style>
        :root {
            --color-primario: #2563eb;
            --color-secundario: #1e40af;
            --texto-claro: #f8fafc;
            --texto-oscuro: #1e293b;
            --fondo-claro: #f1f5f9;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--fondo-claro);
        }

        .navbar-custom {
            background: linear-gradient(90deg, var(--color-primario) 0%, var(--color-secundario) 100%);
            padding: 0.75rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: var(--texto-claro) !important;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .navbar-brand:hover {
            color: var(--texto-claro) !important;
        }

        .navbar-brand img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 0.5rem;
        }

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--texto-claro) !important;
            transform: translateY(-1px);
        }

        .dropdown-menu {
            background: var(--color-primario);
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            margin-top: 0.5rem;
        }

        .dropdown-item {
            color: rgba(255, 255, 255, 0.9);
            padding: 0.6rem 1rem;
            transition: all 0.3s ease;
            border-radius: 0.25rem;
            margin: 0.1rem 0.5rem;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--texto-claro);
            transform: translateX(5px);
        }

        .dropdown-item i {
            margin-right: 0.5rem;
            width: 16px;
            text-align: center;
        }

        .dropdown-toggle::after {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }

        .navbar-toggler {
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.25rem 0.5rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .btn-usuario {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--texto-claro);
            padding: 0.4rem 0.8rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-usuario:hover {
            background: rgba(255, 255, 255, 0.2);
            color: var(--texto-claro);
            transform: translateY(-1px);
        }

        .avatar-usuario {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.5rem;
        }

        .contenido-principal {
            margin-top: 1rem;
            padding: 2rem;
            min-height: calc(100vh - 120px);
        }

        .barra-progreso {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: rgba(37, 99, 235, 0.2);
            z-index: 9999;
        }

        .progreso {
            height: 100%;
            background: var(--color-primario);
            width: 0%;
            transition: width 0.3s ease;
        }

        .footer-simple {
            background: white;
            padding: 1rem 2rem;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            color: #64748b;
            font-size: 0.875rem;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .contenido-principal {
                padding: 1rem;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contenido-principal > * {
            animation: fadeIn 0.5s ease;
        }
    </style>
</head>
<body>
    <div class="barra-progreso">
        <div class="progreso" id="barraProgresoElemento"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Guzman_Recuperacion_Dotacion_ingSoft1/inicio">
                <img src="<?= asset('./images/cit.png') ?>" alt="Logo">
                Sistema de Dotación - IMG
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Guzman_Recuperacion_Dotacion_ingSoft1/inicio">
                            <i class="bi bi-house-fill me-2"></i>Inicio
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people me-2"></i>Personal
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/personalDot">
                                    <i class="bi bi-person-plus"></i>Registro Personal
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-boxes me-2"></i>Inventario
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/prendasDot">
                                    <i class="bi bi-bag"></i>Prendas
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/tallasDot">
                                    <i class="bi bi-file-ruled"></i>Tallas
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/inventarioDot">
                                    <i class="bi bi-clipboard-data"></i>Inventario de la Dotación
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-box2 me-2"></i>Dotación
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/pedidosDot">
                                    <i class="bi bi-clipboard-check"></i>Pedidos de Dotación
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/entregasDot">
                                    <i class="bi bi-box-seam"></i>Entregas de Dotación
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/Guzman_Recuperacion_Dotacion_ingSoft1/estadisticas">
                            <i class="bi bi-graph-up me-2"></i>Estadísticas
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-shield-lock me-2"></i>Administración
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/usuario">
                                    <i class="bi bi-person-plus"></i>Registrar Usuario
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/aplicaciones">
                                    <i class="bi bi-app"></i>Aplicaciones
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/permisos">
                                    <i class="bi bi-shield-check"></i>Permisos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/asigPermisos">
                                    <i class="bi bi-person-check"></i>Asignar Permisos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/historial">
                                    <i class="bi bi-clock-history"></i>Historial de Actividades
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="dropdown">
                    <button class="btn btn-usuario dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="avatar-usuario">
                            <i class="bi bi-person"></i>
                        </span>
                        Usuario
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="/Guzman_Recuperacion_Dotacion_ingSoft1/login">
                                <i class="bi bi-box-arrow-left"></i>Iniciar Sesión
                            </a>
                        </li>
                        <li><hr class="dropdown-divider" style="border-color: rgba(255,255,255,0.2);"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="/Guzman_Recuperacion_Dotacion_ingSoft1/logout">
                                <i class="bi bi-power"></i>Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="contenido-principal">
        <?php echo $contenido; ?>
    </main>

    <footer class="footer-simple">
        <div>
            <strong>Sistema de Gestión de Dotación - IMG</strong> - 
            Industria Militar de Guatemala © <?= date('Y') ?>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Esperar a que el DOM esté completamente cargado
        document.addEventListener('DOMContentLoaded', function() {
            const barraProgreso = document.getElementById('barraProgresoElemento');

            // Inicializar todos los dropdowns manualmente
            const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
            const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));

            // Barra de progreso para enlaces
            const enlaces = document.querySelectorAll('.nav-link, .dropdown-item');
            enlaces.forEach(enlace => {
                enlace.addEventListener('click', function() {
                    if (barraProgreso && this.href && !this.href.includes('#')) {
                        barraProgreso.style.width = '100%';
                        setTimeout(() => {
                            barraProgreso.style.width = '0%';
                        }, 500);
                    }
                });
            });

            // Debug: verificar que Bootstrap está cargado
            if (typeof bootstrap !== 'undefined') {
                console.log('Bootstrap cargado correctamente');
            } else {
                console.error('Bootstrap no está cargado');
            }
        });
    </script>
</body>
</html>
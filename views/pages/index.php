<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sistema de Dotación Militar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shield-check me-2"></i>
                Sistema de Dotación Militar
            </a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="text-primary">¡Bienvenido al Sistema del Comando de Apoyo Logístico</h2>
                        <p class="lead">Con dignidad, respeto y transparencia, defendemos a la Nación</p>
                        <p class="text-muted">
                            Sistema de gestión y control de dotaciones militares, utiliza los módulos disponibles para administrar el inventario, personal y entregas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="mb-4">Módulos Disponibles</h3>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/personalDot" class="text-decoration-none">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-people text-primary mb-3" style="font-size: 3rem;"></i>
                            <h5 class="card-title text-dark">Gestión de Personal</h5>
                            <p class="card-text text-muted">
                                Registrar y administrar el personal militar
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/inventarioDot" class="text-decoration-none">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-boxes text-success mb-3" style="font-size: 3rem;"></i>
                            <h5 class="card-title text-dark">Inventario</h5>
                            <p class="card-text text-muted">
                                Control de prendas, tallas y stock disponible
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/pedidosDot" class="text-decoration-none">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-clipboard-check text-info mb-3" style="font-size: 3rem;"></i>
                            <h5 class="card-title text-dark">Pedidos</h5>
                            <p class="card-text text-muted">
                                Gestionar solicitudes de dotación del personal
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/entregasDot" class="text-decoration-none">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-truck text-warning mb-3" style="font-size: 3rem;"></i>
                            <h5 class="card-title text-dark">Entregas</h5>
                            <p class="card-text text-muted">
                                Registrar y controlar entregas de dotación
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-3">
                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/estadisticas" class="text-decoration-none">
                    <div class="card h-100 text-center">
                        <div class="card-body">
                            <i class="bi bi-graph-up text-danger mb-3" style="font-size: 3rem;"></i>
                            <h5 class="card-title text-dark">Estadísticas</h5>
                            <p class="card-text text-muted">
                                Reportes y gráficos del sistema de dotación
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
<script src="<?= asset('build/js/inicio.js') ?>"></script>
</body>
</html>
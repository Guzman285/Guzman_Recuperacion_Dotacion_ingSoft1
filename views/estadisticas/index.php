<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de Dotación y Actividades</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        
        <div class="text-center mb-4">
            <h1 class="text-primary">
                Panel de Estadísticas
            </h1>
            <h4 class="text-secondary">Estadísticas de Dotación y Actividades del Sistema</h4>
        </div>

        <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-dotaciones-tab" data-bs-toggle="pill" data-bs-target="#pills-dotaciones" type="button" role="tab">
                    <i class="bi bi-box-seam me-2"></i>Dotaciones
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-actividades-tab" data-bs-toggle="pill" data-bs-target="#pills-actividades" type="button" role="tab">
                    <i class="bi bi-activity me-2"></i>Actividades de Usuarios
                </button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            
            <div class="tab-pane fade show active" id="pills-dotaciones" role="tabpanel">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-primary">
                                    <i class="bi bi-bar-chart me-2"></i>Dotaciones Entregadas por Prenda
                                </h5>
                            </div>
                            <div class="card-body">
                                <canvas id="grafico1"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-success">
                                    <i class="bi bi-pie-chart me-2"></i>Tallas Disponibles en Inventario
                                </h5>
                            </div>
                            <div class="card-body">
                                <canvas id="grafico2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2 class="text-primary" id="total-dotaciones-entregadas">0</h2>
                                <h6><i class="bi bi-box-arrow-right me-2"></i>Total Dotaciones</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2 class="text-success" id="total-stock-disponible">0</h2>
                                <h6><i class="bi bi-boxes me-2"></i>Stock Disponible</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2 class="text-info" id="total-tipos-prendas">0</h2>
                                <h6><i class="bi bi-tags me-2"></i>Tipos de Prendas</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-actividades" role="tabpanel">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2 class="text-primary" id="total-actividades-sistema">0</h2>
                                <h6><i class="bi bi-activity me-2"></i>Total Actividades</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2 class="text-success" id="total-usuarios-activos">0</h2>
                                <h6><i class="bi bi-person-check me-2"></i>Usuarios Activos</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h2 class="text-warning" id="total-apps-usadas">0</h2>
                                <h6><i class="bi bi-app me-2"></i>Aplicaciones Usadas</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-info">
                                    <i class="bi bi-pie-chart-fill me-2"></i>Estados de Actividades
                                </h5>
                            </div>
                            <div class="card-body">
                                <canvas id="graficoEstados"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-warning">
                                    <i class="bi bi-bar-chart-fill me-2"></i>Top 5 Usuarios
                                </h5>
                            </div>
                            <div class="card-body">
                                <canvas id="graficoUsuarios"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 text-success">
                                    <i class="bi bi-diagram-3-fill me-2"></i>Por Aplicación
                                </h5>
                            </div>
                            <div class="card-body">
                                <canvas id="graficoApps"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <button type="button" id="BtnActualizarEstadisticas" class="btn btn-primary">
                            <i class="bi bi-arrow-clockwise me-2"></i>Actualizar Estadísticas
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/estadisticas/index.js') ?>"></script>
</body>
</html>
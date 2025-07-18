<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Aplicaciones</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- FORMULARIO PARA APLICACIONES -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Gestión de Aplicaciones</h3>
                    </div>
                    <div class="card-body">
                        <form id="FormAplicaciones" method="POST">
                            <input type="hidden" id="app_id" name="app_id">
                            
                            <div class="mb-3">
                                <label for="app_nombre_largo" class="form-label">Nombre Largo</label>
                                <input type="text" id="app_nombre_largo" name="app_nombre_largo" class="form-control" maxlength="250" required>
                                <div class="form-text">Nombre descriptivo completo de la aplicación</div>
                            </div>

                            <div class="mb-3">
                                <label for="app_nombre_mediano" class="form-label">Nombre Mediano</label>
                                <input type="text" id="app_nombre_mediano" name="app_nombre_mediano" class="form-control" maxlength="150" required>
                                <div class="form-text">Nombre abreviado de la aplicación</div>
                            </div>

                            <div class="mb-3">
                                <label for="app_nombre_corto" class="form-label">Nombre Corto</label>
                                <input type="text" id="app_nombre_corto" name="app_nombre_corto" class="form-control" maxlength="50" required>
                                <div class="form-text">Código o siglas (se convertirá a mayúsculas)</div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Guardar
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil me-1"></i>Modificar
                                </button>
                                <button type="button" id="BtnLimpiar" class="btn btn-secondary">
                                    <i class="bi bi-arrow-clockwise me-1"></i>Limpiar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCIÓN PARA BUSCAR APLICACIONES -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Aplicaciones Registradas</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarAplicaciones" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Aplicaciones
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre Largo</th>
                                        <th>Nombre mediano</th>
                                        <th>Nombre Corto</th>
                                        <th>Fecha Creación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaAplicaciones">
                                    <!-- Las aplicaciones se cargarán aquí -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/aplicaciones/index.js') ?>"></script>
</body>
</html>
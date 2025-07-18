<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Permisos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- FORMULARIO PARA PERMISOS -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Gestión de Permisos</h3>
                    </div>
                    <div class="card-body">
                        <form id="FormPermisos" method="POST">
                            <input type="hidden" id="permiso_id" name="permiso_id">
                            
                            <div class="mb-3">
                                <label for="permiso_app_id" class="form-label">Aplicación</label>
                                <select id="permiso_app_id" name="permiso_app_id" class="form-select" required>
                                    <option value="">Seleccione una aplicación</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="permiso_nombre" class="form-label">Nombre del Permiso</label>
                                <input type="text" id="permiso_nombre" name="permiso_nombre" class="form-control" maxlength="150" required>
                            </div>

                            <div class="mb-3">
                                <label for="permiso_clave" class="form-label">Clave del Permiso</label>
                                <input type="text" id="permiso_clave" name="permiso_clave" class="form-control" maxlength="250" required>
                                <div class="form-text">Se convertirá automáticamente a mayúsculas</div>
                            </div>

                            <div class="mb-3">
                                <label for="permiso_desc" class="form-label">Descripción</label>
                                <textarea id="permiso_desc" name="permiso_desc" class="form-control" maxlength="250" rows="3" required></textarea>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Permisos Registrados</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarPermisos" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Permisos
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Aplicación</th>
                                        <th>Nombre</th>
                                        <th>Clave</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaPermisos">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/permisos/index.js') ?>"></script>
</body>
</html>
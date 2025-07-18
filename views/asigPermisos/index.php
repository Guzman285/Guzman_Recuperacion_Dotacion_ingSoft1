<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Permisos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <!-- FORMULARIO PARA ASIGNACIÓN DE PERMISOS -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Asignación de Permisos</h3>
                    </div>
                    <div class="card-body">
                        <form id="FormAsigPermisos" method="POST">
                            <input type="hidden" id="asignacion_id" name="asignacion_id">
                            
                            <div class="mb-3">
                                <label for="asignacion_usuario_id" class="form-label">Usuario</label>
                                <select id="asignacion_usuario_id" name="asignacion_usuario_id" class="form-select" required>
                                    <option value="">Seleccione un usuario</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="asignacion_app_id" class="form-label">Aplicación</label>
                                <select id="asignacion_app_id" name="asignacion_app_id" class="form-select" required>
                                    <option value="">Seleccione una aplicación</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="asignacion_permiso_id" class="form-label">Permiso</label>
                                <select id="asignacion_permiso_id" name="asignacion_permiso_id" class="form-select" required disabled>
                                    <option value="">Primero seleccione una aplicación</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="asignacion_usuario_asigno" class="form-label">Usuario que Asigna</label>
                                <select id="asignacion_usuario_asigno" name="asignacion_usuario_asigno" class="form-select" required>
                                    <option value="">Seleccione quien asigna</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="asignacion_motivo" class="form-label">Motivo de la Asignación</label>
                                <textarea id="asignacion_motivo" name="asignacion_motivo" class="form-control" maxlength="250" rows="3" required placeholder="Indique el motivo de la asignación..."></textarea>
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

        <!-- SECCIÓN PARA BUSCAR ASIGNACIONES -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Asignaciones de Permisos Registradas</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarAsignaciones" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Asignaciones
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Usuario</th>
                                        <th>Aplicación</th>
                                        <th>Permiso</th>
                                        <th>Clave</th>
                                        <th>Asignado Por</th>
                                        <th>Motivo</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaAsignaciones">
                                    <!-- Las asignaciones se cargarán aquí -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/asigPermisos/index.js') ?>"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Personal de Dotación</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">
                            Gestión de Personal de Dotación
                        </h3>
                    </div>
                    <div class="card-body">
                        <form id="FormPersonalDot" method="POST">
                            <input type="hidden" id="per_id" name="per_id">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="per_nom1" class="form-label">Primer Nombre</label>
                                    <input type="text" id="per_nom1" name="per_nom1" class="form-control" maxlength="50" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="per_nom2" class="form-label">Segundo Nombre</label>
                                    <input type="text" id="per_nom2" name="per_nom2" class="form-control" maxlength="50" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="per_ape1" class="form-label">Primer Apellido</label>
                                    <input type="text" id="per_ape1" name="per_ape1" class="form-control" maxlength="50" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="per_ape2" class="form-label">Segundo Apellido</label>
                                    <input type="text" id="per_ape2" name="per_ape2" class="form-control" maxlength="50" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="per_dpi" class="form-label">DPI</label>
                                    <input type="text" id="per_dpi" name="per_dpi" class="form-control" 
                                           maxlength="13" pattern="[0-9]{13}" title="Debe contener exactamente 13 dígitos" required>
                                    <div class="form-text">13 dígitos (ejemplo: 1234567890123)</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="per_tel" class="form-label">Teléfono</label>
                                    <input type="text" id="per_tel" name="per_tel" class="form-control" 
                                           maxlength="8" pattern="[0-9]{8}" title="Debe contener exactamente 8 dígitos" required>
                                    <div class="form-text">8 dígitos (ejemplo: 12345678)</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="per_correo" class="form-label">Correo Electrónico</label>
                                <input type="email" id="per_correo" name="per_correo" class="form-control" maxlength="100" required>
                            </div>

                            <div class="mb-3">
                                <label for="per_direc" class="form-label">Dirección</label>
                                <textarea id="per_direc" name="per_direc" class="form-control" maxlength="150" rows="2" required></textarea>
                                <div class="form-text">Dirección completa del personal</div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="per_puesto" class="form-label">Puesto de Trabajo</label>
                                    <input type="text" id="per_puesto" name="per_puesto" class="form-control" maxlength="100" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="per_area" class="form-label">Área de Trabajo</label>
                                    <input type="text" id="per_area" name="per_area" class="form-control" maxlength="100" required>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Guardar Personal
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil me-1"></i>Modificar Personal
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
                        <h4 class="mb-0">
                            <i class="bi bi-people me-2"></i>Personal Registrado
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarPersonal" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Personal
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>DPI</th>
                                        <th>Teléfono</th>
                                        <th>Puesto</th>
                                        <th>Área</th>
                                        <th>Fecha Ingreso</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaPersonal">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/personalDot/index.js') ?>"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventario de Dotación</title>
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
                            Gestión de Inventario de Dotación
                        </h3>
                    </div>
                    <div class="card-body">
                        <form id="FormInventarioDot" method="POST">
                            <input type="hidden" id="inv_id" name="inv_id">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inv_prenda_id" class="form-label">Prenda de Dotación</label>
                                        <select id="inv_prenda_id" name="inv_prenda_id" class="form-select" required>
                                            <option value="">Seleccione una prenda</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inv_talla_id" class="form-label">Talla</label>
                                        <select id="inv_talla_id" name="inv_talla_id" class="form-select" required>
                                            <option value="">Primero seleccione prenda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inv_cant_total" class="form-label">Cantidad Total</label>
                                        <input type="number" id="inv_cant_total" name="inv_cant_total" class="form-control" min="1" required>
                                        <div class="form-text">Cantidad total ingresada</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inv_cant_disp" class="form-label">Cantidad Disponible</label>
                                        <input type="number" id="inv_cant_disp" name="inv_cant_disp" class="form-control" min="0">
                                        <div class="form-text">Cantidad disponible actual</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inv_lote" class="form-label">Lote</label>
                                        <input type="text" id="inv_lote" name="inv_lote" class="form-control" maxlength="50">
                                        <div class="form-text">Número de lote (opcional)</div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="inv_observ" class="form-label">Observaciones (Opcional)</label>
                                <textarea id="inv_observ" name="inv_observ" class="form-control" maxlength="250" rows="2"></textarea>
                                <div class="form-text">Notas adicionales sobre el inventario</div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Guardar Inventario
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil me-1"></i>Modificar Inventario
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
                            <i class="bi bi-list-ul me-2"></i>Inventario Registrado
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarInventario" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Inventario
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Prenda</th>
                                        <th>Talla</th>
                                        <th>Cantidad Total</th>
                                        <th>Disponible</th>
                                        <th>Lote</th>
                                        <th>Fecha Ingreso</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaInventario">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/inventarioDot/index.js') ?>"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Entregas de Dotación</title>
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
                            Gestión de Entregas de Dotación
                        </h3>
                    </div>
                    <div class="card-body">
                        <form id="FormEntregasDot" method="POST">
                            <input type="hidden" id="ent_id" name="ent_id">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ent_per_id" class="form-label">Personal Receptor</label>
                                        <select id="ent_per_id" name="ent_per_id" class="form-select" required>
                                            <option value="">Seleccione personal</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ent_usuario_ent" class="form-label">Personal que Entrega</label>
                                        <select id="ent_usuario_ent" name="ent_usuario_ent" class="form-select" required>
                                            <option value="">Seleccione personal entregador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ent_ped_id" class="form-label">Pedido Aprobado</label>
                                        <select id="ent_ped_id" name="ent_ped_id" class="form-select" disabled required>
                                            <option value="">Primero seleccione personal</option>
                                        </select>
                                        <div class="form-text">Solo se muestran pedidos aprobados</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ent_inv_id" class="form-label">Lote de Inventario</label>
                                        <select id="ent_inv_id" name="ent_inv_id" class="form-select" disabled required>
                                            <option value="">Primero seleccione pedido</option>
                                        </select>
                                        <div class="form-text">Muestra stock disponible por lote</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="ent_cant_ent" class="form-label">Cantidad a Entregar</label>
                                        <input type="number" id="ent_cant_ent" name="ent_cant_ent" class="form-control" min="1" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="ent_observ" class="form-label">Observaciones (Opcional)</label>
                                        <textarea id="ent_observ" name="ent_observ" class="form-control" maxlength="250" rows="2"></textarea>
                                        <div class="form-text">Notas adicionales sobre la entrega</div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-check-circle me-1"></i>Registrar Entrega
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil-square me-1"></i>Modificar Entrega
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
                            <i class="bi bi-table me-2"></i>Entregas Registradas
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarEntregas" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Entregas
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Personal</th>
                                        <th>Artículo</th>
                                        <th>Cantidad</th>
                                        <th>Fecha Entrega</th>
                                        <th>Entregado por</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaEntregas">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/entregasDot/index.js') ?>"></script>
</body>
</html>
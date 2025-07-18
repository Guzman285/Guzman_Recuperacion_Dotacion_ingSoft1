<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pedidos de Dotación</title>
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
                            Gestión de Pedidos de Dotación
                        </h3>
                    </div>
                    <div class="card-body">
                        <form id="FormPedidosDot" method="POST">
                            <input type="hidden" id="ped_id" name="ped_id">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ped_per_id" class="form-label">Personal Solicitante</label>
                                        <select id="ped_per_id" name="ped_per_id" class="form-select" required>
                                            <option value="">Seleccione personal</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ped_prenda_id" class="form-label">Prenda Solicitada</label>
                                        <select id="ped_prenda_id" name="ped_prenda_id" class="form-select" required>
                                            <option value="">Seleccione prenda</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="ped_talla_id" class="form-label">Talla</label>
                                        <select id="ped_talla_id" name="ped_talla_id" class="form-select" required>
                                            <option value="">Primero seleccione prenda</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="ped_cant_sol" class="form-label">Cantidad Solicitada</label>
                                        <input type="number" id="ped_cant_sol" name="ped_cant_sol" class="form-control" min="1" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="ped_estado" class="form-label">Estado del Pedido</label>
                                        <select id="ped_estado" name="ped_estado" class="form-select">
                                            <option value="PENDIENTE">PENDIENTE</option>
                                            <option value="APROBADO">APROBADO</option>
                                            <option value="RECHAZADO">RECHAZADO</option>
                                            <option value="ENTREGADO">ENTREGADO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="ped_observ" class="form-label">Observaciones (Opcional)</label>
                                <textarea id="ped_observ" name="ped_observ" class="form-control" maxlength="250" rows="2"></textarea>
                                <div class="form-text">Motivo o detalles del pedido</div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Guardar Pedido
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil me-1"></i>Modificar Pedido
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
                            <i class="bi bi-list-ul me-2"></i>Pedidos Registrados
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarPedidos" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Pedidos
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Personal</th>
                                        <th>Puesto</th>
                                        <th>Prenda</th>
                                        <th>Talla</th>
                                        <th>Cantidad</th>
                                        <th>Estado</th>
                                        <th>Fecha Solicitud</th>
                                        <th>Observaciones</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaPedidos">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/pedidosDot/index.js') ?>"></script>
</body>
</html>
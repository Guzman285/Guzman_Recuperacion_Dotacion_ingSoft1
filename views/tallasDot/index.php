<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tallas de Dotación</title>
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
                            Gestión de Tallas de Dotación
                        </h3>
                    </div>
                    <div class="card-body">
                        <form id="FormTallasDot" method="POST">
                            <input type="hidden" id="talla_id" name="talla_id">
                            
                            <div class="mb-3">
                                <label for="talla_prenda_id" class="form-label">Prenda de Dotación</label>
                                <select id="talla_prenda_id" name="talla_prenda_id" class="form-select" required>
                                    <option value="">Seleccione una prenda</option>
                                </select>
                                <div class="form-text">Selecciona la prenda para agregarle tallas</div>
                            </div>

                            <div class="mb-3">
                                <label for="talla_nombre" class="form-label">Talla</label>
                                <input type="text" id="talla_nombre" name="talla_nombre" class="form-control" maxlength="20" required>
                                <div class="form-text">Ej: XS, S, M, L, XL para ropa | 6, 7, 8, 9, 10 para calzado</div>
                            </div>

                            <div class="mb-3">
                                <label for="talla_desc" class="form-label">Descripción (Opcional)</label>
                                <textarea id="talla_desc" name="talla_desc" class="form-control" maxlength="100" rows="2"></textarea>
                                <div class="form-text">Información adicional sobre la talla</div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Guardar Talla
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil me-1"></i>Modificar Talla
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
                            <i class="bi bi-list-ul me-2"></i>Tallas Registradas
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarTallas" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Tallas
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Prenda</th>
                                        <th>Talla</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaTallas">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/tallasDot/index.js') ?>"></script>
</body>
</html>
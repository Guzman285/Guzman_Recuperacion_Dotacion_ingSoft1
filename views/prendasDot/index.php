<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Prendas de Dotación</title>
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
                        Gestión de Prendas de Dotación
                        </h3>
                    </div>
                    <div class="card-body">
                        <form id="FormPrendasDot" method="POST">
                            <input type="hidden" id="prenda_id" name="prenda_id">
                            
                            <div class="mb-3">
                                <label for="prenda_nombre" class="form-label">Nombre de la Prenda</label>
                                <input type="text" id="prenda_nombre" name="prenda_nombre" class="form-control" maxlength="100" required>
                                <div class="form-text">Ejemplo: Botas Militares, Pantalón de Campaña, etc.</div>
                            </div>

                            <div class="mb-3">
                                <label for="prenda_desc" class="form-label">Descripción</label>
                                <textarea id="prenda_desc" name="prenda_desc" class="form-control" maxlength="250" rows="3" required></textarea>
                                <div class="form-text">Descripción detallada de la prenda</div>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" id="BtnGuardar" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i>Guardar Prenda
                                </button>
                                <button type="button" id="BtnModificar" class="btn btn-warning d-none">
                                    <i class="bi bi-pencil me-1"></i>Modificar Prenda
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
                            <i class="bi bi-list-ul me-2"></i>Prendas Registradas
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarPrendas" class="btn btn-primary">
                                <i class="bi bi-search me-1"></i>Buscar Prendas
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre de Prenda</th>
                                        <th>Descripción</th>
                                        <th>Fecha Creación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaPrendas">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/prendasDot/index.js') ?>"></script>
</body>
</html>
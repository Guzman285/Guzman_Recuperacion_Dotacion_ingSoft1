<div class="container mt-4">
    <div class="row mb-4 justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 text-primary">HISTORIAL DE ACTIVIDADES</h3>
                    <small class="text-secondary">Panel de Administración</small>
                </div>
                <div class="card-body">
                    <div class="row g-3 mb-3">
                        <div class="col-md-3">
                            <label for="filtro_usuario" class="form-label">Usuario</label>
                            <select class="form-select" id="filtro_usuario">
                                <option value="">Todos los usuarios</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filtro_aplicacion" class="form-label">Aplicación</label>
                            <select class="form-select" id="filtro_aplicacion">
                                <option value="">Todas las aplicaciones</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filtro_ruta" class="form-label">Ruta</label>
                            <select class="form-select" id="filtro_ruta">
                                <option value="">Todas las rutas</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">&nbsp;</label>
                            <button type="button" class="btn btn-secondary w-100" id="BtnLimpiarFiltros">
                                <i class="bi bi-eraser me-1"></i>Limpiar Filtros
                            </button>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio">
                        </div>
                        <div class="col-md-4">
                            <label for="fecha_fin" class="form-label">Fecha Fin</label>
                            <input type="date" class="form-control" id="fecha_fin">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">&nbsp;</label>
                            <button type="button" class="btn btn-primary w-100" id="BtnBuscarActividades">
                                <i class="bi bi-search me-1"></i>Buscar Historial
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" id="seccionTabla" style="display: none;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0 text-primary">Historial de Actividades del Sistema</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="TableHistorialActividades">
                            <thead class="table-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Usuario</th>
                                    <th>Aplicación</th>
                                    <th>Ruta</th>
                                    <th>Descripción</th>
                                    <th>Ejecución</th>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="<?= asset('build/js/historial/index.js') ?>"></script>
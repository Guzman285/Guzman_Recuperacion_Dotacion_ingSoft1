<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">Crear Cuenta de Usuario</h3>
                    </div>
                    <div class="card-body">
                        <div id="mensaje_resultado"></div>
                        
                        <form id="formUsuario" method="POST" enctype="multipart/form-data">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="usuario_nom1" class="form-label">Primer Nombre</label>
                                    <input type="text" id="usuario_nom1" name="usuario_nom1" class="form-control" maxlength="50" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="usuario_nom2" class="form-label">Segundo Nombre</label>
                                    <input type="text" id="usuario_nom2" name="usuario_nom2" class="form-control" maxlength="50" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="usuario_ape1" class="form-label">Primer Apellido</label>
                                    <input type="text" id="usuario_ape1" name="usuario_ape1" class="form-control" maxlength="50" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="usuario_ape2" class="form-label">Segundo Apellido</label>
                                    <input type="text" id="usuario_ape2" name="usuario_ape2" class="form-control" maxlength="50" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="usuario_dpi" class="form-label">DPI (13 dígitos)</label>
                                    <input type="text" id="usuario_dpi" name="usuario_dpi" class="form-control" maxlength="13" pattern="[0-9]{13}" title="Debe contener exactamente 13 dígitos" required>
                                    <div class="form-text">Solo números, sin espacios ni guiones</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="usuario_tel" class="form-label">Teléfono (8 dígitos)</label>
                                    <input type="text" id="usuario_tel" name="usuario_tel" class="form-control" maxlength="8" pattern="[0-9]{8}" title="Debe contener exactamente 8 dígitos" required>
                                    <div class="form-text">Solo números, sin espacios ni guiones</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="usuario_direc" class="form-label">Dirección</label>
                                <textarea id="usuario_direc" name="usuario_direc" class="form-control" maxlength="150" rows="2" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="usuario_correo" class="form-label">Correo Electrónico</label>
                                <input type="email" id="usuario_correo" name="usuario_correo" class="form-control" maxlength="100" required>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="usuario_contra" class="form-label">Contraseña</label>
                                    <input type="password" id="usuario_contra" name="usuario_contra" class="form-control" minlength="8" maxlength="50" required>
                                    <div class="form-text">Mínimo 8 caracteres</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmar_contra" class="form-label">Confirmar Contraseña</label>
                                    <input type="password" id="confirmar_contra" name="confirmar_contra" class="form-control" minlength="8" maxlength="50" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="usuario_fotografia" class="form-label">Fotografía (Opcional)</label>
                                <input type="file" id="usuario_fotografia" name="usuario_fotografia" class="form-control" accept="image/jpeg,image/jpg,image/png">
                                <div class="form-text">Formatos permitidos: JPG, JPEG, PNG. Tamaño máximo: 2MB</div>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="terminos" required>
                                <label class="form-check-label" for="terminos">
                                    Acepto los <a href="#!" class="text-decoration-none">Términos y Condiciones</a>
                                </label>
                            </div>

                            <div class="text-center mb-3">
                                <button type="submit" id="BtnGuardar" class="btn btn-success btn-lg">
                                    Registrar
                                </button>
                            </div>

                            <p class="text-center text-muted mb-0">
                                ¿Ya tienes cuenta? 
                                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/login" class="text-decoration-none fw-bold">Inicia sesión aquí</a>
                            </p>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SECCIÓN PARA BUSCAR USUARIOS -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Usuarios Registrados</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <button type="button" id="BtnBuscarUsuarios" class="btn btn-primary">
                                Buscar Usuarios
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Foto</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Teléfono</th>
                                        <th>DPI</th>
                                        <th>Correo</th>
                                        <th>Fecha Registro</th>
                                    </tr>
                                </thead>
                                <tbody id="TablaUsuarios">
                                    <!-- Los usuarios se cargarán aquí -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/usuario/index.js') ?>"></script>
</body>
</html>
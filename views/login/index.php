<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Sistema de Dotación</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3">
            <div class="card shadow">
                <div class="card-body p-4">
                    
                    <!-- Logo y Header -->
                    <div class="text-center mb-4">
                        <div class="bg-primary text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-person-circle fs-2"></i>
                        </div>
                        <h3 class="card-title text-primary fw-bold">Iniciar Sesión</h3>
                        <p class="text-muted">Accede a tu cuenta del sistema</p>
                    </div>

                    <!-- Formulario -->
                    <form id="FormLogin" method="POST">
                        
                        <!-- Campo Usuario/Correo -->
                        <div class="mb-3">
                            <label for="usuario_correo" class="form-label">
                                <i class="bi bi-envelope me-2"></i>Correo Electrónico
                            </label>
                            <input 
                                type="email" 
                                class="form-control" 
                                id="usuario_correo" 
                                name="usuario_correo"
                                placeholder="correo@ejemplo.com"
                                required
                                autocomplete="email">
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="mb-3">
                            <label for="usuario_contra" class="form-label">
                                <i class="bi bi-lock me-2"></i>Contraseña
                            </label>
                            <input 
                                type="password" 
                                class="form-control" 
                                id="usuario_contra" 
                                name="usuario_contra"
                                placeholder="Ingresa tu contraseña"
                                required
                                autocomplete="current-password">
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="recordar">
                                <label class="form-check-label text-muted" for="recordar">
                                    Recordar mi sesión
                                </label>
                            </div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" id="BtnIniciar" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Iniciar Sesión
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <p class="mb-2">
                                <a href="#" class="text-decoration-none small">¿Olvidaste tu contraseña?</a>
                            </p>
                            <p class="mb-0">
                                ¿No tienes cuenta? 
                                <a href="/Guzman_Recuperacion_Dotacion_ingSoft1/usuario" class="text-decoration-none">Regístrate aquí</a>
                            </p>
                        </div>
                        
                    </form>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="text-center mt-4">
                <p class="text-muted small">
                    <i class="bi bi-shield-check me-1"></i>
                    Sistema de Dotación - IMG &copy; <?= date('Y') ?>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('build/js/login/index.js') ?>"></script>
</body>
</html>
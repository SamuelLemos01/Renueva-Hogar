<?php
require_once '../includes/header_helper.php';

if ($_POST && isset($_POST['email']) && isset($_POST['contrasena'])) {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    // Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'login_register_db');
    
    if ($conexion) {
        // Buscar usuario por correo
        $query = "SELECT id, correo, contrasena, nombre_completo FROM usuarios WHERE correo = ?";
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        
        if ($usuario = mysqli_fetch_assoc($resultado)) {
            // Verificar contraseña
            if ($contrasena === $usuario['contrasena']) {
                // Iniciar sesión
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_email'] = $usuario['correo'];
                $_SESSION['usuario_nombre'] = $usuario['nombre_completo'];
                
                // Redirigir al index
                header("Location: ../index.php");
                exit();
            } else {
                $error_login = "Contraseña incorrecta";
            }
        } else {
            $error_login = "Usuario no encontrado";
        }
        mysqli_close($conexion);
    } else {
        $error_login = "Error de conexión a la base de datos";
    }
}

incluirHeader('Iniciar Sesión', '../', ['../assets/css/login.css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'], [], true);
?>

    <main class="contenido-principal-auth">
        <div class="wrapper login-wrapper">
            <div class="form-header">
                <div class="titles">
                    <div class="title-login">Iniciar Sesión</div>
                </div>
            </div>
            <form action="login.php" method="POST" class="login-form" >
                <?php if (isset($error_login)): ?>
                    <div class="error-message" style="background-color: #ffebee; color: #c62828; padding: 10px; border-radius: 5px; margin-bottom: 15px; text-align: center;">
                        <?php echo htmlspecialchars($error_login); ?>
                    </div>
                <?php endif; ?>
                
                <div class="input-box">
                    <input type="text" class="input-field" id="log-email" name="email" required>
                    <label for="log-email" class="label">Correo Electrónico</label>
                    <i class='bx bx-envelope icon'></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" id="log-pass" name="contrasena" required>
                    <label for="log-pass" class="label">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
                </div>
                <div class="form-cols">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="input-box">
                    <button type="submit" class="btn-submit" id="SignInBtn">Iniciar Sesión <i class='bx bx-log-in'></i></button>
                    
                </div>
                <div class="switch-form">
                    <span>¿No tienes una cuenta? <a href="register.php">Regístrate</a></span>
                </div>
                <div class="switch-form">
                    <span>¿Eres un admin? Inicia Sesión <a href="../administrador/login/login_admin.php">aquí</a></span>
                </div>
            </form>
        </div>
    </main>

<?php incluirFooter('../'); ?>

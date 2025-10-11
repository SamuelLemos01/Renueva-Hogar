<?php
// Incluir header helper con validación de sesión
require_once '../includes/header_helper.php';
incluirHeader('Registro', '../', ['../assets/css/login.css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'], [], true);
?>

    <!-- Contenido principal -->
    <main class="contenido-principal-auth">
        <div style="height:900px !important;"class="wrapper register-wrapper">
            <div class="form-header">
                <div class="titles">
                    <div class="title-login">Registro</div>
                </div>
            </div>
            <form action="../php/registro_usuario_be.php" method="POST" class="register-form" >
                <div class="input-box">
                    <input type="text" class="input-field" id="reg-name" name="nombre_completo" required>
                    <label for="reg-name" class="label">Nombre Completo</label>
                    <i class='bx bx-user icon'></i>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="reg-phone" name="telefono" required>
                    <label for="reg-phone" class="label">Teléfono</label>
                    <i class='bx bx-phone icon'></i>
                </div>
                <div class="input-box">
                    <select class="input-field" name="tipo_documento" required>
                        <option value=""></option>
                        <option value="CC">Cédula de Ciudadanía</option>
                        <option value="CE">Cédula de Extranjería</option>
                        <option value="TI">Tarjeta de Identidad</option>
                    </select>
                    <label class="label">Tipo de Documento</label>
                    <i class='bx bx-id-card icon'></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="documento" required>
                    <label class="label">Número de Documento</label>
                    <i class='bx bx-id-card icon'></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="reg-address" name="direccion" required>
                    <label for="reg-address" class="label">Dirección</label>
                    <i class='bx bx-map icon'></i>
                </div>
                <div class="input-box">
                    <input type="email" class="input-field" id="reg-email" name="correo" required>
                    <label for="reg-email" class="label">Correo Electrónico</label>
                    <i class='bx bx-envelope icon'></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" id="reg-pass" name="contrasena" required>
                    <label for="reg-pass" class="label">Contraseña</label>
                    <i class='bx bx-lock-alt icon'></i>
                </div>
                <div class="input-box">
                    <button type="submit" class="btn-submit" name="registrar">Registrarse <i class='bx bx-user-plus'></i></button>
                </div>
                <div class="switch-form">
                    <span>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></span>
                </div>
            </form>
        </div>
    </main>

<?php incluirFooter('../'); ?>

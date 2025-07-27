<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) header("Location: ../login/login_admin.php");

$conexion = mysqli_connect('localhost', 'root', '', 'login_register_db');

$usuario_encontrado = null; // Variable para almacenar el resultado de la consulta

if ($_POST) {
    $accion = $_POST['accion'];
    
    if ($accion == 'crear') {
        $tipo_documento = $_POST['tipo_documento'];
        $nombre = $_POST['nombre_completo'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        
        mysqli_query($conexion, "INSERT INTO usuarios (tipo_documento, nombre_completo, telefono, direccion, correo, contrasena) VALUES ('$tipo_documento', '$nombre', '$telefono', '$direccion', '$correo', '$contrasena')");
    }
    
    if ($accion == 'editar') {
        $id = $_POST['id'];
        $tipo_documento = $_POST['tipo_documento'];
        $nombre = $_POST['nombre_completo'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        
        mysqli_query($conexion, "UPDATE usuarios SET nombre_completo='$nombre', telefono='$telefono', direccion='$direccion', correo='$correo', contrasena='$contrasena' WHERE id=$id");
    }
    
    if ($accion == 'eliminar') {
        $id = $_POST['id'];
        mysqli_query($conexion, "DELETE FROM usuarios WHERE id=$id");
    }
    
    if ($accion == 'consultar') {
        $documento = $_POST['documento_consulta'];
        $resultado_consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE documento = '$documento'");
        $usuario_encontrado = mysqli_fetch_assoc($resultado_consulta);
    }
}

$usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Admin</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="usuarios.css">
</head>

<body>
    <header class="admin-header">
        <div class="contenedor-barra-navegacion">
            <nav class="barra-navegacion contenedor">
                <div class="contenedor-logo">
                    <h1 class="logo"><a href="../../index.php">Renueva Hogar</a></h1>
                </div>
                <div class="admin-nav">
                    <span class="admin-welcome">Bienvenido, <?php echo $_SESSION['admin_usuario']; ?></span>
                    <a href="../admin/index.php" class="logout-btn"><i class="fa-solid fa-home"></i> Panel</a>
                    <a href="../admin/logout.php" class="logout-btn"><i class="fa-solid fa-sign-out-alt"></i> Cerrar</a>
                </div>
            </nav>
        </div>
    </header>

    <main class="admin-main">
        <div class="admin-container">
            <h1>Gestionar Usuarios</h1>

            <div class="botones-accion">
                <button onclick="mostrarForm()" class="btn-nuevo">+ Nuevo Usuario</button>
                <button onclick="mostrarConsulta()" class="btn-consultar">Consultar por Documento</button>
            </div>

            <table class="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Documento</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($u = mysqli_fetch_assoc($usuarios)): ?>
                        <tr>
                            <td><?php echo $u['id']; ?></td>
                            <td><?php echo $u['tipo_documento']; ?></td>
                            <td><?php echo $u['nombre_completo']; ?></td>
                            <td><?php echo $u['telefono']; ?></td>
                            <td><?php echo $u['direccion']; ?></td>
                            <td><?php echo $u['correo']; ?></td>
                            <td>
                                <button onclick="editar(<?php echo $u['id']; ?>, '<?php echo $u['nombre_completo']; ?>', '<?php echo $u['telefono']; ?>', '<?php echo $u['direccion']; ?>', '<?php echo $u['correo']; ?>', '<?php echo $u['contrasena']; ?>')" class="btn-editar">Editar</button>
                                <button onclick="eliminar(<?php echo $u['id']; ?>)" class="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            
            <!-- Tabla de resultados de consulta -->
            <?php if ($usuario_encontrado): ?>
                <div class="resultado-consulta">
                    <h3>Resultado de la consulta:</h3>
                    <table class="tabla tabla-consulta">
                        <thead>
                            <tr>
                                <th>Tipo de Documento</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo htmlspecialchars($usuario_encontrado['tipo_documento']); ?></td>
                                <td><?php echo htmlspecialchars($usuario_encontrado['nombre_completo']); ?></td>
                                <td><?php echo htmlspecialchars($usuario_encontrado['telefono']); ?></td>
                                <td><?php echo htmlspecialchars($usuario_encontrado['direccion']); ?></td>
                                <td><?php echo htmlspecialchars($usuario_encontrado['correo']); ?></td>
                                <td><?php echo htmlspecialchars($usuario_encontrado['contrasena']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php elseif (isset($_POST['accion']) && $_POST['accion'] == 'consultar' && !$usuario_encontrado): ?>
                <div class="resultado-consulta">
                    <p class="mensaje-error">No se encontró ningún usuario con ese documento.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- Modal formularo-->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2 id="modalTitulo">Nuevo Usuario</h2>
            <form method="POST">
                <input type="hidden" name="accion" id="accion" value="crear">
                <input type="hidden" name="id" id="usuario_id">
                <select name="tipo_documento" id="tipo_documento" required>
                    <option value="">Seleccione tipo de documento</option>
                    <option value="CC">Cédula de Ciudadanía</option>
                    <option value="TI">Tarjeta de Identidad</option>
                </select>
                <input type="text" name="nombre_completo" id="nombre_completo" placeholder="Nombre completo" required>
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono" required>
                <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
                <input type="email" name="correo" id="correo" placeholder="Correo" required>
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>

                <div class="botones">
                    <button type="button" onclick="cerrarModal()" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="modalConsulta" class="modal">
        <div class="modal-content">
            <h2>Consultar por Documento</h2>
            <form method="POST">
                <input type="hidden" name="accion" value="consultar">
                <input type="text" name="documento_consulta" placeholder="Ingrese número de documento" required>

                <div class="botones">
                    <button type="button" onclick="cerrarModalConsulta()" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-guardar">Consultar</button>
                </div>
            </form>
        </div>
    </div>

    <form id="formEliminar" method="POST" style="display:none;">
        <input type="hidden" name="accion" value="eliminar">
        <input type="hidden" name="id" id="eliminar_id">
    </form>

    <script>
        function mostrarForm() {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('modalTitulo').textContent = 'Nuevo Usuario';
            document.getElementById('accion').value = 'crear';
            document.querySelector('form').reset();
        }

        function editar(id, tipo_documento, nombre, telefono, direccion, correo, contrasena) {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('modalTitulo').textContent = 'Editar Usuario';
            document.getElementById('accion').value = 'editar';
            document.getElementById('usuario_id').value = id;
            document.getElementById('tipo_documento').value = tipo_documento;
            document.getElementById('nombre').value = nombre;
            document.getElementById('telefono').value = telefono;
            document.getElementById('direccion').value = direccion;
            document.getElementById('correo').value = correo;
            document.getElementById('contrasena').value = contrasena;
        }

        function eliminar(id) {
            if (confirm('¿Eliminar usuario?')) {
                document.getElementById('eliminar_id').value = id;
                document.getElementById('formEliminar').submit();
            }
        }

        function cerrarModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function mostrarConsulta() {
            document.getElementById('modalConsulta').style.display = 'block';
        }

        function cerrarModalConsulta() {
            document.getElementById('modalConsulta').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('modal')) {
                cerrarModal();
            }
            if (event.target == document.getElementById('modalConsulta')) {
                cerrarModalConsulta();
            }
        }
    </script>
</body>

</html>
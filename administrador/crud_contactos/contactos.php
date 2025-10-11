<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) header("Location: ../login/login_admin.php");

$conexion = mysqli_connect('localhost', 'root', '', 'contactos');

$contacto_encontrado = null; // Variable para almacenar el resultado de la consulta

if ($_POST) {
    $accion = $_POST['accion'];
    
    if ($accion == 'crear') {
        $nombre_completo = $_POST['nombre_completo'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        
        mysqli_query($conexion, "INSERT INTO contactos (nombre_completo, email, telefono, mensaje) VALUES ('$nombre_completo', '$email', '$telefono', '$mensaje')");
    }
    
    if ($accion == 'editar') {
        $id = $_POST['id'];
        $nombre_completo = $_POST['nombre_completo'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        
        mysqli_query($conexion, "UPDATE contactos SET nombre_completo='$nombre_completo', email='$email', telefono='$telefono', mensaje='$mensaje' WHERE id=$id");
    }
    
    if ($accion == 'eliminar') {
        $id = $_POST['id'];
        mysqli_query($conexion, "DELETE FROM contactos WHERE id=$id");
    }
    
    if ($accion == 'consultar') {
        $nombre_completo = $_POST['nombre_completo_consulta'];
        $resultado_consulta = mysqli_query($conexion, "SELECT * FROM contactos WHERE nombre_completo = '$nombre_completo'");
        $contacto_encontrado = mysqli_fetch_assoc($resultado_consulta);
    }
}

$contactos = mysqli_query($conexion, "SELECT * FROM contactos");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos - Admin</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="contactos.css">
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
            <h1>Gestionar Contactos</h1>

            <div class="botones-accion">
                <button onclick="mostrarForm()" class="btn-nuevo">+ Nuevo Contacto</button>
                <button onclick="mostrarConsulta()" class="btn-consultar">Consultar por Documento</button>
            </div>

            <table class="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($u = mysqli_fetch_assoc($contactos)): ?>
                        <tr>
                            <td><?php echo $u['id']; ?></td>
                            <td><?php echo $u['nombre_completo']; ?></td>
                            <td><?php echo $u['email']; ?></td>
                            <td><?php echo $u['telefono']; ?></td>
                            <td><?php echo $u['mensaje']; ?></td>
                            <td>
                                <button onclick="editar(<?php echo $u['id']; ?>, '<?php echo $u['nombre_completo']; ?>', '<?php echo $u['email']; ?>', '<?php echo $u['telefono']; ?>', '<?php echo $u['mensaje']; ?>')" class="btn-editar">Editar</button>
                                <button onclick="eliminar(<?php echo $u['id']; ?>)" class="btn-eliminar">Eliminar</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            
            <!-- Tabla de resultados de consulta -->
            <?php if ($contacto_encontrado): ?>
                <div class="resultado-consulta">
                    <h3>Resultado de la consulta:</h3>
                    <table class="tabla tabla-consulta">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Mensaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo htmlspecialchars($contacto_encontrado['nombre_completo']); ?></td>
                                <td><?php echo htmlspecialchars($contacto_encontrado['email']); ?></td>
                                <td><?php echo htmlspecialchars($contacto_encontrado['telefono']); ?></td>
                                <td><?php echo htmlspecialchars($contacto_encontrado['mensaje']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php elseif (isset($_POST['accion']) && $_POST['accion'] == 'consultar' && !$contacto_encontrado): ?>
                <div class="resultado-consulta">
                    <p class="mensaje-error">No se encontró ningún usuario con ese nombre.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- Modal formularo-->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2 id="modalTitulo">Nuevo Contacto</h2>
            <form method="POST">
                <input type="hidden" name="accion" id="accion" value="crear">
                <input type="hidden" name="id" id="contacto_id">
                <input type="text" name="nombre_completo" id="nombre_completo" placeholder="Nombre completo" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="text" name="telefono" id="telefono" placeholder="Teléfono" required>
                <input type="text" name="mensaje" id="mensaje" placeholder="Mensaje" required>
                </input>
                <div class="botones">
                    <button type="button" onclick="cerrarModal()" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <div id="modalConsulta" class="modal">
        <div class="modal-content">
            <h2>Consultar por Nombre</h2>
            <form method="POST">
                <input type="hidden" name="accion" value="consultar">
                <input type="text" name="nombre_completo_consulta" placeholder="Ingrese nombre completo" required>

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
            document.getElementById('modalTitulo').textContent = 'Nuevo Contacto';
            document.getElementById('accion').value = 'crear';
            document.querySelector('form').reset();
        }

        function editar(id, nombre_completo, email, telefono, mensaje) {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('modalTitulo').textContent = 'Editar Contacto';
            document.getElementById('accion').value = 'editar';
            document.getElementById('contacto_id').value = id;
            document.getElementById('nombre_completo').value = nombre_completo;
            document.getElementById('email').value = email;
            document.getElementById('telefono').value = telefono;
            document.getElementById('mensaje').value = mensaje;
        }

        function eliminar(id) {
            if (confirm('¿Eliminar contacto?')) {
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
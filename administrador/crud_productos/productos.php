<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login/login_admin.php");
}

$conexion = mysqli_connect('localhost', 'root', '', 'productos');

$producto_encontrado = null;

if ($_POST) {
    $accion = $_POST['accion'];
    
    if ($accion == 'crear') {
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];
        
        mysqli_query($conexion, "INSERT INTO productos (nombre, categoria, precio, imagen) VALUES ('$nombre', '$categoria', '$precio', '$imagen')");
    }
    
    if ($accion == 'editar') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];
        
        mysqli_query($conexion, "UPDATE productos SET nombre='$nombre', categoria='$categoria', precio='$precio', imagen='$imagen' WHERE id=$id");
    }
    
    if ($accion == 'eliminar') {
        $id = $_POST['id'];
        mysqli_query($conexion, "DELETE FROM productos WHERE id=$id");
    }
    
    if ($accion == 'consultar') {
        $nombre_producto = $_POST['nombre_producto'];
        $resultado_consulta = mysqli_query($conexion, "SELECT * FROM productos WHERE nombre LIKE '%$nombre_producto%'");
        $producto_encontrado = mysqli_fetch_assoc($resultado_consulta);
    }
}

$productos = mysqli_query($conexion, "SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Productos - Panel Administrativo</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="productos.css">
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
            <h1>Gestionar Productos</h1>
            
            <div class="botones-accion">
                <button onclick="mostrarForm()" class="btn-nuevo">+ Nuevo Producto</button>
                <button onclick="mostrarConsulta()" class="btn-consultar">Consultar Producto</button>
            </div>
            
            <table class="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($p = mysqli_fetch_assoc($productos)): ?>
                    <tr>
                        <td><?php echo $p['id']; ?></td>
                        <td>
                            <img src="../../assets/images/<?php echo $p['imagen']; ?>" alt="<?php echo $p['nombre']; ?>" class="imagen-producto">
                        </td>
                        <td><?php echo $p['nombre']; ?></td>
                        <td><?php echo $p['categoria']; ?></td>
                        <td>$<?php echo number_format($p['precio'], 0, ',', '.'); ?></td>
                        <td>
                            <button onclick="editar(<?php echo $p['id']; ?>, '<?php echo $p['nombre']; ?>', '<?php echo $p['categoria']; ?>', '<?php echo $p['precio']; ?>', '<?php echo $p['imagen']; ?>')" class="btn-editar">Editar</button>
                            <button onclick="eliminar(<?php echo $p['id']; ?>)" class="btn-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            
            <!-- Tabla de resultados de consulta -->
            <?php if ($producto_encontrado): ?>
                <div class="resultado-consulta">
                    <h3>Resultado de la consulta:</h3>
                    <table class="tabla tabla-consulta">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../../assets/images/<?php echo htmlspecialchars($producto_encontrado['imagen']); ?>" alt="<?php echo htmlspecialchars($producto_encontrado['nombre']); ?>" class="imagen-producto">
                                </td>
                                <td><?php echo htmlspecialchars($producto_encontrado['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($producto_encontrado['categoria']); ?></td>
                                <td>$<?php echo number_format($producto_encontrado['precio'], 0, ',', '.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php elseif (isset($_POST['accion']) && $_POST['accion'] == 'consultar' && !$producto_encontrado): ?>
                <div class="resultado-consulta">
                    <p class="mensaje-error">No se encontró ningún producto con ese nombre.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- Modal formulario -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2 id="modalTitulo">Nuevo Producto</h2>
            <form method="POST">
                <input type="hidden" name="accion" id="accion" value="crear">
                <input type="hidden" name="id" id="producto_id">
                
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" required>
                <select name="categoria" id="categoria" required>
                    <option value="">Seleccione categoría</option>
                    <option value="Sala">Sala</option>
                    <option value="Cama">Cama</option>
                    <option value="Comedor">Comedor</option>
                    <option value="Closet">Closet</option>
                    <option value="Silla">Silla</option>
                    <option value="Tocador">Tocador</option>
                    <option value="Cajon">Cajón</option>
                </select>
                <input type="number" name="precio" id="precio" placeholder="Precio" required>
                <input type="text" name="imagen" id="imagen" placeholder="Nombre de la imagen (ej: sala1.jpg)" required>
                
                <div class="botones">
                    <button type="button" onclick="cerrarModal()" class="btn-cancelar">Cancelar</button>
                    <button type="submit" class="btn-guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal consulta -->
    <div id="modalConsulta" class="modal">
        <div class="modal-content">
            <h2>Consultar Producto</h2>
            <form method="POST">
                <input type="hidden" name="accion" value="consultar">
                <input type="text" name="nombre_producto" placeholder="Ingrese nombre del producto" required>
                
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
            document.getElementById('modalTitulo').textContent = 'Nuevo Producto';
            document.getElementById('accion').value = 'crear';
            document.querySelector('form').reset();
        }
        
        function editar(id, nombre, categoria, precio, imagen) {
            document.getElementById('modal').style.display = 'block';
            document.getElementById('modalTitulo').textContent = 'Editar Producto';
            document.getElementById('accion').value = 'editar';
            document.getElementById('producto_id').value = id;
            document.getElementById('nombre').value = nombre;
            document.getElementById('categoria').value = categoria;
            document.getElementById('precio').value = precio;
            document.getElementById('imagen').value = imagen;
        }
        
        function eliminar(id) {
            if (confirm('¿Eliminar producto?')) {
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
<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../login/login_admin.php");
}

$conexion = mysqli_connect('localhost', 'root', '', 'solicitudes_compras');

$solicitud_encontrada = null;

if ($_POST) {
    $accion = $_POST['accion'];
    
    if ($accion == 'actualizar_estado') {
        $id = $_POST['id'];
        $estado = $_POST['estado'];
        
        mysqli_query($conexion, "UPDATE solicitudes SET estado='$estado' WHERE id=$id");
    }
    
    if ($accion == 'eliminar') {
        $id = $_POST['id'];
        mysqli_query($conexion, "DELETE FROM solicitudes WHERE id=$id");
    }
    
    if ($accion == 'consultar') {
        $id_solicitud = $_POST['id_solicitud'];
        $resultado_consulta = mysqli_query($conexion, "SELECT * FROM solicitudes WHERE id=$id_solicitud");
        $solicitud_encontrada = mysqli_fetch_assoc($resultado_consulta);
    }
}

$resultado = mysqli_query($conexion, "SELECT * FROM solicitudes ORDER BY fecha_creacion DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Solicitudes - Renueva Hogar</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="solicitudes.css">
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

    <div class="admin-main">
        <div class="container">
            <h1><i class="fa-solid fa-cart-shopping"></i> Gestión de Solicitudes de Compra</h1>

        <div class="table-container" style="margin-top: 20px;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Contacto</th>
                        <th>Productos</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($solicitud = mysqli_fetch_assoc($resultado)): 
                        $productos = json_decode($solicitud['productos'], true);
                        $cantidad_productos = count($productos);
                    ?>
                        <tr>
                            <td><?php echo $solicitud['id']; ?></td>
                            <td><?php echo htmlspecialchars($solicitud['nombre'] . ' ' . $solicitud['apellido']); ?></td>
                            <td>
                                <small><?php echo htmlspecialchars($solicitud['email']); ?></small><br>
                                <small><?php echo htmlspecialchars($solicitud['telefono']); ?></small>
                            </td>
                            <td><?php echo $cantidad_productos; ?> producto(s)</td>
                            <td><?php echo '$' . number_format($solicitud['total'], 0, ',', '.'); ?></td>
                            <td>
                                <select class="estado-select" data-id="<?php echo $solicitud['id']; ?>">
                                    <option value="pendiente" <?php echo $solicitud['estado'] == 'pendiente' ? 'selected' : ''; ?>>Pendiente</option>
                                    <option value="en_proceso" <?php echo $solicitud['estado'] == 'en_proceso' ? 'selected' : ''; ?>>En Proceso</option>
                                    <option value="completada" <?php echo $solicitud['estado'] == 'completada' ? 'selected' : ''; ?>>Completada</option>
                                    <option value="cancelada" <?php echo $solicitud['estado'] == 'cancelada' ? 'selected' : ''; ?>>Cancelada</option>
                                </select>
                            </td>
                            <td><?php echo date('d/m/Y H:i', strtotime($solicitud['fecha_creacion'])); ?></td>
                            <td>
                                <button class="btn-view" onclick="verDetalles(<?php echo $solicitud['id']; ?>)">
                                    <i class="fa-solid fa-eye"></i> Ver
                                </button>
                                <button class="btn-delete" onclick="eliminarSolicitud(<?php echo $solicitud['id']; ?>)">
                                    <i class="fa-solid fa-trash"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal para ver detalles -->
    <div id="modalDetalles" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <h2>Detalles de la Solicitud</h2>
            <div id="detallesContenido"></div>
        </div>
    </div>

    <script>
        // Actualizar estado
        document.querySelectorAll('.estado-select').forEach(select => {
            select.addEventListener('change', function() {
                const id = this.dataset.id;
                const estado = this.value;
                
                const form = document.createElement('form');
                form.method = 'POST';
                form.innerHTML = `
                    <input type="hidden" name="accion" value="actualizar_estado">
                    <input type="hidden" name="id" value="${id}">
                    <input type="hidden" name="estado" value="${estado}">
                `;
                document.body.appendChild(form);
                form.submit();
            });
        });

        // Ver detalles
        function verDetalles(id) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.innerHTML = `
                <input type="hidden" name="accion" value="consultar">
                <input type="hidden" name="id_solicitud" value="${id}">
            `;
            document.body.appendChild(form);
            form.submit();
        }

        // Eliminar solicitud
        function eliminarSolicitud(id) {
            if (confirm('¿Estás seguro de eliminar esta solicitud?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.innerHTML = `
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="hidden" name="id" value="${id}">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }

        // Cerrar modal
        function cerrarModal() {
            document.getElementById('modalDetalles').style.display = 'none';
        }
    </script>

    <?php if ($solicitud_encontrada): ?>
    <script>
        // Mostrar detalles de la solicitud encontrada
        const productos = <?php echo $solicitud_encontrada['productos']; ?>;
        let contenido = `
            <div class="detalle-item">
                <h3>Datos del Cliente</h3>
                <p><strong>Nombre:</strong> <?php echo htmlspecialchars($solicitud_encontrada['nombre'] . ' ' . $solicitud_encontrada['apellido']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($solicitud_encontrada['email']); ?></p>
                <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($solicitud_encontrada['telefono']); ?></p>
                <p><strong>Dirección:</strong> <?php echo htmlspecialchars($solicitud_encontrada['direccion']); ?></p>
            </div>
            
            <div class="detalle-item">
                <h3>Productos Solicitados</h3>
                <ul>
        `;
        
        productos.forEach(producto => {
            contenido += `<li>${producto.nombre} - Cantidad: ${producto.cantidad} - Precio: $${parseInt(producto.precio).toLocaleString()}</li>`;
        });
        
        contenido += `
                </ul>
            </div>
            
            <div class="detalle-item">
                <h3>Resumen</h3>
                <p><strong>Subtotal:</strong> $<?php echo number_format($solicitud_encontrada['subtotal'], 0, ',', '.'); ?></p>
                <p><strong>Envío:</strong> $<?php echo number_format($solicitud_encontrada['envio'], 0, ',', '.'); ?></p>
                <p><strong>Total:</strong> $<?php echo number_format($solicitud_encontrada['total'], 0, ',', '.'); ?></p>
            </div>
        `;
        
        <?php if (!empty($solicitud_encontrada['notas'])): ?>
        contenido += `
            <div class="detalle-item">
                <h3>Notas Adicionales</h3>
                <p><?php echo htmlspecialchars($solicitud_encontrada['notas']); ?></p>
            </div>
        `;
        <?php endif; ?>
        
        document.getElementById('detallesContenido').innerHTML = contenido;
        document.getElementById('modalDetalles').style.display = 'block';
    </script>
    <?php endif; ?>
        </div>
    </div>
</body>
</html>

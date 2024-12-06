<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav>
    <ul class="navbar">
        <li><a href="../Inicio/index.php">Inicio</a></li>
        <li><a href="../Vista/nosotros.php">Nosotros</a></li>
        <li><a href="../Vista/servicio0.php">Servicio</a></li>
        <li><a href="../Vista/clientes.php">Clientes</a></li>
        <li><a href="../Vista/proyectos.php">Proyectos</a></li>
        <li><a href="../Vista/contactanos.php">Contáctanos</a></li>
        <?php if (isset($_SESSION['usuario'])): ?>
            <li class="dropdown">
                <a href="#"><?php echo htmlspecialchars($_SESSION['usuario']); ?></a>
                <ul class="dropdown-menu">
                    <?php if ($_SESSION['tipo'] == '2'): ?>
                        <li><a href="../Vista/crud_servicios.php">Panel de administración</a></li>
                    <?php endif; ?>
                    <li><a href="../Vista/cerrar_sesion.php">Cerrar sesión</a></li>
                </ul>
            </li>
        <?php else: ?>
            <li><a href="../Vista/iniciar_sesion.php">Iniciar Sesión</a></li>
        <?php endif; ?>
    </ul>
</nav>


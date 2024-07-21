<!-- barra de navegación -->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="principal">
            <img src="assets/img/logo_reloj.png" alt="logo reloj" width="30" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Sección visible solo para administradores -->
        <?php if($perfil == 1): ?>
        <div class="d-inline-flex align-items-center p-2 bg-secondary text-white rounded mx-1">
            <a href="#" class="text-white text-decoration-none">ADMIN: <?php echo $nombre; ?></a>
        </div>
        <?php endif; ?>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="principal">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes_somos">Quiénes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acercade">Acerca de</a>
                </li>

                <?php if($perfil == 1): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1"
                        aria-disabled="true">Cerrar
                        Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('usuario_lista'); ?>" tabindex="-1"
                        aria-disabled="true">Lista de
                        usuarios</a>
                </li>
                <?php endif; ?>
                <!-- Opciones específicas para usuarios logueados -->
                <?php if($perfil == 2): ?>
                <li class="nav-item">
                    <a class="nav-link" href="catalogo">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1"
                        aria-disabled="true">Cerrar Sesión</a>
                </li>
                <!-- Opciones para usuarios no logueados -->
                <?php elseif(!$perfil): ?>
                <li class="nav-item">
                    <a class="nav-link" href="registro">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <?php endif; ?>

                <!-- Opciones comunes para todos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Contáctanos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Vía mail</a></li>
                        <li><a class="dropdown-item" href="#">Sucursales</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Formulario de búsqueda visible para todos -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
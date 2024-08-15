<div class="container mt-4">
    <!-- Mensajes flash -->
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('fail'); ?>
    </div>
    <?php endif; ?>

    <?php if (!empty(session()->getFlashdata('success'))) : ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>
    <?php endif; ?>

    <h2 class="mb-4">Lista de Usuarios</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Perfil ID</th>
                <th scope="col">Baja</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['nombre']; ?></td>
                <td><?php echo $usuario['apellido']; ?></td>
                <td><?php echo $usuario['usuario']; ?></td>
                <td><?php echo $usuario['email']; ?></td>
                <td><?php echo $usuario['perfil_id']; ?></td>
                <td><?php echo $usuario['baja']; ?></td>
                <td><a href="<?= base_url('usuario_editar/'.$usuario['id_usuario'])?>">Editar</a></td>
                <td><a href="<?= base_url('usuario_eliminar'.$usuario['id_usuario'])?>">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
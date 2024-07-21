<div class="container mt-5">
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
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
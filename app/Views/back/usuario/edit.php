<div class="container">
    <h3 class="my-4">Editar usuario</h3>
    <?php $validation = \Config\Services::validation(); ?>

    <div class="justify-content-center align-items-center">
        <form method="post" action="<?php echo base_url('/edicion')?>">

            <?=csrf_field();?>

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

            <input type="hidden" name="id_usuario" value="<?= $dato['id_usuario'] ?>">
            <input type="hidden" name="pass" value="<?= $dato['pass'] ?>">

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input name="nombre" type="text" class="form-control" id="name" placeholder="Ingresa tu nombre"
                    value='<?= $dato['nombre'] ?>'>
                <!-- error -->
                <?php if($validation->getError('nombre')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('nombre'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Ingresa tu apellido"
                    value='<?= $dato['apellido'] ?>'>
                <!-- error -->
                <?php if($validation->getError('apellido')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('apellido'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input name="usuario" type="text" class="form-control" id="usuario"
                    placeholder="Ingresa tu nombre de usuario" value='<?= $dato['usuario'] ?>'>
                <!-- error -->
                <?php if($validation->getError('usuario')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('usuario'); ?>
                </div>
                <?php } ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Ingresa tu correo"
                    value='<?= $dato['email'] ?>'>
                <!-- error -->
                <?php if($validation->getError('email')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?>
                </div>
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary mt-3 mb-3">Actualizar</button>
            <button type="reset" class="btn btn-danger mt-3 mb-3">Cancelar</button>
        </form>
    </div>
</div>
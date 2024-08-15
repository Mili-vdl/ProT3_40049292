<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
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

            <?php if (!empty(session()->getFlashdata('msg'))) : ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg'); ?>
            </div>
            <?php endif; ?>

            <br>

            <!-- Mostrar imagen según tipo de usuario -->
            <?php if (session()->perfil_id == 1) : ?>
            <div>
                <img class="center mb-3" height="100px" width="100px"
                    src="<?php echo base_url('assets/img/admin.png'); ?>">
            </div>
            <?php elseif (session()->perfil_id == 2) : ?>
            <div>
                <img class="center mb-3" height="100px" width="100px"
                    src="<?php echo base_url('assets/img/cliente.png'); ?>">
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center">

                        <!-- mensaje de error -->
                        <?php if (session()->getFlashdata('msg')) :?>
                        <div class="alert alert-warning">
                            <?= session()-> getFlashdata('msg') ?>
                        </div>
                        <?php endif;?>
                        <!-- para mostrar el msj de registro exitoso -->
                        <?php if(session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                        <?php endif; ?>

                        <!-- formulario login -->
                        <div class="card-body">
                            <i class="fa fa-user-circle fa-3x mb-3" aria-hidden="true"></i>
                            <h4 class="card-title text-center">Iniciar Sesión</h4>
                        </div>
                    </div>
                    <form class="mx-3" method="post" action="<?php echo base_url('/enviarlogin') ?>">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder="Ingresa tu correo">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input name="pass" type="password" class="form-control" id="password"
                                placeholder="Ingresa tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-3">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
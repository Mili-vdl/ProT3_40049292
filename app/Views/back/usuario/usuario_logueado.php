<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()-> getFlashdata('msg')?>
            </div>
            <?php endif;?>
            <br>
            <?php if(session()->perfil_id == 1): ?>
        </div>
        <div>
            <img class="center mb-3" height="100px" width="100px" src="<?php echo base_url('assets/img/admin.png');?>">
        </div>
        <?php elseif(session()->perfil_id == 2):?>
        <div>
            <img class="center mb-3" height="100px" width="100px"
                src="<?php echo base_url('assets/img/cliente.png');?>">
        </div>
        <?php endif;?>
    </div>
</div>
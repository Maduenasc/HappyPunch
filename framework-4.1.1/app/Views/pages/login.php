<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-warning from-wrapper">
      <div class="container">
        <h3>Login</h3>
        <hr>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="" action="<?php echo base_url('user/login');?>" method="post">
          <div class="form-group">
           <label for="correo">Correo electronico</label>
           <input type="text" class="form-control" name="correo" id="correo" value="<?= set_value('correo') ?>">
          </div>
          <div class="form-group">
           <label for="contraseña">contraseña</label>
           <input type="password" class="form-control" name="contraseña" id="contraseña" value="">
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors();  ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-dark">Acceder</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a style="color:black" href="<?php echo base_url('user/register'); ?>">¿No tienes cuenta aún?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
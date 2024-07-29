<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-warning from-wrapper">
      <div class="container">
        <h3>Registro</h3>
        <hr>
        <form class="" action="<?php echo base_url('user/register');?>" method="post">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
               <label for="user">Nombre</label>
               <input type="text" class="form-control" name="user" id="user" value="<?= set_value('user') ?>">
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-group">
               <label for="email">Email</label>
               <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="password">Contraseña</label>
               <input type="password" class="form-control" name="password" id="password" value="">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="password_confirm">Confirmar contraseña</label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          </div>

          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-dark">Registrarse</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a style="color:black" href="<?php echo base_url('user/login');?>">Ya dispongo de una cuenta</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
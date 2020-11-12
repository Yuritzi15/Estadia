<div class="login-box">
  <div class="login-logo">
    <b>Concretos</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Introduzca la información necesaria para acceder</p>

      <form method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="txt_usu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="txt_pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </div>
          <!-- /.col -->
        </div>

        <?php
          $obj_login = new ControladorUsuario();
          $obj_login -> ctrlLoginUsuario();
        ?>

      </form>
      <p class="mb-1">
        <a href="forgot-password.html">Olvide mi usuario</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Olvide mi contraseña</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
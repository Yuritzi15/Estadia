<body class="hold-transition login-page">
  <div class="login-box">
  <div class="login-logo">
    
    <img  style="border-radius: 20px;"  class="register-logo"  height="85%" width = "85%" src="Img/Logo.jpg">

    


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
      <p class="login-box-msg"> Para crear un usuario ponganse en contacto con el Administrador</p>
      </form>
     
      
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</body>

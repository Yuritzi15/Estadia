  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Personal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
         <div class="card-header">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                  Editar empledo
          </button>
        </div>
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Contacto</th>
                    <th>Puesto</th>
                    <th>Fecha de creación</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $producto = CtrlPersonal::Mostrar();
                        foreach ($producto as $key => $value) {
                           echo '
                              <tr>
                    <td>'.$value["Id"].'</td>
                    <td>'.$value["Nombre"].'</td>
                    <td>'.$value["ApePa"].'</td>
                    <td>'.$value["ApeMa"].'</td>
                    <td>'.$value["Contacto"].'</td>
                    <td>'.$value["Puesto"].'</td>
                    <td>'.$value["FechaCreacion"].'</td>
                  </tr>
                           ';
                         } 
                     ?>
                  </tbody>
              
                </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role ="form" method="POST">

      <!-- Modal Header -->
      <div class="modal-header" style = "background: #ffc107">
        <h4 class="modal-title">Editar empleado</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Seleccionar registro a editar:
         <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-tools"></i></span>
            </div>
            <input type="text" name="txt_id" class="form-control" placeholder="Número de registro">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Confirmar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
  <?php

   ?>
      </form>
    </div>
  </div>
</div>


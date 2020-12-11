  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar Personal</h1>
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
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                  Agregar personal
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
                    <th>Foto</th>
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
                    <td>'.$value["Foto"].'</td>
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
   <!--Modal agregar -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form role ="form" method="POST">
      <!-- Modal Header -->
      <div class="modal-header" style = "background: #17a2b8">
        <h4 class="modal-title">Agregar personal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ">
        <div class="box-body">

          <!--Grupo 1-->
          <!--Nombre de la pieza-->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></i></span>
            </div>
            <input type="text" name="txt_nombre" class="form-control" placeholder="Nombre del empleado">
          <!--Nombre de la pieza-->

          <!--Cantidad de piezas-->
             <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-user"></i></span>
            </div>
            <input type="text" name="txt_apepa" class="form-control" placeholder="Apellido Paterno">
          <!--Cantidad de piezas-->
          </div>
          <!--Grupo 1-->

          <!--Grupo 2-->
          <!--Precio de venta-->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-user"></i></i></span>
            </div>
            <input type="text" name="txt_apema" class="form-control" placeholder="Apellido Materno">
          <!--Precio de venta-->

          <!--Precio de compra-->
             <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-phone-square-alt"></i></i></span>
            </div>
            <input type="text" name="txt_contacto" class="form-control" placeholder="Contacto">
          <!--Precio de comprea-->
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
            </div>
              <select class="form-control input-lg" name="cmb_Puesto">
                 <?php
                      $cmb = CtrlPersonal::Cmb_puesto();
                        foreach ($cmb as $key => $value){
                          echo '<option value = "'.$value["Id"].'"> '.$value["Puesto"].'</option>';
                        }
                 ?>
            </select>
          <!--Nombre de la pieza-->
          </div>
          
           <!--Cantidad de piezas-->
              <div class="input-group mb-3">
             <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-image"></i></span>
            </div>
             <select class="form-control input-lg"  name="cmb_imagen">
        <option value="" disabled selected>Elegir foto</option>
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Coconut">Coconut</option>
        <option value="Blueberry">Blueberry</option>
        <option value="Strawberry">Strawberry</option>
    </select>
              </div>
          <!--Cantidad de piezas-->
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar empleado</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar/Cancelar</button>
      </div>
      <?php
        $obj_guardar = new CtrlPersonal();
        $obj_guardar -> Guardar(); 
       ?>
      </form>
    </div>
  </div>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Eliminar proveedores</h1>
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
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                  Eliminar proveedor
                </button>
        </div>
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Proveedor</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
         <?php
                        $producto = CtrlGuardarInv::Cmb_Pr();
                        foreach ($producto as $key => $value) {
                           echo '
                              <tr>
                    <td>'.$value["Id"].'</td>
                    <td>'.$value["Proveedor"].'</td>
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
  <!--------------------------------------------------------------------------------------->
  
  <!--Modal agregar -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form role ="form" method="POST">
      <!-- Modal Header -->
      <div class="modal-header" style = "background: #dc3545">
        <h4 class="modal-title">Eliminar proveedor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ">
        <div class="box-body">

          <!--Grupo 1-->
          <!--Nombre de la pieza-->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-tools"></i></span>
            </div>
            <input type="text" name="txt_id" class="form-control" placeholder="Número de registro">
          <!--Nombre de la pieza-->
          <!--Cantidad de piezas-->
          </div>
          <!--Cantidad de piezas-->
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar/Cancelar</button>
      </div>
      <?php
        $obj_guardar = new CtrlGuardarInv();
        $obj_guardar -> EliminarPr(); 
       ?>
      </form>
    </div>
  </div>
</div>
<!-------------------------------------------------------------------------------------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Eliminar del inventario</h1>
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
                  Eliminar Registro
                </button>
        </div>
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Categoria</th>
                    <th>Proveedor</th>
                    <th>Fecha de creación</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                        $producto = CtrlGuardarInv::Mostrar();
                        foreach ($producto as $key => $value) {
                          $Id = $value["Id"];
                           echo '
                              <tr>
                    <td>'.$value["Id"].'</td>
                    <td>'.$value["NombreP"].'</td>
                    <td>'.$value["Cantidad"].'</td>
                    <td>'.$value["PrecioC"].'</td>
                    <td>'.$value["PrecioV"].'</td>
                    <td>'.$value["TipoPieza"].'</td>
                    <td>'.$value["Proveedor"].'</td>
                    <td>'.$value["FechaCrea"].'</td>
                  </tr>';
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

  <!-- -------------------------------------------------------------------------------------------------- -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content modal-sm">
      <form role ="form" method="POST">

      <!-- Modal Header -->
      <div class="modal-header" style = "background: #dc3545">
        <h4 class="modal-title">Confirmación</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-archive"></i></span>
            </div>
            <input type="text" name="txt_id" class="form-control" placeholder="Número de registro">
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Confirmar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar/cerrar</button>
      </div>
       <?php
        $obj_guardar = new CtrlGuardarInv();
        $obj_guardar -> Eliminar(); 
       ?>
      </form>

    </div>
  </div>
</div>

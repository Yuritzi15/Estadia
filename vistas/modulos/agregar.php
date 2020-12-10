  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar al inventario</h1>
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
                  Agregar piezas
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
                    <th>Imagen</th>
                    <th>Fecha de creación</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
         <?php
                        $producto = CtrlGuardarInv::Mostrar();
                        foreach ($producto as $key => $value) {
                           echo '
                              <tr>
                    <td>'.$value["Id"].'</td>
                    <td>'.$value["NombreP"].'</td>
                    <td>'.$value["Cantidad"].'</td>
                    <td>'.$value["PrecioC"].'</td>
                    <td>'.$value["PrecioV"].'</td>
                    <td>'.$value["Cate_id"].'</td>
                    <td>'.$value["Media_id"].'</td>
                    <td>'.$value["FechaCrea"].'</td>
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
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form role ="form" method="POST">
      <!-- Modal Header -->
      <div class="modal-header" style = "background: #17a2b8">
        <h4 class="modal-title">Agregar piezas</h4>
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
            <input type="text" name="txt_nombre" class="form-control" placeholder="Nombre de la pieza">
          <!--Nombre de la pieza-->

          <!--Cantidad de piezas-->
             <div class="input-group-prepend">
              <span class="input-group-text">#</i></span>
            </div>
            <input type="text" name="txt_cantidadP" class="form-control" placeholder="Cantidad de piezas">
          <!--Cantidad de piezas-->
          </div>
          <!--Grupo 1-->

          <!--Grupo 2-->
          <!--Precio de venta-->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-balance-scale-left"></i></span>
            </div>
            <input type="text" name="txt_precioC" class="form-control" placeholder="Precio compra">
          <!--Precio de venta-->

          <!--Precio de compra-->
             <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-balance-scale-right"></i></span>
            </div>
            <input type="text" name="txt_precioV" class="form-control" placeholder="Precio venta">
          <!--Precio de comprea-->
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-book"></i></span>
            </div>
              <select class="form-control input-lg" name="cmb_cate">
                <option value="" disabled selected>Choose option</option>
                <option value="Apple">Apple</option>
                <option value="Banana">Banana</option>
                <option value="Coconut">Coconut</option>
                <option value="Blueberry">Blueberry</option>
                <option value="Strawberry">Strawberry</option>
            </select>
          <!--Nombre de la pieza-->
          </div>
          
           <!--Cantidad de piezas-->
              <div class="input-group mb-3">
             <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-image"></i></span>
            </div>
             <select class="form-control input-lg"  name="cmb_imagen">
        <option value="" disabled selected>Choose option</option>
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
        <button type="submit" class="btn btn-success">Guardar piezas</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar/Cancelar</button>
      </div>
      <?php
        $obj_guardar = new CtrlGuardarInv();
        $obj_guardar -> Guardar(); 
       ?>
      </form>
    </div>
  </div>
</div>
<!-------------------------------------------------------------------------------------------->
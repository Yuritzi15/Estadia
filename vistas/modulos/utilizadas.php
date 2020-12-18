  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro Piezas</h1>
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
                  Registrar piezas usadas
                </button>
        </div>
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Empleado</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>1</td>
                  <td>Focos</td>
                  <td>Yuri</td>
                  <td>1</td>
                  <td>Se uso en camion 110</td>
                  <td>2020-12-15 23:07:59</td>
                  

         
                    </tr>
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
        <h4 class="modal-title">Agregar Registro piezas</h4>
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
         
          <!-- Combobox empleado -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-book"></i></span>
            </div>
              <select class="form-control input-lg" name="Cmb_cate">
                <option value =""> Selecciona un empleado</option>
                
                 <?php
                      $cmb = CtrlGuardarInv::Cmb_Cate();
                        foreach ($cmb as $key => $value){
                          echo '<option value = "'.$value["Id"].'"> '.$value["TipoPieza"].'</option>';
                        }
                 ?>
              </select>
          </div>
          <!--Combobox empleado-->
           <!-- Combobox producto -->
           <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-book"></i></span>
            </div>
              <select class="form-control input-lg" name="Cmb_cate">
                <option value =""> Selecciona un producto</option>
                
                 <?php
                      $cmb = CtrlGuardarInv::Cmb_Cate();
                        foreach ($cmb as $key => $value){
                          echo '<option value = "'.$value["Id"].'"> '.$value["TipoPieza"].'</option>';
                        }
                 ?>
              </select>
          </div>
          <!--Combobox producto-->



          <!--Descripcion-->
          <div class="input-group-prepend">
            </div>
            <input type="text" name="txt_precioV" class="form-control" placeholder="Descripción">
          
          <!--descripcion-->
          
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
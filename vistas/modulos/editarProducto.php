<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar producto</h1>
          </div>
          <?php
            $producto = CtrlGuardarInv::EditarP();
            foreach ($producto as $key => $value) {
            echo $value["NombreP"];
            } 
           ?>
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
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
             <div class="modal-content">
      <form role ="form" method="POST">
      <!-- Modal Header -->
      <div class="modal-header" style = "background: #ffc107">
        <h4 class="modal-title">Editar personal</h4>
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
              <select class="form-control input-lg" name="Cmb_cate">
                 <?php
                      $cmb = CtrlGuardarInv::Cmb_Cate();
                        foreach ($cmb as $key => $value){
                          echo '<option value = "'.$value["Id"].'"> '.$value["TipoPieza"].'</option>';
                        }
                 ?>
              </select>
          <!--Nombre de la pieza-->
          </div>
          
          
          <!--Cantidad de piezas-->
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Guardar piezas</button>
      </div>
      <?php
        $obj_guardar = new CtrlGuardarInv();
        $obj_guardar -> Guardar(); 
       ?>
      </form>
    </div>
           </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

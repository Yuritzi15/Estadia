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
                    <td>
                      <div class="btn-btn-group">
                          <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fas fa-edit"></i></button>
                      </div>
                    </td>
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
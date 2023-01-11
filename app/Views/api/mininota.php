<?php
  $session = session();
  $alert = $session->get('alert');
?>
      
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

        <div class="col-sm-12">
          <?php if(isset($alert)):?>
            <?php if($alert == 'success'): ?>
              <div class="row">
                <div class="col-lg-12">
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i></h5>
                      <?= $resultado;?>
                  </div>
                </div>
              </div>
              

            <?php elseif($alert == 'rejectedkey'): ?>
              <div class="row">
                <div class="col-lg-12">
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i></h5>
                    <span><?= $resultado;?></span>
                  </div>
                </div>
              </div>
            

            <?php elseif($alert == 'rejected'): ?>
              <div class="row">
                <div class="col-lg-12">
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i></h5>
                      <?= $resultado;?>
                      <?= $motivo;?>
                  </div>
                </div>
              </div>
            <?php endif; ?>

          <?php endif; ?>
        </div>

          <div class="col-sm-6">
            <h1 class="m-0">Mini Nota</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Mini Nota</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" onLoad="loading()">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Dados da Mini Nota</h3>

                        <?php if(!empty($nped)):?>
                          <?= $nped; ?>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/Mininota/inserir" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Chave do cliente</label>
                                        <input type="text" class="form-control" name="chavecliente" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Número do pedido</label>
                                        <input type="text" class="form-control" name="numped">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Mini Nota</label>
                                        <input type="text" class="form-control" name="mininota">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
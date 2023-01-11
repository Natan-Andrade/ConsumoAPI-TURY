  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trocar senha</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Trocar Senha</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <?php
        $session = session();
        $alert = $session->get('alert');
      ?>

      <?php if(isset($alert)): ?>
        <?php if($alert == 'success_trocar_senha'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i></h5>
                Senha alterada com sucesso!
              </div>
            </div>
          </div>
        <?php elseif($alert == 'error_trocar_senha'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i></h5>
                Erro ao alterar senha!
              </div>
            </div>
          </div>
          
        <?php endif; ?>
      <?php endif; ?>

        <div class="row">
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Nova Senha</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/login/store" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Senha atual</label>
                                        <input type="text" class="form-control" name="senha_atual">
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Nova senha</label>
                                        <input type="text" class="form-control" name="nova_senha">
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                      <label for="">Confrimar no senha</label>
                                      <input type="text" class="form-control" name="confirmar_nova_senha">
                                    </div>
                                </div>
                          </div>

                          <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
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
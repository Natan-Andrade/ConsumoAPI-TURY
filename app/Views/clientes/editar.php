  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
              <li class="breadcrumb-item active">Editar cliente</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dados do cliente</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/clientes/store" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="<?= $clientes['nome'] ?>">
                                        <input type="hidden" class="form-control" name="id_cliente" value="<?= $clientes['id_cliente'] ?>">

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Data de nascimente</label>
                                        <input type="date" class="form-control" name="data_de_nascimento" value="<?= $clientes['data_de_nascimento'] ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">telefone</label>
                                        <input type="number" class="form-control" name="telefone" value="<?= $clientes['telefone'] ?>">
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="<?= $clientes['endereco'] ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Limite de crédito</label>
                                        <input type="number" min=0 max=100 class="form-control" name="limite_de_credito" value="<?= $clientes['limite_de_credito'] ?>">
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
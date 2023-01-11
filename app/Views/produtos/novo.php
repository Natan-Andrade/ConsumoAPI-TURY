  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cadastrar Produto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
              <li class="breadcrumb-item active">Cadastrar novo produto</li>
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
                        <h3 class="card-title">Novo produto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/produtos/store" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" name="nome">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Estoque</label>
                                        <input type="number" min=0 class="form-control" name="quantidade">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Quantidade Mínima</label>
                                        <input type="number" min=0 class="form-control" name="quantidade_minima">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Data de validade</label>
                                        <input type="date" class="form-control" name="validade">
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Valor de compra</label>
                                        <input type="number" class="form-control" name="valor_de_compra" placeholder="R$">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Valor de venda</label>
                                        <input type="number" class="form-control" name="valor_de_venda" placeholder="R$">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Margem de lucro</label>
                                        <input type="number" class="form-control" name="margem_de_lucro" placeholder="R$">
                                    </div>
                                </div>

                                

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Descrição do produto</label>
                                        <textarea class="form-control" name="descricao"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
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
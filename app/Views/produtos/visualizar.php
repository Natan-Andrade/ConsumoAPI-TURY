  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Informações do Produto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
              <li class="breadcrumb-item active">Dados do Produto</li>
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
            <div class="card">
              <div class="card-body">
                <h3 class=""><?= $produtos['nome'] ?></h3>
          
                <h4>Descrição</h4>
                <p class="card-text"><?= $produtos['descricao'] ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Estoque</h4>
                        <span class="badge bg-info"><?= $produtos['quantidade'] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Quantidade Mínima</h4>
                        <span class="badge bg-info"><?= $produtos['quantidade_minima'] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Validade</h4>
                        <span class="badge bg-danger"><?= $produtos['validade'] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Valor de compra</h4>
                        <span class="badge bg-warning">R$<?= $produtos['valor_de_compra'] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Valor de venda</h4>
                        <span class="badge bg-warning">R$<?= $produtos['valor_de_venda'] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Margem de lucro</h4>
                        <span class="badge bg-warning">R$<?= $produtos['margem_de_lucro'] ?></span>
                    </div>
                </div>
            </div>
        </div>   

    </div>
    <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
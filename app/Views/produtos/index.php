<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="/produtos/deletar" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Confirme sua ação</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Deseja mesmo excluir o Produto?</p>
          <input type="hidden" id="id_produto" name="id_produto" value="">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Sim</button>
        </div>
      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
  
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produtos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Produtos</li>
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

      <?php if(isset($alert)):?>
        
        <?php if($alert == 'success_create'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i></h5>
                Produto inserido com sucesso!
              </div>
            </div>
          </div>

        <?php elseif($alert == 'success_delete'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i></h5>
                  Produto Deletado!
              </div>
            </div>
          </div>

          <?php elseif($alert == 'success_edit'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i></h5>
                Produto editado com sucesso!
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php endif; ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <a href="/produtos/novo" class="btn btn-info">
                        Novo Produto
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                          <th style="width: 10px">#</th>
                          <th>Nome</th>
                          <th>Quantidade</th>
                          <th>Quantidade Mínima</th>
                          <th>Preço</th>
                          <th>Margem de Lucro</th>
                          <th>Ações</th>
                          </tr>
                      </thead>

                      <tbody>
                      <?php if(!empty($produtos)):?>
                        <?php foreach($produtos as $produto):?>
                          <tr>
                              <td><?= $produto['id_produto'] ?></td>
                              <td><?= $produto['nome'] ?></td>
                              <td><?= $produto['quantidade'] ?></td>
                              <td><?= $produto['quantidade_minima'] ?></td>
                              <td><span class="badge bg-danger">R$ <?= $produto['valor_de_venda'] ?></span></td>
                              <td><span class="badge bg-danger">R$ <?= $produto['margem_de_lucro'] ?></span></td>

                              <td> 
                                <a href="/produtos/visualizar/<?= $produto['id_produto'] ?>" class="btn btn-info">Visualizar Dados</a>
                                <a href="/produtos/editar/<?= $produto['id_produto'] ?>" class="btn btn-warning">Editar</a> 
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default" onclick="document.getElementById('id_produto').value='<?= $produto['id_produto'] ?>'">Deletar</button> 
                              </td>
                          </tr>
                        <?php endforeach?>  
                      <?php else: ?>
                        <tr>
                          <td colspan="7">Nenhum produto cadastrado</td>
                        </tr>
                      <?php endif;?>
                      </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
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
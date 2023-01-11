<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="/clientes/deletar" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Confirme sua ação</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Deseja mesmo excluir o cliente?</p>
          <input type="hidden" id="id_cliente" name="id_cliente" value="">
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
            <h1 class="m-0">Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
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
                Cliente inserido com sucesso!
              </div>
            </div>
          </div>

        <?php elseif($alert == 'success_delete'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i></h5>
                  Cliente Deletado!
              </div>
            </div>
          </div>

          <?php elseif($alert == 'success_edit'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i></h5>
                Cliente editado com sucesso!
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php endif; ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <a href="/cadastrarcliente" class="btn btn-info">
                        Novo Cliente
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                          <th style="width: 10px">#</th>
                          <th>Nome</th>
                          <th>Telefone</th>
                          <th>Endereço</th>
                          <th>Data de Nascimento</th>
                          <th>limite de crédito</th>
                          <th>Saldo</th>
                          <th>Ações</th>
                          </tr>
                      </thead>

                      <tbody>
                      <?php if(!empty($clientes)):?>
                        <?php foreach($clientes as $cliente):?>
                          <tr>
                              <td><?= $cliente['id_cliente'] ?></td>
                              <td><?= $cliente['nome'] ?></td>
                              <td><?= $cliente['telefone'] ?></td>
                              <td><?= $cliente['endereco'] ?></td>
                              <td><?= $cliente['data_de_nascimento'] ?></td>
                              <td>
                                  <div class="progress progress-xs">
                                  <div class="progress-bar progress-bar-danger" style="width:<?= $cliente['limite_de_credito'] ?>%"></div>
                                  </div>
                              </td>
                              <td><span class="badge bg-danger">R$ <?= $cliente['limite_de_credito'] ?></span></td>
                              <td> 
                                <a href="/clientes/visualizar/<?= $cliente['id_cliente'] ?>" class="btn btn-info">Visualizar Dados</a>
                                <a href="/clientes/editar/<?= $cliente['id_cliente'] ?>" class="btn btn-warning">Editar</a> 
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default" onclick="document.getElementById('id_cliente').value='<?= $cliente['id_cliente'] ?>'">Deletar</button> 
                              </td>
                          </tr>
                        <?php endforeach?>  
                      <?php else: ?>
                        <tr>
                          <td colspan="7">Nenhum cliente cadastrado</td>
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
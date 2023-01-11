<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="/funcionarios/deletar" method="POST">
        <div class="modal-header">
          <h4 class="modal-title">Confirme sua ação</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Deseja mesmo excluir o funcionário?</p>
          <input type="hidden" id="id_funcionario" name="id_funcionario" value="">
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
            <h1 class="m-0">Funcionários</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Funcionários</li>
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
                Funcionário inserido com sucesso!
              </div>
            </div>
          </div>

        <?php elseif($alert == 'success_delete'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i></h5>
                  Funcionário Deletado!
              </div>
            </div>
          </div>

          <?php elseif($alert == 'success_edit'): ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i></h5>
                Funcionário editado com sucesso!
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php endif; ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <a href="/funcionarios/novo" class="btn btn-info">
                        Novo Funcionário
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                           <th>Nome</th>
                           <th>cargo</th>
                           <th>Dia de pagamento</th>
                           <th>salário</th>
                           <th>Ações</th>
                          </tr>
                      </thead>

                      <tbody>
                      <?php if(!empty($funcionarios)):?>
                        <?php foreach($funcionarios as $funcionario):?>
                          <tr>
                            <td><?= $funcionario['id_funcionario'] ?></td>
                            <td><?= $funcionario['nome'] ?></td>
                            <td><?= $funcionario['cargo'] ?></td>
                            <td><?= $funcionario['dia_de_pagamento'] ?></td>
                            <td><span class="badge bg-danger">R$ <?= $funcionario['salario'] ?></span></td>
                            <td> 
                              <a href="/funcionarios/visualizar/<?= $funcionario['id_funcionario'] ?>" class="btn btn-info">Visualizar Dados</a>
                              <a href="/funcionarios/editar/<?= $funcionario['id_funcionario'] ?>" class="btn btn-warning">Editar</a> 
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default" onclick="document.getElementById('id_funcionario').value='<?= $funcionario['id_funcionario'] ?>'">Deletar</button> 
                            </td>
                          </tr>
                        <?php endforeach?>  
                      <?php else: ?>
                        <tr>
                          <td colspan="12">Nenhum funcionário cadastrado</td>
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
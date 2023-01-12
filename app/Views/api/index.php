<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="/Consumoapi/deletar" method="POST">
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
            <!-- <h1 class="m-0">Consulta saldo</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Consulta saldo</li>
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
                  <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Consulta Saldo</h3>
                    </div>
                  </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Código do produto</th>
                            <th>Código de barras</th>
                            <th>saldo</th>
                            <th>Curva ABC</th>
                          </tr>
                      </thead>

                      <tbody>
                      <?php if(!empty($produtos)):?>
                        <?php $i = 1;?>
                        <?php foreach($produtos as $keyProd => $valueProd):?>
                          <tr>
                          <td><span class="badge bg-info"><?= $i++; ?></span></td>
                          <td><span class="badge bg-dark"><?= $valueProd->codprod ?></span></td>
                            <?php if(!empty($valueProd->codbar)):?>
                            <td><span class="badge bg-warning"><?= $valueProd->codbar ?></span></td>
                            <?php else: ?>
                              <td colspan="1">Nenhum código cadastrado</td>
                            <?php endif;?>
                            <td><span class="badge bg-warning"><?= $valueProd->saldo ?></span></td>
                            <td><span class="badge bg-secondary"><?= $valueProd->curva ?></span></td>
                          </tr>
                        <?php endforeach?>  
                      <?php else: ?>
                        <tr>
                          <td colspan="3">Nenhum pedido cadastrado</td>
                        </tr>
                      <?php endif;?>
                      </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                
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
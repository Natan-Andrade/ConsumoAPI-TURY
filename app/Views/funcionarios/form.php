  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= (isset($funcionarios)) ? "Editar" : "Novo" ?> Funcioário</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/funcionarios">Funcioários</a></li>
              <li class="breadcrumb-item active"><?= (isset($funcionarios)) ? "Editar" : "Novo" ?> Funcioário</li>
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
                        <h3 class="card-title"><?= (isset($funcionarios)) ? "Editar" : "Novo" ?> Funcioário</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/funcionarios/store" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="<?= (isset($funcionarios)) ? $funcionarios['nome'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">RG</label>
                                        <input type="text" class="form-control" name="rg" value="<?= (isset($funcionarios)) ? $funcionarios['rg'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">CPF</label>
                                        <input type="text" class="form-control" name="cpf" value="<?= (isset($funcionarios)) ? $funcionarios['cpf'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="<?= (isset($funcionarios)) ? $funcionarios['endereco'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Data de nascimente</label>
                                        <input type="date" class="form-control" name="data_de_nascimento" value="<?= (isset($funcionarios)) ? $funcionarios['data_de_nascimento'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Telefone</label>
                                        <input type="number" class="form-control" name="telefone" value="<?= (isset($funcionarios)) ? $funcionarios['telefone'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Data de contratação</label>
                                        <input type="date" class="form-control" name="data_de_contratacao" value="<?= (isset($funcionarios)) ? $funcionarios['data_de_contratacao'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" value="<?= (isset($funcionarios)) ? $funcionarios['cargo'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Salário</label>
                                        <input type="number" class="form-control" name="salario" value="<?= (isset($funcionarios)) ? $funcionarios['salario'] : "" ?>">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Dia de pagamento</label>
                                        <input type="number" class="form-control" name="dia_de_pagamento" value="<?= (isset($funcionarios)) ? $funcionarios['dia_de_pagamento'] : "" ?>">
                                    </div>
                                </div>
                            </div>

                            <?php if(isset($funcionarios)): ?>
                                <input type="hidden" name="id_funcionario" value="<?= $funcionarios['id_funcionario'] ?>">
                            <?php endif; ?>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><?= (isset($funcionarios)) ? "Atualizar" : "Cadastrar" ?></button>
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
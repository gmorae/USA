<style type="text/css">
      html,
      body,
      header,
      .view {
            height: 100%;
      }
</style>
<?php echo form_open("auth/create_user"); ?>
<div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;">
      <div class="container mt-5">
            <div class="row">
                  <div class="mx-auto col-md-6 mt-5">
                        <div class="card">
                              <div class="card-body">
                                    <form method="POST">
                                          <h2 class="h1-responsive font-weight text-center mb-5">Para realizar o login, cadastre-se</h2>
                                          <div class="text-center alert-danger" style="font-family:sans-serif" id="infoMessage"><?php echo $message; ?></div>
                                          <div class="md-form">
                                                <i class="fa fa-user prefix grey-text"></i>
                                                <input type="text" id="nome" name="first_name" value="<?= set_value('first_name'); ?>" class="form-control" required>
                                                <label for="nome" class="font-weight-light">Nome Completo</label>
                                          </div>
                                          <div class="md-form">
                                                <i class="fa fa-envelope prefix grey-text"></i>
                                                <input type="email" id="email" name="email" value="<?= set_value('email'); ?>" class="form-control" required>
                                                <label for="email" class="font-weight-light">E-mail</label>
                                          </div>

                                          <div class="md-form">
                                                <i class="fa fa-lock prefix grey-text"></i>
                                                <input type="password" id="senha" name="password" value="<?= set_value(''); ?>" class="form-control" required>
                                                <label for="senha" class="font-weight-light">Senha (A senha deve ter no minímo 8 caracteres)</label>

                                          </div>
                                          <div class="md-form">
                                                <i class="fa fa-lock prefix grey-text"></i>
                                                <input type="password" id="senha" name="password_confirm" value="<?= set_value(''); ?>" class="form-control" required>
                                                <label for="senha" class="font-weight-light">Confirmação da senha</label>
                                          </div>
                                          <div class="text-center py-3 mt-3">
                                                <button class="btn btn-indigo" type="submit">Cadastrar</button>
                                          <hr>
                                          </div>
                                    </form>

                              </div>
                        </div>s
                  </div>
            </div>
      </div>
      <?php echo form_close(); ?>
</div>
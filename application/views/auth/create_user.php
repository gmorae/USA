<style type="text/css">
      html,
      body,
      header,
      .view {
            height: 100%;
      }
</style>
<div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;">
      <div class="container">
      <?php echo form_open("auth/create_user"); ?>
            <div class="row mt-5">
                  <div class="mx-auto col-md-6 mt-4">
                        <div class="card">
                        <div class="card-body">
                              <form method="POST">
                                    <h2 class="h1-responsive font-weight text-center mb-5">Para realizar o login, cadastre-se</h2>
                                    <p class="text-center"><?php echo lang('create_users_subheading'); ?></p>
                                    <div class="text-center alert-danger" style="font-family:sans-serif" id="infoMessage"></div>
                                    <hr>
                                    <div class="md-form">
                                          <i class="fa fa-user prefix grey-text"></i>
                                          <input type="text" id="first_name" name="first_name" value="" class="form-control" required>
                                          <label for="first_name" class="font-weight-light">Nome Completo</label>
                                    </div>
                                    <div class="md-form">
                                          <i class="fas fa-mobile-alt prefix grey-text"></i>
                                          <input type="text" id="phone" name="phone" value="" class="form-control" required>
                                          <label for="phone" class="font-weight-light">Celular</label>
                                    </div>
                                    <div class="md-form">
                                          <i class="fa fa-envelope prefix grey-text"></i>
                                          <input type="email" id="email" name="email" value="" class="form-control" required>
                                          <label for="email" class="font-weight-light">E-mail</label>
                                    </div>

                                    <div class="md-form">
                                          <i class="fa fa-lock prefix grey-text"></i>
                                          <input type="password" id="password" name="password" value="" class="form-control" required>
                                          <label for="password" class="font-weight-light">Senha (A senha deve ter no minímo 8 caracteres)</label>

                                    </div>
                                    <div class="md-form">
                                          <i class="fa fa-lock prefix grey-text"></i>
                                          <input type="password" id="password_confirm" name="password_confirm" value="" class="form-control" required>
                                          <label for="password_confirm" class="font-weight-light">Confirmação da senha</label>
                                    </div>
                                    <div class="text-center mt-3">
                                          <button class="btn btn-indigo" type="submit">Cadastrar</button>
                                    </div>
                              </form>

                        </div>
                  </div>
            </div>
      </div>
      <?php echo form_close(); ?>
</div>
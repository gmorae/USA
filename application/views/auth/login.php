  <style type="text/css">
    html,
    body,
    header,
    .view {
      height: 100%;
    }
  </style>
  <div class="view full-page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg'); background-repeat: no-repeat; background-size: cover;">
    <?php echo form_open("auth/login"); ?>
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <div class="container mt-5">
        <div class="col-md-6 col-xl-5 mx-auto mb-4 mt-5">
          <div class="card">
            <div class="card-body">
              <form name="">
                <h3 class="dark-grey-text text-center">
                  <h1 class="text-center"><?php echo lang('login_heading'); ?></h1>
                  <p class="text-center"><?php echo lang('login_subheading'); ?></p>
                  <div class="text-center alert-danger" id="infoMessage"><?php echo $message; ?></div>
                </h3>
                <hr>
                <div class="md-form">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="email" id="email" name="identity" class="form-control">
                  <label for="email">E-mail</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <input type="password" id="password" name="password" class="form-control">
                  <label for="password">Senha</label>
                </div>
                <div class="text-center">
                  <button class="btn btn-indigo" type="submit">Entrar</button>
                  <hr>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
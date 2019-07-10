<?php $user = $this->ion_auth->user()->row()->first_name; ?>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="<?= base_url('welcome') ?>">USA Saúde</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
     
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <p class="nav-link ml-md-2 white-text my-1" style="font-size: 15px;">Olá,<b> <?= $user ?></b>
        </p>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="<?= base_url('index.php/auth/change_password'); ?>">Editar senha </a>
          <a class="dropdown-item" href="<?= base_url('index.php/usuario/editar'); ?>">Editar dados </a>
          <a class="dropdown-item" href="<?= base_url('index.php/auth/logout'); ?>">Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<form method="POST">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h3 class="text-center">Dados Congregação</h3>
            </div>
            <div class="row col-md-12 mx-auto ">
                <div class="md-form col-md-5 ml-md-5">
                    <select class="browser-default custom-select">
                        <option selected>Função</option>
                        <?= $funcao ?>
                    </select>
                </div>
                <div class="md-form col-md-5 ml-md-5">
                    <select class="browser-default custom-select">
                        <option selected>Administração</option>
                        <?= $adm ?>
                    </select>
                </div>
                <div class="md-form col-md-5 ml-md-5">
                    <select class="browser-default custom-select">
                        <option selected>Setor</option>
                        <?= $setor ?>
                    </select>
                </div>
                <div class="md-form col-md-5 ml-md-5">
                    <select class="browser-default custom-select">
                        <option selected>Comum Congregação</option>
                        <?= $ccb ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-cyan waves-effect">Enviar</button>
        </div>
    </div>
</form>
<script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
</script>
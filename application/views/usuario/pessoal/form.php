<form method="POST">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h3 class="text-center">Dados pessoais</h3>
            </div>
            <div class="row col-md-12 mx-auto ">
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-transgender prefix"></i>
                    <input type="text" id="sexo" name="sexo" value="" class="form-control" placeholder="Sexo">
                </div>
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-mobile prefix"></i>
                    <input type="text" id="celular" name="celular" value="" class="form-control validate" placeholder="Celular">
                </div>
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-phone prefix"></i>
                    <input type="text" id="telefone" name="telefone" value="" class="form-control validate" placeholder="Telefone">
                </div>
            </div>
            <div class="row col-md-12 mx-auto ">
                <div class="md-form col-md-5 ml-md-5">
                    <i class="fas fa-at prefix"></i>
                    <input type="email" id="email" name="email" value="" class="form-control validate" placeholder="E-mail">
                </div>
                <div class="md-form col-md-4 ml-md-5">
                    <i class="far fa-heart prefix"></i>
                    <input type="text" id="estado_civil" name="estado_civil" value="" class="form-control validate" placeholder="Estado civil">
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h3 class="text-center">Documento de registro</h3>
            </div>
            <div class="row col-md-12 mx-auto ">
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-id-card prefix"></i>
                    <input type="text" id="rg" name="rg" value="" class="form-control" placeholder="RG">
                </div>
                <div class="md-form col-md-5 ml-md-5">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" id="nomeC" name="nomeC" value="" class="form-control validate" placeholder="Nome completo">
                </div>
                <div class="md-form col-md-2 ml-md-5">
                    <i class="fas fa-globe prefix"></i>
                    <input type="text" id="orgao" name="orgao" value="" class="form-control validate" placeholder="Orgão Emissor">
                </div>
            </div>
            <div class="row col-md-12 mx-auto">
                <div class="md-form col-md-2 ml-md-5">
                    <i class="fas fa-city prefix"></i>
                    <input type="text" id="uf_rg" name="uf_rg" value="" class="form-control validate" placeholder="UF">
                </div>
                <div class="md-form col-md-4 ml-md-5">
                    <i class="fas fa-calendar prefix"></i>
                    <input type="text" id="nascimento" name="nascimento" value="" class="form-control" placeholder="Data de nascimento">
                </div>
                <div class="md-form col-md-4 ml-md-5">
                    <i class="fas fa-address-card prefix"></i>
                    <input type="text" id="naturalidade" name="naturalidade" value="" class="form-control validate" placeholder="Naturalidade">
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h3 class="text-center">Documento de registro</h3>
            </div>
            <div class="row col-md-12 mx-auto ">
                <div class="md-form col-md-4 ml-md-5">
                    <i class="far fa-envelope prefix"></i>
                    <input type="text" id="cep" name="cep" value="" class="form-control validate" placeholder="C.E.P" onblur="pesquisacep(this.value);">
                </div>
                <div class="md-form col-md-6 ml-md-5">
                    <i class="fas fa-map-marker-alt prefix"></i>
                    <input type="text" id="rua" name="rua" value="" class="form-control validate" placeholder="Endereço residencial">
                </div>

            </div>
            <div class="row col-md-12 mx-auto">
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-map-marker-alt  prefix"></i>
                    <input type="text" id="bairro" name="bairro" value="" class="form-control validate" placeholder="Bairro">
                </div>
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-map-marker-alt prefix"></i>
                    <input type="text" id="cidade" name="cidade" value="" class="form-control validate" placeholder="Cidade">
                </div>
                <div class="md-form col-md-2 ml-md-5">
                    <i class="fas fa-map-marker-alt prefix"></i>
                    <input type="text" id="uf" name="uf" value="" class="form-control validate" placeholder="UF">
                </div>
            </div>
            <div class="row col-md-12 mx-auto">
                <div class="md-form col-md-3 ml-md-5">
                    <i class="fas fa-list-ol prefix"></i>
                    <input type="text" id="numero" name="numero" value="" class="form-control validate" placeholder="Número">
                </div>
                <div class="md-form col-md-3 ml-md-5">
                    <i class="far fa-building prefix"></i>
                    <input type="text" id="complemento" name="complemento" value="" class="form-control validate" placeholder="Complemento">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-cyan waves-effect">Enviar</button>
        </div>
    </div>
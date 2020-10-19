
<body>
<ul class="bg-star">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<!-- start login -->
<div class="login-form">
    <div class="login-background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-form-center">
                    <div class="login-data">
                        <div class="login-logo text-center">
                            <img src="/webroot/images/icone-contato.png" alt="logo" class="img-responsive">
                        </div>
                        <div class="login-field">
                            <form id="contato" action="/adicionar-contato/<?=$pessoa->id?>" method="post" style="">
                                <div class="login-title text-center">
                                    <h5><b>Adicionar Contato</b></h5>
                                </div>
                                <div class="col-md-12 d-flex adicionar-contato">
                                    <div class="col-md-6 form-group wow fadeInLeft animated" data-wow-delay="0.5s">
                                        <label class="fa-icon"><i class="fa fa-user" aria-hidden="true"></i></label>
                                        <input readonly type="text" required class="input-field" value="<?=$pessoa->nome?>" name="nome" placeholder="Insira seu nome aqui">
                                    </div>
                                    <div class="col-md-6 form-group wow fadeInLeft animated" data-wow-delay="0.5s">
                                        <label class="fa-icon"><i class="fa fa-user" aria-hidden="true"></i></label>
                                        <input readonly type="text" required class="input-field" value="<?=$pessoa->sobrenome?>" name="sobrenome" placeholder="Insira seu sobrenome aqui">
                                    </div>

                                </div>
                                <div class="tamanho-select form-group wow fadeInLeft animated" data-wow-delay="0.5s">
                                    <label class="fa-icon"><i class="fa fa-address-book-o" aria-hidden="true"></i></label>

                                    <select id="tipos" name="tipo" class="input-field ">

                                        <option value="volvo">-- Selecione o tipo do contato -- </option>
                                        <?php foreach ($tipos as $tipo){?>
                                            <option value="<?= $tipo->id?>"><?= $tipo->nome?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="tamanho-select form-group wow fadeInLeft animated" data-wow-delay="0.5s">
                                    <label class="fa-icon"><i class="fa fa-info" aria-hidden="true"></i></label>
                                    <input type="text" required class="mascara input-field" id="contato-input"  name="contato" placeholder="Contato">
                                </div>
                                <span id="msgemail"></span>

                                <div class="form-group login-button text-center">
                                    <button type="button" id="salvar-contato" class="swing wow animated signup text-center" data-wow-delay="0.5s">Salvar</button>
                                    <button type="button" class="swing wow signup text-center" style="color: rgba(100, 167, 73, 1);" onclick="javascript:location.href='/'" data-wow-delay="0.5s">Voltar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of login -->



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
                                <div class="login-title text-center">
                                    <h5><b>Visualizar Contato</b></h5>
                                </div>
                                <?= $this->Flash->render('return'); ?>

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
                            <div class="form-group login-button">
                                <button type="submit" class="swing wow animated botao-adicionar" onclick="javascript:location.href='/adicionar-contato/<?=$pessoa->id?>'" data-wow-delay="0.5s">Adicionar Contato</button>
                            </div>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Contato</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($tipos as $tipo) {?>
                                        <tr>
                                            <td><?=$tipo->tipo_contato->nome?></td>
                                            <td><?=$tipo->contato?></td>
                                            <td class="actions text-right">
                                                <a title="Editar" href="/editar-contato/<?=$tipo->id?>" class="fa fa-pencil btn btn-warning btn-xs"></a>
                                                <a title="Deletar" href="/deletar-contato/<?=$tipo->id?>" class="fa fa-trash btn btn-danger btn-xs"></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                                <div class="form-group login-button text-center">
                                    <button type="button" class="swing wow signup text-center" style="color: rgba(100, 167, 73, 1);" onclick="javascript:location.href='/'" data-wow-delay="0.5s">Voltar</button>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of login -->

<!-- Javascript -->

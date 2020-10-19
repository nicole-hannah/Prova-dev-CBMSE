
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
                                    <h5><b>Lista de contatos</b></h5>
                                </div>
                            <?= $this->Flash->render('return'); ?>

                            <div class="form-group login-button">
                                <button type="submit" class="swing wow animated botao-adicionar" onclick="javascript:location.href='/adicionar-pessoa'" data-wow-delay="0.5s">Adicionar Pessoa</button>
                            </div>

                            <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($pessoas as $pessoa) {?>
                                    <tr>
                                        <td><?=$pessoa->nome?> <?=$pessoa->sobrenome?></td>
                                        <td class="actions text-right">
                                            <a title="Adicionar Contato" href="/adicionar-contato/<?=$pessoa->id?>" class=" fa fa-plus btn btn-success btn-xs"></a>
                                            <a title="Visualizar" href="/visualizar-contato/<?=$pessoa->id?>" class=" fa fa-eye btn btn-info btn-xs"></a>
                                            <a title="Editar" href="/editar-pessoa/<?=$pessoa->id?>" class="fa fa-pencil btn btn-warning btn-xs"></a>
                                            <a title="Deletar" href="/deletar/<?=$pessoa->id?>" class="fa fa-trash btn btn-danger btn-xs"></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php if($pessoas->count() == 0){?>
                                        <td style="font-style: italic">AGENDA VAZIA</td>
                                        <td></td>
                                    <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of login -->

<!-- Javascript -->

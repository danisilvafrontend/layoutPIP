<?php
// header
include 'header.php';
?>
<main>    
    <section class="conteudo-login">
        <div class="container">
            <div class="row cadastro align-items-center">

                <div class="col-md-6">                    
                    <form class="formulario-login" method="post">
                        <h3>Fazer Login</h3>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="nome@exemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Senha</label>
                            <input type="password" id="inputPassword" class="form-control">                            
                        </div>
                        <div class="row justify-content-md-between align-items-center botoes-steps">
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#recuperacaoSenha">Esqueci minha senha</button>

                                <!-- Modal -->
                                <div class="modal fade" id="recuperacaoSenha" tabindex="-1" aria-labelledby="modalRecuperacao" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalRecuperacao">Recuperar de Senha</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="formulario-recuperacao" method="post">
                                                <div class="mb-3">
                                                    <label for="inputEmail" class="form-label">Digite seu e-mail</label>
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="nome@exemplo.com">
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                <button type="button" class="btn btn-primary">Enviar link de recuperação de senha</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" id="enviar">Login</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="text-center">
                        <h3>Ainda não tem conta?</h3>
                        <p>Crie sua conta em nosso site para conseguir votar</p>

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#cadastroUsuario">Criar minha conta</button>
                    </div>                    
                    <!-- Modal -->
                    <div class="modal fade modal-lg" id="cadastroUsuario" tabindex="-1" aria-labelledby="modalCadastro" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalCadastro">Cadastro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="formulario-cadastro" method="post">
                                        <div class="mb-3">
                                            <label for="inputNomeUsuario" class="form-label">Nome Completo</label>
                                            <input type="text" class="form-control" id="inputNomeUsuario">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputEmail" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="nome@exemplo.com">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="inputPassword" class="form-label">Senha</label>
                                                    <input type="password" id="inputPassword" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="inputPasswordConfirmed" class="form-label">Confirme sua senha</label>
                                                    <input type="password" id="inputPasswordConfirmed" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Concordância com os Termo de Uso, Política de Privacidade de Dados e Termo de Uso de Imagem" id="politicaChecked" checked>
                                            <label class="form-check-label" for="politicaChecked">
                                                Concordância com os <a href="modelo-pagina-institucional.php">Termo de Uso, Política de Privacidade de Dados e Termo de Uso de Imagem</a>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Aceite Newsletters" id="newsletter">
                                            <label class="form-check-label" for="newsletter">
                                                Eu aceito receber as newsletters e informações referentes ao prêmio e parceiros/patrocinadores.
                                            </label>
                                        </div>
                                        <div class="row justify-content-md-between align-items-center botoes-steps">
                                            <div class="col-auto">
                                                <button class="btn btn-outline-secondary" id="prev">Cancelar</button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-primary" id="enviar">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

</main>
<?php
// footer
include 'footer.php';
?>
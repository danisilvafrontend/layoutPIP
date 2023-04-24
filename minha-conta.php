<?php
// header
include 'header.php';
?>
<main>
    
    <section class="topo-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Minha Conta</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="conteudo-pagina">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="dadosUsuario-tab" data-bs-toggle="tab" data-bs-target="#dadosUsuario-tab-pane" type="button" role="tab" aria-controls="dadosUsuario-tab-pane" aria-selected="true">Dados Pessoais</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#dadosResponsavel-tab-pane" type="button" role="tab" aria-controls="dadosResponsavel-tab-pane" aria-selected="false">Dados Pessoais</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#projetos-tab-pane" type="button" role="tab" aria-controls="projetos-tab-pane" aria-selected="false">Projetos</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dadosUsuario-tab-pane" role="tabpanel" aria-labelledby="dadosUsuario-tab" tabindex="0">
                            <h4>Meus dados pessoais</h4>
                            <form class="formulario-cadastro" method="post">
                                <div class="mb-3">
                                    <label for="inputNomeUsuario" class="form-label">Nome Completo</label>
                                    <input type="text" value="Nome completo" class="form-control" id="inputNomeUsuario">
                                </div>
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="inputEmail" value="Seu e-mail">
                                </div>
                                <div class="row justify-content-md-between align-items-center botoes-steps">
                                    <div class="col-auto">
                                        <button class="btn btn-outline-secondary" id="prev">Cancelar</button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-primary" id="enviar">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="dadosResponsavel-tab-pane" role="tabpanel" aria-labelledby="dadosResponsavel-tab" tabindex="0">
                            <h4>Meus dados pessoais</h4>
                            <form>
                                <div class="row align-items-end">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputNome" class="form-label">Nome Completo</label>
                                            <input type="text" class="form-control" id="inputNome">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputCpf" class="form-label">CPF <span>Por favor, preencha o seu CPF com todos os números</span></label>
                                            <input type="text" class="form-control" id="inputCpf">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputEmail" class="form-label">Email <span>Por favor, digite seu melhor e-mail</span></label>
                                            <input type="email" class="form-control" id="inputEmail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputDataNascimento" class="form-label">Data de Nascimento <span>Por favor, preencha a sua data de nascimento</span></label>
                                            <input type="date" class="form-control" id="inputDataNascimento">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputgenero" class="form-label">Gênero <span>Por favor, selecione um gênero</span></label>
                                            <select class="form-select" aria-label="Genero">
                                                <option selected disabled>Escolha uma opção</option>
                                                <option selected value="feminino">Feminino</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="nao_Binario">Não Binário</option>
                                                <option value="nao_Responder">Prefiro não responder</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputUf" class="form-label">Onde você reside?</label>
                                            <select class="form-select" aria-label="UF">
                                                <option disabled>Escolha uma opção</option>
                                                <option selected value="SP">São Paulo</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PR">Parana</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputCidade" class="form-label">Selecione uma Cidade</label>
                                            <select class="form-select" aria-label="Cidade">
                                                <option disabled>Escolha uma opção</option>
                                                <option selected value="SP">São Paulo</option>
                                                <option value="RJ">Vila São José</option>
                                                <option value="MG">Barueri</option>
                                                <option value="PR">Lapa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="formacao" class="form-label">Formação</label>
                                            <select class="form-select" aria-label="formacao">
                                                <option disabled>Escolha uma opção</option>
                                                <option value="ensino_Fundamental">Ensino Fundamental</option>
                                                <option value="ensino_Medio">Ensino Médio</option>
                                                <option selected value="ensino_Superior">Ensino Superior</option>
                                                <option value="pos_graduacao">Pós-graduação</option>
                                                <option value="doutorado">Doutorado</option>
                                                <option value="pos_doutorado">Pós-doutorado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputCargo" class="form-label">Seu cargo</label>
                                            <input type="text" class="form-control" id="inputCargo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputCelular" class="form-label">Telefone Celular</label>
                                            <input type="text" class="form-control" id="inputCelular">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="inputTelefone" class="form-label">Telefone Residencial ou Comercial</label>
                                            <input type="text" class="form-control" id="inputCelular">
                                        </div>
                                    </div>                                 
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputEmpreendimento" class="form-label">Nome do Negócio/Empreendimento</label>
                                            <input type="text" class="form-control" id="inputEmpreendimento">
                                        </div>
                                    </div> 
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="img-thumbnails">
                                        <img src="assets/images/img-news.png" class="img-thumbnail rounded float-start" alt="...">
                                        <div class="botao-edicao">
                                            <a href="#" class="btn btn-light" title="Trocar imagem"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="#" class="btn btn-light" title="Apagar imagem"><i class="bi bi-x-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="projetos-tab-pane" role="tabpanel" aria-labelledby="projetos-tab" tabindex="0">
                            <h4>Meus Projetos</h4>
                            <div class="row">
                                <div class="col-sm-4 card-projetos d-flex justify-content-between">
                                    <div class="card">
                                        <div class="logo-projeto text-center">
                                            <a href="#"><img src="assets/images/educacao-social.png" class="img-fluid" alt="..."></a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><a class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Departamento de Educação Social de Itanhaém</a></h5>
                                            <ul class="geolocalizacao">
                                                <li class="vitrine-cidade">Itanhaém</li>
                                                <li class="vitrine-estado">São Paulo</li>
                                            </ul>
                                            <p class="card-text vitrine-eixo">Cidadania, Direitos Humanos e Sociedade</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <ul class="vitrine-img-ods">
                                                <li><img src="assets/images/img-ods/01.png" alt=""/></li>
                                                <li><img src="assets/images/img-ods/04.png" alt=""/></li>
                                                <li><img src="assets/images/img-ods/09.png" alt=""/></li>
                                            </ul>
                                            <div class="text-center">
                                                <p class="votos-vitrine"><span class="numeros-votos">3521</span> voto(s)</p>
                                            </div>
                                                

                                            <div class="botoes-projetos text-center d-flex justify-content-evenly align-items-center">
                                                <a href="#" class="btn btn-outline-secondary">Ver Projeto</a>
                                                <!-- MODAL VOTAÇÃO -->
                                                <button type="button" class="btn btn-dark">Editar</button>
                                                
                                                <!-- VOTAÇÃO ENCERRADA -->
                                                <!-- <p>Votação encerrada</p> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 sidebar-minha-conta">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Votar nos Projetos</a>
                        <a href="#" class="list-group-item list-group-item-action">Vote nos Negócios de Impacto</a>
                        <a href="#" class="list-group-item list-group-item-action">Vote nos Ecossistemas de Impacto</a>
                        <a href="#" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#recuperacaoSenha">Alterar Senha</a>
                        <a href="#" class="list-group-item list-group-item-action">Logout</a>
                    </div>
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
            </div>
        </div>
    </section>


</main>
<?php
// footer
include 'footer.php';
?>
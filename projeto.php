<?php
// header
include 'header.php';
?>
<main>

    <section class="projetos">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="nav-posts">
                        <ul class="inline">
                            <li><a href="vitrine.php" class="link-secondary">Vitrine</a></li>
                            <li><a href="vitrine.php" class="link-secondary">Categoria Projeto</a></li>
                            <li><a href="pg-publicacao.php" class="link-primary">Titulo Projeto</a></li>
                        </ul>
                    </div>
                    <div class="row cabecalho-projeto">
                        <div class="col-md-8">
                            <h1>Título Projeto</h1>
                        </div>
                        <div class="col-md-4">
                            <p class="categoria-projeto">Categoria Projeto</p>
                            <p class="subcategoria-projeto">Subategoria Projeto</p>
                        </div>
                    </div>
                    <div class="row informacoes-projeto align-itens-center">
                        <div class="col-md-4 logo-projeto">
                            <img src="assets/images/trade-comunidades.png">
                        </div>

                        <div class="col-md-4 dados-projeto text-center">
                            <div class="instituicao">
                                <span class="nome-respopnsavel">Nome Responsável</span>
                            </div>
                            <div class="localizacao">
                                <span class="city">Cidade</span> | <span class="uf">Estado</span>
                            </div>
                            <div class="social-midia">
                                <ul>
                                    <li><a href="" class="link-secondary"><i class="bi bi-globe"></i></a></li>
                                    <li><a href="" class="link-secondary"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="" class="link-secondary"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="" class="link-secondary"><i class="bi bi-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 votacao text-center">
                            <!-- ocultar quando abrir votação -->
                            <div class="votos">Votação a partir de <br><span class="numero-votos"> 01 de Setembro</span></div>
                            <!-- mostrar quando abrir as votações -->
                            <div class="votos"><span class="numero-votos">3521</span> voto(s)</div>       
                            <div class="botao-voto">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                    <div class="modal-dialog">
                                        <div class="modal-content">                                                
                                            <div class="modal-body">
                                                Seu voto foi contabilizado com sucesso!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Voltar para Vitrine</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ocultar, mostar somente quando acabar a votação -->
                                <p><span>Votação encerrada</span></p> 
                            </div> 
                        </div>
                    </div>

                    <div class="content-txt negocio-impacto">
                        <h2>Objetivos do projeto</h2>
                        <p class="descricao-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt negocio-impacto">
                        <h2>Como estamos agindo para atingir nosso objetivo</h2>
                        <p class="pitch-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt negocio-impacto">
                        <h2>Nossa visão para o futuro</h2>
                        <p class="inovacao-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt ecossistema-impacto">
                        <h2>Descrição da Organização</h2>
                        <p class="descricao-eco-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="content-txt ecossistema-impacto">
                        <h2>Palavras Chave</h2>
                        <p class="key-projeto">Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit, Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>                    
                    <div class="content-txt eixo">
                        <h2>Eixo Temático</h2>
                        <!-- Aparecer a <li> de acordo com o projeto -->
                        <ul>
                            <li>Cidadania, Direitos Humanos e Sociedade</li>
                            <li>Cidades, Mobilidade, Serviços e Infraestrutura Urbana</li>
                            <li>Educação, cultura, economia criativa e tecnologia da informação</li>
                            <li>Saúde</li>
                            <li>Finanças</li>
                            <li>Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável</li>
                        </ul>                        
                    </div>
                    <div class="content-txt lista-ods">
                        <h2>ODSs que meu negócio ajuda a atingir</h2>
                        <ul class="inline">
                            <li><img src="assets/images/img-ods/01.png"/></li>
                            <li><img src="assets/images/img-ods/02.png"/></li>
                            <li><img src="assets/images/img-ods/03.png"/></li>
                            <li><img src="assets/images/img-ods/04.png"/></li>
                            <li><img src="assets/images/img-ods/05.png"/></li>
                            <li><img src="assets/images/img-ods/06.png"/></li>
                            <li><img src="assets/images/img-ods/07.png"/></li>
                            <li><img src="assets/images/img-ods/08.png"/></li>
                            <li><img src="assets/images/img-ods/09.png"/></li>
                            <li><img src="assets/images/img-ods/10.png"/></li>
                            <li><img src="assets/images/img-ods/11.png"/></li>
                            <li><img src="assets/images/img-ods/12.png"/></li>
                            <li><img src="assets/images/img-ods/13.png"/></li>
                            <li><img src="assets/images/img-ods/14.png"/></li>
                            <li><img src="assets/images/img-ods/15.png"/></li>
                            <li><img src="assets/images/img-ods/16.png"/></li>
                            <li><img src="assets/images/img-ods/17.png"/></li>
                        </ul>
                        <div class="read-more text-center">
                            <a href="https://impactospositivos.com/post/conheca-mais-sobre-as-ods-da-onu-e-o-pacto-global" class="btn btn-outline-secondary">Saiba sobre as ODS's aqui!</a>
                        </div>
                    </div>

                    <div class="atividades-instituicao text-center">
                        <h2>Confira nossas Atividades</h2>

                        <div class="apresentacao-video">
                            <div class="container-iframe">
                                <iframe  class="responsive-iframe" src="https://www.youtube.com/embed/pZUhcbI27hY?autoplay=1&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="apresentacao-pdf">
                            <h3>Apresentação</h3>
                            <object data="assets/images/apresentacao_2022.pdf" type="application/pdf" width="90%" height="450">
                                <p>Seu navegador não tem um plugin pra PDF</p>
                            </object>
                            <a class="btn btn-outline-secondary" href="assets/images/apresentacao_2022.pdf" target="_blank">Vizualizar no navegador</a>
                        </div>
                    </div>
                    
                
                </div>

                <div class="col-md-3 sidebar">
                    <div class="lista-categoria">
                        <h4>Ecossistema de Impacto</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Dinamizadores</a>
                            <a href="#" class="list-group-item list-group-item-action">Comunidades</a>
                            <a href="#" class="list-group-item list-group-item-action">Médias e Grandes Empresas</a>
                        </div>
                    </div>
                    
                    <div class="lista-categoria">
                        <h4>Negócio de Impacto</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Ideação</a>
                            <a href="#" class="list-group-item list-group-item-action">Operação</a>
                            <a href="#" class="list-group-item list-group-item-action">Tração</a>
                        </div>
                    </div>

                    <div class="ads-banner">
                        <img src="assets/images/banner-sebrae.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="ads-banner">
                        <img src="assets/images/banner-sebrea2.jpg" alt="" class="img-fluid">
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
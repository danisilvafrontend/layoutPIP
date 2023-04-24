<?php
// header
include 'header.php';
?>
<main>
    <section class="topo-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Projetos <span class="ano-vigente">2023</span></h1>
                    <p>A votação do Prêmio Impactos Positivos acontece aqui dentro da Vitrine.</p>
                    <p>Acesse a lista abaixo e apoie os projetos que impactam positivamente nosso país.</p>
                    <p>Você poderá votar uma única vez em um mesmo projeto, mas poderá votar em quantos projetos se interessar.</p>
                    <p>Ajude a fomentar o nosso ecossistema de impacto votando e dando visibilidade para mais projetos, conheça os negócios participantes:</p>
                </div>
            </div>
        </div>
    </section>
    <section class="conteudo-vitrine">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
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
                                        <a href="projeto.php" class="btn btn-outline-secondary">Ver Projeto</a>
                                        <!-- MODAL VOTAÇÃO -->
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <!-- <p>Votação encerrada</p> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
                            <div class="card">
                                <div class="logo-projeto text-center">
                                    <a href="#"><img src="assets/images/trade-comunidades.png" class="img-fluid" alt="..."></a>
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
                                        <a href="projeto.php" class="btn btn-outline-secondary">Ver Projeto</a>
                                        <!-- MODAL VOTAÇÃO -->
                                        <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <p>Votação encerrada</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
                            <div class="card">
                                <div class="logo-projeto text-center">
                                    <a href="#"><img src="assets/images/trade-comunidades.png" class="img-fluid" alt="..."></a>
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
                                        <li><img src="assets/images/img-ods/01.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/04.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/09.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/01.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/04.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/09.png" alt=""/></li>
                                    </ul>
                                    <!-- <div class="text-center">
                                        <p class="votos-vitrine"><span class="numeros-votos">3521</span> voto(s)</p>
                                    </div> -->
                                    
                                    <div class="botoes-projetos text-center d-flex justify-content-evenly align-items-center">
                                        <a href="projeto.php" class="btn btn-outline-secondary">Ver Projeto</a>
                                        <!-- MODAL VOTAÇÃO -->
                                        <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <!-- <p>Votação encerrada</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
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
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <!-- <p>Votação encerrada</p> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
                            <div class="card">
                                <div class="logo-projeto text-center">
                                    <a href="#"><img src="assets/images/trade-comunidades.png" class="img-fluid" alt="..."></a>
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
                                        <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-success">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <p>Votação encerrada</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
                            <div class="card">
                                <div class="logo-projeto text-center">
                                    <a href="#"><img src="assets/images/trade-comunidades.png" class="img-fluid" alt="..."></a>
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
                                        <li><img src="assets/images/img-ods/01.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/04.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/09.png" alt=""/></li>
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
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <!-- <p>Votação encerrada</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
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
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <!-- <p>Votação encerrada</p> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
                            <div class="card">
                                <div class="logo-projeto text-center">
                                    <a href="#"><img src="assets/images/trade-comunidades.png" class="img-fluid" alt="..."></a>
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
                                        <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-success">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <p>Votação encerrada</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 card-projetos d-flex justify-content-between">
                            <div class="card">
                                <div class="logo-projeto text-center">
                                    <a href="#"><img src="assets/images/trade-comunidades.png" class="img-fluid" alt="..."></a>
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
                                        <li><img src="assets/images/img-ods/01.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/04.png" alt=""/></li>
                                        <li><img src="assets/images/img-ods/09.png" alt=""/></li>
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
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-votacao" class="btn btn-primary">Votar</button>
                                        <div class="modal fade" id="modal-votacao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
                                            <div class="modal-dialog">
                                                <div class="modal-content">                                                
                                                    <div class="modal-body">
                                                        Seu voto foi contabilizado com sucesso!
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continura Votando</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VOTAÇÃO ENCERRADA -->
                                        <!-- <p>Votação encerrada</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>  
                    
                    <div class="row">
                        <div class="col paginacao">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                    <a class="page-link">Anterior</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </nav>
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
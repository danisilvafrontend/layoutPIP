<?php
// header
include 'header.php';
?>
<main>
    
    <section class="topo-paginas publicacoes">
        <div class="bg-full"></div>
        <div class="container">
            <div class="row">
                <div class="col text-white titulo-pg-institucional">
                    <h1>Título da postagem</h1>
                </div>
            </div>
        </div>   
    </section>

    <section class="conteudo-paginas">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="nav-posts">
                        <ul class="inline">
                            <li><a href="portal-de-conteudo.php" class="link-secondary">Portal</a></li>
                            <li><a href="categoria-conteudo.php" class="link-secondary">Nosso Ecossistema</a></li>
                            <li><a href="categoria-conteudo.php" class="link-secondary">Categoria</a></li>
                            <li><a href="pg-publicacao.php" class="link-primary">Titulo Post</a></li>
                        </ul>
                    </div>
                    <h2>Subtítulos H2</h2>
                    <h3>Subtítulos H3</h3>
                    <h4>Subtítulos H4</h4>
                    <h5>Subtítulos H5</h5>
                    <h6>Subtítulos H6</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit voluptatum quos adipisci. Eligendi reprehenderit, amet quod vero eveniet sit consequatur ex itaque facere nihil libero doloribus nesciunt asperiores obcaecati numquam!</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    </ul>

                    <p> Link <a class="link-primary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Underline opacity 0</a> </p>
                    

                    <img class="img-fluid" src="assets/images/materia-esg.png" alt="">

                    <div class="container-iframe">
                        <iframe  class="responsive-iframe" src="https://www.youtube.com/embed/pZUhcbI27hY?autoplay=1&color=white" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
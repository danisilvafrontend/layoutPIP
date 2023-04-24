<?php
// header
include 'header.php';
?>
<main>
    
    <section class="topo-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Cadastro Ecossistema de Impacto</h1>
                    <p>Siga os passos para cadastrar seu projeto</p>
                </div>
            </div>
        </div>
    </section>

    <section class="formulario-projetos">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">

                    <form class="formulario-projeto" method="post">

                        <!-- SUBCATEGORIA -->
                        <div class="step" id="step_1">
                            <h3>Subcategoria</h3>
                            <p>Em qual Ecossistema de Impacto se enquadra seu projeto</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="subcategoria" id="dinamizadores">
                                <label class="form-check-label" for="dinamizadores">
                                    Dinamizadores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="subcategoria" id="comunicadores">
                                <label class="form-check-label" for="comunicadores">
                                    Comunicadores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="subcategoria" id="grandesEmpresas" >
                                <label class="form-check-label" for="grandesEmpresas">
                                    Grandes Empresas
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Cancelar</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- PERFIL DINAMIZADORES -->
                        <div class="step" id="step_2">
                            <h3>Perfil</h3>
                            <p>Escolha um dos perfis abaixo de acordo com o tipo de dinamizador que é:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="institutos">
                                <label class="form-check-label" for="institutos">
                                Institutos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="fundacoes">
                                <label class="form-check-label" for="fundacoes">
                                Fundações
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="empresas" >
                                <label class="form-check-label" for="empresas">
                                    Empresas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="aceleradoras" >
                                <label class="form-check-label" for="aceleradoras">
                                Aceleradoras
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="incubadorasiParquesTecnologico" >
                                <label class="form-check-label" for="incubadorasiParquesTecnologico">
                                Incubadoras e Parques Tecnológico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="hubsComunidadesNegocios" >
                                <label class="form-check-label" for="hubsComunidadesNegocios">
                                Hubs e Comunidades de Negócios
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="mentores" >
                                <label class="form-check-label" for="mentores">
                                Mentores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="academia" >
                                <label class="form-check-label" for="academia">
                                Academia/Universidade (Centro de Pesquisa e Inovação), Laboratório, Empresas Juniores, Instituições Tecnológicas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="pesquisadores" >
                                <label class="form-check-label" for="pesquisadores">
                                Pesquisadores, técnicos, professores, estudantes universitários
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="prestadoraServico" >
                                <label class="form-check-label" for="prestadoraServico">
                                Prestadora de Serviço, Consultoria de Avaliação e Monitoramento de impacto/certificadoras
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="advogadosAssessores" >
                                <label class="form-check-label" for="advogadosAssessores">
                                Advogados e assessores jurídicos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilDinamizadores" id="outros" >
                                <label class="form-check-label" for="outros">
                                Outros prestadores de serviços
                                </label>
                            </div> 
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- PERFIL COMUNICADORES -->
                        <div class="step" id="step_3">
                            <h3>Perfil</h3>
                            <p>Escolha um dos perfis abaixo de acordo com o tipo de Comunidade que representa:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilComunidades" id="organizacaoInternacional">
                                <label class="form-check-label" for="organizacaoInternacional">
                                Organização Internacional ou multilateral, cooperação internacional
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilComunidades" id="ong">
                                <label class="form-check-label" for="ong">
                                Organização Não Governamental (ONG)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfilComunidades" id="associacoes">
                                <label class="form-check-label" for="associacoes">
                                Associações
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="movimentosSociais" id="laboratoriosDeInovacaoSocial">
                                <label class="form-check-label" for="movimentosSociais">
                                Movimentos Sociais
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="movimentosSociais" id="cidadania">
                                <label class="form-check-label" for="cidadania">
                                Cidadania
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="movimentosSociais" id="institutos">
                                <label class="form-check-label" for="institutos">
                                Institutos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="movimentosSociais" id="fundacoes">
                                <label class="form-check-label" for="fundacoes">
                                Fundações
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>
                        <!-- GRANDES EMPRESAS NÃO TEM PERFIL -->

                        <!-- DADOS DO RESPONSÁVEL -->
                        <div class="step" id="step_4">
                            <h3>Dados do Responsável</h3>
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
                                        <label for="inputPassword" class="form-label">Senha <span>Digite uma senha com no mínimo 6 caracteres</span></label>
                                        <input type="password" class="form-control" id="inputPassword">
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
                                            <option value="feminino">Feminino</option>
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
                                            <option selected disabled>Escolha uma opção</option>
                                            <option value="SP">São Paulo</option>
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
                                            <option selected disabled>Escolha uma opção</option>
                                            <option value="SP">São Paulo</option>
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
                                            <option selected disabled>Escolha uma opção</option>
                                            <option value="ensino_Fundamental">Ensino Fundamental</option>
                                            <option value="ensino_Medio">Ensino Médio</option>
                                            <option value="ensino_Superior">Ensino Superior</option>
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputLogo" class="form-label">Adicione uma imagem de identificação <span>Dimensão recomendada para melhor visualização: 500x350px</span></label>
                                        <input class="form-control" type="file" id="inputLogo" accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- DADOS DO NEGÓCIO -->
                        <div class="step" id="step_5">
                            <h3>Dados do Negócio</h3>
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputRazaoSocial" class="form-label">Razão Social</label>
                                        <input type="text" class="form-control" id="inputRazaoSocial">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputCnpj" class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" id="inputCnpj">
                                    </div>
                                </div>     
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputArea" class="form-label">Seção/Área (Detalhe)</label>
                                        <input type="text" class="form-control" id="inputArea">
                                    </div>
                                </div>           
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputEndereco" class="form-label">Endereço</label>
                                        <input type="text" class="form-control" id="inputEndereco">
                                    </div>
                                </div>                              
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputUfEmpresa" class="form-label">Estado</label>
                                        <select class="form-select" aria-label="UfEmpresa">
                                            <option selected disabled>Escolha uma opção</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PR">Parana</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="inputCidadeEmpresa" class="form-label">Cidade</label>
                                        <select class="form-select" aria-label="Cidade Empresa">
                                            <option selected disabled>Escolha uma opção</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="RJ">Vila São José</option>
                                            <option value="MG">Barueri</option>
                                            <option value="PR">Lapa</option>
                                        </select>
                                    </div>
                                </div>
                                <p>Em quais destes eixos temáticos se encaixa o seu negócio?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eixo" id="eixoCidadania">
                                    <label class="form-check-label" for="eixoCidadania">
                                    Cidadania, Direitos Humanos e Sociedade
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eixo" id="cidades">
                                    <label class="form-check-label" for="cidades">
                                    Cidades, Mobilidade, Serviços e Infraestrutura Urbana
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eixo" id="educacao">
                                    <label class="form-check-label" for="educacao">
                                    Educação, cultura, economia criativa e tecnologia da informação
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eixo" id="saude">
                                    <label class="form-check-label" for="saude">
                                    Saúde
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eixo" id="financas">
                                    <label class="form-check-label" for="financas">
                                    Finanças
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eixo" id="biodiversidade">
                                    <label class="form-check-label" for="biodiversidade">
                                    Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- subárea eixos temáticos se encaixa o seu negócio - Cidadania, Direitos Humanos e Sociedade -->
                        <div class="step" id="step_6">
                            <h3>Cidadania, Direitos Humanos e Sociedade</h3>      
                            <p>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</p>                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para democracia e participação cidadã" id="cidadaniaSubarea1">
                                <label class="form-check-label" for="cidadaniaSubarea1">
                                    Soluções e tecnologias para democracia e participação cidadã
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para administração pública, gestão de governo e transparência" id="cidadaniaSubarea2">
                                <label class="form-check-label" for="cidadaniaSubarea2">
                                Soluções e tecnologias para administração pública, gestão de governo e transparência
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para inclusão social, igualdade, resolução de conflitos e coesão social" id="cidadaniaSubarea3">
                                <label class="form-check-label" for="cidadaniaSubarea3">
                                Soluções e tecnologias para inclusão social, igualdade, resolução de conflitos e coesão social
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para diversidade, gênero, comunidade LGBTQIA+ e minorias étnicas" id="cidadaniaSubarea4">
                                <label class="form-check-label" for="cidadaniaSubarea4">
                                Soluções e tecnologias para diversidade, gênero, comunidade LGBTQIA+ e minorias étnicas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para comunidades tradicionais (indígenas, quilombolas, ribeirinhos, pescadores artesanais, extrativistas e outras)" id="cidadaniaSubarea5">
                                <label class="form-check-label" for="cidadaniaSubarea5">
                                Soluções e tecnologias para comunidades tradicionais (indígenas, quilombolas, ribeirinhos, pescadores artesanais, extrativistas e outras)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para comércio justo e economia solidária" id="cidadaniaSubarea6">
                                <label class="form-check-label" for="cidadaniaSubarea6">
                                Soluções e tecnologias para comércio justo e economia solidária
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para Direitos Humanos, direitos e deveres do cidadão" id="cidadaniaSubarea7">
                                <label class="form-check-label" for="cidadaniaSubarea7">
                                Soluções e tecnologias para Direitos Humanos, direitos e deveres do cidadão
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para direitos trabalhistas" id="cidadaniaSubarea8">
                                <label class="form-check-label" for="cidadaniaSubarea8">
                                Soluções e tecnologias para direitos trabalhistas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para garantir o acesso aos bens comuns (terra, ar, água, florestas, etc)" id="cidadaniaSubarea9">
                                <label class="form-check-label" for="cidadaniaSubarea9">
                                Soluções e tecnologias para garantir o acesso aos bens comuns (terra, ar, água, florestas, etc)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para segurança alimentar e gestão de alimentos" id="cidadaniaSubarea10">
                                <label class="form-check-label" for="cidadaniaSubarea10">
                                Soluções e tecnologias para segurança alimentar e gestão de alimentos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para ampliação do empreendedorismo e inovação" id="cidadaniaSubarea11">
                                <label class="form-check-label" for="cidadaniaSubarea11">
                                Soluções e tecnologias para ampliação do empreendedorismo e inovação
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para geração de emprego e qualificação profissional" id="cidadaniaSubarea12">
                                <label class="form-check-label" for="cidadaniaSubarea12">
                                Soluções e tecnologias para geração de emprego e qualificação profissional
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para promoção do consumo sustentável" id="cidadaniaSubarea13">
                                <label class="form-check-label" for="cidadaniaSubarea13">
                                Soluções e tecnologias para promoção do consumo sustentável
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para apoio a processos de migração e combate ao tráfico de pessoas e de drogas" id="cidadaniaSubarea14">
                                <label class="form-check-label" for="cidadaniaSubarea14">
                                Soluções e tecnologias para apoio a processos de migração e combate ao tráfico de pessoas e de drogas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para promoção do Acesso público à informação" id="cidadaniaSubarea15">
                                <label class="form-check-label" for="cidadaniaSubarea15">
                                Soluções e tecnologias para promoção do Acesso público à informação
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para proteção e salvaguarda do patrimônio cultural e natural" id="cidadaniaSubarea16">
                                <label class="form-check-label" for="cidadaniaSubarea16">
                                Soluções e tecnologias para proteção e salvaguarda do patrimônio cultural e natural
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- subárea eixos temáticos se encaixa o seu negócio - Cidades, Mobilidade, Serviços e Infraestrutura Urbana -->
                        <div class="step" id="step_7">
                            <h3>Cidades, Mobilidade, Serviços e Infraestrutura Urbana</h3>      
                            <p>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</p>                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Transporte, Logística, Mobilidade" id="cidadeSubarea1">
                                <label class="form-check-label" for="cidadesSubarea1">
                                Transporte, Logística, Mobilidade
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias para a Habitação, infraestrutura e construção, urbanização de favelas, moradia digna, acesso à habitação adequada e a preço acessível" id="cidadesSubarea2">
                                <label class="form-check-label" for="cidadesSubarea2">
                                Soluções e tecnologias para a Habitação, infraestrutura e construção, urbanização de favelas, moradia digna, acesso à habitação adequada e a preço acessível
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais" id="cidadesSubarea3">
                                <label class="form-check-label" for="cidadesSubarea3">
                                Assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Serviços relacionados à participação cidadã" id="cidadesSubarea4">
                                <label class="form-check-label" for="cidadesSubarea4">
                                Serviços relacionados à participação cidadã
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Monitoramento e inteligência de dados em cidades" id="cidadesSubarea5">
                                <label class="form-check-label" for="cidadesSubarea5">
                                Monitoramento e inteligência de dados em cidades
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Monitoramento e inteligência de dados em cidades" id="cidadesSubarea6">
                                <label class="form-check-label" for="cidadesSubarea6">
                                Monitoramento e inteligência de dados em cidades
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Segurança Pública" id="cidadesSubarea7">
                                <label class="form-check-label" for="cidadesSubarea7">
                                Segurança Pública
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes" id="cidadesSubarea8">
                                <label class="form-check-label" for="cidadesSubarea8">
                                Acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tratamento de efluentes e saneamento básico, construção ou gestão de infraestruturas para abastecimento de água, drenagem urbana, coleta e tratamento de efluentes líquidos" id="cidadesSubarea">
                                <label class="form-check-label" for="cidadesSubarea9">
                                Tratamento de efluentes e saneamento básico, construção ou gestão de infraestruturas para abastecimento de água, drenagem urbana, coleta e tratamento de efluentes líquidos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tratamento de resíduos urbanos e reciclagem" id="cidadesSubarea10">
                                <label class="form-check-label" for="cidadesSubarea10">
                                Tratamento de resíduos urbanos e reciclagem
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Fornecimento de Energia sustentável" id="cidadesSubarea11">
                                <label class="form-check-label" for="cidadesSubarea11">
                                Fornecimento de Energia sustentável
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Planejamento e gestão de assentamentos humanos participativos" id="cidadesSubarea12">
                                <label class="form-check-label" for="cidadesSubarea12">
                                Planejamento e gestão de assentamentos humanos participativos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sistemas de transporte públicos seguros, acessíveis e sustentáveis" id="cidadesSubarea13">
                                <label class="form-check-label" for="cidadesSubarea13">
                                Sistemas de transporte públicos seguros, acessíveis e sustentáveis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Segurança rodoviária" id="cidadesSubarea14">
                                <label class="form-check-label" for="cidadesSubarea14">
                                Segurança rodoviária
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Prevenção de catástrofes naturais e desastres, resiliência a desastres e gerenciamento holístico do risco de desastres" id="cidadesSubarea15">
                                <label class="form-check-label" for="cidadesSubarea15">
                                Prevenção de catástrofes naturais e desastres, resiliência a desastres e gerenciamento holístico do risco de desastres
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Defesa civil e socorro a vítimas de catástrofes naturais e desastres" id="cidadesSubarea16">
                                <label class="form-check-label" for="cidadesSubarea16">
                                Defesa civil e socorro a vítimas de catástrofes naturais e desastres
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Qualidade do ar e redução da poluição em cidades" id="cidadesSubarea17">
                                <label class="form-check-label" for="cidadesSubarea17">
                                Qualidade do ar e redução da poluição em cidades
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Agricultura urbana, Hortas urbanas" id="cidadesSubarea18">
                                <label class="form-check-label" for="cidadesSubarea18">
                                Agricultura urbana, Hortas urbanas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Infraestruturas para pessoas com deficiências" id="cidadesSubarea19">
                                <label class="form-check-label" for="cidadesSubarea19">
                                Infraestruturas para pessoas com deficiências
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento" id="cidadesSubarea20">
                                <label class="form-check-label" for="cidadesSubarea20">
                                Relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Redução do impacto ambiental negativo das cidades com planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação às mudanças climáticas" id="cidadesSubarea21">
                                <label class="form-check-label" for="cidadesSubarea21">
                                Redução do impacto ambiental negativo das cidades com planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação às mudanças climáticas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Logística e mobilidade, movimentação de cargas e passageiros, com diversos e modais de transportes (ex.: ferroviário, aquaviário, aeroviário e rodoviário)" id="cidadesSubarea22">
                                <label class="form-check-label" for="cidadesSubarea22">
                                Logística e mobilidade, movimentação de cargas e passageiros, com diversos e modais de transportes (ex.: ferroviário, aquaviário, aeroviário e rodoviário)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tecnologia da Informação e Inteligência Artificial para área de cidades, mobilidade e infraestrutura urbana" id="cidadesSubarea23">
                                <label class="form-check-label" for="cidadesSubarea23">
                                Tecnologia da Informação e Inteligência Artificial para área de cidades, mobilidade e infraestrutura urbana
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- subárea eixos temáticos se encaixa o seu negócio - Educação, cultura, economia criativa e tecnologia da informação -->
                        <div class="step" id="step_8">
                            <h3>Educação, cultura, economia criativa e tecnologia da informação</h3>      
                            <p>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</p>                            
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias de educação para a primeira infância" id="educacaoSubarea1">
                                <label class="form-check-label" for="educacaoSubarea1">
                                Soluções e tecnologias de educação para a primeira infância
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias de educação para o ensino fundamental" id="educacaoSubarea2">
                                <label class="form-check-label" for="educacaoSubarea2">
                                Soluções e tecnologias de educação para o ensino fundamental
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias de educação para o ensino fundamental II" id="educacaoSubarea3">
                                <label class="form-check-label" for="educacaoSubarea3">
                                Soluções e tecnologias de educação para o ensino fundamental II
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias de educação para o ensino médio" id="educacaoSubarea4">
                                <label class="form-check-label" for="educacaoSubarea4">
                                Soluções e tecnologias de educação para o ensino médio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologias de educação para o ensino superior" id="educacaoSubarea5">
                                <label class="form-check-label" for="educacaoSubarea5">
                                Soluções e tecnologias de educação para o ensino superior
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções relacionadas à educação técnica e profissional" id="educacaoSubarea6">
                                <label class="form-check-label" for="educacaoSubarea6">
                                Soluções relacionadas à educação técnica e profissional
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Educação em sustentabilidade, ciência e cidadania" id="educacaoSubarea7">
                                <label class="form-check-label" for="educacaoSubarea7">
                                Educação em sustentabilidade, ciência e cidadania
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Ensino de artes" id="educacaoSubarea8">
                                <label class="form-check-label" for="educacaoSubarea8">
                                Ensino de artes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Formação de professores" id="educacaoSubarea9">
                                <label class="form-check-label" for="educacaoSubarea9">
                                Formação de professores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções e tecnologia de educação relacionados à alfabetização" id="educacaoSubarea10">
                                <label class="form-check-label" for="educacaoSubarea10">
                                Soluções e tecnologia de educação relacionados à alfabetização
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Educação de pessoas maiores" id="educacaoSubarea11">
                                <label class="form-check-label" for="educacaoSubarea11">
                                Educação de pessoas maiores
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Cooperação científica" id="educacaoSubarea12">
                                <label class="form-check-label" for="educacaoSubarea12">
                                Cooperação científica
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Marketing, mídias e jornalismo" id="educacaoSubarea13">
                                <label class="form-check-label" for="educacaoSubarea13">
                                Marketing, mídias e jornalismo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Acesso à informação, tecnologia da informação e telecomunicações" id="educacaoSubarea14">
                                <label class="form-check-label" for="educacaoSubarea14">
                                Acesso à informação, tecnologia da informação e telecomunicações
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Acesso à cultura" id="educacaoSubarea15">
                                <label class="form-check-label" for="educacaoSubarea15">
                                Acesso à cultura
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Economia criativa" id="educacaoSubarea16">
                                <label class="form-check-label" for="educacaoSubarea16">
                                Economia criativa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Economia do Turismo" id="educacaoSubarea17">
                                <label class="form-check-label" for="educacaoSubarea17">
                                Economia do Turismo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Gastronomia" id="educacaoSubarea18">
                                <label class="form-check-label" for="educacaoSubarea18">
                                Gastronomia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Eventos e Lazer" id="educacaoSubarea19">
                                <label class="form-check-label" for="educacaoSubarea19">
                                Eventos e Lazer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Construção e proteção do patrimônio histórico, artístico e cultural" id="educacaoSubarea20">
                                <label class="form-check-label" for="educacaoSubarea20">
                                Construção e proteção do patrimônio histórico, artístico e cultural
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tecnologia da Informação e Inteligência Artificial para área de educação, cultura e economia criativa" id="educacaoSubarea21">
                                <label class="form-check-label" for="educacaoSubarea21">
                                Tecnologia da Informação e Inteligência Artificial para área de educação, cultura e economia criativa
                                </label>
                            </div>

                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- subárea eixos temáticos se encaixa o seu negócio - Saúde -->
                        <div class="step" id="step_9">                            
                            <h3>Saúde</h3>      
                            <p>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</p>                            
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções para problemas de gestão de saúde: atendimento, governança, análise de dados, redução de custos" id="saudeSubarea1">
                                <label class="form-check-label" for="saudeSubarea1">
                                Soluções para problemas de gestão de saúde: atendimento, governança, análise de dados, redução de custos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções para melhoria da qualidade de vida de pacientes: diagnósticos, tratamentos, prevenção, suporte, cura" id="saudeSubarea2">
                                <label class="form-check-label" for="saudeSubarea2">
                                Soluções para melhoria da qualidade de vida de pacientes: diagnósticos, tratamentos, prevenção, suporte, cura
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Vacinas" id="saudeSubarea3">
                                <label class="form-check-label" for="saudeSubarea3">
                                Vacinas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Genética" id="saudeSubarea4">
                                <label class="form-check-label" for="saudeSubarea4">
                                Genética
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Doação de sangue" id="saudeSubarea5">
                                <label class="form-check-label" for="saudeSubarea5">
                                Doação de sangue
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções para resistência microbiana" id="saudeSubarea6">
                                <label class="form-check-label" for="saudeSubarea6">
                                Soluções para resistência microbiana
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Nutrição e Alimentação Saudável" id="saudeSubarea7">
                                <label class="form-check-label" for="saudeSubarea7">
                                Nutrição e Alimentação Saudável
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Controle de epidemias e doenças transmissíveis" id="saudeSubarea8">
                                <label class="form-check-label" for="saudeSubarea8">
                                Controle de epidemias e doenças transmissíveis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Saúde mental" id="saudeSubarea9">
                                <label class="form-check-label" for="saudeSubarea9">
                                Saúde mental
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Saúde animal" id="saudeSubarea10">
                                <label class="form-check-label" for="saudeSubarea10">
                                Saúde animal
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Saúde ambiental (Redução de químicos para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente)" id="saudeSubarea11">
                                <label class="form-check-label" for="saudeSubarea11">
                                Saúde ambiental <span>(Redução de químicos para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação" id="saudeSubarea12">
                                <label class="form-check-label" for="saudeSubarea12">
                                Saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Prevenção e tratamento de substâncias entorpecentes e uso nocivo do álcool e tabaco" id="saudeSubarea13">
                                <label class="form-check-label" for="saudeSubarea13">
                                Prevenção e tratamento de substâncias entorpecentes e uso nocivo do álcool e tabaco
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tecnologia da Informação e Inteligência Artificial para área de saúde" id="saudeSubarea14">
                                <label class="form-check-label" for="saudeSubarea14">
                                Tecnologia da Informação e Inteligência Artificial para área de saúde
                                </label>
                            </div>

                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- subárea eixos temáticos se encaixa o seu negócio - Finanças -->
                        <div class="step" id="step_10">
                            <h3>Finanças</h3>      
                            <p>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</p>                            
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Serviços financeiros e tecnologias visando a redução de custo e escala em acesso à crédito" id="financaSubarea1">
                                <label class="form-check-label" for="financaSubarea1">
                                Serviços financeiros e tecnologias visando a redução de custo e escala em acesso à crédito
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Serviços financeiros e tecnologias visando a redução de custo e escala em transações financeiras" id="financaSubarea2">
                                <label class="form-check-label" for="financaSubarea2">
                                Serviços financeiros e tecnologias visando a redução de custo e escala em transações financeiras
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Serviços financeiros e tecnologias visando a redução de custo e escala em gestão pública" id="financaSubarea3">
                                <label class="form-check-label" for="financaSubarea3">
                                Serviços financeiros e tecnologias visando a redução de custo e escala em gestão pública
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Soluções para problemas de gestão de saúde: atendimento, governança, análise de dados, redução de custos" id="financaSubarea4">
                                <label class="form-check-label" for="financaSubarea4">
                                Soluções para problemas de gestão de saúde: atendimento, governança, análise de dados, redução de custos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Serviços financeiros e tecnologias visando a inclusão financeira/bancarização" id="financaSubarea5">
                                <label class="form-check-label" for="financaSubarea5">
                                Serviços financeiros e tecnologias visando a inclusão financeira/bancarização
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças" id="financaSubarea6">
                                <label class="form-check-label" for="financaSubarea6">
                                Novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sistemas de transparência financeira e eliminação da corrupção" id="financaSubarea7">
                                <label class="form-check-label" for="financaSubarea7">
                                Sistemas de transparência financeira e eliminação da corrupção
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Serviços para ampliação dos recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas" id="financaSubarea8">
                                <label class="form-check-label" for="financaSubarea8">
                                Serviços para ampliação dos recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tecnologia da Informação e Inteligência Artificial para a área financeira" id="financaSubarea9">
                                <label class="form-check-label" for="financaSubarea9">
                                Tecnologia da Informação e Inteligência Artificial para a área financeira
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- subárea eixos temáticos se encaixa o seu negócio - Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável  -->
                        <div class="step" id="step_11">
                            <h3>Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável</h3>      
                            <p>Qual a Subárea de Impacto? Assinale todas as alternativas pertinentes.</p>                            
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Agropecuária, sistemas sustentáveis de produção de alimentos, fornecimento de insumos e comercialização agrícola" id="biodivercidadeSubarea1">
                                <label class="form-check-label" for="biodivercidadeSubarea1">
                                Agropecuária, sistemas sustentáveis de produção de alimentos, fornecimento de insumos e comercialização agrícola
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Água e saneamento, construção e gestão de infraestruturas para o abastecimento de água" id="biodivercidadeSubarea2">
                                <label class="form-check-label" for="biodivercidadeSubarea2">
                                Água e saneamento, construção e gestão de infraestruturas para o abastecimento de água
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Florestas e uso do solo, produção de produtos madeireiros e não madeireiros (ex.: fibras, alimentos, extratos, etc.), bem como atividades de reflorestamento e manutenção de floresta nativa para fim de conservação" id="biodivercidadeSubarea3">
                                <label class="form-check-label" for="biodivercidadeSubarea3">
                                Florestas e uso do solo, produção de produtos madeireiros e não madeireiros (ex.: fibras, alimentos, extratos, etc.), bem como atividades de reflorestamento e manutenção de floresta nativa para fim de conservação
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Gestão de Resíduos, empresas que realizam o tratamento de resíduos sólidos, porém engloba também empresas que fazem a gestão, coleta, separação, reaproveitamento e reciclagem destes" id="biodivercidadeSubarea4">
                                <label class="form-check-label" for="biodivercidadeSubarea4">
                                Gestão de Resíduos, empresas que realizam o tratamento de resíduos sólidos, porém engloba também empresas que fazem a gestão, coleta, separação, reaproveitamento e reciclagem destes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Mitigação da mudança no clima" id="biodivercidadeSubarea5">
                                <label class="form-check-label" for="biodivercidadeSubarea5">
                                Mitigação da mudança no clima
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Adaptação à mudança no clima" id="biodivercidadeSubarea6">
                                <label class="form-check-label" for="biodivercidadeSubarea6">
                                Adaptação à mudança no clima
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Preservação da fauna e da flora" id="biodivercidadeSubarea7">
                                <label class="form-check-label" for="biodivercidadeSubarea7">
                                Preservação da fauna e da flora
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Prevenção e combate aos maus tratos a animais" id="biodivercidadeSubarea8">
                                <label class="form-check-label" for="biodivercidadeSubarea8">
                                Prevenção e combate aos maus tratos a animais
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Acesso à energia" id="biodivercidadeSubarea9">
                                <label class="form-check-label" for="biodivercidadeSubarea9">
                                Acesso à energia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Conservação de oceanos, zonas costeiras e marinhas, prevenção e redução da poluição marinha" id="biodivercidadeSubarea10">
                                <label class="form-check-label" for="biodivercidadeSubarea10">
                                Conservação de oceanos, zonas costeiras e marinhas, prevenção e redução da poluição marinha
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Minimização e enfrentamento dos impactos da acidificação dos oceanos" id="biodivercidadeSubarea11">
                                <label class="form-check-label" for="biodivercidadeSubarea11">
                                Minimização e enfrentamento dos impactos da acidificação dos oceanos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Diminuição da sobrepesca e práticas de pesca destrutivas, Restauração das populações de peixes e da vida aquática" id="biodivercidadeSubarea12">
                                <label class="form-check-label" for="biodivercidadeSubarea12">
                                Diminuição da sobrepesca e práticas de pesca destrutivas, Restauração das populações de peixes e da vida aquática
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados" id="biodivercidadeSubarea13">
                                <label class="form-check-label" for="biodivercidadeSubarea13">
                                Acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Proteção e restauração de ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos" id="biodivercidadeSubarea14">
                                <label class="form-check-label" for="biodivercidadeSubarea14">
                                Proteção e restauração de ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes" id="biodivercidadeSubarea15">
                                <label class="form-check-label" for="biodivercidadeSubarea15">
                                Manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Proteção, recuperação e promoção do uso sustentável dos ecossistemas terrestres e florestas" id="biodivercidadeSubarea16">
                                <label class="form-check-label" for="biodivercidadeSubarea16">
                                Proteção, recuperação e promoção do uso sustentável dos ecossistemas terrestres e florestas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Combate à desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade, restauração de terra e solo degradados" id="biodivercidadeSubarea17">
                                <label class="form-check-label" for="biodivercidadeSubarea17">
                                Combate à desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade, restauração de terra e solo degradados
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Combate ao desmatamento, restauração de florestas degradadas e aumento do florestamento e o reflorestamento" id="biodivercidadeSubarea18">
                                <label class="form-check-label" for="biodivercidadeSubarea18">
                                Combate ao desmatamento, restauração de florestas degradadas e aumento do florestamento e o reflorestamento
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Conservação dos ecossistemas de montanha, incluindo a sua biodiversidade" id="biodivercidadeSubarea19">
                                <label class="form-check-label" for="biodivercidadeSubarea19">
                                Conservação dos ecossistemas de montanha, incluindo a sua biodiversidade
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Redução da degradação de habitats naturais e perda da biodiversidade" id="biodivercidadeSubarea20">
                                <label class="form-check-label" for="biodivercidadeSubarea20">
                                Redução da degradação de habitats naturais e perda da biodiversidade
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Prevenção da extinção de espécies ameaçadas" id="biodivercidadeSubarea21">
                                <label class="form-check-label" for="biodivercidadeSubarea21">
                                Prevenção da extinção de espécies ameaçadas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos e acesso adequado aos recursos genéticos" id="biodivercidadeSubarea22">
                                <label class="form-check-label" for="biodivercidadeSubarea22">
                                Repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos e acesso adequado aos recursos genéticos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Combate a caça ilegal e o tráfico de espécies da flora e fauna protegidas" id="biodivercidadeSubarea23">
                                <label class="form-check-label" for="biodivercidadeSubarea23">
                                Combate a caça ilegal e o tráfico de espécies da flora e fauna protegidas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Redução do impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos" id="biodivercidadeSubarea24">
                                <label class="form-check-label" for="biodivercidadeSubarea24">
                                Redução do impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tecnologias e processos industriais limpos" id="biodivercidadeSubarea25">
                                <label class="form-check-label" for="biodivercidadeSubarea25">
                                Tecnologias e processos industriais limpos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável" id="biodivercidadeSubarea26">
                                <label class="form-check-label" for="biodivercidadeSubarea26">
                                Indústria Sustentável - <span>Energia e biocombustíveis, empresas geradoras, transmissoras e distribuidoras de energia elétrica, produtores de biocombustíveis (principalmente etanol e biodiesel) energias renováveis o acesso a pesquisa e tecnologias de energia limpa, incluindo energias renováveis, eficiência energética, Tecnologias de combustíveis fósseis avançadas e mais limpas</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Fabricação de Alimentos e Bebidas" id="biodivercidadeSubarea27">
                                <label class="form-check-label" for="biodivercidadeSubarea27">
                                Indústria Sustentável Fabricação de Alimentos e Bebidas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Farmoquímico e Farmacêutico" id="biodivercidadeSubarea28">
                                <label class="form-check-label" for="biodivercidadeSubarea28">
                                Indústria Sustentável Farmoquímico e Farmacêutico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Madeira e Móveis" id="biodivercidadeSubarea29">
                                <label class="form-check-label" for="biodivercidadeSubarea29">
                                Indústria Sustentável Madeira e Móveis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Metal-Mecânico e Metalurgia" id="biodivercidadeSubarea30">
                                <label class="form-check-label" for="biodivercidadeSubarea30">
                                Indústria Sustentável Metal-Mecânico e Metalurgia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Papel e Celulose" id="biodivercidadeSubarea31">
                                <label class="form-check-label" for="biodivercidadeSubarea31">
                                Indústria Sustentável Papel e Celulose
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Químico" id="biodivercidadeSubarea32">
                                <label class="form-check-label" for="biodivercidadeSubarea32">
                                Indústria Sustentável Químico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Têxtil, Confecção e Calçados" id="biodivercidadeSubarea33">
                                <label class="form-check-label" for="biodivercidadeSubarea33">
                                Indústria Sustentável Têxtil, Confecção e Calçados
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Indústria Sustentável Petróleo e Gás" id="biodivercidadeSubarea34">
                                <label class="form-check-label" for="biodivercidadeSubarea34">
                                Indústria Sustentável Petróleo e Gás
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Mineração" id="biodivercidadeSubarea35">
                                <label class="form-check-label" for="biodivercidadeSubarea35">
                                Mineração
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Pesca e Aquicultura" id="biodivercidadeSubarea36">
                                <label class="form-check-label" for="biodivercidadeSubarea36">
                                Pesca e Aquicultura
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Tecnologia da Informação, monitoramento geológico, e Inteligência Artificial aplicada à Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável" id="biodivercidadeSubarea37">
                                <label class="form-check-label" for="biodivercidadeSubarea37">
                                Tecnologia da Informação, monitoramento geológico, e Inteligência Artificial aplicada à Biodiversidade, Bioeconomia, Tecnologias Verdes e Indústria Sustentável
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Diversidade Genética de Sementes, plantas cultivadas, animais de criação" id="biodivercidadeSubarea38">
                                <label class="form-check-label" for="biodivercidadeSubarea38">
                                Diversidade Genética de Sementes, plantas cultivadas, animais de criação
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- ODS -->
                        <div class="step" id="step_12">
                            <h3>Objetivos do Desenvolvimento Sustentável</h3>      
                            <p>Assinale todas as alternativas pertinentes a sua solução está vinculada.</p>                            
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo1" id="ods1">
                                <label class="form-check-label" for="ods1">
                                Objetivo 1. Acabar com a pobreza em todas as suas formas, em todos os lugares
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo2" id="ods2">
                                <label class="form-check-label" for="ods2">
                                Objetivo 2. Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo3" id="ods3">
                                <label class="form-check-label" for="ods3">
                                Objetivo 3. Assegurar uma vida saudável e promover o bem-estar para todas e todos, em todas as idades
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo4" id="ods4">
                                <label class="form-check-label" for="ods4">
                                Objetivo 4. Assegurar a educação inclusiva e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todas e todos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo5" id="ods5">
                                <label class="form-check-label" for="ods5">
                                Objetivo 5. Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo6" id="ods6">
                                <label class="form-check-label" for="ods6">
                                Objetivo 6. Assegurar a disponibilidade e gestão sustentável da água e saneamento para todas e todos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo7" id="ods7">
                                <label class="form-check-label" for="ods7">
                                Objetivo 7. Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todas e todos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo8" id="ods8">
                                <label class="form-check-label" for="ods8">
                                Objetivo 8. Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todas e todos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo9" id="ods9">
                                <label class="form-check-label" for="ods9">
                                Objetivo 9. Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo10" id="ods10">
                                <label class="form-check-label" for="ods10">
                                Objetivo 10. Reduzir a desigualdade dentro dos países e entre eles
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo11" id="ods11">
                                <label class="form-check-label" for="ods11">
                                Objetivo 11. Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo12" id="ods12">
                                <label class="form-check-label" for="ods12">
                                Objetivo 12. Assegurar padrões de produção e de consumo sustentáveis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo13" id="ods13">
                                <label class="form-check-label" for="ods13">
                                Objetivo 13. Tomar medidas urgentes para combater a mudança climática e seus impactos (*) <br><span>
                                (*) Reconhecendo que a Convenção Quadro das Nações Unidas sobre Mudança do Clima [UNFCCC] é o fórum internacional intergovernamental primário para negociar a resposta global à mudança do clima.</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo14" id="ods14">
                                <label class="form-check-label" for="ods14">
                                Objetivo 14. Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo15" id="ods15">
                                <label class="form-check-label" for="ods15">
                                Objetivo 15. Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo16" id="ods16">
                                <label class="form-check-label" for="ods16">
                                Objetivo 16. Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo17" id="ods17">
                                <label class="form-check-label" for="ods17">
                                Objetivo 17. Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável
                                </label>
                            </div>
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="next">Próximo</button>
                                </div>
                            </div>
                        </div>

                        <!-- DESCRIÇÃO PROJETO -->
                        <div class="step" id="step_13">
                            <div class="row align-items-end">
                                <h3>Descrição do projeto</h3>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputAtividade" class="form-label">Descreva as atividades de sua organização em até 100 caracteres <span>(contando pontuação e espaço)</sapn></label>
                                        <textarea class="form-control" id="inputAtividade" rows="2" maxlength="100"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputPalavrasChaves" class="form-label">Relacione três palavras-chave que melhor identificam a atuação de sua organização.</label>
                                        <textarea class="form-control" id="inputPalavrasChaves" rows="2" maxlength="100"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputPdf" class="form-label">Adicione uma apresentação em PDF do seu negócio</label>
                                        <input class="form-control" type="file" id="inputPdf" accept="application/pdf">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="url-youtube url-vimeo" class="form-label">Vídeo de Apresentação: Se tiver um vídeo que explique seu negócio e sua solução aproveite para compartilhá-lo aqui!</label>
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="url-youtube">https://youtube.com/embed/</span>
                                                    <input type="text" class="form-control" id="url-youtube" aria-describedby="url-youtube" placeholder="zaLS6eMDL1I">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <span class="input-group-text" id="url-vimeo">https://vimeo.com/</span>
                                                    <input type="text" class="form-control" id="url-vimeo" aria-describedby="url-vimeo" placeholder="811974995">
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="url-site url-facebook url-instagram url-linkedin" class="form-label">Identifique o Site e Redes Sociais de seu negócio, se tiver</label>
                                        <div class="row align-items-end">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="inputSite" class="form-label">Site</label>
                                                    <input type="url" class="form-control" id="inputSite" placeholder="https://seusite.com.br">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="url-facebook">https://web.facebook.com/</span>
                                                    <input type="text" class="form-control" id="url-facebook" aria-describedby="url-facebook" placeholder="nomepagina">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="url-instagram">https://www.instagram.com/</span>
                                                    <input type="text" class="form-control" id="url-instagram" aria-describedby="url-instagram" placeholder="nomepagina">
                                                </div>
                                            </div>                                            
                                            <div class="col-md-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="url-linkedin">https://www.linkedin.com/</span>
                                                    <input type="text" class="form-control" id="url-linkedin" aria-describedby="url-linkedin" placeholder="/exemplo/nomepagina">
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Concordância com os Termo de Uso, Política de Privacidade de Dados e Termo de Uso de Imagem" id="politicaChecked" checked>
                                        <label class="form-check-label" for="politicaChecked">
                                            Concordância com os <a href="modelo-pagina-institucional.php">Termo de Uso, Política de Privacidade de Dados e Termo de Uso de Imagem</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Concordância Linha da transmissão" id="whatsappChecked">
                                        <label class="form-check-label" for="whatsappChecked">
                                            Concordo em  receber notícias e novidades por WhatsApp 
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row justify-content-md-between align-items-center text-center botoes-steps">
                                <div class="col">
                                    <button class="btn btn-outline-secondary" id="prev">Anterior</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" id="enviar">Enviar</button>
                                </div>
                            </div>
                            
                        </div>
                        

                    </form>
                </div>
            </div>
            
        </div>
    </section>

</main>
<?php
// footer
include 'footer.php';
?>
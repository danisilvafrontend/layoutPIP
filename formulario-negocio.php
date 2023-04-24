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

                        <!-- PERFIL EMPRESA -->
                        <div class="step" id="step_1">
                            <h3>Perfil da empresa</h3>
                            <p>Selecione o perfil da empresa - momento da maturidade empresarial</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfil" id="ideacao">
                                <label class="form-check-label" for="ideacao">
                                <strong>Ideação</strong> – dando os primeiros passos na formação da empresa, ainda sem formalização, mas com MVP sendo testado.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfil" id="operacao">
                                <label class="form-check-label" for="operacao">
                                <strong>Operação</strong> – empresa já formalizada, com faturamento e modelo de negócios validados.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perfil" id="tracao" >
                                <label class="form-check-label" for="tracao">
                                <strong>Tração</strong> – empresa já formalizada, atuando no mercado há mais de um ano, com ou não entrada de investimento, e com escala de vendas em crescimento.
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
                        
                        <!-- DADOS DO RESPONSÁVEL -->
                        <div class="step" id="step_2">
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
                        <div class="step" id="step_3">
                            <h3>Dados do Negócio</h3>
                            <div class="row align-items-end">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputRazaoSocial" class="form-label">Razão Social</label>
                                        <input type="text" class="form-control" id="inputRazaoSocial">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputCnpj" class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" id="inputCnpj">
                                    </div>
                                </div>     
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputDataFundacao" class="form-label">Data de Fundação</label>
                                        <input type="date" class="form-control" id="inputDataFundacao">
                                    </div>
                                </div>          
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputEndereco" class="form-label">Endereço</label>
                                        <input type="text" class="form-control" id="inputEndereco">
                                    </div>
                                </div>                              
                                <div class="col-md-6">
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
                                <div class="col-md-6">
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
                        <div class="step" id="step_4">
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
                        <div class="step" id="step_5">
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
                        <div class="step" id="step_6">
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
                        <div class="step" id="step_7">                            
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
                        <div class="step" id="step_8">
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
                        <div class="step" id="step_9">
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
                        <div class="step" id="step_10">
                            <h3>Objetivos do Desenvolvimento Sustentável</h3>      
                            <p>Assinale todas as alternativas pertinentes a sua solução está vinculada.</p>                            
                            
                            <!-- ODS 01 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo1" id="ods1">
                                <label class="form-check-label" for="ods1">
                                Objetivo 1. Acabar com a pobreza em todas as suas formas, em todos os lugares
                                </label>

                                <!-- SUBCATEGORIAS ODS 01 -->
                                <div class="sub-step" id="step-10-1">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>                            
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.1" id="subOds1-1">
                                        <label class="form-check-label" for="subOds1-1">
                                        1.1 Até 2030, erradicar a pobreza extrema para todas as pessoas em todos os lugares, atualmente medida como pessoas vivendo com menos de US$ 1,90 por dia
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.2" id="subOds1-2">
                                        <label class="form-check-label" for="subOds1-2">
                                        1.2 Até 2030, reduzir pelo menos à metade a proporção de homens, mulheres e crianças, de todas as idades, que vivem na pobreza, em todas as suas dimensões, de acordo com as definições nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.3" id="subOds1-3">
                                        <label class="form-check-label" for="subOds1-3">
                                        1.3 Implementar, em nível nacional, medidas e sistemas de proteção social adequados, para todos, incluindo pisos, e até 2030 atingir a cobertura substancial dos pobres e vulneráveis
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.4" id="subOds1-4">
                                        <label class="form-check-label" for="subOds1-4">
                                        1.4 Até 2030, garantir que todos os homens e mulheres, particularmente os pobres e vulneráveis, tenham direitos iguais aos recursos econômicos, bem como o acesso a serviços básicos, propriedade e controle sobre a terra e outras formas de propriedade, herança, recursos naturais, novas tecnologias apropriadas e serviços financeiros, incluindo microfinanças
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.5" id="subOds1-5">
                                        <label class="form-check-label" for="subOds1-5">
                                        1.5 Até 2030, construir a resiliência dos pobres e daqueles em situação de vulnerabilidade, e reduzir a exposição e vulnerabilidade destes a eventos extremos relacionados com o clima e outros choques e desastres econômicos, sociais e ambientais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.a" id="subOds1-a">
                                        <label class="form-check-label" for="subOds1-a">
                                        1.a Garantir uma mobilização significativa de recursos a partir de uma variedade de fontes, inclusive por meio do reforço da cooperação para o desenvolvimento, para proporcionar meios adequados e previsíveis para que os países em desenvolvimento, em particular os países menos desenvolvidos, implementem programas e políticas para acabar com a pobreza em todas as suas dimensões
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1.b" id="subOds1-b">
                                        <label class="form-check-label" for="subOds1-b">
                                        1.b Criar marcos políticos sólidos em níveis nacional, regional e internacional, com base em estratégias de desenvolvimento a favor dos pobres e sensíveis a gênero, para apoiar investimentos acelerados nas ações de erradicação da pobreza
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- ODS 02 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo2" id="ods2">
                                <label class="form-check-label" for="ods2">
                                Objetivo 2. Acabar com a fome, alcançar a segurança alimentar e melhoria da nutrição e promover a agricultura sustentável
                                </label>

                                <!-- SUBCATEGORIAS ODS 02 -->
                                <div class="sub-step" id="step-10-2">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.1" id="subOds2-1">
                                        <label class="form-check-label" for="subOds2-1">
                                        2.1 Até 2030, acabar com a fome e garantir o acesso de todas as pessoas, em particular os pobres e pessoas em situações vulneráveis, incluindo crianças, a alimentos seguros, nutritivos e suficientes durante todo o ano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.2" id="subOds2-2">
                                        <label class="form-check-label" for="subOds2-2">
                                        2.2 Até 2030, acabar com todas as formas de desnutrição, incluindo atingir, até 2025, as metas acordadas internacionalmente sobre nanismo e caquexia em crianças menores de cinco anos de idade, e atender às necessidades nutricionais dos adolescentes, mulheres grávidas e lactantes e pessoas idosas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.3" id="subOds2-3">
                                        <label class="form-check-label" for="subOds2-3">
                                        2.3 Até 2030, dobrar a produtividade agrícola e a renda dos pequenos produtores de alimentos, particularmente das mulheres, povos indígenas, agricultores familiares, pastores e pescadores, inclusive por meio de acesso seguro e igual à terra, outros recursos produtivos e insumos, conhecimento, serviços financeiros, mercados e oportunidades de agregação de valor e de emprego não agrícola
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.4" id="subOds2-4">
                                        <label class="form-check-label" for="subOds2-4">
                                        2.4 Até 2030, garantir sistemas sustentáveis de produção de alimentos e implementar práticas agrícolas resilientes, que aumentem a produtividade e a produção, que ajudem a manter os ecossistemas, que fortaleçam a capacidade de adaptação às mudanças climáticas, às condições meteorológicas extremas, secas, inundações e outros desastres, e que melhorem progressivamente a qualidade da terra e do solo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.5" id="subOds2-5">
                                        <label class="form-check-label" for="subOds2-5">
                                        2.5 Até 2020, manter a diversidade genética de sementes, plantas cultivadas, animais de criação e domesticados e suas respectivas espécies selvagens, inclusive por meio de bancos de sementes e plantas diversificados e bem geridos em nível nacional, regional e internacional, e garantir o acesso e a repartição justa e equitativa dos benefícios decorrentes da utilização dos recursos genéticos e conhecimentos tradicionais associados, como acordado internacionalmente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.a" id="subOds2-a">
                                        <label class="form-check-label" for="subOds2-a">
                                        2.a Aumentar o investimento, inclusive via o reforço da cooperação internacional, em infraestrutura rural, pesquisa e extensão de serviços agrícolas, desenvolvimento de tecnologia, e os bancos de genes de plantas e animais, para aumentar a capacidade de produção agrícola nos países em desenvolvimento, em particular nos países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.b" id="subOds2-b">
                                        <label class="form-check-label" for="subOds2-b">
                                        2.b Corrigir e prevenir as restrições ao comércio e distorções nos mercados agrícolas mundiais, incluindo a eliminação paralela de todas as formas de subsídios à exportação e todas as medidas de exportação com efeito equivalente, de acordo com o mandato da Rodada de Desenvolvimento de Doha
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2.c" id="subOds2-c">
                                        <label class="form-check-label" for="subOds2-c">
                                        2.c Adotar medidas para garantir o funcionamento adequado dos mercados de commodities de alimentos e seus derivados, e facilitar o acesso oportuno à informação de mercado, inclusive sobre as reservas de alimentos, a fim de ajudar a limitar a volatilidade extrema dos preços dos alimentos
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 03 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo3" id="ods3">
                                <label class="form-check-label" for="ods3">
                                Objetivo 3. Assegurar uma vida saudável e promover o bem-estar para todas e todos, em todas as idades
                                </label>
                                
                                <!-- SUBCATEGORIAS ODS 03 -->
                                <div class="sub-step" id="step-10-3">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.1" id="subOds3-1">
                                        <label class="form-check-label" for="subOds3-1">
                                        3.1 Até 2030, reduzir a taxa de mortalidade materna global para menos de 70 mortes por 100.000 nascidos vivos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.2" id="subOds3-2">
                                        <label class="form-check-label" for="subOds3-2">
                                        3.2 Até 2030, acabar com as mortes evitáveis de recém-nascidos e crianças menores de 5 anos, com todos os países objetivando reduzir a mortalidade neonatal para pelo menos 12 por 1.000 nascidos vivos e a mortalidade de crianças menores de 5 anos para pelo menos 25 por 1.000 nascidos vivos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.3" id="subOds3-3">
                                        <label class="form-check-label" for="subOds3-3">
                                        3.3 Até 2030, acabar com as epidemias de AIDS, tuberculose, malária e doenças tropicais negligenciadas, e combater a hepatite, doenças transmitidas pela água, e outras doenças transmissíveis
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.4" id="subOds3-4">
                                        <label class="form-check-label" for="subOds3-4">
                                        3.4 Até 2030, reduzir em um terço a mortalidade prematura por doenças não transmissíveis via prevenção e tratamento, e promover a saúde mental e o bem-estar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.5" id="subOds3-5">
                                        <label class="form-check-label" for="subOds3-5">
                                        3.5 Reforçar a prevenção e o tratamento do abuso de substâncias, incluindo o abuso de drogas entorpecentes e uso nocivo do álcool
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.6" id="subOds3-6">
                                        <label class="form-check-label" for="subOds3-6">
                                        3.6 Até 2020, reduzir pela metade as mortes e os ferimentos globais por acidentes em estradas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.7" id="subOds3-7">
                                        <label class="form-check-label" for="subOds3-7">
                                        3.7 Até 2030, assegurar o acesso universal aos serviços de saúde sexual e reprodutiva, incluindo o planejamento familiar, informação e educação, bem como a integração da saúde reprodutiva em estratégias e programas nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.8" id="subOds3-8">
                                        <label class="form-check-label" for="subOds3-8">
                                        3.8 Atingir a cobertura universal de saúde, incluindo a proteção do risco financeiro, o acesso a serviços de saúde essenciais de qualidade e o acesso a medicamentos e vacinas essenciais seguros, eficazes, de qualidade e a preços acessíveis para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.9" id="subOds3-9">
                                        <label class="form-check-label" for="subOds3-9">
                                        3.9 Até 2030, reduzir substancialmente o número de mortes e doenças por produtos químicos perigosos, contaminação e poluição do ar e água do solo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.a" id="subOds3-a">
                                        <label class="form-check-label" for="subOds3-a">
                                        3.a Fortalecer a implementação da Convenção-Quadro para o Controle do Tabaco em todos os países, conforme apropriado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.b" id="subOds3-b">
                                        <label class="form-check-label" for="subOds3-b">
                                        3.b Apoiar a pesquisa e o desenvolvimento de vacinas e medicamentos para as doenças transmissíveis e não transmissíveis, que afetam principalmente os países em desenvolvimento, proporcionar o acesso a medicamentos e vacinas essenciais a preços acessíveis, de acordo com a Declaração de Doha, que afirma o direito dos países em desenvolvimento de utilizarem plenamente as disposições do acordo TRIPS sobre flexibilidades para proteger a saúde pública e, em particular, proporcionar o acesso a medicamentos para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.c" id="subOds3-c">
                                        <label class="form-check-label" for="subOds3-c">
                                        3.c Aumentar substancialmente o financiamento da saúde e o recrutamento, desenvolvimento e formação, e retenção do pessoal de saúde nos países em desenvolvimento, especialmente nos países menos desenvolvidos e nos pequenos Estados insulares em desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3.d" id="subOds3-d">
                                        <label class="form-check-label" for="subOds3-d">
                                        3.d Reforçar a capacidade de todos os países, particularmente os países em desenvolvimento, para o alerta precoce, redução de riscos e gerenciamento de riscos nacionais e globais de saúde
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 04 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo4" id="ods4">
                                <label class="form-check-label" for="ods4">
                                Objetivo 4. Assegurar a educação inclusiva e equitativa e de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todas e todos
                                </label>
                                <!-- SUBCATEGORIAS ODS 04 -->
                                <div class="sub-step" id="step-10-4">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.1" id="subOds4-1">
                                        <label class="form-check-label" for="subOds4-1">
                                        4.1 Até 2030, garantir que todas as meninas e meninos completem o ensino primário e secundário livre, equitativo e de qualidade, que conduza a resultados de aprendizagem relevantes e eficazes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.2" id="subOds4-2">
                                        <label class="form-check-label" for="subOds4-2">
                                        4.2 Até 2030, garantir que todos as meninas e meninos tenham acesso a um desenvolvimento de qualidade na primeira infância, cuidados e educação pré-escolar, de modo que eles estejam prontos para o ensino primário
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.3" id="subOds4-3">
                                        <label class="form-check-label" for="subOds4-3">
                                        4.3 Até 2030, assegurar a igualdade de acesso para todos os homens e mulheres à educação técnica, profissional e superior de qualidade, a preços acessíveis, incluindo universidade
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.4" id="subOds4-4">
                                        <label class="form-check-label" for="subOds4-4">
                                        4.4 Até 2030, aumentar substancialmente o número de jovens e adultos que tenham habilidades relevantes, inclusive competências técnicas e profissionais, para emprego, trabalho decente e empreendedorismo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.5" id="subOds4-5">
                                        <label class="form-check-label" for="subOds4-5">
                                        4.5 Até 2030, eliminar as disparidades de gênero na educação e garantir a igualdade de acesso a todos os níveis de educação e formação profissional para os mais vulneráveis, incluindo as pessoas com deficiência, povos indígenas e as crianças em situação de vulnerabilidade
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.6" id="subOds4-6">
                                        <label class="form-check-label" for="subOds4-6">
                                        4.6 Até 2030, garantir que todos os jovens e uma substancial proporção dos adultos, homens e mulheres estejam alfabetizados e tenham adquirido o conhecimento básico de matemática
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.a" id="subOds4-a">
                                        <label class="form-check-label" for="subOds4-a">
                                        4.a Construir e melhorar instalações físicas para educação, apropriadas para crianças e sensíveis às deficiências e ao gênero, e que proporcionem ambientes de aprendizagem seguros e não violentos, inclusivos e eficazes para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.b" id="subOds4-b">
                                        <label class="form-check-label" for="subOds4-b">
                                        4.b Até 2020, substancialmente ampliar globalmente o número de bolsas de estudo para os países em desenvolvimento, em particular os países menos desenvolvidos, pequenos Estados insulares em desenvolvimento e os países africanos, para o ensino superior, incluindo programas de formação profissional, de tecnologia da informação e da comunicação, técnicos, de engenharia e programas científicos em países desenvolvidos e outros países em desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4.c" id="subOds4-c">
                                        <label class="form-check-label" for="subOds4-c">
                                        4.c Até 2030, substancialmente aumentar o contingente de professores qualificados, inclusive por meio da cooperação internacional para a formação de professores, nos países em desenvolvimento, especialmente os países menos desenvolvidos e pequenos Estados insulares em desenvolvimento
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 05 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo5" id="ods5">
                                <label class="form-check-label" for="ods5">
                                Objetivo 5. Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas
                                </label>
                                <!-- SUBCATEGORIAS ODS 05 -->
                                <div class="sub-step" id="step-10-5">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.1" id="subOds5-1">
                                        <label class="form-check-label" for="subOds5-1">
                                        5.1 Acabar com todas as formas de discriminação contra todas as mulheres e meninas em toda parte
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.2" id="subOds5-2">
                                        <label class="form-check-label" for="subOds5-2">
                                        5.2 Eliminar todas as formas de violência contra todas as mulheres e meninas nas esferas públicas e privadas, incluindo o tráfico e exploração sexual e de outros tipos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.3" id="subOds5-3">
                                        <label class="form-check-label" for="subOds5-3">
                                        5.3 Eliminar todas as práticas nocivas, como os casamentos prematuros, forçados e de crianças e mutilações genitais femininas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.4" id="subOds5-4">
                                        <label class="form-check-label" for="subOds5-4">
                                        5.4 Reconhecer e valorizar o trabalho de assistência e doméstico não remunerado, por meio da disponibilização de serviços públicos, infraestrutura e políticas de proteção social, bem como a promoção da responsabilidade compartilhada dentro do lar e da família, conforme os contextos nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.5" id="subOds5-5">
                                        <label class="form-check-label" for="subOds5-5">
                                        5.5 Garantir a participação plena e efetiva das mulheres e a igualdade de oportunidades para a liderança em todos os níveis de tomada de decisão na vida política, econômica e pública
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.6" id="subOds5-6">
                                        <label class="form-check-label" for="subOds5-6">
                                        5.6 Assegurar o acesso universal à saúde sexual e reprodutiva e os direitos reprodutivos, como acordado em conformidade com o Programa de Ação da Conferência Internacional sobre População e Desenvolvimento e com a Plataforma de Ação de Pequim e os documentos resultantes de suas conferências de revisão
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.a" id="subOds5-a">
                                        <label class="form-check-label" for="subOds5-a">
                                        5.a Realizar reformas para dar às mulheres direitos iguais aos recursos econômicos, bem como o acesso a propriedade e controle sobre a terra e outras formas de propriedade, serviços financeiros, herança e os recursos naturais, de acordo com as leis nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.b" id="subOds5-b">
                                        <label class="form-check-label" for="subOds5-b">
                                        5.b Aumentar o uso de tecnologias de base, em particular as tecnologias de informação e comunicação, para promover o empoderamento das mulheres
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="5.c" id="subOds5-c">
                                        <label class="form-check-label" for="subOds5-c">
                                        5.b Aumentar o uso de tecnologias de base, em particular as tecnologias de informação e comunicação, para promover o empoderamento das mulheres
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 06 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo6" id="ods6">
                                <label class="form-check-label" for="ods6">
                                Objetivo 6. Assegurar a disponibilidade e gestão sustentável da água e saneamento para todas e todos
                                </label>
                                <!-- SUBCATEGORIAS ODS 06 -->
                                <div class="sub-step" id="step-10-6">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.1" id="subOds6-1">
                                        <label class="form-check-label" for="subOds6-1">
                                        6.1 Até 2030, alcançar o acesso universal e equitativo a água potável e segura para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.2" id="subOds6-2">
                                        <label class="form-check-label" for="subOds6-2">
                                        6.2 Até 2030, alcançar o acesso a saneamento e higiene adequados e equitativos para todos, e acabar com a defecação a céu aberto, com especial atenção para as necessidades das mulheres e meninas e daqueles em situação de vulnerabilidade
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.3" id="subOds6-3">
                                        <label class="form-check-label" for="subOds6-3">
                                        6.3 Até 2030, melhorar a qualidade da água, reduzindo a poluição, eliminando despejo e minimizando a liberação de produtos químicos e materiais perigosos, reduzindo à metade a proporção de águas residuais não tratadas e aumentando substancialmente a reciclagem e reutilização segura globalmente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.4" id="subOds6-4">
                                        <label class="form-check-label" for="subOds6-4">
                                        6.4 Até 2030, aumentar substancialmente a eficiência do uso da água em todos os setores e assegurar retiradas sustentáveis e o abastecimento de água doce para enfrentar a escassez de água, e reduzir substancialmente o número de pessoas que sofrem com a escassez de água
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.5" id="subOds6-5">
                                        <label class="form-check-label" for="subOds6-5">
                                        6.5 Até 2030, implementar a gestão integrada dos recursos hídricos em todos os níveis, inclusive via cooperação transfronteiriça, conforme apropriado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.6" id="subOds6-6">
                                        <label class="form-check-label" for="subOds6-6">
                                        6.6 Até 2020, proteger e restaurar ecossistemas relacionados com a água, incluindo montanhas, florestas, zonas úmidas, rios, aquíferos e lagos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.a" id="subOds6-a">
                                        <label class="form-check-label" for="subOds6-a">
                                        6.a Até 2030, ampliar a cooperação internacional e o apoio à capacitação para os países em desenvolvimento em atividades e programas relacionados à água e saneamento, incluindo a coleta de água, a dessalinização, a eficiência no uso da água, o tratamento de efluentes, a reciclagem e as tecnologias de reuso
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="6.b" id="subOds6-b">
                                        <label class="form-check-label" for="subOds6-b">
                                        6.b Apoiar e fortalecer a participação das comunidades locais, para melhorar a gestão da água e do saneamento
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 07 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo7" id="ods7">
                                <label class="form-check-label" for="ods7">
                                Objetivo 7. Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todas e todos
                                </label>
                                <!-- SUBCATEGORIAS ODS 07 -->
                                <div class="sub-step" id="step-10-7">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="7.1" id="subOds7-1">
                                        <label class="form-check-label" for="subOds7-1">
                                        7.1 Até 2030, assegurar o acesso universal, confiável, moderno e a preços acessíveis a serviços de energia
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="7.2" id="subOds7-2">
                                        <label class="form-check-label" for="subOds7-2">
                                        7.2 Até 2030, aumentar substancialmente a participação de energias renováveis na matriz energética global
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="7.3" id="subOds7-3">
                                        <label class="form-check-label" for="subOds7-3">
                                        7.3 Até 2030, dobrar a taxa global de melhoria da eficiência energética
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="7.a" id="subOds7-a">
                                        <label class="form-check-label" for="subOds7-a">
                                        7.a Até 2030, reforçar a cooperação internacional para facilitar o acesso a pesquisa e tecnologias de energia limpa, incluindo energias renováveis, eficiência energética e tecnologias de combustíveis fósseis avançadas e mais limpas, e promover o investimento em infraestrutura de energia e em tecnologias de energia limpa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="7.b" id="subOds7-b">
                                        <label class="form-check-label" for="subOds7-b">
                                        7.b Até 2030, expandir a infraestrutura e modernizar a tecnologia para o fornecimento de serviços de energia modernos e sustentáveis para todos nos países em desenvolvimento, particularmente nos países menos desenvolvidos, nos pequenos Estados insulares em desenvolvimento e nos países em desenvolvimento sem litoral, de acordo com seus respectivos programas de apoio
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 08 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo8" id="ods8">
                                <label class="form-check-label" for="ods8">
                                Objetivo 8. Promover o crescimento econômico sustentado, inclusivo e sustentável, emprego pleno e produtivo e trabalho decente para todas e todos
                                </label>
                                <!-- SUBCATEGORIAS ODS 08 -->
                                <div class="sub-step" id="step-10-8">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.1" id="subOds8-1">
                                        <label class="form-check-label" for="subOds8-1">
                                        8.1 Sustentar o crescimento econômico per capita de acordo com as circunstâncias nacionais e, em particular, um crescimento anual de pelo menos 7% do produto interno bruto [PIB] nos países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.2" id="subOds8-2">
                                        <label class="form-check-label" for="subOds8-2">
                                        8.2 Atingir níveis mais elevados de produtividade das economias por meio da diversificação, modernização tecnológica e inovação, inclusive por meio de um foco em setores de alto valor agregado e dos setores intensivos em mão de obra
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.3" id="subOds8-3">
                                        <label class="form-check-label" for="subOds8-3">
                                        8.3 Promover políticas orientadas para o desenvolvimento que apoiem as atividades produtivas, geração de emprego decente, empreendedorismo, criatividade e inovação, e incentivar a formalização e o crescimento das micro, pequenas e médias empresas, inclusive por meio do acesso a serviços financeiros
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.4" id="subOds8-4">
                                        <label class="form-check-label" for="subOds8-4">
                                        8.4 Melhorar progressivamente, até 2030, a eficiência dos recursos globais no consumo e na produção, e empenhar-se para dissociar o crescimento econômico da degradação ambiental, de acordo com o Plano Decenal de Programas sobre Produção e Consumo Sustentáveis, com os países desenvolvidos assumindo a liderança
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.5" id="subOds8-5">
                                        <label class="form-check-label" for="subOds8-5">
                                        8.5 Até 2030, alcançar o emprego pleno e produtivo e trabalho decente para todas as mulheres e homens, inclusive para os jovens e as pessoas com deficiência, e remuneração igual para trabalho de igual valor
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.6" id="subOds8-6">
                                        <label class="form-check-label" for="subOds8-6">
                                        8.6 Até 2020, reduzir substancialmente a proporção de jovens sem emprego, educação ou formação
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.7" id="subOds8-7">
                                        <label class="form-check-label" for="subOds8-7">
                                        8.7 Tomar medidas imediatas e eficazes para erradicar o trabalho forçado, acabar com a escravidão moderna e o tráfico de pessoas, e assegurar a proibição e eliminação das piores formas de trabalho infantil, incluindo recrutamento e utilização de crianças-soldado, e até 2025 acabar com o trabalho infantil em todas as suas formas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.8" id="subOds8-8">
                                        <label class="form-check-label" for="subOds8-8">
                                        8.8 Proteger os direitos trabalhistas e promover ambientes de trabalho seguros e protegidos para todos os trabalhadores, incluindo os trabalhadores migrantes, em particular as mulheres migrantes, e pessoas em empregos precários
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.9" id="subOds8-9">
                                        <label class="form-check-label" for="subOds8-9">
                                        8.9 Até 2030, elaborar e implementar políticas para promover o turismo sustentável, que gera empregos e promove a cultura e os produtos locais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.10" id="subOds8-10">
                                        <label class="form-check-label" for="subOds8-10">
                                        8.10 Fortalecer a capacidade das instituições financeiras nacionais para incentivar a expansão do acesso aos serviços bancários, de seguros e financeiros para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.a" id="subOds8-a">
                                        <label class="form-check-label" for="subOds8-a">
                                        8.a Aumentar o apoio da Iniciativa de Ajuda para o Comércio [Aid for Trade] para os países em desenvolvimento, particularmente os países menos desenvolvidos, inclusive por meio do Quadro Integrado Reforçado para a Assistência Técnica Relacionada com o Comércio para os países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="8.b" id="subOds8-b">
                                        <label class="form-check-label" for="subOds8-b">
                                        8.b Até 2020, desenvolver e operacionalizar uma estratégia global para o emprego dos jovens e implementar o Pacto Mundial para o Emprego da Organização Internacional do Trabalho [OIT]
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 09 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo9" id="ods9">
                                <label class="form-check-label" for="ods9">
                                Objetivo 9. Construir infraestruturas resilientes, promover a industrialização inclusiva e sustentável e fomentar a inovação
                                </label>
                                <!-- SUBCATEGORIAS ODS 09 -->
                                <div class="sub-step" id="step-10-9">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.1" id="subOds9-1">
                                        <label class="form-check-label" for="subOds9-1">
                                        9.1 Desenvolver infraestrutura de qualidade, confiável, sustentável e resiliente, incluindo infraestrutura regional e transfronteiriça, para apoiar o desenvolvimento econômico e o bem-estar humano, com foco no acesso equitativo e a preços acessíveis para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.2" id="subOds9-2">
                                        <label class="form-check-label" for="subOds9-2">
                                        9.2 Promover a industrialização inclusiva e sustentável e, até 2030, aumentar significativamente a participação da indústria no setor de emprego e no PIB, de acordo com as circunstâncias nacionais, e dobrar sua participação nos países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.3" id="subOds9-3">
                                        <label class="form-check-label" for="subOds9-3">
                                        9.3 Aumentar o acesso das pequenas indústrias e outras empresas, particularmente em países em desenvolvimento, aos serviços financeiros, incluindo crédito acessível e sua integração em cadeias de valor e mercados
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.4" id="subOds9-4">
                                        <label class="form-check-label" for="subOds9-4">
                                        9.4 Até 2030, modernizar a infraestrutura e reabilitar as indústrias para torná-las sustentáveis, com eficiência aumentada no uso de recursos e maior adoção de tecnologias e processos industriais limpos e ambientalmente corretos; com todos os países atuando de acordo com suas respectivas capacidades
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.5" id="subOds9-5">
                                        <label class="form-check-label" for="subOds9-5">
                                        9.5 Fortalecer a pesquisa científica, melhorar as capacidades tecnológicas de setores industriais em todos os países, particularmente os países em desenvolvimento, inclusive, até 2030, incentivando a inovação e aumentando substancialmente o número de trabalhadores de pesquisa e desenvolvimento por milhão de pessoas e os gastos público e privado em pesquisa e desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.a" id="subOds9-a">
                                        <label class="form-check-label" for="subOds9-a">
                                        9.a Facilitar o desenvolvimento de infraestrutura sustentável e resiliente em países em desenvolvimento, por meio de maior apoio financeiro, tecnológico e técnico aos países africanos, aos países menos desenvolvidos, aos países em desenvolvimento sem litoral e aos pequenos Estados insulares em desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.b" id="subOds9-b">
                                        <label class="form-check-label" for="subOds9-b">
                                        9.b Apoiar o desenvolvimento tecnológico, a pesquisa e a inovação nacionais nos países em desenvolvimento, inclusive garantindo um ambiente político propício para, entre outras coisas, a diversificação industrial e a agregação de valor às commodities
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="9.c" id="subOds9-c">
                                        <label class="form-check-label" for="subOds9-c">
                                        9.c Aumentar significativamente o acesso às tecnologias de informação e comunicação e se empenhar para oferecer acesso universal e a preços acessíveis à internet nos países menos desenvolvidos
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 10 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo10" id="ods10">
                                <label class="form-check-label" for="ods10">
                                Objetivo 10. Reduzir a desigualdade dentro dos países e entre eles
                                </label>
                                <!-- SUBCATEGORIAS ODS 10 -->
                                <div class="sub-step" id="step-10-10">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.1" id="subOds10-1">
                                        <label class="form-check-label" for="subOds10-1">
                                        10.1 Até 2030, progressivamente alcançar e sustentar o crescimento da renda dos 40% da população mais pobre a uma taxa maior que a média nacional
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.2" id="subOds10-2">
                                        <label class="form-check-label" for="subOds10-2">
                                        10.2 Até 2030, empoderar e promover a inclusão social, econômica e política de todos, independentemente da idade, gênero, deficiência, raça, etnia, origem, religião, condição econômica ou outra
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.3" id="subOds10-3">
                                        <label class="form-check-label" for="subOds10-3">
                                        10.3 Garantir a igualdade de oportunidades e reduzir as desigualdades de resultados, inclusive por meio da eliminação de leis, políticas e práticas discriminatórias e da promoção de legislação, políticas e ações adequadas a este respeito
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.4" id="subOds10-4">
                                        <label class="form-check-label" for="subOds10-4">
                                        10.4 Adotar políticas, especialmente fiscal, salarial e de proteção social, e alcançar progressivamente uma maior igualdade
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.5" id="subOds10-5">
                                        <label class="form-check-label" for="subOds10-5">
                                        10.5 Melhorar a regulamentação e monitoramento dos mercados e instituições financeiras globais e fortalecer a implementação de tais regulamentações
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.6" id="subOds10-6">
                                        <label class="form-check-label" for="subOds10-6">
                                        10.6 Assegurar uma representação e voz mais forte dos países em desenvolvimento em tomadas de decisão nas instituições econômicas e financeiras internacionais globais, a fim de produzir instituições mais eficazes, críveis, responsáveis e legítimas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.7" id="subOds10-7">
                                        <label class="form-check-label" for="subOds10-7">
                                        10.7 Facilitar a migração e a mobilidade ordenada, segura, regular e responsável das pessoas, inclusive por meio da implementação de políticas de migração planejadas e bem geridas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.a" id="subOds10-a">
                                        <label class="form-check-label" for="subOds10-a">
                                        10.a Implementar o princípio do tratamento especial e diferenciado para países em desenvolvimento, em particular os países menos desenvolvidos, em conformidade com os acordos da OMC
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.b" id="subOds10-b">
                                        <label class="form-check-label" for="subOds10-b">
                                        10.b Incentivar a assistência oficial ao desenvolvimento e fluxos financeiros, incluindo o investimento externo direto, para os Estados onde a necessidade é maior, em particular os países menos desenvolvidos, os países africanos, os pequenos Estados insulares em desenvolvimento e os países em desenvolvimento sem litoral, de acordo com seus planos e programas nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="10.c" id="subOds10-c">
                                        <label class="form-check-label" for="subOds10-c">
                                        10.c Até 2030, reduzir para menos de 3% os custos de transação de remessas dos migrantes e eliminar os corredores de remessas com custos superiores a 5%
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 11 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo11" id="ods11">
                                <label class="form-check-label" for="ods11">
                                Objetivo 11. Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis
                                </label>
                                <!-- SUBCATEGORIAS ODS 11 -->
                                <div class="sub-step" id="step-10-11">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.1" id="subOds11-1">
                                        <label class="form-check-label" for="subOds11-1">
                                        11.1 Até 2030, garantir o acesso de todos à habitação segura, adequada e a preço acessível, e aos serviços básicos e urbanizar as favelas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.2" id="subOds11-2">
                                        <label class="form-check-label" for="subOds11-2">
                                        11.2 Até 2030, proporcionar o acesso a sistemas de transporte seguros, acessíveis, sustentáveis e a preço acessível para todos, melhorando a segurança rodoviária por meio da expansão dos transportes públicos, com especial atenção para as necessidades das pessoas em situação de vulnerabilidade, mulheres, crianças, pessoas com deficiência e idosos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.3" id="subOds11-3">
                                        <label class="form-check-label" for="subOds11-3">
                                        11.3 Até 2030, aumentar a urbanização inclusiva e sustentável, e as capacidades para o planejamento e gestão de assentamentos humanos participativos, integrados e sustentáveis, em todos os países
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.4" id="subOds11-4">
                                        <label class="form-check-label" for="subOds11-4">
                                        11.4 Fortalecer esforços para proteger e salvaguardar o patrimônio cultural e natural do mundo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.5" id="subOds11-5">
                                        <label class="form-check-label" for="subOds11-5">
                                        11.5 Até 2030, reduzir significativamente o número de mortes e o número de pessoas afetadas por catástrofes e substancialmente diminuir as perdas econômicas diretas causadas por elas em relação ao produto interno bruto global, incluindo os desastres relacionados à água, com o foco em proteger os pobres e as pessoas em situação de vulnerabilidade
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.6" id="subOds11-6">
                                        <label class="form-check-label" for="subOds11-6">
                                        11.6 Até 2030, reduzir o impacto ambiental negativo per capita das cidades, inclusive prestando especial atenção à qualidade do ar, gestão de resíduos municipais e outros
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.7" id="subOds11-7">
                                        <label class="form-check-label" for="subOds11-7">
                                        11.7 Até 2030, proporcionar o acesso universal a espaços públicos seguros, inclusivos, acessíveis e verdes, particularmente para as mulheres e crianças, pessoas idosas e pessoas com deficiência
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.a" id="subOds11-a">
                                        <label class="form-check-label" for="subOds11-a">
                                        11.a Apoiar relações econômicas, sociais e ambientais positivas entre áreas urbanas, periurbanas e rurais, reforçando o planejamento nacional e regional de desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.b" id="subOds11-b">
                                        <label class="form-check-label" for="subOds11-b">
                                        11.b Até 2020, aumentar substancialmente o número de cidades e assentamentos humanos adotando e implementando políticas e planos integrados para a inclusão, a eficiência dos recursos, mitigação e adaptação às mudanças climáticas, a resiliência a desastres; e desenvolver e implementar, de acordo com o Marco de Sendai para a Redução do Risco de Desastres 2015-2030, o gerenciamento holístico do risco de desastres em todos os níveis
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11.c" id="subOds11-c">
                                        <label class="form-check-label" for="subOds11-c">
                                        11.c Apoiar os países menos desenvolvidos, inclusive por meio de assistência técnica e financeira, para construções sustentáveis e resilientes, utilizando materiais locais
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 12 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo12" id="ods12">
                                <label class="form-check-label" for="ods12">
                                Objetivo 12. Assegurar padrões de produção e de consumo sustentáveis
                                </label>
                                <!-- SUBCATEGORIAS ODS 12 -->
                                <div class="sub-step" id="step-10-12">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.1" id="subOds12-1">
                                        <label class="form-check-label" for="subOds12-1">
                                        12.1 Implementar o Plano Decenal de Programas sobre Produção e Consumo Sustentáveis, com todos os países tomando medidas, e os países desenvolvidos assumindo a liderança, tendo em conta o desenvolvimento e as capacidades dos países em desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.2" id="subOds12-2">
                                        <label class="form-check-label" for="subOds12-2">
                                        12.2 Até 2030, alcançar a gestão sustentável e o uso eficiente dos recursos naturais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.3" id="subOds12-3">
                                        <label class="form-check-label" for="subOds12-3">
                                        12.3 Até 2030, reduzir pela metade o desperdício de alimentos per capita mundial, nos níveis de varejo e do consumidor, e reduzir as perdas de alimentos ao longo das cadeias de produção e abastecimento, incluindo as perdas pós-colheita
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.4" id="subOds12-4">
                                        <label class="form-check-label" for="subOds12-4">
                                        12.4 Até 2020, alcançar o manejo ambientalmente saudável dos produtos químicos e todos os resíduos, ao longo de todo o ciclo de vida destes, de acordo com os marcos internacionais acordados, e reduzir significativamente a liberação destes para o ar, água e solo, para minimizar seus impactos negativos sobre a saúde humana e o meio ambiente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.5" id="subOds12-5">
                                        <label class="form-check-label" for="subOds12-5">
                                        12.5 Até 2030, reduzir substancialmente a geração de resíduos por meio da prevenção, redução, reciclagem e reuso
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.6" id="subOds12-6">
                                        <label class="form-check-label" for="subOds12-6">
                                        12.6 Incentivar as empresas, especialmente as empresas grandes e transnacionais, a adotar práticas sustentáveis e a integrar informações de sustentabilidade em seu ciclo de relatórios
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.7" id="subOds12-7">
                                        <label class="form-check-label" for="subOds12-7">
                                        12.7 Promover práticas de compras públicas sustentáveis, de acordo com as políticas e prioridades nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.8" id="subOds12-8">
                                        <label class="form-check-label" for="subOds12-8">
                                        12.8 Até 2030, garantir que as pessoas, em todos os lugares, tenham informação relevante e conscientização para o desenvolvimento sustentável e estilos de vida em harmonia com a natureza
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.a" id="subOds12-a">
                                        <label class="form-check-label" for="subOds12-a">
                                        12.a Apoiar países em desenvolvimento a fortalecer suas capacidades científicas e tecnológicas para mudar para padrões mais sustentáveis de produção e consumo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.b" id="subOds12-b">
                                        <label class="form-check-label" for="subOds12-b">
                                        12.b Desenvolver e implementar ferramentas para monitorar os impactos do desenvolvimento sustentável para o turismo sustentável, que gera empregos, promove a cultura e os produtos locais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="12.c" id="subOds12-c">
                                        <label class="form-check-label" for="subOds12-c">
                                        12.c Racionalizar subsídios ineficientes aos combustíveis fósseis, que encorajam o consumo exagerado, eliminando as distorções de mercado, de acordo com as circunstâncias nacionais, inclusive por meio da reestruturação fiscal e a eliminação gradual desses subsídios prejudiciais, caso existam, para refletir os seus impactos ambientais, tendo plenamente em conta as necessidades específicas e condições dos países em desenvolvimento e minimizando os possíveis impactos adversos sobre o seu desenvolvimento de uma forma que proteja os pobres e as comunidades afetadas
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 13 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo13" id="ods13">
                                <label class="form-check-label" for="ods13">
                                Objetivo 13. Tomar medidas urgentes para combater a mudança climática e seus impactos (*) <br><span>
                                (*) Reconhecendo que a Convenção Quadro das Nações Unidas sobre Mudança do Clima [UNFCCC] é o fórum internacional intergovernamental primário para negociar a resposta global à mudança do clima.</span>
                                </label>
                                <!-- SUBCATEGORIAS ODS 13 -->
                                <div class="sub-step" id="step-10-13">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="13.1" id="subOds13-1">
                                        <label class="form-check-label" for="subOds13-1">
                                        13.1 Reforçar a resiliência e a capacidade de adaptação a riscos relacionados ao clima e às catástrofes naturais em todos os países
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="13.2" id="subOds13-2">
                                        <label class="form-check-label" for="subOds13-2">
                                        13.2 Integrar medidas da mudança do clima nas políticas, estratégias e planejamentos nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="13.3" id="subOds13-3">
                                        <label class="form-check-label" for="subOds13-3">
                                        13.3 Melhorar a educação, aumentar a conscientização e a capacidade humana e institucional sobre mitigação, adaptação, redução de impacto e alerta precoce da mudança do clima
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="13.a" id="subOds13-a">
                                        <label class="form-check-label" for="subOds13-a">
                                        13.a Implementar o compromisso assumido pelos países desenvolvidos partes da Convenção Quadro das Nações Unidas sobre Mudança do Clima [UNFCCC] para a meta de mobilizar conjuntamente US$ 100 bilhões por ano a partir de 2020, de todas as fontes, para atender às necessidades dos países em desenvolvimento, no contexto das ações de mitigação significativas e transparência na implementação; e operacionalizar plenamente o Fundo Verde para o Clima por meio de sua capitalização o mais cedo possível
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="13.b" id="subOds13-b">
                                        <label class="form-check-label" for="subOds13-b">
                                        13.b Promover mecanismos para a criação de capacidades para o planejamento relacionado à mudança do clima e à gestão eficaz, nos países menos desenvolvidos, inclusive com foco em mulheres, jovens, comunidades locais e marginalizadas
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 14 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo14" id="ods14">
                                <label class="form-check-label" for="ods14">
                                Objetivo 14. Conservação e uso sustentável dos oceanos, dos mares e dos recursos marinhos para o desenvolvimento sustentável
                                </label>
                                <!-- SUBCATEGORIAS ODS 14 -->
                                <div class="sub-step" id="step-10-14">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.1" id="subOds14-1">
                                        <label class="form-check-label" for="subOds14-1">
                                        14.1 Até 2025, prevenir e reduzir significativamente a poluição marinha de todos os tipos, especialmente a advinda de atividades terrestres, incluindo detritos marinhos e a poluição por nutrientes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.2" id="subOds14-2">
                                        <label class="form-check-label" for="subOds14-2">
                                        14.2 Até 2020, gerir de forma sustentável e proteger os ecossistemas marinhos e costeiros para evitar impactos adversos significativos, inclusive por meio do reforço da sua capacidade de resiliência, e tomar medidas para a sua restauração, a fim de assegurar oceanos saudáveis e produtivos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.3" id="subOds14-3">
                                        <label class="form-check-label" for="subOds14-3">
                                        14.3 Minimizar e enfrentar os impactos da acidificação dos oceanos, inclusive por meio do reforço da cooperação científica em todos os níveis
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.4" id="subOds14-4">
                                        <label class="form-check-label" for="subOds14-4">
                                        14.4 Até 2020, efetivamente regular a coleta, e acabar com a sobrepesca, ilegal, não reportada e não regulamentada e as práticas de pesca destrutivas, e implementar planos de gestão com base científica, para restaurar populações de peixes no menor tempo possível, pelo menos a níveis que possam produzir rendimento máximo sustentável, como determinado por suas características biológicas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.5" id="subOds14-5">
                                        <label class="form-check-label" for="subOds14-5">
                                        14.5 Até 2020, conservar pelo menos 10% das zonas costeiras e marinhas, de acordo com a legislação nacional e internacional, e com base na melhor informação científica disponível
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.6" id="subOds14-6">
                                        <label class="form-check-label" for="subOds14-6">
                                        14.6 Até 2020, proibir certas formas de subsídios à pesca, que contribuem para a sobrecapacidade e a sobrepesca, e eliminar os subsídios que contribuam para a pesca ilegal, não reportada e não regulamentada, e abster-se de introduzir novos subsídios como estes, reconhecendo que o tratamento especial e diferenciado adequado e eficaz para os países em desenvolvimento e os países menos desenvolvidos deve ser parte integrante da negociação sobre subsídios à pesca da Organização Mundial do Comércio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.7" id="subOds14-7">
                                        <label class="form-check-label" for="subOds14-7">
                                        14.7 Até 2030, aumentar os benefícios econômicos para os pequenos Estados insulares em desenvolvimento e os países menos desenvolvidos, a partir do uso sustentável dos recursos marinhos, inclusive por meio de uma gestão sustentável da pesca, aquicultura e turismo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.a" id="subOds14-a">
                                        <label class="form-check-label" for="subOds14-a">
                                        14.a Aumentar o conhecimento científico, desenvolver capacidades de pesquisa e transferir tecnologia marinha, tendo em conta os critérios e orientações sobre a Transferência de Tecnologia Marinha da Comissão Oceanográfica Intergovernamental, a fim de melhorar a saúde dos oceanos e aumentar a contribuição da biodiversidade marinha para o desenvolvimento dos países em desenvolvimento, em particular os pequenos Estados insulares em desenvolvimento e os países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.b" id="subOds14-b">
                                        <label class="form-check-label" for="subOds14-b">
                                        14.b Proporcionar o acesso dos pescadores artesanais de pequena escala aos recursos marinhos e mercados
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="14.c" id="subOds14-c">
                                        <label class="form-check-label" for="subOds14-c">
                                        14.c Assegurar a conservação e o uso sustentável dos oceanos e seus recursos pela implementação do direito internacional, como refletido na UNCLOS [Convenção das Nações Unidas sobre o Direito do Mar], que provê o arcabouço legal para a conservação e utilização sustentável dos oceanos e dos seus recursos, conforme registrado no parágrafo 158 do “Futuro Que Queremos”
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 15 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo15" id="ods15">
                                <label class="form-check-label" for="ods15">
                                Objetivo 15. Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda de biodiversidade
                                </label>
                                <!-- SUBCATEGORIAS ODS 15 -->
                                <div class="sub-step" id="step-10-15">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.1" id="subOds15-1">
                                        <label class="form-check-label" for="subOds15-1">
                                        15.1 Até 2020, assegurar a conservação, recuperação e uso sustentável de ecossistemas terrestres e de água doce interiores e seus serviços, em especial florestas, zonas úmidas, montanhas e terras áridas, em conformidade com as obrigações decorrentes dos acordos internacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.2" id="subOds15-2">
                                        <label class="form-check-label" for="subOds15-2">
                                        15.2 Até 2020, promover a implementação da gestão sustentável de todos os tipos de florestas, deter o desmatamento, restaurar florestas degradadas e aumentar substancialmente o florestamento e o reflorestamento globalmente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.3" id="subOds15-3">
                                        <label class="form-check-label" for="subOds15-3">
                                        15.3 Até 2030, combater a desertificação, restaurar a terra e o solo degradado, incluindo terrenos afetados pela desertificação, secas e inundações, e lutar para alcançar um mundo neutro em termos de degradação do solo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.4" id="subOds15-4">
                                        <label class="form-check-label" for="subOds15-4">
                                        15.4 Até 2030, assegurar a conservação dos ecossistemas de montanha, incluindo a sua biodiversidade, para melhorar a sua capacidade de proporcionar benefícios que são essenciais para o desenvolvimento sustentável
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.5" id="subOds15-5">
                                        <label class="form-check-label" for="subOds15-5">
                                        15.5 Tomar medidas urgentes e significativas para reduzir a degradação de habitat naturais, deter a perda de biodiversidade e, até 2020, proteger e evitar a extinção de espécies ameaçadas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.6" id="subOds15-6">
                                        <label class="form-check-label" for="subOds15-6">
                                        15.6 Garantir uma repartição justa e equitativa dos benefícios derivados da utilização dos recursos genéticos e promover o acesso adequado aos recursos genéticos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.7" id="subOds15-7">
                                        <label class="form-check-label" for="subOds15-7">
                                        15.7 Tomar medidas urgentes para acabar com a caça ilegal e o tráfico de espécies da flora e fauna protegidas e abordar tanto a demanda quanto a oferta de produtos ilegais da vida selvagem
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.8" id="subOds15-8">
                                        <label class="form-check-label" for="subOds15-8">
                                        15.8 Até 2020, implementar medidas para evitar a introdução e reduzir significativamente o impacto de espécies exóticas invasoras em ecossistemas terrestres e aquáticos, e controlar ou erradicar as espécies prioritárias
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.9" id="subOds15-9">
                                        <label class="form-check-label" for="subOds15-9">
                                        15.9 Até 2020, integrar os valores dos ecossistemas e da biodiversidade ao planejamento nacional e local, nos processos de desenvolvimento, nas estratégias de redução da pobreza e nos sistemas de contas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.a" id="subOds15-a">
                                        <label class="form-check-label" for="subOds15-a">
                                        15.a Mobilizar e aumentar significativamente, a partir de todas as fontes, os recursos financeiros para a conservação e o uso sustentável da biodiversidade e dos ecossistemas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.b" id="subOds15-b">
                                        <label class="form-check-label" for="subOds15-b">
                                        15.b Mobilizar recursos significativos de todas as fontes e em todos os níveis para financiar o manejo florestal sustentável e proporcionar incentivos adequados aos países em desenvolvimento para promover o manejo florestal sustentável, inclusive para a conservação e o reflorestamento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="15.c" id="subOds15-c">
                                        <label class="form-check-label" for="subOds15-c">
                                        15.c Reforçar o apoio global para os esforços de combate à caça ilegal e ao tráfico de espécies protegidas, inclusive por meio do aumento da capacidade das comunidades locais para buscar oportunidades de subsistência sustentável
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 16 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo16" id="ods16">
                                <label class="form-check-label" for="ods16">
                                Objetivo 16. Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis
                                </label>
                                <!-- SUBCATEGORIAS ODS 16 -->
                                <div class="sub-step" id="step-10-16">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.1" id="subOds16-1">
                                        <label class="form-check-label" for="subOds16-1">
                                        16.1 Reduzir significativamente todas as formas de violência e as taxas de mortalidade relacionada em todos os lugares
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.2" id="subOds16-2">
                                        <label class="form-check-label" for="subOds16-2">
                                        16.2 Acabar com abuso, exploração, tráfico e todas as formas de violência e tortura contra crianças
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.3" id="subOds16-3">
                                        <label class="form-check-label" for="subOds16-3">
                                        16.3 Promover o Estado de Direito, em nível nacional e internacional, e garantir a igualdade de acesso à justiça para todos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.4" id="subOds16-4">
                                        <label class="form-check-label" for="subOds16-4">
                                        16.4 Até 2030, reduzir significativamente os fluxos financeiros e de armas ilegais, reforçar a recuperação e devolução de recursos roubados e combater todas as formas de crime organizado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.5" id="subOds16-5">
                                        <label class="form-check-label" for="subOds16-5">
                                        16.5 Reduzir substancialmente a corrupção e o suborno em todas as suas formas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.6" id="subOds16-6">
                                        <label class="form-check-label" for="subOds16-6">
                                        16.6 Desenvolver instituições eficazes, responsáveis e transparentes em todos os níveis
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.7" id="subOds16-7">
                                        <label class="form-check-label" for="subOds16-7">
                                        16.7 Garantir a tomada de decisão responsiva, inclusiva, participativa e representativa em todos os níveis
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.8" id="subOds16-8">
                                        <label class="form-check-label" for="subOds16-8">
                                        16.8 Ampliar e fortalecer a participação dos países em desenvolvimento nas instituições de governança global
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.9" id="subOds16-9">
                                        <label class="form-check-label" for="subOds16-9">
                                        16.9 Até 2030, fornecer identidade legal para todos, incluindo o registro de nascimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.10" id="subOds16-10">
                                        <label class="form-check-label" for="subOds16-10">
                                        16.10 Assegurar o acesso público à informação e proteger as liberdades fundamentais, em conformidade com a legislação nacional e os acordos internacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.a" id="subOds16-a">
                                        <label class="form-check-label" for="subOds16-a">
                                        16.a Fortalecer as instituições nacionais relevantes, inclusive por meio da cooperação internacional, para a construção de capacidades em todos os níveis, em particular nos países em desenvolvimento, para a prevenção da violência e o combate ao terrorismo e ao crime
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="16.b" id="subOds16-b">
                                        <label class="form-check-label" for="subOds16-b">
                                        16.b Promover e fazer cumprir leis e políticas não discriminatórias para o desenvolvimento sustentável
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- ODS 17 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Objetivo17" id="ods17">
                                <label class="form-check-label" for="ods17">
                                Objetivo 17. Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável
                                </label>
                                <!-- SUBCATEGORIAS ODS 17 -->
                                <div class="sub-step" id="step-10-17">
                                    <p>A quais destes desafios socioambientais a sua solução está vinculada? Assinale todas as alternativas pertinentes.</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.1" id="subOds17-1">
                                        <label class="form-check-label" for="subOds17-1">
                                        17.1 Fortalecer a mobilização de recursos internos, inclusive por meio do apoio internacional aos países em desenvolvimento, para melhorar a capacidade nacional para arrecadação de impostos e outras receitas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.2" id="subOds17-2">
                                        <label class="form-check-label" for="subOds17-2">
                                        17.2 Países desenvolvidos implementarem plenamente os seus compromissos em matéria de assistência oficial ao desenvolvimento [AOD], inclusive fornecer 0,7% da renda nacional bruta [RNB] em AOD aos países em desenvolvimento, dos quais 0,15% a 0,20% para os países menos desenvolvidos; provedores de AOD são encorajados a considerar a definir uma meta para fornecer pelo menos 0,20% da renda nacional bruta em AOD para os países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.3" id="subOds17-3">
                                        <label class="form-check-label" for="subOds17-3">
                                        17.3 Mobilizar recursos financeiros adicionais para os países em desenvolvimento a partir de múltiplas fontes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.4" id="subOds17-4">
                                        <label class="form-check-label" for="subOds17-4">
                                        17.4 Ajudar os países em desenvolvimento a alcançar a sustentabilidade da dívida de longo prazo por meio de políticas coordenadas destinadas a promover o financiamento, a redução e a reestruturação da dívida, conforme apropriado, e tratar da dívida externa dos países pobres altamente endividados para reduzir o superendividamento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.5" id="subOds17-5">
                                        <label class="form-check-label" for="subOds17-5">
                                        17.5 Adotar e implementar regimes de promoção de investimentos para os países menos desenvolvidos
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.6" id="subOds17-6">
                                        <label class="form-check-label" for="subOds17-6">
                                        17.6 Melhorar a cooperação Norte-Sul, Sul-Sul e triangular regional e internacional e o acesso à ciência, tecnologia e inovação, e aumentar o compartilhamento de conhecimentos em termos mutuamente acordados, inclusive por meio de uma melhor coordenação entre os mecanismos existentes, particularmente no nível das Nações Unidas, e por meio de um mecanismo de facilitação de tecnologia global
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.7" id="subOds17-7">
                                        <label class="form-check-label" for="subOds17-7">
                                        17.7 Promover o desenvolvimento, a transferência, a disseminação e a difusão de tecnologias ambientalmente corretas para os países em desenvolvimento, em condições favoráveis, inclusive em condições concessionais e preferenciais, conforme mutuamente acordado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.8" id="subOds17-8">
                                        <label class="form-check-label" for="subOds17-8">
                                        17.8 Operacionalizar plenamente o Banco de Tecnologia e o mecanismo de capacitação em ciência, tecnologia e inovação para os países menos desenvolvidos até 2017, e aumentar o uso de tecnologias de capacitação, em particular das tecnologias de informação e comunicação
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.9" id="subOds17-9">
                                        <label class="form-check-label" for="subOds17-9">
                                        17.9 Reforçar o apoio internacional para a implementação eficaz e orientada da capacitação em países em desenvolvimento, a fim de apoiar os planos nacionais para implementar todos os objetivos de desenvolvimento sustentável, inclusive por meio da cooperação Norte-Sul, Sul-Sul e triangular
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.10" id="subOds17-10">
                                        <label class="form-check-label" for="subOds17-10">
                                        17.10 Promover um sistema multilateral de comércio universal, baseado em regras, aberto, não discriminatório e equitativo no âmbito da Organização Mundial do Comércio, inclusive por meio da conclusão das negociações no âmbito de sua Agenda de Desenvolvimento de Doha
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.11" id="subOds17-11">
                                        <label class="form-check-label" for="subOds17-11">
                                        17.11 Aumentar significativamente as exportações dos países em desenvolvimento, em particular com o objetivo de duplicar a participação dos países menos desenvolvidos nas exportações globais até 2020
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.12" id="subOds17-12">
                                        <label class="form-check-label" for="subOds17-12">
                                        17.12 Concretizar a implementação oportuna de acesso a mercados livres de cotas e taxas, de forma duradoura, para todos os países menos desenvolvidos, de acordo com as decisões da OMC, inclusive por meio de garantias de que as regras de origem preferenciais aplicáveis às importações provenientes de países menos desenvolvidos sejam transparentes e simples, e contribuam para facilitar o acesso ao mercado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.13" id="subOds17-13">
                                        <label class="form-check-label" for="subOds17-13">
                                        17.13 Aumentar a estabilidade macroeconômica global, inclusive por meio da coordenação e da coerência de políticas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.14" id="subOds17-14">
                                        <label class="form-check-label" for="subOds17-14">
                                        17.14 Aumentar a coerência das políticas para o desenvolvimento sustentável
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.15" id="subOds17-15">
                                        <label class="form-check-label" for="subOds17-15">
                                        17.15 Respeitar o espaço político e a liderança de cada país para estabelecer e implementar políticas para a erradicação da pobreza e o desenvolvimento sustentável
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.16" id="subOds17-16">
                                        <label class="form-check-label" for="subOds17-16">
                                        17.16 Reforçar a parceria global para o desenvolvimento sustentável, complementada por parcerias multissetoriais que mobilizem e compartilhem conhecimento, expertise, tecnologia e recursos financeiros, para apoiar a realização dos objetivos do desenvolvimento sustentável em todos os países, particularmente nos países em desenvolvimento
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.17" id="subOds17-17">
                                        <label class="form-check-label" for="subOds17-17">
                                        17.17 Incentivar e promover parcerias públicas, público-privadas e com a sociedade civil eficazes, a partir da experiência das estratégias de mobilização de recursos dessas parcerias
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.18" id="subOds17-18">
                                        <label class="form-check-label" for="subOds17-18">
                                        17.18 Reforçar o apoio à capacitação para os países em desenvolvimento, inclusive para os países menos desenvolvidos e pequenos Estados insulares em desenvolvimento, para aumentar significativamente a disponibilidade de dados de alta qualidade, atuais e confiáveis, desagregados por renda, gênero, idade, raça, etnia, status migratório, deficiência, localização geográfica e outras características relevantes em contextos nacionais
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="17.19" id="subOds17-19">
                                        <label class="form-check-label" for="subOds17-19">
                                        17.19 Até 2030, valer-se de iniciativas existentes para desenvolver medidas do progresso do desenvolvimento sustentável que complementem o produto interno bruto [PIB] e apoiem a capacitação estatística nos países em desenvolvimento
                                        </label>
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

                        <!-- DESCRIÇÃO PROJETO -->
                        <div class="step" id="step_11">
                            <div class="row align-items-end">
                                <h3>Descrição do projeto</h3>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputProblema" class="form-label">Descreva o problema social e/ou ambiental que seu negócio ou tecnologia resolve. (Atenção, problema é diferente de solução) <span> com até 100 caracteres (contando pontuação e espaço)</span></label>
                                        <textarea class="form-control" id="inputProblema" rows="2" maxlength="100"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="inputPitch" class="form-label">PITCH: Qual a solução (Produto/Serviço) que seu negócio ou tecnologia traz para esse problema? <span>com até 200 caracteres (contando pontuação e espaço)</span></label>
                                        <textarea class="form-control" id="inputPitch" rows="3" maxlength="200"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <p>Seu negócio incorpora uma inovação de produto, processo ou serviço?</p>
                                        <input class="form-check-input" type="radio" name="inovacao" id="radioSemInovacao">
                                        <label class="form-check-label" for="radioSemInovacao">
                                            Não
                                        </label>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="radio" name="inovacao" id="radioInovacao">
                                        <label class="form-check-label" for="radioInovacao">
                                            Sim (Descreva-a em 50 caracteres)
                                        </label>
                                        <input type="text" class="form-control" maxlength="50" id="radioInovacao">
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
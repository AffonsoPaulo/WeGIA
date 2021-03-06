<?php
$config_path = "config.php";
if(file_exists($config_path)){
    require_once($config_path);
}else{
    while(true){
        $config_path = "../" . $config_path;
        if(file_exists($config_path)) break;
    }
    require_once($config_path);
}
?>
<!doctype html>
<html class="fixed">
<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>3. Recursos</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/theme.css" />
    
    <!-- Skin CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />
    
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">
    
    <!-- Head Libs -->
    <script src="../assets/vendor/modernizr/modernizr.js"></script>

    <!-- Atualizacao CSS -->
    <link rel="stylesheet" href="../css/atualizacao.css" />

    <!-- Manual CSS -->
    <link rel="stylesheet" href="../css/manual.css">
    
    <!-- Vendor -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        
    <!-- Specific Page Vendor -->
    <script src="../assets/vendor/jquery-autosize/jquery.autosize.js"></script>
        
    <!-- Theme Base, Components and Settings -->
    <script src="../assets/javascripts/theme.js"></script>
        
    <!-- Theme Custom -->
    <script src="../assets/javascripts/theme.custom.js"></script>
        
    <!-- Theme Initialization Files -->
    <script src="../assets/javascripts/theme.init.js"></script>

    <!-- javascript functions --> <script
    src="../Functions/onlyNumbers.js"></script> <script
    src="../Functions/onlyChars.js"></script> <script
    src="../Functions/mascara.js"></script>

    <!-- jquery functions -->
    <script>
        document.write('<a href="' + document.referrer + '"></a>');
    </script>

    <script>
    function goBack() {
    window.history.back()
    }
    </script>
    
    <!-- javascript tab management script -->


</head>
<body>
    <section class="body">
        <div id="header"></div>
            <!-- end: header -->
        <div class="inner-wrapper" style="padding-top: 50px;">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left menuu">





                <div class="sidebar-header">
                    <div class="sidebar-title">
                        ??ndices
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
                
                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <!-- <li id="0">
                                    <a href="home.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>In??cio</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="./">
                                        <i class="fas fa-book" aria-hidden="true"></i>
                                        <span>Manual</span>
                                    </a>
                                </li>
                                <li id="0" class="nav-parent nav-active">
                                    <a button type="button" onclick="goBack()">
                                        <i class="fas fa-arrow-left" aria-hidden="true"></i>
                                        <span>Voltar</span>
                                    </a>
                                </li>
                                <li id="0" class="nav-parent nav-active">
                                    <a>
                                        <i class="fas fa-align-justify" aria-hidden="true"></i>
                                        <span>Cap??tulos</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="./introducao.php">
                                                1. Introdu????o
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./instalacao.php">
                                                2. Instala????o
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./recursos.php">
                                                3. M??dulos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./seguranca.php">
                                                4. Seguran??a
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./atualizacao.php">
                                                5. Atualiza????o
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="3" class="nav-parent nav-active">
                                    <a>
                                        <span>3. M??dulos</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="#_recursos">
                                                3.0 Recursos
                                            </a>
                                        </li>

                                        <li class="sub1">
                                            <a href="rh.php">
                                                3.1. Recursos Humanos
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="cadastro_funcionarios.php">
                                                3.1.1. Cadastro de Funcion??rios
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_info_funcionario">
                                                3.1.2. Informa????es de Funcion??rios
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_edicao_funcionario">
                                                3.1.3. Edi????o de dados de funcion??rios
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_cadastro_interno">
                                                3.1.4. Cadastro de Internos
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_info_interno">
                                                3.1.5. Informa????es de Internos
                                            </a>
                                        </li>
                                        <li class="sub1">
                                            <a href="#_material_patrimonio">
                                                3.2. Material e Patrim??nio
                                            </a>
                                        </li>
                                        <li class="sub1">
                                            <a href="#_memorando">
                                                3.3. Memorando
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_criacao_memorando">
                                                3.3.1. Cria????o do memorando
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_envio_despacho">
                                                3.3.2. Envio de despacho
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_caixa_de_entrada">
                                                3.3.3. Caixa de entrada
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_opcoes_caixa_de_entrada">
                                                3.3.4. Op????es da caixa de entrada
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_memorandos_despachados">
                                                3.3.5. Memorandos despachados
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_lista_despachos">
                                                3.3.6. Leitura de despachos
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_imprimir">
                                                3.3.7. Impress??o
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_erros">
                                                3.3.8. Erros
                                            </a>
                                        </li>
                                         <li class="sub1">
                                            <a href="#_modulo_socio">
                                                3.4. S??cio
                                            </a>
                                        </li>
                        
                                        <li class="sub2">
                                            <a href="#_cadastro_socio">
                                                3.4.1. Cadastro S??cio
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_gerar_boleto">
                                                3.4.2. Gerar boleto/carn??
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_cobranca_socio">
                                                3.4.3. Cobran??as
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_tag_socio">
                                                3.4.4. Tags
                                            </a>
                                        </li>
                                        <li class="sub2">
                                            <a href="#_relatorio_socio">
                                                3.4.5. Relat??rio dos s??cios
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <form id="listarFuncionario" method="POST" action="../controle/control.php">
                    <input type="hidden" name="nomeClasse" value="FuncionarioControle">
                    <input type="hidden" name="metodo" value="listartodos">
                    <input type="hidden" name="nextPage" value="../html/informacao_funcionario.php">
                </form>
                
                <form id="listarInterno" method="POST" action="../controle/control.php">
                    <input type="hidden" name="nomeClasse" value="InternoControle">
                    <input type="hidden" name="metodo" value="listartodos">
                    <input type="hidden" name="nextPage" value="../html/informacao_interno.php">
                </form>
                    
                <!-- Theme Base, Components and Settings -->
                <script src="../assets/javascripts/theme.js"></script>
                    
                <!-- Theme Custom -->
                <script src="../assets/javascripts/theme.custom.js"></script>
                
                <!-- Theme Initialization Files -->
                <script src="../assets/javascripts/theme.init.js"></script>








            </aside>
            <!-- end: sidebar -->
            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Cap??tulo 3: M??dulos</h2>
                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li><span>Cap??tulo 3: M??dulos</span></li>
                        </ol>
                        <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>
                <!--start: page-->

                <!-- estrutura b??sica:
                    <dir id="_">
                        <h3></h3><hr>
                        <p></p>
                    </dir>
                -->

                <section id="_recursos">
                    <h3>3. M??dulos</h3><hr>
                    <p>O WeGIA oferece diversas ferramentas para gerenciamento de institui????es assistenciais, e esse cap??tulo serve para explic??-los.</p>    
                        
                        <dir id="_info_funcionario">
                            <h3>3.1.2. Informa????es de Funcion??rios</h3><hr>
                            <p>Exibe as informa????es de cada funcion??rio e possibilita altera????o de seus dados. Uma tabela mostrar?? o Nome, CPF e Cargo, e a coluna A????o oferece a possibilidade de editar os dados.</p>
                            <p>Para acessar as informa????es de um funcion??rio no sistema basta acessar <strong><i class="far fa-address-book"></i> Pessoas </strong><i class="fas fa-chevron-right"></i> <a href="<?= WWW?>/html/informacao_funcionario.php">Informa????es Funcion??rio</a></p>
                        </dir>
                        <dir id="_edicao_funcionario">
                            <h3>3.1.3. Edi????o de dados de funcion??rios</h3><hr>
                            <p>Ao acessar os dados de um funcion??rio ?? poss??vel fazer a edi????o desses dados.</p>
                            <p>
                                Na aba <strong>"Vis??o Geral"</strong> ?? poss??vel editar as informa????es pessoais do funcion??rio.
                                <p>
                                    Para fazer a edi????o de algum dado da p??gina, basta verificar em qual se????o ele se encontra e clicar no bot??o "Editar" da se????o. Em seguida ser?? poss??vel alterar os dados, depois de alterados basta clicar no bot??o "Salvar"
                                    Existem algumas se????es nessa aba, s??o elas: 
                                </p>
                                <br>
                                <p><strong>Informa????es Pessoais</strong></p> 
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/Uqv_jbZqFuA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </p>
                            <br>
                            <p><strong>Endere??o</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vrH0VtOzL9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                            <p><strong>Incluir Arquivos</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eRpzbRlCoLE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                            <p><strong>Documentacao</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/E-Wv7-uYgI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                            <p><strong>Alterar Foto</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/TjxcsZmk7FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                             <p><strong>Outras Informa????es</strong></p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/5fFax72v0O8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br>
                                <br>
                                <p><strong>Carga Hor??ria</strong></p>
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/TOJwD3fyz1c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                                <p><strong>Incluir Dependentes</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-RALJuM6H5U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



                            <hr>
                            <p>Na aba <strong>"Remunera????o"</strong> ?? poss??vel adicionar e editar a remunera????o.</p>
                            <p>
                                Para adicionar a remunera????o, basta clicar no bot??o "Adicionar" no fim da p??gina. Ao clicar nesse bot??o ?? aberta uma caixa para adicionar o benef??cio.
                                <p>
                                    Para adicionar um benef??cio ?? necess??rio selecionar o benef??cio e o seu status e preencher a data de in??cio, data de fim e o valor do benef??cio. Caso o benef??cio desejado n??o se encontre na listagem basta clicar no s??mbolo <i class="fas fa-plus w3-xlarge" style="margin-top: 0.75vw"></i> ao seu lado e na nova caixa que ser?? aberta escrever o nome do benef??cio e clicar em OK para salv??-lo.
                                </p>
                            </p>
                            <p>
                                Na se????o de benef??cios ?? poss??vel visualizar a lista de benef??cios do funcion??rio. Nessa lista ?? exibido o nome do benef??cio, o status, a data de in??cio, a data de fim e valor. <br>
                            </p>
                            <p>
                                Para <strong>editar</strong> um benef??cio basta clicar no bot??o verde ao seu lado, ao clicar o usu??rio ?? redirecionado para uma p??gina onde ?? poss??vel editar os dados desejados. Para edit??-los basta clicar no bot??o "Editar" e ap??s editar clicar no bot??o "salvar". <br>
                                Para <strong>excluir</strong> um benef??cio basta clicar no bot??o vermelho ao lado dos dados do benef??cio, o benef??cio ser?? exclu??do automaticamente.
                            </p>
                            </p>
                            <!--<img src="<?php echo WWW;?>img/beneficio.PNG" class="img-fluid">-->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yvGgd2MtduY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <hr>
                            <p>Na aba <strong>"EPI"</strong> ?? poss??vel adicionar e editar EPI's.</p>
                            <p>
                            Para adicionar um EPI basta clicar no bot??o "EPI" no fim da p??gina. Ao clicar nesse bot??o ?? aberta uma caixa para adicionar o EPI.
                            Para adicionar um EPI ?? necess??rio selecionar o EPI e o seu status e preencher a data. Caso o EPI desejado n??o se encontre na listagem basta clicar no s??mbolo <i class="fas fa-plus w3-xlarge" style="margin-top: 0.75vw"></i> ao seu lado e na nova caixa que ser?? aberta escrever o nome do EPI e clicar em OK para salv??-lo.
                            </p>
                            <p>
                                Na se????o de EPI ?? poss??vel visualizar a lista de EPI's do funcion??rio. Nessa lista ?? exibido o nome do epi, o status e a data. Para editar um EPI basta clicar no bot??o verde ao seu lado, ao clicar o usu??rio ?? redirecionado para uma p??gina onde ?? poss??vel ediar os dados desejados. Para edit??-los basta clicar no bot??o "Editar" e ap??s editar clicar no bot??o "Salvar".
                                Para excluir um EPI basta clicar no bot??o vermelho ao lado dos dados do EPI, o EPI ser?? exclu??do automaticamente.
                            </p> 
                            <img src="<?php echo WWW;?>img/epi.PNG" class="img-fluid">
                            <hr>
                            <p>
                                Na aba <strong>"Carga hor??ria"</strong> ?? poss??vel visualizar as informa????es da carga hor??ria do funcion??rio, como escala, dias trabalhados, dias de folga, etc.
                            </p>
                            <hr>
                            <p>
                                Na aba <strong>"Editar carga"</strong> ?? poss??vel alterar ou cadastrar a carga hor??ria do funcion??rio. Para alterar/cadastrar a carga hor??ria basta selecionar a escala, o tipo, preencher os hor??rios de entrada e sa??da e selecionar os dias folga e os dias trabalhados.
                            </p>

                        </dir>
                        <dir id="_cadastro_interno">
                            <h3>3.1.4. Cadastro de Internos</h3><hr>
                            <p>Cadastra uma pessoa como interno no sistema. O formul??rio apresentado exigir?? as seguintes informa????es para realizar o cadastro:</p>
                            <br>
                            <h5>Informa????es Pessoais</h5>
                            <ul>
                                <p>1. Nome</p>
                                <p>2. Sobrenome</p>
                                <p>3. Sexo</p>
                                <p>4. Nome de Contato</p>
                                <p>5. 3 Telefones de Contato</p>
                                <p>6. Data de Nascimento</p>
                                <p>7. Nome dos pais</p>
                                <p>8. Tipo Sangu??neo</p>
                            </ul>
                            <h5>Documenta????o</h5>
                            <ul>
                                <p>1. N??mero do RG</p>
                                <p>2. Org??o Emissor</p>
                                <p>3. Data de Expedi????o</p>
                                <p>4. CPF</p>
                                <p>5. Benef??cios</p>
                                <p>6. Fotos do RG e CPF</p>
                                <p>7. Observa????es</p>

                            </ul>
                            <br>
                            <p>Para cadastrar um interno no sistema basta acessar <strong><i class="far fa-address-book"></i> Pessoas </strong><i class="fas fa-chevron-right"></i> <a href="<?= WWW?>/html/cadastro_interno.php">Cadastrar Atendido</a></p>
                        </dir>
                        <dir id="_info_interno">
                            <h3>3.1.5. Informa????es de Internos</h3><hr>
                            <p>Exibe as informa????es de cada interno e possibilita altera????o de seus dados. Uma tabela mostrar?? o Nome e CPF, e a coluna A????o oferece a possibilidade de editar os dados.</p>
                            <p>Para acessar as informa????es de um interno no sistema basta acessar <strong><i class="far fa-address-book"></i> Pessoas </strong><i class="fas fa-chevron-right"></i> <a href="<?= WWW?>/html/informacao_interno.php">Informa????es Atendido</a></p>
                        </dir>
                    </dir>
                    <dir id="_material_patrimonio">
                        <h3>3.2. Material e Patrim??nio</h3><hr>
                        <p>O modulo Material e Patrim??nio tem como objetivo ter controle absoluto dos produtos e <strong>almoxarifados</strong> existentes. Dentro dele, poder?? ter acesso a <strong>relat??rios</strong> completos n??o s?? sobre a <strong>entrada</strong> e <strong>sa??da</strong>, mas tamb??m do material presente em estoque.</p>
                      <dir>
                          <h3>3.2.1. Entrada e Sa??da </h3>

                          <hr>
                          
                        <dir>
                            <h3>Cria????o da Origem e Destino</h3>
                            <hr>
                            <p>Para criar uma origem ou destino, o funcion??rio respons??vel deve j?? estar na p??gina de <strong><a href="/html/cadastro_entrada.php" style="text-decoration: none">ENTRADA</a> ou <a href="/html/cadastro_saida.php" style="text-descoration: none">SA??DA</a></strong> e ent??o no campo de <strong>Origem/Destino</strong> clicar no sinal de "+", localizado ao lado do campo de escrever. Logo em seguida, o funcion??rio ser?? redirecionado para preencher os campos do cadastro da origem do produto. Feito isso, essa <strong>Origem/Destino</strong>, ficar?? disponivel para sele????o e identifica????o na p??gina de <strong>Entrada/Sa??da</strong>.
                            <br><br>
                            <img src="<?php echo WWW;?>img/origem.png" class="img-fluid">
                            <br>
                            <p><strong>Origem</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ufrvDiauT1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <p><strong>Destino</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/YMmTL7PFwv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            
                        </dir>
                        <dir>
                            <h3>Cria????o do Almoxarifado</h3>
                            <hr>
                            <p>Criar um Almoxarifado ?? ainda mais f??cil. Para isso, basta clicar no modulo de <strong>Material e Patrim??nio</strong>, em seguida <strong>Adicionar Almoxarifado</strong>. Feito isso, escolha o nome que quiser para ele e clique em enviar. Pronto! Seu almoxarifado foi adicionado e j?? pode ser consultado. O mesmo pode ser feito, clicando no sinal de "+" pela pr??pria p??gina <strong>Entrada/Sa??da</strong> no campo de Almoxarifado.
                            <br>
                            <p><strong>Criar Almoxarifado</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/xRP1Jnt3PZc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </dir>
                        <dir>
                            <h3>Cria????o Tipos</h3>
                            <hr>
                            <p>Nesse setor, ?? necess??rio que o funcion??rio informe o tipo de entrada ou sa??da. Como por exemplo, doa????es, projetos internos ou externos, parcerias. Como nos exemplos acima, basta clicar no sinal de " + " que ir?? ser redirecionado para criar o nome do tipo de entrada. Ent??o, depois disso o "Tipo" criado estar?? dispon??vel para sele????o.</p>
                        </dir>
                        <dir>
                            <h3>Enviar</h3>
                            <hr>
                            <p>Por fim, selecionamos o produto que ser?? dado entrada/sa??da, inserindo o nome/c??digo de barras (?? poss??vel usar Leitor de C??digo de barras). Em seguida, selecionamos a quantidade que ser?? designada a entrada/sa??da e ent??o ?? preciso clicar em <strong>Incluir</strong>. Feito isso, poder?? ser adicionado novos produtos nessa entrada/sa??da, ou ent??o, caso seja encerrado, clicamos em <strong>enviar</strong>.    
                            <br>
                            <p><strong>Registrar Produtos No Estoque</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/swNVNb9vEXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <p><strong>Registrar Sa??da do Estoque</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/jQJJWra1fbU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                        </dir>
                        
                      </dir>
                      <br>
                      <dir>
                           <h3>3.2.2. Estoque </h3>
                           <hr>
                           <dir>
                           <p><strong>Consultar Estoque</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/3RYKn3woLtQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <p>Aqui podemos visualizar todos os produtos que foram computados como entrada dentro do sistema e ainda n??o sa??ram, ou seja, est??o presentes no <strong>estoque</strong>. Caso haja mais de um almoxarifado cadastrado no sistema, o funcion??rio poder?? selecionar qual deseja consultar al??m da categoria. Feito isso, todos os produtos presentes ir??o aparecer numa lista, ou caso queira ver os que n??o possuem n??mero no estoque, basta selecionar a caixinha <strong>"exibir produtos fora de estoque"</strong> e ent??o deve aparecer produtos cadastrados que n??o possuem exemplares presentes no momento.</p>    
                            <img src="<?php echo WWW;?>img/estoque.png" class="img-fluid">
                            <br>
                            
                           </dir>
                      </dir>
                      <dir>
                      <br>
                           <h3>3.3.3. Almoxarifados</h3>
                           <hr>                           
                           <p>Em almoxarifados podemos ter acesso aos almoxarifados criados/existentes e tamb??m aos funcion??rios respons??veis pelo setor. Al??m disso, poder?? excluir o almoxarifado, caso seja necess??rio.</p>
                           <br>
                           <p><strong>Designar Almoxarife</strong></p>
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/7_xVsFTnwaw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           <br>
                      </dir>
                      <dir>
                            <br>
                            <h3>3.3.4. Produtos</h3>
                            <hr>
                            <p><strong>Cadastrar Produtos</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/GmIE8JhgfKY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <p>Para que possamos dar entrada, sa??da ou at?? mesmo visualizar a quantidade de produto restante no estoque, precisamos antes cadastra-los. Para isso, no modulo de <strong>Material e Patrimonio</strong> selecione a op????o <strong>Produtos</strong>. Funcion??rio poder?? preencher todas as ??reas designadas ao cadastro do produto como nome, categoria, unidade(Jeito que ?? medido - Litro, metro, pacote, Quilo), o c??digo que ficar?? salvo para que funcione como identifica????o/atalho do produto e o valor. </p>
                            <img src="<?php echo WWW;?>img/produto.png" class="img-fluid">
                            
                      </dir>
                      <dir>
                            <br>
                            <h3>3.3.5. Relat??rio </h3>
                            <hr>
                            <p>Existe tr??s tipos de relat??rios, um para listar a entrada que ficar?? respons??vel por detalhar todas as entradas por todos os funcion??rios respons??veis. Um para a sa??da, na qual, poder?? ver todos os produtos que por algum motivo tiveram sa??da do estoque. E por fim, um para o estoque que permite poder ver todos os itens presentes e suas informa????es. </p>
                            <p><strong>1.</strong> Al??m disso, o sistema de relat??rio conta com alguns par??metros, que por s?? s?? vai permitir uma analise de relat??rio completa e objetiva. Nela, no caso de <strong>ENTRADA</strong> ou <strong>SA??DA</strong>, pode ser escolhida a forma de origem/destino, o tipo de entrada/sa??da, o <strong>Respons??vel</strong> por tal feito, a data e tamb??m de qual almoxarifado.</p>
                            <img src="<?php echo WWW;?>img/entrada.png" class="img-fluid">
                            <br>
                            <p><strong>2.</strong> J?? o sistema de relat??rio para estoque, ?? mais simples, precisando apenas selecionar o <strong>Almoxarifado</strong> que deseja verificar a situa????o.</p>
                            <img src="<?php echo WWW;?>img/relEstoque.png" class="img-fluid">
                            <br>
                            <p><strong>Relat??rio Entrada</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/h3bR7-yUKuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <p><strong>Relat??rio Estoque</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gBKhplptaA0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <p><strong>Relat??rio Sa??da</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/CzyitkjBqtA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                      </dir>
                      <dir>
                            <br>
                            <h3>3.3.6. Informa????es Entrada</h3>
                            <hr>
                            <p>Nessa sess??o, o funcion??rio poder?? ver ainda mais detalhes sobre os produtos que foram dados como entrada. Entre eles o valor total, a data e tamb??m as horas. Al??m disso, tamb??m ?? poss??vel visutalizar o respons??vel pela entrada.</p>
                            <img src="<?php echo WWW;?>img/infoEntrada.png" class="img-fluid">
                      </dir>
                      <dir>
                            <br>
                            <h3>3.3.7. Informa????es Sa??da</h3>
                            <hr>
                            <p>Assim como nas <strong>Informa????es de Entrada</strong>, aqui ?? poss??vel ver todos os dados em rela????o a sa??da efetuada de um ou mais produtos</p>
                            <img src="<?php echo WWW;?>img/infoSaida.png" class="img-fluid">
                      </dir>         
                    </dir>
                    <dir id="_memorando">
                        <h3>3.3. Memorando</h3><hr>
                        <p>O m??dulo memorando ?? destinado ?? troca de mensagens institucionais entre funcion??rios da institui????o. Essa troca ?? feita atrav??s da cria????o, por um funcion??rio, de um <strong>memorando</strong> e de um <strong>despacho</strong>, que ser??o enviados a outro funcion??rio. O funcion??rio que receber esse memorando e este despacho os enviar?? a um outro funcion??rio juntamente com outro despacho e assim sucessivamente at?? que o memorando volte a sua origem e possa ser arquivado.</p>
                        <dir id="_criacao_memorando">
                            <h3>3.3.1. Cria????o do memorando</h3><hr>
                            <p>Para criar um memorando o funcion??rio dever??, munido das permiss??es necess??rias, acessar a <a href="<?php echo WWW;?>html/memorando/listar_memorandos_ativos.php">caixa de entrada do m??dulo memorando</a> e preencher o campo "Assunto", da se????o "Criar memorando", com o assunto do memorando e acionar o bot??o "Criar memorando". Em seguida o funcion??rio ser?? direcionado automaticamente ?? p??gina de envio de despachos (leia <a href="#_envio_despacho">3.3.2. Envio de despachos</a>).</p>
                            <img src="<?php echo WWW;?>img/criar_memorando.PNG" class="img-fluid">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/y2N_0CsFi28" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </dir>
                        <dir id="_envio_despacho">
                            <h3>3.3.2. Envio de despachos</h3><hr>
                            <p>Existem duas possibilidades para o envio de despachos: <i>enviar um despacho em um memorando que foi recebido</i> ou <i>enviar um despacho em um memorando que foi criado naquele momento</i>.</p>
                            <p>Para ambos os casos o procedimento ?? o mesmo:</p>
                                <p>1. Selecionar, no campo "destino", da se????o "Despachar memorando", o nome do funcion??rio para quem ser?? enviado o despacho.</p>
                                <img src="<?php echo WWW;?>img/destino.PNG" class="img-fluid">
                                <p>2. Selecionar arquivos para anexar ao despacho, clicando no bot??o "Escolher arquivos" e posteriormente selecionando os arquivos. Podem ser adicionados um ou mais arquivos. <strong>(Esse passo ?? OPCIONAL, o despacho pode ser enviado sem arquivos anexados)</strong></p>
                                <img src="<?php echo WWW;?>img/arquivo.PNG" class="img-fluid">
                                <p>3. Preencher o campo "Despacho" com as informa????es que devem ser enviadas no despacho. Na parte superior desse campo ?? poss??vel alterar a formata????o dele com altera????es como: negrito, it??lico, cor do texto, cor da marca????o do texto, etc.</p>
                                <img src="<?php echo WWW;?>img/despacho.PNG" class="img-fluid">
                                <p>4. Acionar o bot??o "Enviar". Nesse momento o despacho e o memorando ser??o enviados para o funcion??rio selecionado e o memorando estar?? dispon??vel na caixa de entrada desse funcion??rio. (leia <a href="#_caixa_de_entrada">3.3.3. Caixa de entrada</a>)</p>
                                <img src="<?php echo WWW;?>img/enviar.PNG" class="img-fluid">
                        </dir>
                        <dir id="_caixa_de_entrada">
                            <h3>3.3.3. Caixa de entrada</h3><hr>
                            <p>A <a href="<?php echo WWW;?>html/memorando/listar_memorandos_ativos.php">caixa de entrada do m??dulo memorando</a> ?? o espa??o destinado ao recebimento de memorandos. Sempre que um despacho for enviado para voc??, o memorando desse despacho estar?? dispon??vel na sua caixa de entrada. Nesse espa??o ?? poss??vel visualizar o t??tulo do memorando, a data e a hora da sua cria????o e as op????es fornecidas (leia <a href="#_opcoes_caixa">3.3.4. Op????es da caixa de entrada</a>). Para acessar um memorando basta clicar no seu t??tulo e voc?? ser?? direcionada.</p>
                            <p>Nessa p??gina tamb??m ?? poss??vel criar um novo memorando (leia <a href="#_criacao_memorando">3.3.1. Cria????o de memorando</a>)</p>
                            <img src="<?php echo WWW;?>img/caixa_de_entrada.PNG" class="img-fluid">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/tM5SBRRkJ-U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </dir>
                        <dir id="_opcoes_caixa_de_entrada">
                            <h3>3.3.4. Op????es da caixa de entrada</h3><hr>
                            <p>Os memorandos na <a href="<?php echo WWW;?>html/memorando/listar_memorandos_ativos.php">caixa de entrada</a> possuem algumas op????es de configura????o, para us??-las basta clicar no seu ??cone. As op????es s??o:</p>
                                <p>1. N??o lido <img src="<?php echo WWW;?>/img/nao-lido.png" width=25px height= 25px>, op????o para marcar um memorando como n??o lido. <strong>Dispon??vel apenas quando o memorando foi visualizado</strong>. Quando um memorando est?? marcado com essa op????o sua cor fica <strong>azul</strong>.</p>
                                <p>2. Lido <img src="<?php echo WWW;?>/img/lido.png" width=25px height= 25px>, op????o para marcar um memorando como lido. <strong>Dispon??vel apenas quando o memorando n??o foi visualizado</strong>.</p>
                                <p>3. Importante <img src="<?php echo WWW;?>/img/importante.png" width=25px height= 25px>, op????o para marcar um memorando como importante. Quando um memorando est?? marcado com essa op????o sua cor fica <strong>vermelha</strong>.</p>
                                <p>4. Pendente <img src="<?php echo WWW;?>/img/pendente.png" width=25px height= 25px>, op????o para marcar um memorando como pendente. Quando um memorando est?? marcado com essa op????o sua cor fica <strong>amarela</strong>.</p>
                                <p>5. Arquivar memorando <img src="<?php echo WWW;?>/img/arquivar.png" width=25px height= 25px>, op????o para marcar um memorando como arquivado. Quando um memorando est?? marcado com essa op????o ele n??o fica dispon??vel na caixa de entrada, apenas na lista de memorandos despachados. <strong>Dispon??vel apenas quando o usu??rio foi o criador do memorando</strong>. Somente o criador de um memorando pode arquiv??-lo.</p>
                                <p>Por padr??o, ao receber um memorando ele ?? marcado com a op????o "N??o lido" e sua cor fica azul</p>
                                <p>Se um memorando estiver marcado como "N??o lido" e for aberto ele ?? marcado com a op????o "Lido". Se ele estiver marcado com qualquer outra op????o e for aberto ele n??o perde sua op????o permanece a mesma.</p>
                        </dir>
                        <dir id="_memorandos_despachados">
                            <h3>3.3.5. Memorandos despachados</h3><hr>
                            <p>A <a href="<?php echo WWW;?>html/memorando/listar_memorandos_antigos.php">lista de memorandos despachados</a> ?? um local para visualiza????o dos memorandos que j?? foram enviados para voc??, inclusive os que j?? foram despachados para outras pessoas. Nesse espa??o ?? poss??vel visualizar o t??tulo do memorando, a sua origem (funcion??rio que o criou) e a data e a hora de cria????o. Para acessar um memorando despachado basta clicar no seu t??tulo e voc?? ser?? direcionado para a lista de despachos desse memorando.</p>
                            <p>Se o memorando estiver marcado com a op????o <strong>[ARQUIVADO]</strong>, significa que ele foi arquivado pelo seu criador e por esse motivo ele n??o poder?? ser enviado para outros funcion??rios.</p>
                            <img src="<?php echo WWW;?>img/memorandos_despachados.PNG" class="img-fluid">

                            <iframe width="560" height="315" src="https://www.youtube.com/embed/DXhbhMowXo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </dir>
                        <dir id="_lista_despachos">
                            <h3>3.3.6 Leitura de despachos</h3><hr>
                            <p>Ao abrir um memorando o usu??rio ser?? redirecionado para a lista de despachos desse memorando. Nessa lista ?? poss??vel ver todos os despachos organizados do mais antigo para o mais recente. ?? poss??vel ver o remetente do despacho, o destinat??rio, o texto do despacho e a data e hora do envio. Se houver arquivos anexados ao despacho, a linha <strong>Despacho</strong> estar?? presente seguida da lista de arquivos.</p>
                            <p>Ao acessar um memorando em que o ??ltimo despacho foi enviado para voc?? h?? ap??s a lista de despachos um espa??o para escrever um novo despacho nesse memorando e envi??-lo para outro funcion??rio (leia <a href="#_envio_despacho">3.3.2. Envio de despachos</a>). Caso o ??ltimo destinat??rio desse memorando seja outro funcion??rio, n??o haver??, na lista de despachos, espa??o para envi??-lo para outro funcion??rio</p>
                            <img src="<?php echo WWW;?>img/lista_despachos.PNG" class="img-fluid">
                            <h3>Acesso aos arquivos</h3>
                                    <p>Para acessar os arquivos anexos ao despacho basta clicar no nome do arquivo e seu download ser?? feito automaticamente</p> 
                        </dir>
                        <dir id="_imprimir">
                            <h3>3.3.7. Impress??o de despachos e memorandos</h3><hr>
                            <p>?? poss??vel realizar a impress??o dos memorandos da caixa de entrada (leia <a href="#_caixa_de_entrada">3.3.3. Caixa de entrada</a>), dos despachos da lista de despachos (leia <a href="#_lista_despachos">3.3.6. Leitura de despachos</a>) e dos memorandos da lista de memorandos despachados (leia <a href="#_memorandos_despachados">3.3.5. Memorandos Despachados</a>) bastando para isso clicar no bot??o "Imprimir" dispon??vel em cada uma dessas p??ginas.</p>
                        </dir>
                        <dir id="_erros">
                            <h3>3.3.8. Mensagens de erro</h3><hr>
                            <p>1. <strong>"Desculpe, voc?? n??o tem acesso a essa p??gina"</strong>: se ao acessar a lista de despachos de um memorando a mensagem <strong>"Desculpe, voc?? n??o tem acesso a essa p??gina"</strong> for exibida isso significa que voc?? est?? tentando acessar a lista de despachos de um memorando que nunca foi enviado para voc??. Para ter acesso a essa p??gina o memorando precisa ter sido enviado para voc??.</p>
                            <img src="<?php echo WWW;?>img/erro1.PNG" class="img-fluid">
                        </dir>
                    </dir>
                    <dir id="_modulo_socio">
                        <h3>3.4. M??dulo S??cio</h3><hr>
                        <p>O m??dulo s??cio ?? destinado ?? administra????o e ao controle de s??cios cadastrados no sistema. Nesse m??dulo ?? poss??vel fazer cadastro, importa????o e mudan??a de status de s??cios, al??m de poder acompanhar informa????es sobre pagamentos e gr??ficos sobre a tipologia dos s??cios (casuais, mensais, ativos, inativos, pessoas f??sicas e jur??dicas).</p>
                        <p>Para ter acesso ??s informa????es do m??dulo <strong>?? necess??rio que o funcion??rio logado esteja dotado das permiss??es adequadas</strong>, j?? que o m??dulo cont??m informa????es pessoais dos cadastrados.</p>
                        <dir id="_cadastro_socio">
                            <h3>3.4.1 Cadastro de s??cios</h3><hr>
                            <p>Para o cadastro de um s??cio, o funcion??rio respons??vel por esse m??dulo, dever?? acessar a <a href="<?php echo WWW;?>html/socio/">lista de s??cios</a> e clicar no bot??o "Adicionar s??cio", presente logo abaixo da lista de s??cios.</p>
                            <img src="<?php echo WWW;?>img/cadastro_socio.png" class="img-fluid">
                            <p>Ao clicar nesse bot??o, uma caixa de di??logo (modal) aparecer?? na tela, nesta caixa estar?? presente um formul??rio onde dever??o ser preenchidos os dados do s??cio a ser cadastrado.</p>
                            <img src="<?php echo WWW;?>img/formulario_socio1.png" class="img-fluid">
                            <p>Na primeira parte do formul??rio dever??o ser preenchidos dados pessoais do s??cio (nome completo, tipo de pessoa, cpf/cnpj, e-mail, telefone, tipo de contribuinte, status do s??cio e sua data de nascimento).</p>
                            <p>Ap??s o completar essas informa????es, voc?? poder?? continuar com o preenchimento dos dados subsequentes referentes ao endere??o do associado.</p>
                            
                        </dir>
                        <dir id="_gerar_boleto">
                            <h3>3.4.2 Gerar boleto/carn?? do s??cio</h3><hr>
                            <p>Para gerar carn??s/boletos para o s??cio desejado, voc?? deve completar o cadastro dele primeiro com os seguintes dados: valor por per??odo, data de refer??ncia e a periodicidade. Ap??s preencher as devidas informa????es, o usu??rio (apenas administradores possuem acesso ?? essa p??gina) deve digitar o nome do s??cio no primeiro campo da p??gina <a href="<?php echo WWW;?>html/socio/sistema/psocio_geracao.php">Gerar boleto/carn??</a> e clicar no bot??o "Pr??ximo" para aparecer o resultado.</p>
                           
                            <img src="<?php echo WWW;?>img/gerar_boleto.png" class="img-fluid">
                           
                            <p>Ao clicar nesse bot??o, mostrar?? o nome do s??cio solicitado.</p>
                           
                            <p>Outra op????o que o usu??rio pode ter ?? gerar boletos/carn??s para mais de um s??cio, dando praticidade ao administrador. </p> 
                            <img src="<?php echo WWW;?>img/geracao_automatica.png" class="img-fluid">
                            
                            <p>Ap??s selecionar os nomes dos s??cios, o usu??rio poder?? gerar o boleto/carn?? em massa.</p>
                        </dir>
                         <dir id="_cobranca_socio">
                            <h3>3.4.3 Cobran??as </h3><hr>
                            <p>Apenas os administradores possuem acesso ?? p??gina <a href="<?php echo WWW;?>html/socio/sistema/psocio_geracao.php">Cobran??as</a>. O administrador pode ter o controle das datas de vencimento, status, valor, per??odo, nome, e outras op????es dos s??cios.</p>
                           
                            <img src="<?php echo WWW;?>img/cobranca.png" class="img-fluid">
                        </dir>
                         <dir id="_tag_socio">
                            <h3>3.4.4 Tag </h3><hr>
                            <p>Apenas os administradores possuem acesso ?? p??gina <a href="<?php echo WWW;?>html/socio/sistema/tags.php">Tag</a>. Nessa p??gina, o admin pode ter o controle do id, do grupo e tamb??m tem a op????o de salvar ou deletar a(s) tag(s).</p>
                           
                            <img src="<?php echo WWW;?>img/tag.png" class="img-fluid">
                        </dir>
                         <dir id="_relatorio_socio">
                            <h3>3.4.5 Relat??rio dos s??cios </h3><hr>
                            <p>Apenas os administradores possuem acesso ?? p??gina <a href="<?php echo WWW;?>html/socio/sistema/relatorios_socios.php">Relat??rios s??cios </a>. Para criar um relat??rio, o administrador deve preencher as informa????es da p??gina e clicar no bot??o "Pr??ximo".</p>
                           
                            <img src="<?php echo WWW;?>img/relatorio.png" class="img-fluid">
                            <p> Ap??s clicar nesse bot??o, o relat??rio ser?? criado. </p>
                        </dir>
                    </dir>
                    <div class="justify-content-between">
                        <a href="./instalacao.php" type="button" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            2. Instala????o
                        </a>
                        <a href="./seguranca.php" type="button" class="btn btn-secondary" style="float: right;">
                            4. Seguran??a
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </section>

                <!-- estrutura b??sica:
                        <dir id="_">
                            <h3></h3><hr>
                            <p></p>
                        </dir>
                -->

                <!-- end: page -->
            </section>
        </div>
    </section>
</body>
<script>
    function setLoader(btn) {
        btn.firstElementChild.style.display = "none";
        if (btn.childElementCount == 1) {
            loader = document.createElement("DIV");
            loader.className = "loader";
            btn.appendChild(loader);
        }
        window.location.href = btn.firstElementChild.href;
    }
</script>
</html>
<!DOCTYPE php>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Icons -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- Style Global-->
    <link href="CSS/Tab.css" rel="stylesheet" type="text/css" />
    <!-- Style -->
    <link href="CSS/sala.css" rel="stylesheet" type="text/css" />
    <!-- Script -->
    <script src="JAVASCRIPT/Tab.js" type="text/JavaScript" defer></script>
    <script src="JAVASCRIPT/sala.js" defer></script>
    <script src="JAVASCRIPT/popSala.js" defer></script>
</head>

<body>
    <!-- Menu -->
    <nav class="menu">
        <div class="Seta">
            <i class='bx bxs-send'><div class="Circulo_Seta"></div></i>
        </div>
        <div class="Conteiner_Menu">
                <div class="NameServico">
                    <div class="Logo_Status_1">
                        <img src="../img/Logo 1.png" alt="Logo SGC">
                        <h4>Sistema de Gerenciamento </h4>
                        <h4>de Chaves</h4>
                    </div>
                    <div class="Logo_Status_2">
                        <img src="../img/Chave.png" alt="Logo SGC" class="imgs_menu_2">
                    </div>
                </div>
            <ul class="Lista_Menu">
                <!-- Item 1 MENU -->
                <li class="Item_Menu active">
                    <a href="home.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-home'></i>
                            <i class='bx bxs-home'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Home">Home</span>
                        </div>
                    </a>
                </li>
                <!-- Item 2 MENU -->
                <li class="Item_Menu">
                    <a href="gerenciamento.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-key' ></i>
                            <i class='bx bxs-key' ></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Gerenciamento">Gerenciamento</span>
                        </div>
                    </a>
                </li>
                <!-- Item 3 MENU -->
                <li class="Item_Menu">
                    <a href="pendente.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-archive-in'></i>
                            <i class='bx bxs-archive-in'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Pendente">Pendente</span>
                        </div>
                    </a>
                </li>
                <!-- Item 4 MENU -->
                <li class="Item_Menu">
                    <a href="Solicitacoes.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-user-voice'></i>
                            <i class='bx bxs-user-voice'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Solicitação">Solicitação</span>
                        </div>
                    </a>
                </li>
                <!-- Item 5 MENU -->
                <li class="Item_Menu">
                    <a href="Agendamento.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-hourglass-top'></i>
                            <i class='bx bxs-hourglass-top'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Agendamento">Agendamento</span>
                        </div>
                    </a>
                </li>
                <li class="Item_Menu">
                    <a href="cadastrodechave.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bxs-user-badge'></i>
                            <i class='bx bxs-user-badge'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Cadastro">Cadastro</span>
                        </div>
                    </a>
                </li>
                <!-- Linha -->
                <div class="Line_Icon_Sobre"></div>
                <!-- Item 6 MENU -->
                <li class="Item_Menu">
                    <a href="Sobre.php">
                        <div class="Item_Menu_Icon">
                            <i class='bx bx-group'></i>
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="Item_Menu_Infor">
                            <span data-text="Sobre">Sobre</span>
                        </div>
                    </a>
                </li>
                <!-- Item 7 MENU -->
                <li class="Item_Menu">
                    <a href="index.php" class="exit_menu">
                        <div class="Item_Menu_Icon">
                            <i class='bx bx-export'></i>
                            <i class='bx bx-export'></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <header id="cabecalho">
        <div class="bloco1">
            <!-- Nome user -->
            <div class="nome_user_header">
                <h4>Olá,</h4>
                <h4>Matheus</h4>
            </div>
            <!-- Pesquisa Lado do Nome -->
            <div class="pesquisa">
                <i class='bx bx-search-alt' id="seach_1_icon"></i>
                <input type="search" name="Pesquisa" class="seach_1 ">
            </div>
        </div>
        <section id="titulo-cadastrar">
                <a id="back-predios" href="home.php">
                    <h4>&lt Prédios</h4>
                </a>
                <button id="gerenciar-sala">Gerenciar salas</button>
            </section>
        <div class="container_predios">

            <section class="salas">
                <!-- <div class="mini-container-sala">
                    <img class="img-chave-sala" src="../img/Chave.png" alt="">
                    <div class="linha"></div>
                    <p class="nome_sala">Sala 101</p>
                    <div class="linha"></div>
                    <div class="nome_func_sala">Nome</div>
                    <section>
                        <button><img class="botao_verde" src="../img/botao_verde.svg" alt=""></button>
                        <button><img class="botao_red" src="../img/botao_vermelho.svg" alt=""></button>
                    </section>
                </div> -->

            <?php
            include_once '../config/salaHelper.php';

            $id_predio = filter_input(
                INPUT_GET,
                'id_predio',
                FILTER_SANITIZE_NUMBER_INT
            );
            $salas = getSalasPredio($id_predio);
            foreach($salas as $sa){
                echo    '<div class="mini-container-sala">';
                echo        '<img class="img-chave-sala" src="../img/Chave.png" alt="">';
                echo        '<div class="linha"></div>';
                echo            '<p class="nome_sala">Sala '.$sa->id_sala.'</p>';
                echo            '<div class="linha"></div>';
                echo        '<div class="nome_func_sala">Nome</div>';
                // echo    '<section>';
                // echo        ' <button><img class="botao_verde" src="../img/botao_verde.svg" alt=""></button>';
                // echo        '<button><img class="botao_red" src="../img/botao_vermelho.svg" alt=""></button>';
                // echo    '</section>';
                echo        '</div>';
            }
            ?>
                
           
            </section>

            

        </div>
        
        <div class="PopupAdicionarsala">
            <div class="ConteinarPopupAdicionarsala">
                <img src="../img/fig-aula.svg" alt="Sala">
                <div class="Lina_Popup_Adicionar"></div>
                <div class="InformacoesPopupAdicionarsalas">
                    <div class="InformoesPopupsalas_Bloco1">
                        <h4>Gerenciar salas<h4>
                                <button name="button-Adicionar-salas" class="button_Adicionar_sala_Fecha"><i
                                        class='bx bx-x'></i></button>
                    </div>
                    <div class="InformoesPopupsalas_Bloco2">
                        <button class="botoes-sala" id="botao-add">Adicionar sala</button>
                        <button class="botoes-sala" id="botao-clear">Excluir sala</button>
                    </div>

                </div>
            </div>
        </div>
<?php
 $id_predio = filter_input(
    INPUT_GET,
    'id_predio',
    FILTER_SANITIZE_NUMBER_INT
);
?>
        <div class="PopupAddsala">
            <div class="ConteinarPopupAddsala">
                <img src="../img/fig-aula.svg" alt="Sala">
                <div class="Lina_Popup_Add"></div>
                <div class="InformacoesPopupAddsalas">
                    <div class="InformoesPopupAddsalas1">
                        <h4>Adicionar sala<h4>
                        <button name="button-Add-salas" class="button_Add_sala_Fecha"><i
                        class='bx bx-x'></i></button>
                    </div>
                    <section>
                        <form name="formSalas" action="../config/salaHelper.php" method="POST">
                        <input style="display: none" name="tipo" id="tipo" type="text" value="cadastrarsala">
                        <input style="display: none" name="id_predio" id="tipo" type="number" value="<?php echo $id_predio?>">
                        <label for="numero">Numero: </label>
                        <input placeholder="Nº" name="numero" class="numero-sala" type="text">
                        <button value="submit" name="button-salvar-predioNovo" class="salvar-sala" id="salvar-sala">Salvar</button>
                    </form>
                    </section>
                </div>
            </div>
        </div>

        <div class="PopupExcluirsala">
            <div class="ConteinarPopupExcluirsala">
                <img src="../img/fig-aula.svg" alt="Sala">
                <div class="Lina_Popup_Excluir"></div>
                <div class="InformacoesPopupExcluirsalas">
                    <div class="InformoesPopupExcluirsalas1">
                        <h4>Excluir sala<h4>
                                <button name="button-Excluir-salas" class="button_Excluir_sala_Fecha"><i class='bx bx-x'></i></button>
                    </div>
                    <section>
                        <form action="">
                        <label for="numero">Numero: </label>
                        <input placeholder="Nº" name="numero" class="numero-sala" type="number">

                        <input value="submit" name="button-salvar-predioNovo" class="excluir-sala">
                        Salvar
                    </input>
                        </form>
                    </section>
                    
                </div>

            </div>
        </div>
        </div>

    </header>
    
    <main>
        <div class="Tabela_Chaves">
            <div class="Chaves_Predio2">
                <h4>Chave</h4>
            </div>
            <!-- Container Nomeclatura Predio -->
            <div class="Container_Predios1_Chave">
                <!-- Descrição Prédio -->
                <div class="informacao_predio">
                    <div class="informacao_predio_linha1"></div>
                    <div class="nome_predio_tabela2">
                        <h4>Prédio 1</h4>
                    </div>
                    <div class="informacao_predio_linha2"></div>
                </div>

            </div>
        </div>
        </div>
    </main>

    
</body>

</html>
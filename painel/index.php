<?php
    $pdo = new PDO('mysql:host=localhost;dbname=portfolio_projeto','root',''); //Chamando a função nativa do PHP e conectando ao banco de dados
    $sobre = $pdo->prepare("SELECT * FROM tb_sobre"); //A váriavel $pdo chama os dados do banco de dados, então selecione tudo da tabela tb_sobre e armazena na variavel sobre
    $sobre->execute(); 
    $sobre = $sobre->fetch()['sobre']; //Pegue tudo da coluna 'sobre'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <main id="mainPainel">
        <aside id="asidePainel">
            <div class="wrap">
                <div class="logo">
                    <a href="">Raissa Dev</a>
                </div><!--logo-->
                <nav class="menuPainel">
                    <ul>
                        <li><a class="active" href="../index.php"><i data-feather="home"></i>Início</a></li>
                        <li><a href="../contato.php"><i data-feather="search"></i>Contato</a></li>
                        <li><a href="../equipe.php"><i data-feather="users"></i>Equipe</a></li>
                        <li><a href="../portfolio.php"><i data-feather="bookmark"></i>Portfólio</a></li>
                    </ul>
                    <i class="menu-mobile backMenuPainel" id="backMenuPainel" data-feather="arrow-left"></i>
                </nav>
            </div><!--wrap-->
        </aside>
        <section class="content">
            <header>
                <div class="wrap grid-three grid-three__Mobile center">
                    <div class="icons">
                        <i class="openMenuPainel" id="openMenuPainel" data-feather="menu"></i>
                        <i style="display:none;" class="openMenuPainel2" id="openMenuPainel2" data-feather="menu"></i>
                    </div><!--icons-->
                    <div class="search">
                        <input type="search" placeholder="Pesquise aqui..." /><i data-feather="search" width="20px"></i>
                    </div><!--search-->
                    <div class="info-perfil">
                        <a href=""><i data-feather="message-circle" width="18px" height="18px"></i></a>
                        <a href=""><i data-feather="bell" width="18px" height="18px"></i></a>
                        <img src="uploads/myWallpaper.jpg" loading="lazy" />
                    </div><!--info-perfil-->
                </div><!--wrap-->
            </header>
            <section class="painel-info">
                <div class="wrap center">
                    <div class="messages">
                        <div class="box-message items-flex">
                            <div class="column icons">
                                <i data-feather="map-pin" width="15" height="15"></i> <span>Sua Area</span>
                            </div><!--column-->
                            <div class="column myMessage">
                                <span>Seu último login foi: <?php echo date('d/m/y',time()); ?></span>
                            </div><!--myMessage-->
                            <div class="column myButtons">
                                <div><button>Pesquisar</button></div>
                            </div><!--myButtons-->
                        </div><!--box-message-->
                    </div><!--messages-->
                </div><!--wrap-->
            </section><!--painel--info-->
            <section class="painel-config">
                <div class="wrap">
                    <div class="breadcrumb card center">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Painel</a></li>
                        </ul>
                    </div><!--breadcrumb-->
                    <div class="contents-painel">
                        <div class="card painel-registro" id="sobre">
                            <?php 
                                if(isset($_POST['editar_sobre'])){
                                    $sobre = $_POST['sobre'];
                                    $pdo->exec("DELETE FROM `tb_sobre`");
                                    $sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES (null,?)");
                                    $sql->execute(array($sobre));
                                    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
                                    $sobre->execute();
                                    $sobre = $sobre->fetch()['sobre'];
                                }else if(isset($_POST['cadastrar_equipe'])){
                                    $nome = $_POST['nome_membro'];
                                    $descricao = $_POST['descricao'];
                                    $sql = $pdo->prepare("INSERT INTO `td_equipe` VALUES (null,?,?)");
                                    $sql->execute(array($nome,$descricao));
                                }
                            ?>
                            <div class="title">
                                <h3>Sobre</h3>
                            <div class="line"></div><!--line-->
                            </div><!--title-->
                            <div class="box-form">
                                <form method="post">
                                    <textarea name="sobre" placeholder="Código html..."></textarea>
                                    <input type="hidden" name="editar_sobre" value="" />
                                    <input type="submit" name="acao" value="Enviar" />
                                </form>
                            </div><!--box-form-->
                        </div><!--card-->

                        <div class="card painel-registro" id="cadastrarEquipe">
                            <div class="title">
                                <h3>Equipe</h3>
                            <div class="line"></div><!--line-->
                            </div><!--title-->
                            <div class="box-form">
                                <form method="post">
                                    <input name="nome_membro" type="text" placeholder="Nome do membro" />
                                    <textarea name="descricao" placeholder="Profissão do membro..."></textarea>
                                    <input type="submit" value="Enviar" />
                                    <input type="hidden" name="cadastrar_equipe" />
                                </form>
                            </div><!--box-form-->
                        </div><!--card-->

                        <div class="card painel-registro" id="listaEquipe">
                            <div class="title">
                                <h3>Profissionais</h3>
                            <div class="line"></div><!--line-->
                            </div><!--title-->
                            <?php
                                $selecionarMembros = $pdo->prepare("SELECT * FROM `td_equipe`");
                                $selecionarMembros->execute();
                                $membros = $selecionarMembros->fetchAll();
                                    foreach($membros as $key=>$value){}
                            ?>
                            <div class="box-form">
                                <div class="profissional col-md5x5">
                                    <div class="nome-profissional">
                                        <span><?php echo $value['id']?></span>
                                        <span><?php echo $value['nome']?></span>
                                    </div>
                                    <div class="btn-profissional">
                                        <button class="deletar-membro" id="deletar-membro" id_membro="<?php echo $value['id'];?>">Excluir</button>
                                    </div>
                                </div><!--profissional-->
                            </div><!--box-form-->
                        </div><!--card-->
                    </div><!--contents-painel-->
                </div><!--wrap-->
            </section><!--paine-config-->
        </section><!--content-->
    </main>
    







<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="functions.js"></script>

</body>
</html>



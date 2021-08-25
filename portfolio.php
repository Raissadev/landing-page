<?php
    $pdo = new PDO('mysql:host=localhost;dbname=portfolio_projeto','root',''); //Chamando a função nativa do PHP e conectando ao banco de dados
    $sobre = $pdo->prepare("SELECT * FROM tb_sobre"); //A váriavel $pdo chama os dados do banco de dados, então selecione tudo da tabela tb_sobre e armazena na variavel sobre
    $sobre->execute(); 
    $sobre = $sobre->fetch()['sobre']; //Pegue tudo da coluna 'sobre'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Portfólio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/portfolio.css" rel="stylesheet" />
</head>
<body>
<?php
    include('models/header.php')
?>

    <section class="header-portfolio">
        <div class="title-portfolio">
            <h2>Portfólio</h2>
        </div><!--title-portfolio-->
    </section><!--header-portfolio-->

    <section class="portfolio center">
        <div class="title-portfolio">
            <h3>Minhas habilidades</h3>
            <div class="line"></div><!--line-->
        </div><!--title-contact-->
        <section class="col-one">
            <div class="wrap">
                <div class="box-xp">
                    <div class="col-boxOne">
                        <h6><span>2021</span> University of Studies</h5>
                    </div><!--col-boxOne-->
                    <div class="col-boxTwo">
                        <?php echo $sobre ?>
                    </div><!--col-boxTwo-->
                </div><!--box-xp-->
                <div class="box-xp">
                    <div class="col-boxOne">
                        <h6><span>2021</span> University of Studies</h5>
                    </div><!--col-boxOne-->
                    <div class="col-boxTwo">
                        <h3>Programação</h3>
                        <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                    </div><!--col-boxTwo-->
                </div><!--box-xp-->
                <div class="box-xp">
                    <div class="col-boxOne">
                        <h6><span>2021</span> University of Studies</h5>
                    </div><!--col-boxOne-->
                    <div class="col-boxTwo">
                        <h3>Programação</h3>
                        <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                    </div><!--col-boxTwo-->
                </div><!--box-xp-->
            </div><!--wrap-->
        </section><!--col-One-->
    
        <section class="col-one">
            <div class="wrap">
                <div class="box-xp">
                    <div class="col-boxOne">
                        <h6><span>2021</span> University of Studies</h5>
                    </div><!--col-boxOne-->
                    <div class="col-boxTwo">
                        <h3>Programação</h3>
                        <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                    </div><!--col-boxTwo-->
                </div><!--box-xp-->
                <div class="box-xp">
                    <div class="col-boxOne">
                        <h6><span>2021</span> University of Studies</h5>
                    </div><!--col-boxOne-->
                    <div class="col-boxTwo">
                        <h3>Programação</h3>
                        <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                    </div><!--col-boxTwo-->
                </div><!--box-xp-->
                <div class="box-xp">
                    <div class="col-boxOne">
                        <h6><span>2021</span> University of Studies</h5>
                    </div><!--col-boxOne-->
                    <div class="col-boxTwo">
                        <h3>Programação</h3>
                        <p>Duis posuere, quam non imperdiet egestas, eros enim mattis mauris, in posuere lacus arcu quis felis. Etiam interdum erat non enim venenatis fermentum.</p>
                    </div><!--col-boxTwo-->
                </div><!--box-xp-->
            </div><!--wrap-->
        </section><!--col-One-->
    </section><!--portfolio-->


    <section class="portfolio center">
        <div class="title-portfolio">
            <h3>Certificados</h3>
            <div class="line"></div><!--line-->
        </div><!--title-contact-->
            <div class="wrap col-md5x5 colMobile-md10">
                <div class="box-item items-flex">
                    <div class="certificate-logo">
                        <img src="images/client-7.png" />
                    </div><!--certificate-logo-->
                    <div class="certificate-info">
                        <h4>Psyhology of Intertnation Design</h4>
                        <span>Membership ID: XXXX</span>    <br />
                        <span class="date">19 April 2018</span>
                    </div><!--certificate-info-->
                </div><!--box-item-->
                <div class="box-item items-flex">
                    <div class="certificate-logo">
                        <img src="images/client-1.png" />
                    </div><!--certificate-logo-->
                    <div class="certificate-info">
                        <h4>Psyhology of Intertnation Design</h4>
                        <span>Membership ID: XXXX</span>    <br />
                        <span class="date">19 April 2018</span>
                    </div><!--certificate-info-->
                </div><!--box-item-->
            </div><!--wrap-->    
    </section><!--portfolio-->






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/functions.js"></script>

<?php
    include('models/footer.php')
?>
</body>

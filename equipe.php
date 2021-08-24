<!DOCTYPE html>
<html>
<head>
    <title>Equipe</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/equipe.css" rel="stylesheet" />
</head>
<body>
<?php
    include('models/header.php')
?>

    <section class="header-equipe">
        <div class="title-equipe">
            <h2>Equipe</h2>
        </div><!--title-equipe-->
    </section><!--header-equipe-->

    <section class="equipe center">
        <div class="title-equipe">
            <h3>Minha equipe</h3>
            <div class="line"></div><!--line-->
        </div><!--title-equipe-->
            <?php
                $pdo = new PDO('mysql:host=localhost;dbname=portfolio_projeto','root',''); //Chamando a função nativa do PHP e conectando ao banco de dados
                $selecionarMembros = $pdo->prepare("SELECT * FROM `td_equipe`");
                $selecionarMembros->execute();
                $membros = $selecionarMembros->fetchAll();
                for($i = 0; $i < count($membros); $i++){
            ?>
            <div class="wrap colMobile-md10">
                <div class="box-item">
                    <img src="images/myWallpaper.jpg" />
                    <h4><?php echo $membros[$i]['nome'] ?></h4>
                     <p><?php echo $membros[$i]['descricao'] ?></p>
                </div><!--box-item-->
            </div><!--wrap-->    
            <?php } ?>
    </section><!--portfolio-->







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>

<?php
    include('models/footer.php')
?>
</body>
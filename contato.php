<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/contato.css" rel="stylesheet" />
</head>
<body>
    <?php
        include('models/header.php');
    ?>

    <section class="header-contact">
        <div class="title-contact">
            <h2>Contato</h2>
        </div><!--title-contact-->
    </section><!--header-contact-->

    <section class="contact center">
        <div class="wrap col-md4x6 colMobile-md10">
            <div class="wrap-icons">
                <div class="box-item items-flex">
                    <i data-feather="smartphone" width="38" height="38"></i>
                    <div>
                    <h4>415-832-2000</h4>
                    <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p>
                    </div>
                </div><!--box-item-->
                <div class="box-item items-flex">
                    <i data-feather="map-pin" width="38" height="38"></i>
                    <div>
                    <h4>Rio Grande do Sul - Brazil</h4>
                    <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p>
                    </div>
                </div><!--box-item-->
                <div class="box-item items-flex">
                    <i data-feather="mail" width="38" height="38"></i>
                    <div>
                    <h4>raissa.fullstack@gmail.com</h4>
                    <p>Duis erat leo, aliquam laoreet fringilla quis, pretium vitae dui.</p>
                    </div>
                </div><!--box-item-->
            </div><!--wrap-icons-->
            <div class="form">
                <form>
                    <div class="title-contact">
                        <h3>Como posso ajudá-lo?</h3>
                        <div class="line"></div><!--line-->
                    </div><!--title-contact-->
                    <div class="box-form col-md5x5 ">
                        <div class="colForm">
                            <input type="text" placeholder="Nome completo" name="nome" id="nome" />
                            <input type="email" placeholder="Endereço de Email" name="email" id="email" />
                            <input type="text" placeholder="Sujeito" name="sujeito" id="sujeito"/>
                            <input type="submit" value="Enviar Mensagem" name="menssagem" id="menssagem" />
                        </div><!--colForm-->
                        <div class="colForm">
                            <textarea placeholder="Sua mensagem..."></textarea>
                        </div><!--colForm-->
                    </div><!--box-form-->
                </form>
            </div><!--form-->
        </div><!--wrap-->
    </section><!--contact-->

    <?php
        include('models/footer.php');
    ?>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/functions.js"></script>

</body>
</html>



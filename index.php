<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <?php
        include('models/header.php');
    ?>

    <main>
        <section class="row col-md4x6 colMobile-md10 center">
            <div class="img-perfil">
                <img src="images/myWallpaper.jpg" />
            </div><!--img-perfil-->
            <div class="infos">
                <p class="profissao">Full-Stack Developer</p><!--profissao-->
                <h2>Raissa Daros</h2>
                <p>Fusce tempor magna mi, non egestas velit ultricies nec. Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna, a placerat sapien pretium eu.</p>
                <a href="">Telefone</a>
                <a href="">Contato</a>
            </div><!--infos-->
        </section><!--row-->
    </main>

    <section class="formacoes">
        <div class="row center">
            <div class="title title-decoration">
                <h3>O'que eu faço?</h3>
            </div><!--title-->
            <div class="wrap col-md5x5 colMobile-md10">
                <div class="box-item items-flex">
                    <i data-feather="edit-2"></i>
                    <div>
                    <h4>Cópia escrita</h4>
                    <p>Mauris neque libero, aliquet vel mollis nec, euismod sed elit. O maior desenvolvedor do vale disse neste fim de semana. Vivamus blandit, o maior da dor da vida, lacinia, risus velit Vehicula odio, tincidunt turpis turpis tempo de acordo com a.</p>
                    </div>
                </div><!--box-item-->
                <div class="box-item items-flex">
                    <i data-feather="shopping-bag"></i>
                    <div>
                    <h4>Cópia escrita</h4>
                    <p>Mauris neque libero, aliquet vel mollis nec, euismod sed elit. O maior desenvolvedor do vale disse neste fim de semana. Vivamus blandit, o maior da dor da vida, lacinia, risus velit Vehicula odio, tincidunt turpis turpis tempo de acordo com a.</p>
                    </div>
                </div><!--box-item-->
                <div class="box-item items-flex">
                    <i data-feather="monitor"></i>
                    <div>
                    <h4>Cópia escrita</h4>
                    <p>Mauris neque libero, aliquet vel mollis nec, euismod sed elit. O maior desenvolvedor do vale disse neste fim de semana. Vivamus blandit, o maior da dor da vida, lacinia, risus velit Vehicula odio, tincidunt turpis turpis tempo de acordo com a.</p>
                    </div>
                </div><!--box-item-->
                <div class="box-item items-flex">
                    <i data-feather="bookmark"></i>
                    <div>
                    <h4>Cópia escrita</h4>
                    <p>Mauris neque libero, aliquet vel mollis nec, euismod sed elit. O maior desenvolvedor do vale disse neste fim de semana. Vivamus blandit, o maior da dor da vida, lacinia, risus velit Vehicula odio, tincidunt turpis turpis tempo de acordo com a.</p>
                    </div>
                </div><!--box-item-->
            </div><!--wrap-->
        </div><!--row-->
    </section><!--formacoes-->

    <section class="testimonials">
        <div class="row center">
            <div class="title title-decoration">
                <h3>Testemunhas</h3>
            </div><!--title-->
            <div class="wrap col-md5x5 items-flexMobile">
                <div class="box-testimonial">
                    <img src="images/imgTestimonial.jpg" />
                    <i data-feather="bookmark"></i>
                    <div class="info-testimonial">
                        <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                        <h5 class="testimonial-author">Billy Adams</h5>
                        <p class="testimonial-firm">Rolling Thunder</p>
                    </div><!--info-testimonial-->
                </div><!--box-testimonial-->
                <div class="box-testimonial">
                    <img src="images/imgTestimonial.jpg" />
                    <i data-feather="bookmark"></i>
                    <div class="info-testimonial">
                        <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod mauris, a feugiat urna ullamcorper non.</p>
                        <h5 class="testimonial-author">Billy Adams</h5>
                        <p class="testimonial-firm">Rolling Thunder</p>
                    </div><!--info-testimonial-->
                </div><!--box-testimonial-->
            </div><!--wrap-->
        </div><!--row-->
    </section><!--testimonials-->

    <section class="curiosity">
        <div class="row center">
            <div class="title title-decoration">
                <h3>Curiosidades</h3>
            </div><!--title-->
            <div class="wrap grid-four colMobile-md10">
                <div class="box-curiosity">
                    <i data-feather="heart"></i>
                    <h2>Clientes Felizes</h2>
                    <p class="count">578</p>
                </div><!--box-curiosity-->
                <div class="box-curiosity">
                    <i data-feather="watch"></i>
                    <h2>Jornada de trabalho</h2>
                    <p class="count">4,780</p>
                </div><!--box-curiosity-->
                <div class="box-curiosity">
                    <i data-feather="star"></i>
                    <h2>Prêmios Ganhos</h2>
                    <p class="count">15</p>
                </div><!--box-curiosity-->
                <div class="box-curiosity">
                    <i data-feather="coffee"></i>
                    <h2>Café consumido</h2>
                    <p class="count">1,286</p>
                </div><!--box-curiosity-->
            </div><!--wrap-->
        </div><!--row-->
    </section><!--curiosity-->

    <?php
        include('models/footer.php');
    ?>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/functions.js"></script>

</body>
</html>



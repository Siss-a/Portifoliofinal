<?php
$textos = file(filename: "textos.txt");
?>
<html>

<head>
    <title>Portifolio - Larissa Otomo Klarosk</title>
    <link rel="icon" href="img/estrela2.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b62bd4ed58.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bungee&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<!--BODY-->

<body>
    <!--HEADER-->
    <header id="header">
        <div class="container">

            <div class="flex">

                <h1 class="logo"><?php echo "$textos[0]" ?></h1>

                <nav>
                    <ul>
                        <li><a href="#home"><?php echo "$textos[2]" ?></a></li>
                        <li><a href="#portifolio"><?php echo "$textos[3]" ?></a></li>
                        <li><a href="#sobremim"><?php echo "$textos[4]" ?></a></li>
                        <li><a href="#contato"><?php echo "$textos[5]" ?></a></li>
                    </ul>
                </nav>

            </div><!--flex-->

        </div><!--container-->
    </header><!--FIM HEADER-->
    <script src="menu.js"></script>
    <!--BANNER-->

    <section id="home" class="banner">
        <div class="txtbanner">
            <h2 class="txtbanner1"><?php echo "$textos[7]" ?></h2>
            <h1 class="txtbanner2"><?php echo "$textos[0]" ?></h1>
            <p><?php echo "$textos[8]" ?></p>
            <div class="bannerredes">
                <div class="minirede"><a href="https://www.instagram.com" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a></div>
                <div class="minirede"><a href="https://github.com" target="_blank"><i
                            class="fa-brands fa-github"></i></a></div>
                <div class="minirede"><a href="https://www.linkedin.com/" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a></div>
            </div>
        </div>
        <div class="imgbanner">
            <img src="img/minifigure.png" alt="minifigure">
        </div>
    </section>
    <!--FIM BANNER-->

    <!--SOBRE MIM-->
    <div id="sobremim" class="sobremim">
        <div class="sobremimtxt">
            <h1><?php echo "$textos[10]" ?></h1>

            <p><?php echo "$textos[11]" ?></p>
            <p><?php echo "$textos[12]" ?></p>
            <p><?php echo "$textos[13]" ?></p>
            <p><?php echo "$textos[14]" ?></p>
        </div>
        <div class="imgsobremim">
            <img src="img/mirko.jpg" alt="mirko">
            <img src="img/ar17.jpg" alt="arma">
            <img src="img/charlie.jpg" alt="charlie">
            <img src="img/purevanilla.jpeg" alt="purevanilla">
        </div>
    </div>
    <!--FIM SOBRE MIM-->

    <!--CAIXA DE FERRAMENTAS-->
    <div class="ferramentas">
        <div class="txtferramentas">
            <h1><?php echo "$textos[16]" ?></h1>
            <p><?php echo "$textos[17]" ?></p>
        </div>
        <div class="cardsferramenta">
            <div class="cardferramenta">
                <i class="fa-regular fa-image"></i>
                <div>
                    <h1><?php echo "$textos[19]" ?></h1>
                    <p><?php echo "$textos[20]" ?></p>
                </div>
            </div>
            <div class="cardferramenta">
                <i class="fa-brands fa-css"></i>
                <div>
                    <h1><?php echo "$textos[21]" ?></h1>
                    <p><?php echo "$textos[22]" ?></p>
                </div>
            </div>
            <div class="cardferramenta">
                <i class="fa-brands fa-php"></i>
                <div>
                    <h1><?php echo "$textos[23]" ?></h1>
                    <p><?php echo "$textos[24]" ?></p>
                </div>
            </div>
            <div class="cardferramenta">
                <i class="fa-brands fa-square-js"></i>
                <div>
                    <h1><?php echo "$textos[25]" ?></h1>
                    <p><?php echo "$textos[26]" ?></p>
                </div>
            </div>
        </div>
    </div><!--FIM CAIXA DE FERRAMENTAS-->
    <!--PROJETOS-->
    <div id="portifolio" class="portifolio">
        <div class="titleportifolio">
            <h1><?php echo "$textos[28]" ?></h1>
            <p><?php echo "$textos[29]" ?></p>
        </div>
        <div class="projetoa">
            <div class="projetoesquerda">
                <div class="imgprojeto">
                    <img src="img/logo.png" alt="chefedreamslogo">
                </div>
                <div class="txtprojetoa">
                    <h1><?php echo "$textos[31]" ?></h1>
                    <h2><?php echo "$textos[32]" ?></h2>
                    <p><a href="https://github.com/Siss-a/ChefDreams" target="_blank"><?php echo "$textos[33]" ?></a>
                    </p>
                </div>
            </div>
            <div class="projetodireita">
                <div class="imgprojetob">
                    <img src="img/chefedreams.png" alt="chefedreams">
                </div>
            </div>

        </div><!--FIM PROJETOA-->
        <div class="projetoa">
            <div class="projetoesquerda">
                <div class="imgprojeto">
                    <img src="img/sophiAcademy.png" alt="sophyacademylogo">
                </div>
                <div class="txtprojetoa">
                    <h1><?php echo "$textos[34]" ?></h1>
                    <h2><?php echo "$textos[35]" ?></h2>
                    <p><a href="https://github.com/Siss-a/ChefDreams" target="_blank"><?php echo "$textos[33]" ?></a>
                    </p>
                </div>
            </div>
            <div class="projetodireita">
                <div class="imgprojetob">
                    <img src="img/sophyacademy.png" alt="sophyacademy">
                </div>
            </div>

        </div><!--FIM PROJETOA-->
    </div>
    <!--FIM PROJETOS-->
</body>
<!--FIM BODY-->

<!--FOOTER-->
<footer id="contato">
    <div class="flexbox"><!--flexbox-->
        <h1><?php echo "$textos[37]" ?></h1>
        <h2 id="txtcopiavel" onclick="copiartxt()" style="cursor: pointer;"><?php echo "$textos[38]" ?></h2>
        <h2 id="txtcopiavel" onclick="copiartxt()" style="cursor: pointer;"><?php echo "$textos[39]" ?></h2>
        <div class="footerredes">
            <nav>
                <div class="minirede"><a href="https://www.instagram.com" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a></div>
                <div class="minirede"><a href="https://github.com" target="_blank"><i
                            class="fa-brands fa-github"></i></a></div>
                <div class="minirede"><a href="https://www.linkedin.com/" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a></div>
            </nav>
        </div>
        <div id="footer_copyright">
            &#169
            2023 all rights reserved
        </div>
    </div><!--fim flexbox-->
</footer>
<!--FIM FOOTER-->

</html>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        alert("Document is fully loaded and parsed!");
        let header = document.querySelector('#header');
        header.classList.toggle('rolagem', window.scrollY > 500);
    });

</script>
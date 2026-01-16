<?php
// Inclui os arquivos de configuração e conexão
require_once("config.php");
require_once("conexao.php");
include_once("cabecalho.php");
?>

<section class="section swiper-container swiper-slider swiper-slider-modern" data-loop="true" data-autoplay="5000"
    data-simulate-touch="true" data-nav="true" data-slide-effect="fade">
    <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="images/01.png">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-center justify-content-xxl-start">
                        <div class="col-md-10 col-xxl-6">
                            <div class="slider-modern-box">
                                <h1 class="slider-modern-title"><span data-caption-animate="slideInDown"
                                        data-caption-delay="0">Jiu-Jitsu Adulto</span></h1>
                                <p data-caption-animate="fadeInRight" data-caption-delay="400"><strong>Jiu-Jítsu Adulto:
                                        “Força, técnica e confiança para a vida — dentro e fora do tatame.”</strong></p>
                                <div class="oh button-wrap"><a class="button button-primary button-ujarak"
                                        href="jiujitsu.php" data-caption-animate="slideInLeft"
                                        data-caption-delay="400">Veja sobre</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/03.png">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-center justify-content-xxl-start">
                        <div class="col-md-10 col-xxl-6">
                            <div class="slider-modern-box">
                                <h1 class="slider-modern-title"><span data-caption-animate="slideInLeft"
                                        data-caption-delay="0"> Muay thai</span></h1>
                                <p data-caption-animate="fadeInRight" data-caption-delay="400">“Potência, foco e
                                    superação a cada golpe.”</p>
                                <div class="oh button-wrap"><a class="button button-primary button-ujarak"
                                        href="muaythai.php" data-caption-animate="slideInLeft"
                                        data-caption-delay="400">Veja sobre</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-slide-bg="images/02.png">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-center justify-content-xxl-start">
                        <div class="col-md-10 col-xxl-6">
                            <div class="slider-modern-box">
                                <h1 class="slider-modern-title"><span data-caption-animate="slideInDown"
                                        data-caption-delay="0">Jiu-Jítsu Kids</span></h1>
                                <p data-caption-animate="fadeInRight" data-caption-delay="400">“Formando campeões de
                                    caráter antes dos campeões de medalhas.”</p>
                                <div class="oh button-wrap"><a class="button button-primary button-ujarak"
                                        href="kids.php" data-caption-animate="slideInUp" data-caption-delay="400">Veja
                                        sobre</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination swiper-pagination-style-2"></div>
</section>

<section class="section section-md bg-default section-top-image">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                <article class="box-icon-ruby">
                    <div
                        class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-ruby-icon fas fa-user-friends"></div>
                        </div>
                        <div class="unit-body">
                            <h4 class="box-icon-ruby-title"><a href="jiujitsu.php">JIU-JITSU ADULTO</a></h4>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                <article class="box-icon-ruby">
                    <div
                        class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-ruby-icon far fa-smile"></div>
                        </div>
                        <div class="unit-body">
                            <h4 class="box-icon-ruby-title"><a href="kids.php">JIU-JITSU KIDS</a></h4>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                <article class="box-icon-ruby">
                    <div
                        class="unit box-icon-ruby-body flex-column flex-md-row text-md-left flex-lg-column align-items-center text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-ruby-icon fas fa-mitten"></div>
                        </div>
                        <div class="unit-body">
                            <h4 class="box-icon-ruby-title"><a href="muaythai.php">MUAY THAI</a></h4>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section section-md bg-default">
    <div class="container">
        <div class="row row-40 justify-content-center">
            <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft" data-wow-delay="0s">
                <div class="product-banner"><img src="images/5.png" alt="" width="570" height="715" />
                    <div class="product-banner-content">
                        <div class="product-banner-inner" style="background-image: url(images/6.png)">
                            <h2 class="text-primary">Roupas e Acessórios</h2>
                            <h3 class="text-secondary-1">Loja Virtual</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-6">
                <div class="row row-30 justify-content-center">
                    <div class="col-sm-6 col-md-12 col-lg-6">
                        <article class="product product-2 box-ordered-item wow slideInRight">
                            <div class="unit flex-row flex-lg-column">
                                <div class="unit-left">
                                    <div class="product-figure"><img src="images/7.png" alt="" width="270"
                                            height="280" />
                                        <div class="product-button"><a
                                                class="button button-md button-white button-ujarak" href="#">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h6 class="product-title"><a href="#">KIMONOS</a></h6>
                                    <div class="product-price-wrap">
                                        <div class="product-price product-price-old">R$ 450,00</div>
                                        <div class="product-price">R$ 380,00</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-6">
                        <article class="product product-2 box-ordered-item wow slideInLeft">
                            <div class="unit flex-row flex-lg-column">
                                <div class="unit-left">
                                    <div class="product-figure"><img src="images/10.png" alt="" width="270"
                                            height="280" />
                                        <div class="product-button"><a
                                                class="button button-md button-white button-ujarak" href="#">COMPRAR</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <h6 class="product-title"><a href="#"> FAIXAS</a></h6>
                                    <div class="product-price-wrap">
                                        <div class="product-price">R$ 80,00</div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section text-center">
    <div class="parallax-container" data-parallax-img="images/11.png">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-40">
            <div class="container">
                <h2 class="oh font-weight-normal"><span class="d-inline-block wow slideInDown">COMO FUNCIONAM AS
                        AULAS?</span></h2>
                <p class="oh big text-width-large"><span class="d-inline-block wow slideInUp">Na Academia Nova Arte, o
                        Jiu-Jitsu vai muito além da luta. Veja a explicação no vídeo!</span></p>
                <a class="button button-primary button-icon button-icon-left button-ujarak wow fadeInUp"
                    href="https://www.youtube.com/watch?v=sH-ACGkyPCU" data-lightgallery="item">
                    <span class="icon fas fa-play"></span>VER VÍDEO EXPLICATIVO
                </a>
            </div>
        </div>
    </div>
</section>

<?php include_once("rodape.php"); ?>

<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

    <head>
        <?php $this->load->view('header/header_administrativo'); ?>

    </head>

    <style>
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -moz-font-feature-settings: 'liga';
            -moz-osx-font-smoothing: grayscale;
        }

        .middle-indicator {
            position: absolute;
            top: 50%;
        }

        .middle-indicator-text {
            font-size: 4.2rem;
        }

        a.middle-indicator-text {
            color: white !important;
        }

        .content-indicator {
            width: 64px;
            height: 64px;
            background: none;
            -moz-border-radius: 50px;
            -webkit-border-radius: 50px;
            border-radius: 50px;
        }

        .indicators {
            visibility: hidden;
        }
    </style>


    <body>
        <div id="app">



            <div class="container">
                <div class="row">
                    <div id="carouselContainer" class="container">
                        <div class="carousel carousel-slider center " data-indicators="true">
                            <div class="carousel-fixed-item center middle-indicator">
                                <div class="left">
                                    <a href="#carouselContainer" onclick="movePrevCarousel()" class="middle-indicator-text waves-effect waves-light content-indicator"><i
                                            class="material-icons left  middle-indicator-text">chevron_left</i></a>
                                </div>

                                <div class="right">
                                    <a href="#carouselContainer" onclick="moveNextCarousel()" class="middle-indicator-text waves-effect waves-light content-indicator"><i
                                            class="material-icons right middle-indicator-text">chevron_right</i></a>
                                </div>
                            </div>
                            <div class="carousel-item red white-text" href="#one!">
                                <h2>First Panel</h2>
                                <p class="white-text">This is your first panel</p>
                            </div>
                            <div class="carousel-item amber white-text" href="#two!">
                                <h2>Second Panel</h2>
                                <p class="white-text">This is your second panel</p>
                            </div>
                            <div class="carousel-item green white-text" href="#three!">
                                <h2>Third Panel</h2>
                                <p class="white-text">This is your third panel</p>
                            </div>
                            <div class="carousel-item blue white-text" href="#four!">
                                <h2>Fourth Panel</h2>
                                <p class="white-text">This is your fourth panel</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="container section">
                <div class="row">
                    <div class="col l4">

                    </div>
                    <div class="col l4">
                        <h3 class="center">Tratamientos Populares</h3>
                        <hr>
                    </div>
                    <div class="col l4">

                    </div>


                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l4 "v-for="s in servicio.slice(0,6)">
                        <div class="card large">
                            <div class="card-image">
                                <img id="img-zoom" v-bind:src="'./uploads/' + s.imagen" alt="" class="materialboxed responsive-img" />

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">{{s.nombre_servicio}}<i class="material-icons right">info</i></span>
                                <span>Precio: ${{s.valor}}</span>
                            </div>

                            <div class="card-action right">
                                <a class="waves-effect waves-light btn"><i class="material-icons left">add_shopping_cart</i>COMPRAR</a>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">{{s.nombre_servicio}}<i class="material-icons right">close</i></span>
                                <p>{{s.descripcion}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="fixed-action-btn"><a class="btn-floating btn-large red" href="#home" target="_blank"><i class="large material-icons">arrow_upward</i></a></div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">

                    <div class="col l4  s12">
                        <h5 class="white-text">TecnoBella</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Nosotros</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Direccion</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Contacto</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Horario de Atención</a></li>
                        </ul>
                    </div>
                    <div class="col l4 offset-l4 s12 ">

                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Blog</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Testimonios</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Preguntas Frecuentes</a></li>
                            <li></li>
                            <li>
                                <img id="imagen2" src="<?= base_url() ?>assets/img/formas-pago.png" alt="" class="responsive-img right" height="100px" width="100px">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2020 Copyright

                </div>
            </div>
        </footer>

        <!--JavaScript at end of body for optimized loading-->


        <?php $this->load->view('footer/footer_administrativo'); ?>


        <script src="<?= base_url() ?>assets/js/servicio.js" type="text/javascript"></script>
        <script>
           document.addEventListener('DOMContentLoaded', function () {
    var carouselElems = document.querySelector('.carousel.carousel-slider');
        var carouselInstance = M.Carousel.init(carouselElems, {
            fullWidth: true,
            indicators: true
        });
    });
    function moveNextCarousel() {
        var elems = document.querySelector('.carousel.carousel-slider');
        var moveRight = M.Carousel.getInstance(elems);
        moveRight.next(1);
    }
    function movePrevCarousel() {
        var elems = document.querySelector('.carousel.carousel-slider');
        var moveLeft = M.Carousel.getInstance(elems);
        moveLeft.prev(1);
    }

    
   
        </script>
        <script>
        
        </script>
    </body>
</html>
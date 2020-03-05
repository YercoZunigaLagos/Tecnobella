<!DOCTYPE html>
<html>

    <head>
        <?php $this->load->view('header/header_administrativo'); ?>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/estilo_principal.css"  media="screen,projection"/>
    </head>




    <body>
        <div id="app">
            <?php $this->load->view('cliente/navbar_sidenav'); ?>


            <div class="container">
                <div class="row">


                    <div class="col s12 m12 l12">
                        <div class="slider">
                            <ul class="slides">
                                <li>
                                    <img src="<?= base_url() ?>assets/img/foto web 1.jpg" alt="">
                                    <div class="caption center-align">
                                        <h3>Sencillo y Efectivo</h3>
                                        <h5 class="light">Reserva tu hora ya!</h5>
                                    </div>
                                </li>

                                <li>
                                    <img src="<?= base_url() ?>assets/img/s5.jpg" alt="">
                                    <div class="caption right-align">
                                        <h3>Lorem, ipsum dolor.</h3>
                                        <h5 class="light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, praesentium.</h5>
                                    </div>
                                </li>


                                <li>
                                    <img src="<?= base_url() ?>assets/img/s4.jpg" alt="">
                                    <div class="caption left-align">
                                        <h3>Lorem, ipsum dolor.</h3>
                                        <h5 class="light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, praesentium.</h5>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/img/s3.jpg" alt="">
                                    <div class="caption left-align">
                                        <h3>Lorem, ipsum dolor.</h3>
                                        <h5 class="light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, praesentium.</h5>
                                    </div>
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/img/s3.jpg" alt="">
                                    <div class="caption left-align">
                                        <h3>Lorem, ipsum dolor.</h3>
                                        <h5 class="light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa, praesentium.</h5>
                                    </div>
                                </li>

                            </ul>

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
        <script type="text/javascript">


        document.addEventListener('DOMContentLoaded', function () {
          var elems = document.querySelectorAll('.slider');
          var instances = M.Slider.init(elems, {

            duration:500,
            interval:7000
          });

          var elems = document.querySelectorAll('.materialboxed');
          var instances = M.Materialbox.init(elems);

          var elems = document.querySelectorAll('.sidenav');
          var instances = M.Sidenav.init(elems,{

          });
          var elems = document.querySelectorAll('.dropdown-trigger');
          var instances = M.Dropdown.init(elems,{

            coverTrigger: false
          });






        });

      </script>
    </body>
</html>
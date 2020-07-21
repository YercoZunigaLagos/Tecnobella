<!DOCTYPE html>
<html>

    <head>
        <?php $this->load->view('header/header_administrativo'); ?>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/estilo_principal.css"  media="screen,projection"/>
    </head>
    <style>


        .contenedor{
            position: relative;
            display: inline-block;
            text-align: center;
        }


        .centrado{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>



    <body>
        <div id="app">
            <?php $this->load->view('cliente/navbar_sidenav'); ?>


            <div class="container">
                <div class="row">


                    <div class="col s12 m12 l12">
                        <div class="carousel carousel-slider">

                            <div class="carousel-fixed-item center">

                            </div>

                            <a href="" class="carousel-item contenedor">

                                <h3 class="centrado">Centrado</h3>
                                <img src="<?= base_url() ?>assets/img/foto web 1.jpg" alt="">
                            </a>

                            <a href="" class="carousel-item">
                                <img src="<?= base_url() ?>assets/img/foto web 1.jpg" alt="">
                            </a>

                            <a href="" class="carousel-item">
                                <img src="<?= base_url() ?>assets/img/foto web 1.jpg" alt="">
                            </a>

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
                    <div class="col s12 m12 l4"v-for="s in servicio.slice(0,6)">

                        <div class="card large ">
                            <div class="card-image">
                                <img id="img-zoom" v-bind:src="'./uploads/' + s.imagen" alt="" class="materialboxed responsive-img" />

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">{{s.nombre_servicio}}  {{s.nombre_zona}}<i class="material-icons right">info</i></span>
                                <span class="card-title activator grey-text text-darken-4">{{s.genero}}</span>
                                <span class="card-title activator grey-text text-darken-4 center">${{s.valor}}</span>
                            </div>

                            <div class="card-action center">
                                <a class="waves-effect waves-light btn "><i class="material-icons left">add_shopping_cart</i>Agregar al carro</a>
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

       
       
        <div id="contacto_Whatsapp"></div>
       

        <!--JavaScript at end of body for optimized loading-->

        <?php $this->load->view('footer/footer_cliente'); ?>
        <?php $this->load->view('footer/footer_administrativo'); ?>
        <script src="<?= base_url() ?>assets/js/servicio.js" type="text/javascript"></script>
        <script type="text/javascript">


document.addEventListener('DOMContentLoaded', function () {


    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);

    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {
    });
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
        coverTrigger: false
    });
    var carouselElems = document.querySelector('.carousel.carousel-slider');
    var carouselInstance = M.Carousel.init(carouselElems, {
        fullWidth: true,
        indicators: true
    });
     var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems);






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
        <script type="text/javascript">
  $(function () {
    $('#contacto_Whatsapp').floatingWhatsApp({
      phone: '56958635081',
    popupMessage: 'Hola, ¿En que te podemos ayudar?',
    showPopup: true,
    position: 'right'
    });
  });
</script>
    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <?php $this->load->view('header/header_administrativo'); ?>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/estilo_principal.css"  media="screen,projection"/>
        <meta charset="UTF-8">
        <title>Ofertas</title>
    </head>
    <body style="background: ##f5f5f5">
        <div id="app">
            <?php $this->load->view('cliente/navbar_sidenav'); ?>
            
            
                <div class="row">
                    <div class="col l4 m6 s12 offset-s2 offset-m3 "v-for="s in servicio">

                        <div class="card large ">
                            <div class="card-image">
                                <img id="img-zoom" v-bind:src="'./uploads/' + s.imagen" alt="" class="materialboxed responsive-img" />

                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">{{s.nombre_servicio}}  {{s.nombre_zona}}<i class="material-icons right">info</i></span>
                                <span class="card-title activator grey-text text-darken-4">{{s.genero}}</span>
                                <hr>
                                <span class="card-title activator grey-text text-darken-4 center">${{s.valor}}</span>
                            </div>

                            <div class="card-action center">
                                <a class="waves-effect waves-light btn ">Reservar</a>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">{{s.nombre_servicio}} {{s.nombre_zona}}<i class="material-icons right">close</i></span>
                                <span class="card-title activator grey-text text-darken-4">{{s.genero}}</span>
                                <hr>
                                <p>{{s.descripcion}}</p>
                            </div>
                        </div>
                    </div>

                </div>
           
        </div>
        
    <div id="contacto_Whatsapp"></div>
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

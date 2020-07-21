<!DOCTYPE html>
<html>

    <head>
        <?php $this->load->view('header/header_administrativo'); ?>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/estilo_principal.css"  media="screen,projection"/>
        <style>
            .col{
                justify-content: center;
                align-items: center;
            }
            #cantidad{
                height: 140px;
            }
            #numero{
                position: -webkit-sticky;
                position: sticky;
            }






        </style>

    </head>




    <body style="background: ##f5f5f5">

        <div id="app">
            <?php $this->load->view('cliente/navbar_sidenav'); ?>
            <div class="container z-depth-5" style="background: white">
                <div class="row " id="area-contenido">
                    <div class="col l5 m12 s12" id="imagen">
                        <img src="<?= base_url() ?>uploads/piernas.jpg" alt="" width="100%" height="100%">
                    </div>
                    <div class="col l7 m12 s12" id="columna-contenido">
                        <div class="row">

                            <div class="col l12 m12 s12">
                                <h3 class="center">Servicio ejemplo</h3>
                            </div>
                            <div class="col l12 m12 s12">
                                <h4 class="center">$90.000</h4>
                                <hr>

                                <div class="col l5 m12 s12 valign-wrapper" id="cantidad">
                                    <div class="col l2">
                                        <i class="material-icons">shopping_cart</i>
                                    </div>
                                    <div class="col l3">
                                        <button id="down" class="btn btn-default right" onclick=" up('4')"><i class="material-icons">add</i></button>
                                    </div>
                                    <div class="col l4" id="numero">
                                        <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                    </div>
                                    <div class="col l3">
                                        <button id="up" class="btn btn-default left" onclick="down('0')"><i class="material-icons">remove</i></button>

                                    </div>
                                </div>
                                <div class="col l5 m12 s12 right">

                                    <h6 class="center ">Cantidad de sesiones</h6>
                                    <select>

                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>

                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="row">




                        <div class="col l12 m12 s12 center">
                            <button class="waves-effect waves-light btn">Reservar</button>

                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col l12 left">
                    <h4>Descripción</h4>
                </div>
                <div class="l12">
                    <p>Aliquam blandit mi dui. Curabitur at laoreet urna. Maecenas eu velit gravida, euismod urna vel, eleifend nunc. Mauris nec tortor aliquet sapien congue cursus. Pellentesque maximus, turpis eu condimentum placerat, nisi tellus ultricies orci, tincidunt elementum erat sapien ut metus. Donec posuere, turpis eget ultricies feugiat, ligula erat gravida lacus, vitae viverra libero urna sed sapien. Aenean leo arcu, rhoncus sit amet erat sit amet, tincidunt venenatis neque. Praesent tempor, ante non pharetra pellentesque, purus metus cursus nunc, quis convallis risus dui id lorem.</p>
                </div>
            </div>


            <div class="container  z-depth-5" style="background: white">
            <div class="row">
                <div class="col l12 left">
                    <h4>Servicios populares</h4>
                </div>
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
    <?php $this->load->view('footer/footer_cliente'); ?>
    <?php $this->load->view('footer/footer_administrativo'); ?>
    <script src="<?= base_url() ?>assets/js/servicio.js" type="text/javascript"></script>
    <script type="text/javascript">


                                        document.addEventListener('DOMContentLoaded', function () {

                                            var elems = document.querySelectorAll('select');
                                            var instances = M.FormSelect.init(elems);

                                            var elems = document.querySelectorAll('.sidenav');
                                            var instances = M.Sidenav.init(elems, {
                                            });
                                            var elems = document.querySelectorAll('.dropdown-trigger');
                                            var instances = M.Dropdown.init(elems, {
                                                coverTrigger: false
                                            });






                                        });
                                        function up(max) {
                                            document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
                                            if (document.getElementById("myNumber").value >= parseInt(max)) {
                                                document.getElementById("myNumber").value = max;
                                            }
                                        }
                                        function down(min) {
                                            document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
                                            if (document.getElementById("myNumber").value <= parseInt(min)) {
                                                document.getElementById("myNumber").value = min;
                                            }
                                        }

    </script>
    <script type="text/javascript">
        $(function () {
            $('#contacto_Whatsapp').floatingWhatsApp({
                phone: '56958635081',
                popupMessage: 'Hola, ¿En que te podemos ayudar?',
                showPopup: true,
                position: 'right',
                headerTitle: 'Chat de TecnoBella'
            });
        });
    </script>
</body>
</html>

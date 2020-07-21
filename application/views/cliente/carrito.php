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
        <style>
            .col{
                justify-content: center;
                align-items: center;
            }
            #codigo{
                 border:1px solid #42a5f5;  
            }
        </style>

    </head>

    <body style="background: ##f5f5f5">
        <div id="app">
            <?php $this->load->view('cliente/navbar_sidenav'); ?>

            <div class="container" style="background: white">
                <div class="row">
                    <div class="col l6">
                        <h2 class="center">Mi carrito de compras</h2>
                        <hr>

                    </div>
                    <div class="col l12 right">
                        <button class="waves-effect waves-light btn right" style="margin: auto">Seguir comprando</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col l12 m12 s12">
                        <table class="bordered highlight center" id="tablePerfil">
                            <tr>
                                <th class="hide">ID</th>
                                <th class="center"></th>
                                <th class="center">Servicio</th>

                                <th class="center">Valor por unidad</th>
                                <th class="center">Cantidad</th>
                                <th class="center">Total</th> 

                                <th class="center"></th>
                            </tr>
                            <tbody>
                                <tr v-for="s in servicio">
                                    <td class="hide">{{s.id_servicio}}</td>
                                    <td class="center">
                                        <img v-bind:src="'./uploads/' + s.imagen" width="150px" height="150px" class="circle" />
                                    </td>
                                    <td class="center"><a class="blue-text text-lighten-1" href="#!">{{s.nombre_servicio}} {{s.nombre_zona}} {{s.genero}}</a></td>



                                    <td class="center">${{s.valor}}</td>
                                    <td class="">
                                        <div class="input-field col s12 l12 ">
                                            <select class="browser-default">

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="3">4</option>
                                            </select>
                                        </div>

                                    </td>
                                    <td class="center">${{s.valor}}</td>

                                    <td class="center">
                                        <button class="btn-floating red" @click="eliminar_servicio(s)"><i class="material-icons">delete</i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="row">
                    <div class="col l8 m8 s12">
                        <button class="waves-effect waves-light btn" style="margin: auto">Eliminar todos los productos</button>
                        <br>
                    </div>
                    <div class="col l1 m2 s6" style="right: auto" >
                        <h6>Subtotal:</h6>
                        <h6>Descuento:</h6>
                        <h6>Total:</h6>
                    </div>
                    <div class="col l2 m2 s6 right" >
                        <h6> $100000</h6>
                        <h6> $0</h6>
                        <h6> $100000</h6>

                    </div>
                </div>
                <div class="row">
                    <div class="l8 m6 s6">

                        <div class="col l3 center" style="margin-top: 1%">
                            <h5>Codigo de descuento:</h5>
                        </div>
                        <div class="input-field col l1 left" >
                            <input id="codigo" type="text" class="validate">
                            
                        </div>
                        <div class="col l2" style="margin-top: 2%">
                           <button class="waves-effect waves-light btn valign-wrapper ">Aplicar</button>
                        </div>

                    </div>
                    <div class="col l2 m4 s4 right" style="margin-top: 10%">
                        <button class="waves-effect waves-light btn-large valign-wrapper ">Pagar</button>
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

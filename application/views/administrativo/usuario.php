<html>
    <head>
        <?php $this->load->view('header/header_administrativo'); ?>

    </head>
    <?php $this->load->view('administrativo/sidenav'); ?>
    <style>
        textarea {
            border: 0 none;
            overflow: hidden;
            background:lightcyan;
            font-family:sans-serif;
            outline: none;
            min-height:100px;
            max-height:300px;
            height: auto;
            resize: none;
            width:50%;
        }
    </style>
    <body>
        <div id="app">
        <div class="row">
                <div class="col l5 m12 s12" style="margin-top: 5%">
                    <div class="card-panel z-depth-3">
                      <div class="row">
                        <h4 class="black-text" style="font-weight: 900">Agregar Usuario</h4>
                        <div class="row">
                          <div class="col l6 s12 m6">
                            <div class="input-field col s12 l12">
                              <i class="material-icons prefix">comment</i>
                              <input id="nombre_usuario" name="nombre_usuario" type="text" data-length="40" v-model="nombre_usuario">
                              <label for="nombre_usuario">Nombre</label>
                            </div>
                            <div class="input-field col s12 l12">
                              <i class="material-icons prefix">comment</i>
                              <input id="apellido_usuario" name="apellido_usuario" type="text" data-length="40" v-model="apellido_usuario">
                              <label for="apellido_usuario">Apellido</label>
                            </div>
                              <div class="input-field col s12 l12">
                                <i class="material-icons prefix">comment</i>
                                <input id="email_usuario" name="email_usuario" type="text" data-length="40" v-model="email_usuario">
                                <label for="email_usuario">Email de usuario</label>
                              </div>
                              <div class="input-field col s12 l12">
                                <i class="material-icons prefix">comment</i>
                                <input id="contraseña_usuario" name="contraseña_usuario" type="text" data-length="40" v-model="contraseña_usuario">
                                <label for="contraseña_usuario">Contraseña</label>
                              </div>
                              <div class="input-field col s12 l12">
                                <i class="material-icons prefix">comment</i>
                                <input id="contraseña" name="contraseña" type="text" data-length="40" v-model="contraseña">
                                <label for="contraseña">Confirme Contraseña</label>
                              </div>
                          </div>
                          <div class="col l6 s12 m6">

                            <div class="col s12 l12 right">
                              <v-select id="nombre_vista" label="nombre_vista" v-model="selected_vistas" :options="vista" placeholder="Seleccione la(s) vista(s)"></v-select>
                              <label for="nombre_vista">Seleccione la(s) vista(s)</label>
                             </div>

                             <div class="input-field col l12 m12 s12">


                               <v-select id="nombre_subrol" label="nombre_subrol" :options="subrol" v-model="selecte2" placeholder="Subrol de administrador?"> </v-select>




                             </div>
                          </div>
                        </div>






                            <button class="btn waves-effect waves-light right" v-on:click="submitFile()">Agregar Rol
                              <i class="material-icons right">add</i>
                            </button>
                          </div>
                          <br>
                        </div>
                      </div>
                      <div class="col l7 m12 s12" style="margin-top: 5%">
                          <div class="card-panel z-depth-3">
                              <h4 class="black-text" style="font-weight: 900">Roles en el sistema</h4>
                              <div class="" id="contenido">
                                  <table class="bordered highlight" id="tablePerfil">
                                <tr>
                                  <th class="hide">ID</th>
                                  <th>Nombre</th>
                                  <th>Vistas Asociadas</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                                </tr>
                                  <tbody>
                                    <tr v-for="r in roles">
                                        <td class="hide">{{r.id_rol}}</td>

                                        <td>{{r.nombre_rol}}</td>
                                        <td>{{r.nombre_vista}}</td>

                                        <td>
                                          <button class="btn-floating yellow" @click="cargarModal(r)"><i class="material-icons">edit</i></button>
                                        </td>
                                        <td>
                                          <button class="btn-floating red" @click="eliminar_servicio(s)"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                  </tbody>
                              </table>
                              </div>
                              
                              <div id="modal1" class="modal">
                                      <div class="modal-content">
                                          <input class="hide" id="modal_id_rol" name="nombre_rol" type="text" data-length="40" v-model="Modal.id_rol">
                                          <div class="row">
                                            <div class="col l6">
                                              <div class="row">
                                                <div class="col l12 s12 m6">
                                                    <h4 class="black-text" style="font-weight: 900">Agregar Rol</h4>
                                                    <div class="input-field col s12 l12">
                                                      <i class="material-icons prefix valign-wrapper">comment</i>
                                                      <input id="nombre_rol" name="nombre_rol" type="text" data-length="40" v-model="Modal.nombre_rol">

                                                    </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col l12 s12 m6 valign-wrapper">
                                                    <div class="col l2">
                                                      <i class="material-icons prefix center Small">add_box</i>
                                                    </div>
                                                    <div class="input-field col s12 l10">

                                                        <v-select id="nombre_vista" multiple label="nombre_vista" v-model="selecte" :options="vista" placeholder="Seleccione la(s) vista(s)"></v-select>
                                                    </div>
                                                </div>
                                              </div>

                                            </div>
                                          </div>


                                              <button class="btn" @click="actualizarMa()">
                                                  Actualizar
                                              </button>

                                      </div>
                                  </div>
                          </div>
                      </div>

                    </div>
                </div>

        <?php $this->load->view('footer/footer_administrativo'); ?>
        <script src="<?= base_url() ?>assets/js/usuarios.js" type="text/javascript"></script>
        <script type="text/javascript">

            $(document).ready(function () {
                $('select').formSelect();
                $('.sidenav').sidenav();
                $('.materialboxed').materialbox();
                $('.collapsible').collapsible();
                $('.dropdown-trigger').dropdown({
                    hover: true,
                    coverTrigger: false
                });

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#blah')
                                .attr('src', e.target.result)
                                .width(200)
                                .height(200);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
        <!--script>
            window.addEventListener('load', () => {
            setTimeout(carga, 200);

            function carga() {
                document.getElementById('circulo').className = 'hide';
                document.getElementById('contenido').className = 'center animated fadeIn';
                }
            }
            )
        </script-->
    </body>
</html>

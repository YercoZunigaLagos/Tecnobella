<html>
    <head>
          <?php $this->load->view('header_administrativo');?>
       
    </head>
     <?php $this->load->view('sidenav_administrativo');?>
    <body>
        <div id="app">
        <div class="row">
                <div class="col l5 m12 s12" style="margin-top: 5%">
                    <div class="card-panel z-depth-3">
                      <div class="row">
                        <div class="row">
                          <div class="col l12 s12 m6">
                              <h4 class="black-text" style="font-weight: 900">Agregar Servicio</h4>

                              <div class="input-field col s12 l6">
                                <i class="material-icons prefix">comment</i>
                                <input id="nombre_servicio" name="nombre_servicio" type="text" data-length="40" v-model="nombre_servicio">
                                <label for="nombre_servicio">Titulo de Servicio</label>
                              </div>
                              <div class="input-field col s12 l6">
                                <i class="material-icons prefix">attach_money</i>
                                <input id="valor" name="valor" type="number" v-model="valor">
                                <label for="valor">Precio</label>
                              </div>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col l12 s12 m6">
                              <div class="input-field col s12">
                                <i class="material-icons prefix">subject</i>
                                <textarea id="descripcion" name="descripcion" class="materialize-textarea" data-length="250" v-model="descripcion"></textarea>
                                <label for="descripcion">Descripción</label>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col l12 s12 m6">
                              <div class="col s12 l1">
                                <i class="material-icons prefix">add_box</i>
                              </div>
                              <div class="col s12 l11 right">
                                <v-select id="zona" multiple label="nombre_zona" v-model="selecte" :options="zonas" placeholder="Seleccione la(s) zona(s)"></v-select>
                                <label for="zona">Seleccione la(s) zona(s)</label>
                              </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="file-field input-field">
                                <div class="btn">
                                  <span>Imagen</span>
                                  <input type="file" id="user_file" ref="user_file" onchange="readURL(this);" v-on:change="handleFileUpload()">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" placeholder="Ninguna Imagen seleccionada">
                                </div>
                                  <img id="blah" src="#"/>
                              </div>
                            </div>
                            <button class="btn waves-effect waves-light right" v-on:click="submitFile()">Agregar Servicio
                              <i class="material-icons right">add</i>
                            </button>
                          </div>
                          <br>
                        </div>
                      </div>
                      <div class="col l7 m12 s12" style="margin-top: 5%">
                          <div class="card-panel z-depth-3">
                              <h4 class="black-text" style="font-weight: 900">Perfiles de Usuario</h4>
                              <table class="bordered highlight" id="tablePerfil">
                                <tr>
                                  <th class="hide">ID</th>
                                  <th>Imagen</th>
                                  <th>Servicio</th>
                                  <th>Valor</th>
                                  <th>Descripcion</th>
                                  <th>Zonas</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                                </tr>
                                  <tbody>
                                    <tr v-for="s in servicio">
                                        <td class="hide">{{s.id_servicio}}</td>
                                        <td>
                                          <img v-bind:src="'./uploads/' + s.imagen" width="100px" height="100px" class="circle" />
                                        </td>
                                        <td>{{s.nombre_servicio}}</td>
                                        <td>{{s.valor}}</td>
                                        <td>{{s.descripcion}}</td>
                                        <td>{{s.nombre_zona}}</td>
                                        <td>
                                          <button class="btn-floating yellow" @click="cargarModal(s)"><i class="material-icons">edit</i></button>
                                        </td>
                                        <td>
                                          <button class="btn-floating red" @click="eliminar_servicio(s)"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                  </tbody>
                              </table>

                              <div id="modal1" class="modal">
                                      <div class="modal-content">
                                          <input class="hide" id="nombre_rol" name="nombre_rol" type="text" data-length="40" v-model="editarModal.id_servicio">
                                          <div class="row">
                                            <div class="col l12 s12 m6">
                                                <h4 class="black-text" style="font-weight: 900">Agregar Servicio</h4>
                                                <div class="input-field col s12 l6">
                                                  <i class="material-icons prefix">comment</i>
                                                  <input id="nombre_servicio_editar" name="nombre_servicio_editar" type="text" data-length="40" v-model="editarModal.nombre_servicio">

                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <i class="material-icons prefix">attach_money</i>
                                                  <input id="valor" name="valor" type="number" v-model="editarModal.valor">

                                                </div>

                                                <div class="input-field col s12" >
                                                  <i class="material-icons prefix">subject</i>
                                                  <textarea  id="descripcion2" name="descripcion" class="materialize-textarea" data-length="250" v-model="editarModal.descripcion"></textarea>

                                                </div>
                                                <div class="col s12 l11 right">
                                                  <v-select id="zona" multiple label="nombre_zona" v-model="editarModal.zonas" :options="zonas" placeholder="Seleccione la(s) zona(s)"></v-select>
                                                  <label for="zona">Seleccione la(s) zona(s)</label>
                                                </div>
                                                <div class="col">
                                                  <div class="file-field input-field">
                                                    <div class="btn">
                                                      <span>Imagen</span>
                                                      <input type="file" id="user_file" ref="user_file" onchange="readURL(this);" v-on:change="handleFileUpload()">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" type="text" v-model="editarModal.imagen">
                                                    </div>
                                                      <img id="blah" v-bind:src="'./uploads/' + editarModal.imagen"/>
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
        
    </body>
</html>

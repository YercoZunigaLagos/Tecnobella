<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('header/header_administrativo'); ?>

    </head>
    <body>
        <main>




            <div class="row">
               
                <div class="col l3">
                    
                </div>
                <div class="col l6">
                    <div class="container">
                            
                            <div class="card-panel">
                                <div class="row center-align">
                                    <img src="http://tecnobella.com/wp-content/uploads/2019/08/Logo-Tecno-Bella-872x1024.png" class=" center-align" alt="" height="50%" width="50%">
                                </div>
                                
                                
                                    <div class='row'>
                                        <div class='col s12'>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input class='validate' type='email' name='email' id='email' v-model="email_usuario" />
                                            <label for='email'>Ingrese su correo electronico</label>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <div class='input-field col s12'>
                                            <input class='validate' type='password' name='password' id='password' v-model="contraseña_usuario"/>
                                            <label for='password'>Ingrese su contraseña</label>
                                        </div>
                                        <label style='float: right;'>
                                            
                                        </label>
                                    </div>

                                    <br />
                                    <center>
                                        <div class='row'>
                                            <button type='submit' name='btn_login' v-on:click="iniciar_sesion()" class='col s12 btn btn-large waves-effect indigo'>Login</button>
                                        </div>
                                    </center>
                            </div>
                                
                               
                            
                        </div>
                </div>
                <div class="col l3">
                    
                </div>
                    
                        
                    
                    
                        

                    


                
            </div>
        </main>



        <?php $this->load->view('footer/footer_administrativo');?>
        <script src="<?= base_url() ?>assets/js/iniciosesion.js" type="text/javascript"></script>




    </body>
</html>

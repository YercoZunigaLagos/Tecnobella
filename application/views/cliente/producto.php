<!DOCTYPE html>
<html>

    <head>
        <?php $this->load->view('header/header_administrativo'); ?>
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/estilo_principal.css"  media="screen,projection"/>
    </head>




    <body>

        <div id="app">
            <?php $this->load->view('cliente/navbar_sidenav'); ?>

            <div class="row">
                <div class="col l5 ">
                    <img class="materialboxed center-align"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSSZIGRMRa5dE-iLXxtcdUR5IAK406gybKpkMHAD_k5t9xBikXW">
                </div>
                <div class="col l7">
                    <div class="row">
                        <h2>Depilación alexandrita</h2>
                    </div>
                    <div class="row">
                        <h4>$80000</h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            Cantidad de sesiones
                        </div>
                        <div class="col">
                            <div class="input-field col s12">
                                <select>
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Materialize Select</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                    </div>
                </div>
            </div>
              <div class="row">
    <div class="col s12"><p>s12</p></div>
    <div class="col s12 m4 l2"><p>s12 m4</p></div>
    <div class="col s12 m4 l8"><p>s12 m4</p></div>
    <div class="col s12 m4 l2"><p>s12 m4</p></div>
  </div>
  <div class="row">
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
    <div class="col s12 m6 l3"><p>s12 m6 l3</p></div>
  </div>

        </div>

        <?php $this->load->view('footer/footer_administrativo'); ?>
        <script src="<?= base_url() ?>assets/js/servicio.js" type="text/javascript"></script>
        <script type="text/javascript">


            document.addEventListener('DOMContentLoaded', function () {
                var elems = document.querySelectorAll('.slider');
                var instances = M.Slider.init(elems, {
                    duration: 500,
                    interval: 7000
                });

                var elems = document.querySelectorAll('.materialboxed');
                var instances = M.Materialbox.init(elems);

                var elems = document.querySelectorAll('.sidenav');
                var instances = M.Sidenav.init(elems, {
                });
                var elems = document.querySelectorAll('.dropdown-trigger');
                var instances = M.Dropdown.init(elems, {
                    coverTrigger: false
                });






            });

        </script>
    </body>
</html>

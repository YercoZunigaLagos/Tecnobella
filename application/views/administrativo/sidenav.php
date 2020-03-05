 <nav>
    <div class="nav-wrapper green lighten-1">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
      <a href="#!" class="brand-logo">Tecnobella</a>

      <ul class="right hide-on-med-and-down">
        <li>  <a href="<?= site_url() ?>Servicios">Servicios</a></li>
        <li>  <a href="<?= site_url() ?>Perfiles">Perfiles</a></li>
        <li>  <a href="<?= site_url() ?>Usuarios">Usuarios</a></li>

      </ul>
    </div>
  </nav>

  <ul class=" right sidenav sidenav" id="mobile-demo" >
      <li><div class="user-view ">
                            <div class="background">
                                <img src="" alt=""/>
                            </div>
                            <div class="row">
                                <div class="col l4">
                                    <a href="#">
                                        <img src="" alt="" class="circle"/>
                                    </a>
                                </div>
                                <div class="col l4">
                                    <a href="#">
                                        <span class="name orange-text">
                                            username
                                        </span>
                                    </a>
                                    <span class="email orange-text ">
                                        user@gmail.com
                                    </span>

                                </div>
                            </div>
                        </div></li>
                        


                        <li><a class="">Scripts</a></li>
                    <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Servicios</a></li>
                    <li><a class="waves-effect"  href="<?= site_url() ?>Perfiles"><i class="material-icons">show_chart</i>Perfiles</a></li>
                    <li><a class="waves-effect"  href="<?= site_url() ?>Usuarios"><i class="material-icons">local_grocery_store</i>Usuarios</a></li>
                    <?php if($this->session->userdata('admin')):?>
                    <li><a class="waves-effect "  href="<?= base_url() ?>welcome/cerrar_sesion"><i class="material-icons red-text">power_settings_new</i>Desconectarse</a></li>
                    <?php else:?>
                        <?php redirect(site_url("Login"))?>
                    <?php endif;?>
    </ul>
    
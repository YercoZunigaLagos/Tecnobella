<nav>
    <div class="nav-wrapper green lighten-1">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
        <a href="#!" class="brand-logo">Tecnobella</a>

        <ul class="right hide-on-med-and-down">

            <li>
                <a href="#" class="dropdown-trigger" data-target="id_drop" style="height:100% ">
                    Hola Sr(a)  <?php echo $this->session->userdata('nombre_usuario'); ?>
                    <i class="material-icons left">account_circle</i>
                </a>
                <ul id="id_drop" class="dropdown-content white-text">
                    <li><a class="waves-effect "  href="<?= base_url() ?>welcome/cerrar_sesion"><i class="material-icons red-text left">power_settings_new</i>Desconectar</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>

<ul class=" right sidenav sidenav" id="mobile-demo" >
    <li><div class="user-view">
            <div class="background">
                <img class="responsive-img" src="<?php base_url() ?>uploads/background.png">
            </div>
            <?php if ($this->session->userdata('id_usuario') == 1): ?>
                <img class="circle" src="<?php base_url() ?>uploads/administrador.png">
            <?php else: ?>
                <img class="circle" src="<?php base_url() ?>uploads/usuario.png">
            <?php endif; ?>

            <span class="white-text name "><?php echo $this->session->userdata('nombre_usuario'); ?></span>
            <span class="white-text email"><?php echo $this->session->userdata('gmail_usuario'); ?></span>


        </div></li>




    <li><a class="">Gestión de Servicios</a></li>
    <hr>
    <!-- Vista perfil-->
    <?php if ($this->session->userdata('vista_perfil') == 1): ?>
        <li><a  class="waves-effect"  href="<?= site_url() ?>Perfiles"><i class="material-icons black-text">show_chart</i>Perfiles</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Perfiles</a></li>

    <?php endif; ?>
    <!--  Vista servicios -->
    <?php if ($this->session->userdata('vista_servicios') == 1): ?>
        <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Servicios</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Servicios</a></li>

    <?php endif; ?>
    <?php if ($this->session->userdata('vista_cliente') == 1): ?>
        <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Pacientes</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Pacientes</a></li>

    <?php endif; ?>




    <hr>
    <li><a class="">Gestión de Usuarios</a></li>
    <hr>
    <!-- Vista perfil-->
    <?php if ($this->session->userdata('vista_usuario') == 1): ?>
        <li><a  class="waves-effect"  href="<?= site_url() ?>Perfiles"><i class="material-icons black-text">show_chart</i>Usuarios</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Usuarios</a></li>

    <?php endif; ?>
    <!--  Vista servicios -->
    <?php if ($this->session->userdata('vista_perfil') == 1): ?>
        <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Roles</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Roles</a></li>

    <?php endif; ?>




    <hr>
    <li><a class="">Contabilidad</a></li>
    <hr>
    <!-- Vista perfil-->
    <?php if ($this->session->userdata('vista_egreso_fijo') == 1): ?>
        <li><a  class="waves-effect"  href="<?= site_url() ?>Perfiles"><i class="material-icons black-text">show_chart</i>Egresos fijos</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Egresos fijos</a></li>

    <?php endif; ?>
    <!--  Vista servicios -->
    <?php if ($this->session->userdata('vista_egreso_variable') == 1): ?>
        <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Egresos variables</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Egresos variables</a></li>

    <?php endif; ?>
        
    <?php if ($this->session->userdata('vista_egreso_cajachica') == 1): ?>
        <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Caja chica</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Caja chica</a></li>

    <?php endif; ?>
        
    <?php if ($this->session->userdata('vista_ventas') == 1): ?>
        <li><a class="waves-effect"  href="<?= site_url() ?>Servicios"><i class="material-icons">input</i>Ventas</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Ventas</a></li>

    <?php endif; ?>


        <hr>
    <li><a class="">Recursos</a></li>
    <hr>
    <!-- Vista perfil-->
    <?php if ($this->session->userdata('vista_inventario') == 1): ?>
        <li><a  class="waves-effect"  href="<?= site_url() ?>Perfiles"><i class="material-icons black-text">show_chart</i>Inventario</a></li>
    <?php else: ?>
        <li><a style="color:#e0e0e0;cursor:pointer; cursor:hand;"><i style="color:#e0e0e0" class="material-icons">show_chart</i>Inventario</a></li>

    <?php endif; ?>
<hr>
<br><br>
    <?php if ($this->session->userdata('id_usuario')): ?>

        <li><a class="waves-effect left"  href="<?= base_url() ?>welcome/cerrar_sesion"><i class=" material-icons red-text">power_settings_new</i>Desconectarse</a></li>
        <br>
        <br>
        <br>
    <?php else: ?>

        <?php redirect(site_url("Login")) ?>
    <?php endif; ?>
</ul>

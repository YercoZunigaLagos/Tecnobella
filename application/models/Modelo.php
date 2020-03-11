<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model {

    /////////////////// SERVICIOS ////////////////////////
    function insertar_servicio($data) {
        $this->db->insert("servicio", $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function joinServicios() {
        $sql = "select servicio.id_servicio, servicio.nombre_servicio, servicio.genero ,servicio.valor,servicio.descripcion, servicio.imagen, GROUP_CONCAT(distinct zona.nombre_zona order by zona.nombre_zona asc separator ', ') as nombre_zona FROM servicio inner JOIN zona_servicio on zona_servicio.fk_id_servicio = servicio.id_servicio inner JOIN zona on zona.id_zona = zona_servicio.fk_id_zona GROUP BY servicio.id_servicio";
        return $this->db->query($sql)->result();
    }

    public function ultimo_servicio() {
        $sql = "select servicio.id_servicio from servicio order by servicio.id_servicio desc limit 1";
        return $this->db->query($sql)->result();
    }

    function insertar_servicio_zona($id_servicio, $id_zona) {
        $datos = array(
            "fk_id_zona" => $id_zona,
            "fk_id_servicio" => $id_servicio
        );
        return $this->db->insert("zona_servicio", $datos);
    }

    public function servicios() {
        return $this->db->get("servicio")->result();
    }

    public function zona() {
        return $this->db->get("zona")->result();
    }

    public function eliminar_servicio($id_servicio) {
        $this->db->where("id_servicio", $id_servicio);
        return $this->db->delete("servicio");
    }

    public function eliminar_zona_servicio($id_servicio) {
        $this->db->where("fk_id_servicio", $id_servicio);
        return $this->db->delete("zona_servicio");
    }

    //////////////////// ROLES //////////////////////////
    public function joinRoles() {
        $sql = "select rol.id_rol, rol.nombre_rol, GROUP_CONCAT(distinct vista.nombre_vista order by vista.nombre_vista asc separator ', ') as nombre_vista FROM rol inner JOIN rol_vista on rol_vista.rol_id_rol = rol.id_rol inner JOIN vista on vista.id_vista = rol_vista.vista_id_vista GROUP BY rol.id_rol";
        return $this->db->query($sql)->result();
    }

    public function vista() {
        return $this->db->get("vista")->result();
    }

    function insertar_rol($data) {
        $this->db->insert("rol", $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function ultimo_rol() {
        $sql = "select rol.id_rol from rol order by rol.id_rol desc limit 1";
        return $this->db->query($sql)->result();
    }

    function insertar_rol_vista($id_rol, $id_vista) {
        $datos = array(
            "rol_id_rol" => $id_rol,
            "vista_id_vista" => $id_vista
        );
        return $this->db->insert("rol_vista", $datos);
    }

    //////////////// sesion ///////////////////////////7
    public function iniciarSesion($email_usuario, $contraseña_usuario) {



        $this->db->where("email_usuario", $email_usuario);
        $this->db->where("contraseña_usuario", $contraseña_usuario);
        return $this->db->get("usuario")->result();
    }

    public function vistas_usuario($rol_id_rol) {
              //SELECT vista.id_vista FROM usuario INNER JOIN rol_vista ON usuario.rol_id_rol=rol_vista.rol_id_rol INNER JOIN vista ON rol_vista.vista_id_vista=vista.id_vista
        //$sql = "SELECT vista.id_vista FROM usuario INNER JOIN rol_vista ON ".$id_usuario."=rol_vista.rol_id_rol INNER JOIN vista ON rol_vista.vista_id_vista=vista.id_vista";
        //$this->db->select('vista.id_vista');
        //$this->db->from('usuario');
        //$this->db->join('rol_vista', '= rol_vista.rol_id_rol');
        //$this->db->join('vista', 'rol_vista.vista_id_vista= vista.id_vista');
        $this->db->where("id_rol", $rol_id_rol);
        return $this->db->get("rol")->result();
    }

}

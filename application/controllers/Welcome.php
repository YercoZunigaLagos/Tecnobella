<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() {
        parent::__construct();
				$this->load->model("Modelo");
				$this->load->helper('form');
				$this->load->helper('array');
    }
	public function index()
	{
		$this->load->view('servicio0');
	}
	function insertar_servicio(){

			$nombre_servicio = $this->input->post("nombre_servicio");
			$valor = $this->input->post("valor");
			$descripcion = $this->input->post("descripcion");

			//$zonas=$_POST["zonas"];
			//for ($i=0;$i<count($zonas);$i++)
      	//{
      	//var_dump($zonas[$i]);
      	//}

				$config = [
					"upload_path" => "./uploads",
					'allowed_types' => "png|jpg"
				];

				$this->load->library("upload",$config);
				 $this->upload->initialize($config);

						if (!empty($nombre_servicio) && !empty($descripcion) && !empty($valor)) {
							if ($this->upload->do_upload('user_file')) {
								$data = array("upload_data" => $this->upload->data());
								echo "exito";
								$datos = array(
									"nombre_servicio" => $nombre_servicio,
									"valor" => $valor,
									"descripcion" => $descripcion,
									"imagen" => $data['upload_data']['file_name'],

								);
								if($this->Modelo->insertar_servicio($datos)==true){
									$servicio = $this->Modelo->ultimo_servicio();
									$id_servicio = json_decode(json_encode($servicio), false);
									echo $id_servicio[0]->id_servicio;

									$zonas = json_decode($_POST['zonas']);

									foreach($zonas as $key => $value){

										$this->Modelo->insertar_servicio_zona($id_servicio[0]->id_servicio,$value->id_zona);
									}
									$this->load->view("servicio");
								}else{
										echo "error";
								}
							}
							else{
								echo $this->upload->display_errors();
							}
						}else{
							echo "vacio";
						}
	}
	public function eliminar_servicio() {
			$id_servicio = $this->input->post("id_servicio");
			if (isset($id_servicio)) {
					$this->Modelo->eliminar_zona_servicio($id_servicio);
					$this->Modelo->eliminar_servicio($id_servicio);
					echo json_encode(array("value" => "servicio eliminado con exito!"));
			} else {
					echo json_encode(array("value" => "error, servicio no eliminado"));
			}
	}
	public function joinServicios(){
			echo json_encode($this->Modelo->joinServicios());
	}

	public function zona(){
			echo json_encode($this->Modelo->zona());
	}
	//////////////// Roles //////////////////////

	public function joinRoles(){
			echo json_encode($this->Modelo->joinRoles());
	}
	public function vista(){
			echo json_encode($this->Modelo->vista());
	}
	function insertar_rol(){

			$nombre_rol = $this->input->post("nombre_rol");

						if (!empty($nombre_rol)) {


								echo "exito";
								$datos = array(
									"nombre_rol" => $nombre_rol,
								);

								if($this->Modelo->insertar_rol($datos)==true){
									$rol = $this->Modelo->ultimo_rol();
									$id_rol = json_decode(json_encode($rol), false);


									$vistas = json_decode($_POST['vistas']);

									foreach($vistas as $key => $value){

										$this->Modelo->insertar_rol_vista($id_rol[0]->id_rol,$value->id_vista);
									}
								}else{
										echo "error";
								}



						}else{
							echo "vacio";
						}


	}

	/////////// Iniciar sesion ///////////////

	public function inicioSesion() {
			$email_usuario = $this->input->post("email_usuario");
			$contraseña_usuario = $this->input->post("contraseña_usuario");
			$ruta = "";
			if (isset($email_usuario) && isset($contraseña_usuario)) {

					$user = $this->Modelo->iniciarSesion($email_usuario, $contraseña_usuario);



					if ($user) {
							if ($user[0]->rol_id_rol == 1) {
									$ruta = site_url() . "/Vistas/inicioAdmin";
									$res = "valido";
									$this->session->set_userdata("admin", $user[0]);
							} else {
									$ruta = site_url() . "/Vistas/inicioUsuario";
									$res = "valido";
									$this->session->set_userdata("user", $user[0]);
							}
					} else {
							$res = "invalido";
					}
			} else {
					$res = "error de parametros";
			}
			echo json_encode(array("value" => $res, "ruta" => $ruta));
	}




}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	Public function __construct()
 {
 //Core controller constructor
 parent::__construct();
 $this->load->model('Modelo');
 
 }
	public function index()
	{
		$this->load->view('header');

		if($this->session->userdata('login')==true){
			if($this->session->userdata('perfil')==100){
				//administrador
				if($this->session->userdata('ir')==0){
					 
					$this->load->view('admin/inicio');
				}else{
					if($this->session->userdata('ir')==1){
						$datos['mi']= $this->session->userdata('rut_empresa');
						$datos['empresas']= $this->Modelo->mostarempresas()->result();
						$this->load->view('admin/addproducto/pro',$datos);	
					}else{
						if($this->session->userdata('ir')==2){
							$this->load->view('admin/gestionempresa/ges');
						}else{
							if($this->session->userdata('ir')==3){
								$this->load->view('admin/reempresas/reempre');
							}
								
						}
					}
				}
			}else{
				//administrador empresa
				if($this->session->userdata('perfil')==50){
					
				}else{
					//sector operador
					if($this->session->userdata('perfil')==25){
						
					}else{
						$this->load->view('contentlogin');
					}
				}
				}
				
			}else{
				$this->load->view('contentlogin');
			}

		



		
		
	}
	//////////////////seccion de cambios
		//seccion suadmin

	function irainicio(){
	$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =0;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);	
	}
	function irareportes(){
	$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =3;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);	
	}
function iraentrada(){
	$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =1;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);
	}
	function iramovimiento(){
	$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =3;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);	
	}
	function iraaddpro(){
	$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =1;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);	
	}
	function iraalmacen(){
		$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =5;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);
	}
	function iragestion(){
		$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =2;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);
	}
	function irasalida(){
	$rut =	$this->session->userdata('usuario');
	$perfil = $this->session->userdata('perfil');
	$rut_empresas = $this->session->userdata('rut_empresa');
	$ira =8;
	
	$vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
	
	$this->session->set_userdata($vector);
	$data="xas";
            echo json_encode($data);	
	} 



	function cerrar(){
		$this->session->sess_destroy();
            
            $data="xas";
            echo json_encode($data);
            
	}
	
/////fin de cambio
	function verificarempresario(){
		$rut= $this->input->post("rut");
		$contraseña= $this->input->post("contraseña");
		$empresa= $this->input->post("empresa");
		$respuesta= $this->Modelo->validarempresario($rut,$contraseña,$empresa);


		if ($respuesta=="adminempresa" || $respuesta=="adgeneral") {
                $ira=0;
                //sacarrutempresa
                $rut_empresas="";
                $sacar= $this->Modelo->consultarutempresa($rut);
                foreach ($sacar->result() as $valor){
          $rut_empresas= $valor->rut_empresa;
      }
			$perfil= $this->Modelo->consultaPerfil($rut);
	     		$data['mensaj']="usuario valido";
                $vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );
		}else{
			if($respuesta=="operador"){
			$ira=0;
			$rut_empresas="";
			$sacar= $this->Modelo->consultarutem($rut);
                foreach ($sacar->result() as $valor){
          $rut_empresas= $valor->rut_empresa_peterneciente;
      }
			$perfil= $this->Modelo->consultaPerfilempresa($rut);
	     		$data['mensaj']="usuario valido";
                $vector =array(
                  "usuario"=>$rut,
                  "rut_empresa"=>$rut_empresas,
                    "login"=>true,
                    "perfil"=>$perfil,
                    "ir"=>$ira
                );	
			}else{
$data['mensaj']="usuario no valido";
                $vector =array(
                  "usuario"=>"",
                  "rut_empresa"=>"",
                    "login"=>false,
                    "perfil"=>"",
                    "ir"=>""

                );
			}
		}

		$this->session->set_userdata($vector);
           echo json_encode($data);
         
	}
	
}

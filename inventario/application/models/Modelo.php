<?php
class Modelo extends CI_Model{
  function mostarempresas(){
   $this->db->select("*");
        
        return $this->db->get('empresa');
 
  }
	function validarempresario($rut,$contraseña,$empresa){
		/*$this->db->select("*");
        $this->db->where('rut_empresa',$rut);
        $this->db->where('nombre_empresa',$empresa);
        $this->db->where('contraseña',$contraseña);
        $resultado = $this->db->get('empresa');
        if($resultado->num_rows()>0){
            return true;
        }else{
            return false;
            select u.rut_usuario, u.contraseña,u.perfil_usuario,r.nombre_empresa 
from  usuario_empresa u join empresa r on u.rut_empresa_peterneciente=r.rut_empresa;
        }
$consulta="select u.rut_usuario,r.nombre_empresa 
from  usuario_empresa u  join empresa r 
where u.contraseña='".$contraseña."' and u.rut_usuario='".$rut."' and r.nombre_empresa='".$empresa."' ;";

        */

        //vereficar superadministrador
$this->db->select("*");
        $this->db->where('rut_empresa',$rut);
        $this->db->where('nombre_empresa',$empresa);
        $this->db->where('contraseña',$contraseña);
        $resultado = $this->db->get('empresa');
        if($resultado->num_rows()==0){
    //verificar adminempresa            
          $this->db->select("*");
        $this->db->where('rut_empresa',$rut);
        $this->db->where('nombre_empresa',$empresa);
        $this->db->where('contraseña',$contraseña);
        $consulta = $this->db->get('empresa');


 if($consulta->num_rows()==0){
$consulta1="select u.rut_usuario,r.nombre_empresa 
from  usuario_empresa u  join empresa r where u.contraseña='".$contraseña."' and u.rut_usuario='".$rut."' and r.nombre_empresa='".$empresa."' ;";

$data2=$this->db->query($consulta1);
if($data2->num_rows()==0){
$verusuario="falso";
            return $verusuario;
}else{
   $verusuario="operador";
            return $verusuario;
}




 }else{
  $verusuario="adminempresa";
            return $verusuario;
 }

        }else{
          $verusuario="adgeneral";
            return $verusuario;
        }



	}
  function consultarutempresa($rut){
    $this->db->select("*");
        $this->db->where('rut_empresa',$rut);
        return  $this->db->get('empresa');
  } 
	function consultaPerfil($rut){
    	  	  $this->db->select("perfil");
      $this->db->where('rut_empresa',$rut);
      $respuesta = $this->db->get("empresa");
      foreach ($respuesta->result() as $valor){
          $perfil= $valor->perfil;
      }
      return $perfil;
    }
    function consultarutem($rut){
     $this->db->select("*");
        $this->db->where('rut_usuario',$rut);
        return  $this->db->get('usuario_empresa');  
    }
    function consultaPerfilempresa($rut){
     $this->db->select("perfil");
      $this->db->where('rut_usuario',$rut);
      $respuesta = $this->db->get("usuario_empresa");
      foreach ($respuesta->result() as $valor){
          $perfil= $valor->perfil;
      }
      return $perfil; 
    }
}

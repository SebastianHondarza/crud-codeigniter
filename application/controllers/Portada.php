<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Portada extends CI_Controller { 
   	public function index(){
   		$arr=array();
   		$this->load->model('Usuario_model');
   		$data['arr'] = $this->Usuario_model->obtener_todos();
		$this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');
    }

    public function guardar(){
    	$id=$this->input->post('txtId');
    	$nombre = $this->input->post('txtNombre');
    	$apellido = $this->input->post('txtApellido');
    	$this->load->model("Usuario_model");   	
	    $this->Usuario_model->guardar($nombre, $apellido, $id);   	
    	redirect (base_url());
    }

    public function get_user($id){
    	$this->load->model("Usuario_model");    	
    	$arr=$this->Usuario_model->get_user($id);
    	return $arr;
    }

    public function eliminar($id){
    	$this->load->model('Usuario_model');
    	$this->Usuario_model->eliminar($id);
    	redirect (base_url());
    }


}
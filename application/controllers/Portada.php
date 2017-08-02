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
    	$nombre = $this->input->post('txtNombre');
    	$apellido = $this->input->post('txtApellido');
    	$this->load->model("Usuario_model");    	
    	$this->Usuario_model->guardar($nombre, $apellido);
    	redirect (base_url());
    }


}
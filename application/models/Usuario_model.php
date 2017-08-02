<?php
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   
   public function guardar($nombre, $apellido, $id=null){
      $data = array(
         'nombre' => $nombre,
         'apellido' => $apellido
      );
      if($id){
         $this->db->where('id', $id);
         $this->db->update('tbl_usuario', $data);
      }else{
         $this->db->insert('tbl_usuario', $data);
      } 
   }
   /*
   public function eliminar($id){
      $this->db->where('id', $id);
      $this->db->delete('informes');
   }
   public function obtener_por_id($id){
      $this->db->select('id, titulo, descripcion, prioridad');
      $this->db->from('informes');
      $this->db->where('id', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
*/
   public function obtener_todos(){
      $this->db->select('id, nombre, apellido');
      $this->db->from('tbl_usuario');
      $this->db->order_by('nombre, apellido', 'asc');
      $consulta = $this->db->get();
      $rs = $consulta->result();
      return $rs;
   }
}
<?php
class Usuario extends CI_Model{

  public function registrar($data){
    $this->db->insert('usuario', $data);
  }

}

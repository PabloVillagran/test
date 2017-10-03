<?php
class HomeController extends CI_Controller{

  public function index(){
    $var['valor'] = '24';
    $var['usuario'] = 'asdf';
    $var['passwrd'] = 'adfss';
    $this->load->view("welcome_message", $var);
  }

  public function Register(){
    $data = array(
      'correo' => $this->input->post('mail'),
      'nombre' => $this->input->post('user'),
      'pass' => $this->input->post('pass')
    );
    $this->load->model('Usuario');
    $this->Usuario->registrar($data);
    redirect($base_url);
  }
}

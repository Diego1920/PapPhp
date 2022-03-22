<?php

class Persona extends CI_Controller{
    
    public function index() {
        $this->r();
    }
    
    public function c() {
        frame($this,'persona/c');
        
    }
    
    /*
     * dentro de la carpeta se abre git bash
     * git init para crear repositorio local
     * git add . sube todos los archivos
     * git status para ver si hay algo nuevo
     * git commit -m "primer comit" siempre al hacer comit tiene que poner mensaje
     * git remote add origin "https://github.com/linkrepositoriogithub.git" conecta el repositorio local conn el remoto
     * git push origin master para subirlo
     * 
     * git clone clona el repositorio
     * 
     * */
    
    public  function cPost() {
       
       $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'nombre';
       $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : 'apellido';
       $login = isset($_POST['login']) ? $_POST['login'] : 'login';
       
       $this->load->model('persona_model');
        
       try {
           $this->persona_model->c($nombre,$apellido,$login);
           redirect(base_url().'persona/r');
       }
       catch (Exception $e) {
           errorMsg($e->getMessage(),'persona/c');
       }
        
    }
    
    public function r() {
        $this->load->model('Persona_model');
        $data['personas'] = $this->Persona_model->getAll();
        frame($this,'persona/r',$data);
        
    }
    
    function u()
    {
        
        $idPersona = isset($_GET['idPersona']) ? $_GET['idPersona'] : null;
        
        $this->load->model('persona_model');
        
        $data['persona'] = $this->persona_model->getPersonaById($idPersona);
        frame($this, 'persona/u', $data);
    }
    
    
    function uPost()
    {
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
         
        
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'nombre';
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : 'apellido';
        $login = isset($_POST['login']) ? $_POST['login'] : 'login';
        
        $this->load->model('persona_model');
        
        try {
            $this->persona_model->u($idPersona,$nombre,$apellido,$login);
            redirect(base_url() . 'persona/r');
        } catch (Exception $e) {
            errorMsg($e->getMessage(), 'persona/r');
        }
    }
    
    
    function d() {
        
        $idPersona = isset($_GET['idPersona']) ? $_GET['idPersona'] : null;
        
        $this->load->model('persona_model');
        $data['persona'] = $this->persona_model->getPersonaById($idPersona);
        frame($this,'persona/d',$data);
    }
    
    
    function dPost()
    {
        $idPersona = isset($_POST['idPersona']) ? $_POST['idPersona'] : null;
        $this->load->model('persona_model');
        
        try {
            $this->persona_model->d($idPersona);
            redirect(base_url().'persona/r');
        } catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/r');
        }
    }
    
    
    
    
    
    
}
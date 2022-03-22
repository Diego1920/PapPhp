<?php
class Dos extends CI_Controller {
    public function index() {
        $this->dosGet();
    }
    public function dosGet() {
        //siempre que haya una sesion activarla
        session_start();
        $data['datos']=$_SESSION['datos'];
        
        //ordena por la clave del array
        //ksort($data['datos']);
        
        //ordena por valor del array
        //asort($data['datos']);
        
        //le envia el sesion array de datos
        frame($this,'t01/ej06/dos',$data);
    }
    
    public function dosPost() {
        
        /*
        $operacion = isset($_POST['operacion'])?$_POST['operacion']:'suma';
        session_start();
        $_SESSION['operacion'] = $operacion;
        redirect(base_url().'t01/ej04/tres');
        */
        session_start();
        //unset($_SESION['datos']);
        session_destroy();
        redirect(base_url().'t01/ej06/uno');
    }
}
?>
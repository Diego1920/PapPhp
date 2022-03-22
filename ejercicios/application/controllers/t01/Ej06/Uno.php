<?php
class Uno extends CI_Controller {
    public function index() {
        $this->unoGet();
    }
    public function UnoGet() {
        frame($this,'t01/ej06/uno');
    }
    public function UnoPost() {
        
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:'Nada';
        $edad = isset($_POST['edad'])?$_POST['edad']:0;
        
        
        if ($nombre=='fin') {
            $uri='t01/ej06/dos';
            //por defecto se llama a index si no se le dice nada
            //redirect(base_url().'t01/ej06/dos')
        }
        else {
            session_start();
            if (!isset($_SESSION['datos'])) {
                $_SESSION['datos'] = [];
            }
            
            //necesita el [] para que le haga el push
            $_SESSION['datos'][]=['nombre'=>$nombre,'edad'=>$edad];
            
            //un array con indice lo que se ponga de nombre y edad y se puede ordenar por edad
            //$_SESSION['datos'][$nombre]=$edad;
            
            
            //$_SESSION['nombre'=>$nombre];

            
            $uri='t01/ej06/uno';
        }
        return redirect(base_url().$uri);
    }
}

?>
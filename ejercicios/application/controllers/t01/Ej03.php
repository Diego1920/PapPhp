<?php
class Ej03 extends CI_Controller {
    public function index() {
        $this->datosG();
    }
    
    public function datosG() {
       frame($this, 't01/ej03/datosG.php');
    }
    
    public function datosP() {
        $n = $_POST['n'];
        $p = $_POST['p'];
        
        
        
//         for($i=0;$i<=$n;$i++){
//             $mensaje=[$i];
//             infoMsg($mensaje);
            
//         }
        $mensaje="";
        for($i = 0; $i < $n; $i ++) {
            for($j = 0; $j < $p; $j ++) {

                $mensaje.=$j.' ';
                
            
            }
        }
        infoMsg($mensaje);
        
        
        
        //for ($i = 1; $i < $n; $i++) {
            //$arr=[$i];
            //infoMsg($mensaje);
            //$mensaje=implode(" ", $arr);
            //infoMsg($mensaje);
            
            
       // }
        
//         $mensaje="1 5 4 7";
        //$mensaje=$n+$p;
        //infoMsg($mensaje);
    }
    
    
}
?>
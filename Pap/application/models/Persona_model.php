<?php

class Persona_model extends CI_Model{

    
    
public function c($nombre,$apellido,$login) {

    $persona=R::dispense('persona');
    $persona->nombre=$nombre;
    $persona->apellido=$apellido;
    $persona->login=$login;
    
    R::store($persona);
    
}

public function getAll() {
    return R::findAll('persona');
}

function d($idPersona) {
    if ($idPersona!=null) {
        $persona = R::load('persona',$idPersona);
        if ($persona->id == 0) {
            throw new Exception("La persona id={$idPersona} no existe");
        }
        R::trash($persona);
    }
}

function getPersonaById($id) {
    return R::load('persona',$id);
}

function u($idPersona,$nombre,$apellido,$login) {
    $personaNueva = R::findOne('persona','nombre=?',[$nombre]);
    $personaNueva = R::findOne('persona','apellido=?',[$apellido]);
    $personaNueva = R::findOne('persona','login=?',[$login]);
    
    //$personaNueva = R::findOne('persona','nombre=?','apellido=?','login=?',[$nombre],[$apellido],[$login]);
    
    
    
    $persona =R::load('persona',$idPersona);
    
    if ($personaNueva == null || strtolower($nombre) == strtolower($persona->nombre) ) {
        $persona->nombre = $nombre;
        $persona->apellido = $apellido;
        $persona->login = $login;
        
        
        R::store($persona);
    }
    else {
        throw new Exception("La persona {$personaNueva->nombre} ya existe");
    }
}


}
?>
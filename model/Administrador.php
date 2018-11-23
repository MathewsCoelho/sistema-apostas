<?php

class Administrador extends Usuario{
    
    private $login;

    function __construct() {
    }

    function getLogin() {
        return $this->login;
    }
    function setLogin() {
        $this->login = $login;
    }
        
    public function __toString() {
        return "\Administrador[id=$this->id, login=$this->login, senha=$this->senha, $this->__toString()]";
    }
}

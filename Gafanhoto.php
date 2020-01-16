<?php
        require 'Pessoa.php';

class Gafanhoto extends Pessoa  {
    private $login, $totassistido;
    
    
    public function Gafanhoto($n,$id,$sex,$log){
        $this->nome = $n;
        $this->idade = $id;
        $this->sexo = $sex;
        $this->login = $log;
    }
    
    
    public function ganharExp() {
        $this->setExperiencia($this->getExperiencia()+1);
    }
    
    function getLogin() {
        return $this->login;
    }

    function getTotassistido() {
        return $this->totassistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotassistido($totassistido) {
        $this->totassistido = $totassistido ;
    }

    public function viuMaisUm(){
        $this->totassistido += 1;
    }

}

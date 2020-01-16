<?php
    

class Visualizacao  {
    private $espectador, $filme;
    
    
   
    public function Visualizacao($espec, $filme){
        $this->espectador = $espec;
        $this-> filme = $filme;
        $this->filme->setViews($this->filme->getviews()+1);
        $this->espectador->setTotassistido($this->espectador->getTotassistido()+1);
    }
    
    
    function getEspectador() {
        return $this->espectador;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    function setFilme($filme) {
        $this->filme = $filme;
    }

        
    
    public function avaliar(){
        
    $this->filme->setAvaliacao(5);         
                    
        
    }
    
    public function avaliarN($n){
        
        $this->filme->setAvaliacao($n);
        
    }
    
    public function avaliarPorc($num){
        $nova = 0;
        if($num <=20){
            $nova = 3;
        }elseif($num<=50){
            $nova = 5;
        }elseif($num <=90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    
    
    
    
    
    
}

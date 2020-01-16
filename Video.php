<?php
        require_once 'AcoesVideo.php';

class Video implements AcoesVideo {
    
private $titulo, $avaliacao, $views, $curtidas, $reproducao;

//////////////////////////////////////////////////////////////
//CONSTRUTOR/////////////////////////////////////////////////
////////////////////////////////////////////////////////////
public function Video($t){
    $this->titulo = $t;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->reproducao = false;
}

/////////////////////////////////////////////////////////////
//Interface/////////////////////////////////////////////////
//////////////////////////////////////////////////////////
    public function like() {
        if (getReproducao()){        
        $this->setCurtidas(getCurtidas()+1);
        }else{
            echo "O video não estava em execução";
        }
    }

    public function pause(){
        if(getReproducao()){
        $this->setReproducao(FALSE);
        }else{
            echo "Error Video não esta em execução";
        }
        
        }

    public function play() {
        if(! getReprodução()){
        $this->setReproducao(TRUE);
        }else{
            echo "Video Já esta em reprodução.";
        }
        
        }

   
        function getTitulo() {
            return $this->titulo;
        }

        function getAvaliacao() {
            return $this->avaliacao;
        }

        function getViews() {
            return $this->views;
        }

        function getCurtidas() {
            return $this->curtidas;
        }

        function getReproducao() {
            return $this->reproducao;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setAvaliacao($avaliacao) {
            $media = ($this->avaliacao + $avaliacao)/$this->views;
            $this->avaliacao = $media;
        }

        function setViews($views) {
            $this->views = $views;
        }

        function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }

        function setReproducao($reproducao) {
            $this->reproducao = $reproducao;
        }


        
        
        
 }

<?php

class Alunno {

    private $nome;
    private $cognome; 
    private $eta;

    public function __construct($nome, $cognome, $eta) {
        $this->nome = $nome;
        $this->Cognome = $Cognome;
        $this->eta = $eta;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getEta(){
        return $this->eta;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCognome($Cognome){
        $this->Cognome = $Cognome;
    }

    public function setEta($eta){
        $this->eta = $eta;
    }

    public function toString(){
        echo "Nome Alunno: ".$this->getNome()."<br>";
        echo "Cognome Alunno: ".$this->getCognome()."<br>";
        echo "Eta Alunno: ".$this->getEta()."<br>";
    }
}
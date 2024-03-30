<?php

class Convidado
{
    private $nome_convidado;
    private $documento_convidado;
    private $confirm;

    public function __construct($nome_convidado,$documento_convidado,$confirm)
    { 
        
        $this->nome_convidado=$nome_convidado;
        $this->documento_convidado=$documento_convidado;
        $this->confirm=$confirm;
    }

    public function setNomeConvidado($nome_convidado){
        $this->nome_convidado=$nome_convidado;
    }

    public function getNomeConvidado(){
        return $this->nome_convidado;
    }

    public function setDocumentoConvidado($documento_convidado){
        $this->documento_convidado=$documento_convidado;
    }

    public function getDocumentoConvidado(){
        return $this->documento_convidado;
    }

    public function setConfirm($confirm){
        $this->confirm=$confirm;
    }

    public function getConfirm(){
        return $this->confirm;
    }

 
}
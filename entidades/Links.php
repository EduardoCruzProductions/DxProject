<?php

class Links {
    
    private $id;
    private $id_anime;
    private $nome;
    private $status;
    
    function getId() {
        return $this->id;
    }

    function getId_anime() {
        return $this->id_anime;
    }

    function getNome() {
        return $this->nome;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_anime($id_anime) {
        $this->id_anime = $id_anime;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setStatus($status) {
        $this->status = $status;
    }


}

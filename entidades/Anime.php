<?php


class anime {
    
    private $id;
    private $id_publico;
    private $nome;
    private $n_episodios;
    private $sinopse;
    private $genero;
    private $img;
    
    function getId() {
        return $this->id;
    }

    function getId_publico() {
        return $this->id_publico;
    }

    function getNome() {
        return $this->nome;
    }

    function getN_episodios() {
        return $this->n_episodios;
    }

    function getSinopse() {
        return $this->sinopse;
    }

    function getGenero() {
        return $this->genero;
    }

    function getImg() {
        return $this->img;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_publico($id_publico) {
        $this->id_publico = $id_publico;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setN_episodios($n_episodios) {
        $this->n_episodios = $n_episodios;
    }

    function setSinopse($sinopse) {
        $this->sinopse = $sinopse;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setImg($img) {
        $this->img = $img;
    }


    
}

<?php

include_once '../entidades/Anime.php';
include_once '../database/AnimeDao.php';

$acao = $_GET['acao'];

if($acao == 'salvar'){
    
    $a = new Anime();
    $dao = new AnimeDao();
    
    $a->setNome($_POST['nome']);
    $a->setN_episodios($_POST['n_episodios']);
    $a->setGenero($_POST['genero']);
    $a->setSinopse($_POST['sinopse']);
    $a->setId_publico($_POST['publicoAlvo']);
    $a->setLink($_POST['link']);
    
    $anime = $dao->salvar($a);
    
    move_uploaded_file($_FILES['imagem']['tmp_name'], '../img/anime/'.$anime->getId().'.jpg');
    
    header('Location: ../pgAdm/cadastroAnime.php');
    
}


<?php

include_once '../entidades/Publico.php';
include_once '../database/PublicoDao.php';

$acao = $_GET['acao'];

if($acao == 'salvar'){
    
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
                
    $p = new Publico();
    $dao = new PublicoDao();
                
    $p->setNome($nome);
    $p->setDescricao($descricao);
    $p2 = new Publico();
    $p2 = $dao->salvar($p);
                
    move_uploaded_file($_FILES['imagem']['tmp_name'], '../img/publico/'.$p2->getId().'.jpg');
    
    header('Location: ../pgAdm/cadastroPublico.php');
    
}

<?php

include_once "../entidades/Anime.php";
include_once "Conexao.php";

class AnimeDao {
    
    public function salvar(Anime $a){
        
        try{
            
            $con = Conexao::get();
            $stmt = $con->prepare('INSERT INTO anime(id_publico,nome,n_episodios,sinopse,genero,img) VALUES (?,?,?,?,?,?)');
            $stmt->bind_param('isssss',$id_publico,$nome,$n_episodios,$sinopse,$genero,$img);
            $id_publico = $a->getId_publico();
            $nome = $a->getNome();
            $n_episodios = $a->getN_episodios();
            $sinopse = $a->getSinopse();
            $genero = $a->getGenero();
            $img = $a->getImg();
            $stmt->execute();
            $a->setId($con->insert_id);
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    
    
}

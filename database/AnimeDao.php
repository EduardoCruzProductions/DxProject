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
            
            
        }catch(Exception $e){
            print($e);
        }
        return $a->setId($con->insert_id);
    }
    
    public function listar(){
        
        $list = array();
        
        try{
            
            $con = Conexao::get();
            $result = $con->query('SELECT * FROM anime');
            while($row = $result->fetch_assoc()){
                $a = new Publico();
                $a->setId($row['id']);
                $a->setId_publico($row['id_publico']);
                $a->setNome($row['nome']);
                $a->setN_episodios($row['n_episodios']);
                $a->setSinopse($row['sinopse']);
                $a->setGenero($row['genero']);
                $a->setImg($row['img']);
                array_push($list, $a);
            }
            
        } catch (Exception $ex) {
            print($ex);
        }
        
        return $list;
        
    }
    
        
    
    
}

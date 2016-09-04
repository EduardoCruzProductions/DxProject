<?php

include_once "Conexao.php";

class AnimeDao {
    
    public function salvar(Anime $a){
        
        try{
            
            $con = Conexao::get();
            $stmt = $con->prepare('INSERT INTO anime(id_publico,nome,n_episodios,sinopse,genero,link) VALUES (?,?,?,?,?,?)');
            $stmt->bind_param('isssss',$id_publico,$nome,$n_episodios,$sinopse,$genero,$link);
            $id_publico = $a->getId_publico();
            $nome = $a->getNome();
            $n_episodios = $a->getN_episodios();
            $sinopse = $a->getSinopse();
            $genero = $a->getGenero();
            $link = $a->getLink();
            $stmt->execute();
            $a->setId($con->insert_id);
            
        }catch(Exception $e){
            print($e);
        }
        return $a;
    }
    
    public function listar(){
        
        $list = array();
        
        try{
            
            $con = Conexao::get();
            $result = $con->query('SELECT * FROM anime');
            while($row = $result->fetch_assoc()){
                $a = new Anime();
                $a->setId($row['id']);
                $a->setId_publico($row['id_publico']);
                $a->setNome($row['nome']);
                $a->setN_episodios($row['n_episodios']);
                $a->setSinopse($row['sinopse']);
                $a->setGenero($row['genero']);
                $a->setLink($row['link']);
                array_push($list, $a);
            }
            
        } catch (Exception $ex) {
            print($ex);
        }
        
        return $list;
        
    }
    
    public function listarByPublicoId($id){
        
        $list = array();
        
        try{
            
            $con = Conexao::get();
            $stmt = $con->prepare('SELECT * FROM anime WHERE id_publico = ?');
            $stmt->bind_param('i',$id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            
            while($row = $result->fetch_assoc()){
                $a = new Anime();
                $a->setId($row['id']);
                $a->setId_publico($row['id_publico']);
                $a->setNome($row['nome']);
                $a->setN_episodios($row['n_episodios']);
                $a->setSinopse($row['sinopse']);
                $a->setGenero($row['genero']);
                $a->setLink($row['link']);
                array_push($list, $a);
            }
             
        } catch (Exception $ex) {
            print($ex);
        }
        
        return $list;
        
    }
    
    public function listarById($id){
        
        try{
            
            $con = Conexao::get();
            $a = new Anime();
            $stmt = $con->prepare('SELECT * FROM anime WHERE id=?');
            $stmt->bind_param('i',$id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if($row = $result->fetch_assoc()){
                $a->setId($row['id']);
                $a->setId_publico($row['id_publico']);
                $a->setNome($row['nome']);
                $a->setN_episodios($row['n_episodios']);
                $a->setSinopse($row['sinopse']);
                $a->setGenero($row['genero']);
                $a->setLink($row['link']);
            }

        } catch (Exception $ex) {
            print($ex);
        }
        
        return $a;
        
    }

}

<?php

include_once '../entidades/Publico.php';
include_once 'Conexao.php';

class PublicoDao {
    
    public function salvar(Publico $p){
        
        try{
            
            $con = Conexao::get();
            $stmt = $con->prepare('INSERT INTO publico(nome,descricao) VALUES(?,?)');
            $stmt->bind_param('ss',$nome,$descricao);
            $nome = $p->getNome();
            $descricao = $p->getDescricao();
            $stmt->execute();
            
        } catch (Exception $ex) {
            print($ex);
        }
        
        return $p->setId($con->insert_id);
        
    }
    
    
}

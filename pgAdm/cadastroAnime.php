<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Titúlos</title>
        <link rel="stylesheet" href="../css/pgAdmin/style_cadastro.css">
    </head>
    <body>
        
        <div id="topo">
		
            <a href="../index.php"><div id="botao"><div id="text">Home</div></div></a>
            <a href="cadastroPublico.php"><div id="botao"><div id="text">Cadastro de Público Alvo</div></div></a>
      
        </div>
        
        <article id="conteudo">
		
            <div id="titulo">
            
                <div id="text">Cadastro de Títulos</div>
            
            </div>
            
            <div id="cont_form">
                
                <form action="../controle/controleAnime.php?acao=salvar" method="post" id="form" enctype="multipart/form-data">
                
                    <div id="text">Nome:</div><br/>
                    <input type="text" name="nome" id="txt"><br/>
                    
                    <div id="text">Número de episódios:</div><br/>
                    <input type="text" name="n_episodios" id="txt"><br/>
                    
                    <div id="text">Gênero:</div><br/>
                    <input type="text" name="genero" id="txt"><br/>
                    
                    <div id="text">Sinopse:</div><br/>
                    <textarea rows="5" name="sinopse"></textarea><br/>
                    
                    <div id="text">Público alvo:</div><br/>
                    
                    <select name="publicoAlvo" id="txt">
                    
                        <?php
                        
                            include_once '../database/PublicoDao.php';
                            include_once '../entidades/Publico.php';
                            
                            $dao = new PublicoDao();
                            
                            $list = $dao->listar();
                            
                            foreach($list as $p){
                                
                                echo "<option value='".$p->getId()."'>".$p->getNome()."</option>";
                                
                            }
                            
                        ?>
                            
                    </select>
                    
                    <div id="text">Link:</div><br/>
                    <input type="text" name="link" id="txt"><br/>
                    
                    <div id="text">Imagem:</div><br/>
                    <input type="file" name="imagem" id="txt">
                    
                    <button>Salvar</button>
                    
                </form>
                
            </div>
	
        </article>

    </body>
</html>

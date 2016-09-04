<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Público Alvo</title>
        <link rel="stylesheet" href="../css/pgAdmin/style_cadastro.css">
    </head>
    <body>
        
        <div id="topo">
		
            <a href="index.php"><div id="botao"><div id="text">Home</div></div></a>
            <a href="#"><div id="botao"><div id="text">Mangas</div></div></a>
            <a href="#"><div id="botao"><div id="text">Jogos</div></div></a>
      
        </div>
        
        <article id="conteudo">
		
            <div id="titulo">
            
                <div id="text">Cadastro de Público Alvo</div>
            
            </div>
            
            <div id="cont_form">
                
                <form action="cadastroPublico.php" method="post" id="form">
                
                    <div id="text">Nome:</div><br/>
                    <input type="text" name="nome" id="txt"><br/>
                    <div id="text">Descrição:</div><br/>
                    <textarea rows="5" name="descricao"></textarea><br/>
                    <div id="text">Imagem:</div><br/>
                    <input type="file" name="img" id="text">
                    <button>Salvar</button>
                    
                </form>
                
            </div>
	
        </article>
        
        <?php
        
            include_once '../database/PublicoDao.php';
            include_once '../entidades/Publico.php';
            
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            
            if(isset($nome)&&isset($descricao)){
                
                $p = new Publico();
                $dao = new PublicoDao();
                
                $p->setNome($nome);
                $p->setDescricao($descricao);
                
                $dao->salvar($p);
                
            }
        ?>
    </body>
</html>

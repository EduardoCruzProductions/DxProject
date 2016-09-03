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
                
                    Nome:<br/>
                    <input type="text" name="name" id="txt"><br/>
                    Descrição:<br/>
                    <textarea rows="5" name="descricao"></textarea><br/>
                    <button>Salvar</button>
                    
                </form>
                
                
            </div>
	
        </article>
        
        <?php
        // put your code here
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Público Alvo</title>
        <link rel="stylesheet" href="../css/pgAdmin/style_cadastro.css">
    </head>
    <body>
        
        <div id="topo">
		
            <a href="../index.php"><div id="botao"><div id="text">Home</div></div></a>
            <a href="cadastroAnime.php"><div id="botao"><div id="text">Cadastro de Títulos</div></div></a>
      
        </div>
        
        <article id="conteudo">
		
            <div id="titulo">
            
                <div id="text">Cadastro de Público Alvo</div>
            
            </div>
            
            <div id="cont_form">
                
                <form action="../controle/controlePublico.php?acao=salvar" method="post" id="form" enctype="multipart/form-data">
                
                    <div id="text">Nome:</div><br/>
                    <input type="text" name="nome" id="txt"><br/>
                    <div id="text">Descrição:</div><br/>
                    <textarea rows="5" name="descricao"></textarea><br/>
                    <div id="text">Imagem:</div><br/>
                    <input type="file" name="imagem" id="txt">
                    <button>Salvar</button>
                    
                </form>
                
            </div>
	
        </article>

    </body>
</html>

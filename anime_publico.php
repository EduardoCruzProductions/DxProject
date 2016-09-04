<!DOCTYPE html>

<html>
    <head>
        <title>DxProject - Animes</title>
        <link rel="stylesheet" href="css/style_anime.css">
	<meta charset="utf-8">
    </head>
    <body>
        <div id="topo">
		
            <a href="index.php"><div id="botao"><div id="text">Home</div></div></a>
            <a href="#"><div id="botao"><div id="text">Mangas</div></div></a>
            <a href="#"><div id="botao"><div id="text">Jogos</div></div></a>
            <a href="pgAdm/cadastroPublico.php"><div id="ger"><img src="img/ger.png"/></div></a>
      
        </div>
        
        <article id="baner">
		
            <div id="logo">
                
               Animes
                
            </div>
		
	</article>
        
        <article id="conteudo">
		
            <div id="titulo">
            
                <div id="text">Público alvo</div>
            
            </div>
            
            <?php
            
                include_once 'database/PublicoDao.php';
                include_once 'entidades/Publico.php';
                $list = array();
                $dao = new PublicoDao();
                $list = $dao->listar();
                
                foreach($list as $p){
                    echo "<a href='anime_titulos.php?id=".$p->getId()."'>";
                    echo '<div id="box_publico">';
                    echo '<div id="imagem">';
                    echo "<img src='img/publico/".$p->getId().".jpg'/>";
                    echo '</div>';
                    echo '<div id="texto">';
                    echo "<h1>".$p->getNome()."</h1>";
                    echo "<p>".$p->getDescricao()."</p>";
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                    
                }
            
            ?>

	</article>
    
        <article id="foot">
       
        </article>
    
    </body>
</html>

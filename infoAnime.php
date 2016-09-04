<!DOCTYPE html>

<html>
    <head>
        <title>DxProject - Animes</title>
        <link rel="stylesheet" href="css/style_animeInfo.css">
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
		
            <?php
            
                include_once 'database/AnimeDao.php';
                include_once 'entidades/Anime.php';
                
                $dao = new AnimeDao();
                
                $a = new Anime();
                $a = $dao->listarById($_GET['id']);
                        
                echo '<div id="titulo">';
            
                echo '<div id="text">'.$a->getNome().'</div>';
            
                echo '</div>';
            
                
                echo '<div id="box_publico">';
                
                echo '<div id="imagem">';
                    echo "<a href='".$a->getLink()."'><img src='img/anime/".$a->getId().".jpg'/></a>";
                echo '</div>';
                
                echo "<div id='side_imagem'>";
                    
                    echo "<h1>Número de episódios: ".$a->getN_episodios()."</h1>";
                    echo "<h1>Gênero: ".$a->getGenero()."</h1>";

                echo "</div>";
                
                echo "<div id='texto'>";
                    
                    echo "<h1>Sinopse:</h1>";
                    
                    echo "<p>".$a->getSinopse()."</p>";
                    
                echo "</div>";
                
            echo "</div>";    
            
            ?>
                
	</article>
    
        <article id="foot">
       
        </article>
    
    </body>
</html>

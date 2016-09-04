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
            
                <div id="text">Títulos</div>
            
            </div>
            
            <?php
                
                include_once 'database/AnimeDao.php';
                include_once 'entidades/Anime.php';
            
                $publico_id = $_GET['id'];
                $list = array();
                $dao = new AnimeDao();
                $list = $dao->listarByPublicoId($publico_id);
                
                foreach($list as $a){
                    
                    echo "<a href='infoAnime.php?id=".$a->getId()."'>";
                    echo '<div id="box_publico">';
                    echo '<div id="imagem">';
                    echo "<img src='img/anime/".$a->getId().".jpg'/>";
                    echo '</div>';
                    echo '<div id="texto">';
                    echo "<h1>".$a->getNome()."</h1>";
                    echo "<p>Gênero: ".$a->getGenero()."</p>";
                    echo "<p>Número de episódios: ".$a->getN_episodios()."</p>";
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
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        
        <?php
            
            include_once "../entidades/Anime.php";
            include_once "../database/AnimeDao.php";
            
            $a = new Anime();
            $dao = new AnimeDao();
            
            $a->setNome("Algum anime la");
            $a->setGenero("acao");
            $a->setId_publico(1);
            $a->setSinopse("é muito legal pq eu nao sei pq mais eu sei q é");
            $a->setImg("img1");
            $a->setN_episodios("45");
            $dao->salvar($a);
            
            echo "funciono";
            
        ?>
        
    </body>
</html>

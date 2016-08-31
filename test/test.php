<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        
        <?php
            
            include_once "../entidades/Publico.php";
            include_once "../database/PublicoDao.php";
            
            $p = new Publico();
            $dao = new PublicoDao();
            
            $p->setNome("Seinen");
            $p->setDescricao("Destinado para jovens e adultos do sexo masculino");
            
            $dao->salvar($p);
            
            echo "funciono";
            
        ?>
        
    </body>
</html>

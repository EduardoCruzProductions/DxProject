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
            $list = $dao->listar();
            
            foreach($list as $p){
                echo $p->getNome();
            }
        ?>
        
    </body>
</html>

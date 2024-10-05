<?php
            $nome=$_POST['nome'];
            $conexao =    mysqli_connect('34.42.216.142','Mob','usbw');
                mysqli_select_db($conexao,'jogos');
            $sql    =    "delete    from    jogos    where    Nome    like    '$nome'    ";
            $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao));
            if($resultado)
                                echo "1";
                else
?>

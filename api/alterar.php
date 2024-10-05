<?php
                $nomenovo=$_POST['nomenovo'];
                $nomevelho=$_POST['nomevelho'];
                $plataforma=$_POST['plataforma'];
                $genero=$_POST['genero'];
                $conexao =    mysqli_connect('34.42.216.142','Mob','usbw');
                mysqli_select_db($conexao,'jogos');
            $sql    =    "update    jogos    set    Nome='$nomenovo',    Plataforma='$plataforma',    Genero='$genero'    where    Nome='$nomevelho'";
            $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro    .:"    .    mysqli_error($conexao));
            if($resultado)
                                        echo "1";
            else
                            echo "0";
?>

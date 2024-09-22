<?php
                $nomenovo=$_POST['nomenovo'];
                $nomevelho=$_POST['nomevelho'];
                $email=$_POST['email'];
                $endereco=$_POST['endereco'];
                $conexao =    mysqli_connect('104.198.142.105','app','usbw');
                mysqli_select_db($conexao,'av1');
            $sql    =    "update    cliente    set    Nome='$nomenovo',    Email='$email',    Endereco='$endereco'    where    Nome='$nomevelho'";
            $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro    .:"    .    mysqli_error($conexao));
            if($resultado)
                                        echo "1";
            else
                            echo "0";
?>
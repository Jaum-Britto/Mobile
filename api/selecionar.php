<?php
                $nome=$_POST['nome'];
                $conexao    =    mysqli_connect('104.198.142.105','app','usbw');
                mysqli_select_db($conexao,'av1');
                $sql=" select    * from
        cliente    where    Nome    like    '$nome'";
                $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao));
                while($linha=    mysqli_fetch_object($resultado))    {
                        echo $linha->Nome."#";
                            echo $linha->Email."#";
                             echo $linha->Endereco."#";
                                }
                    echo "^";
?>
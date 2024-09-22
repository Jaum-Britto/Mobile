<?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco =$_POST['endereco'];
        $conexao =    mysqli_connect('104.198.142.105','app','usbw');
        mysqli_select_db($conexao,'av1');
        $sql    =    "insert    into    cliente    (Nome,    Email,    Endereco)    values    ('$nome','$email','$endereco')";
    $resposta    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao
));
    if($resposta)
                                        echo "1";
    else
                            echo "0";
    ?>
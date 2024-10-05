<?php
        $conexao =    mysqli_connect('34.42.216.142','Mob','usbw');
        mysqli_select_db($conexao,'jogos');
        $sql="select    *    from    jogos    order    by    nome    desc";
        $resultado    =    mysqli_query($conexao, $sql)    or die    ("Erro:    "    .    mysqli_error($conexao));
        while($linha    =    mysqli_fetch_object($resultado))
                        echo $linha->Nome."#";
        echo "^";
?>

<?php

$conexao = mysqli_connect('localhost', 'root', 'aluno', 'umbrella');

#die('Adeus!');
#echo('oi');

if (!$conexao) {
    //echo mysqli_error($conexao);
    die(mysqli_error($conexao));
}

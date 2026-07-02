<?php

function gerarSenha($senha)
{
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&*()_+\|?';
    $maxindex = strlen($caracteres);
    $senhaAleatoria1 = $caracteres[random_int (0, $maxindex)];
    $senhaAleatoria2 = $caracteres[random_int (0, $maxindex)];
    $senhaAleatoria3 = $caracteres[random_int (0, $maxindex)];
    $senhaAleatoria4 = $caracteres[random_int (0, $maxindex)];
    $senhaAleatoria5 = $caracteres[random_int (0, $maxindex)];
    $senhaAleatoria6 = $caracteres[random_int (0, $maxindex)];
    $senhaAleatoria7 = $caracteres[random_int (0, $maxindex)];
    $s1 = $senhaAleatoria1;
    $s2 = $senhaAleatoria2;
    $s3 = $senhaAleatoria3;
    $s4 = $senhaAleatoria4;
    $s5 = $senhaAleatoria5;
    $s6 = $senhaAleatoria6;
    $s7 = $senhaAleatoria7;
    

    echo "Senha: $s1 $s2 $s3 $s4 $s5 $s6 $s7 ";
    
}



gerarSenha($senha);
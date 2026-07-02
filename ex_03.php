<?php

function mascararCpf($cpf){

    $mascarr = substr_replace($cpf, str_repeat('*', 7), 0, 7);
    echo "O cpf mascarado é:$mascarr";

}
$cpf=70859293491;

mascararCpf($cpf);


?>
<?php

function inverterTexto($text)
{

    $invertido = strrev($text);
    $contaLetras = mb_strlen($text);

    echo "A palavra é: $text <br>";
    echo "A palavra ao contrario é: $invertido <br>";
    echo "A quantidade de letras são: $contaLetras <br>";
}
$text = "Danilo Rachadel Jr";

inverterTexto($text);

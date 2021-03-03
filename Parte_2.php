<?php
$cpf = 76650579009;

# Método retirado do link : https://www.devmedia.com.br/validando-o-cpf-em-uma-aplicacao-java/22097

function valid_cpf($cpf)
{
    $cpf_array  = array_map('intval', str_split($cpf));

    if (
        (sizeof($cpf_array) != 11) ||
        $cpf == 00000000000 ||
        $cpf == 11111111111 ||
        $cpf == 22222222222 ||
        $cpf == 33333333333 ||
        $cpf == 44444444444 ||
        $cpf == 55555555555 ||
        $cpf == 66666666666 ||
        $cpf == 77777777777 ||
        $cpf == 99999999999
    ) {
        return false;
    }

    # First Digit Calculation :
    $weight = array(10, 9, 8, 7, 6, 5, 4, 3, 2);
    $num_digitos = 9;
    $sm = 0;

    for ($i = 0; $i < $num_digitos; $i++) {
        $sm +=  $cpf_array[$i] * $weight[$i];
    }

    $digit = 11 - ($sm % 11);
    if ($digit == 10 || $digit == 11) {
        $digit = 0;
    }


    if ($digit != $cpf_array[9]) {
        return false;
    }

    # Second Digit Calculation :
    $num_digitos = 10;
    $sm = 0;
    $weight = array(11, 10, 9, 8, 7, 6, 5, 4, 3, 2);

    for ($i = 0; $i < $num_digitos; $i++) {
        $sm +=  $cpf_array[$i] * $weight[$i];
    }

    $digit = 11 - ($sm % 11);
    if ($digit == 10 || $digit == 11) {
        $digit = 0;
    }

    if ($digit != $cpf_array[10]) {
        return false;
    } else {
        return true;
    }
}

if (valid_cpf($cpf)) {
    echo "Is Valid =)";
} else {
    echo "Not Valid =(";
}

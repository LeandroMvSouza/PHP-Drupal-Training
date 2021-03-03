<p>
    <?php echo "Ex 1 : Escreva uma função que receba um número indeterminado de parâmetros(números) e retorne a média desses números."; ?>
</p>

<p>
    <?php
        function median( ...$nums ){
            if(empty($nums)){
                return 0;
            }
            else{
                return array_sum($nums) / count($nums);
            }
        }

        echo median(1,2,3,4,5,6,7,8,9);
    ?>
</p>

<p>
    <?php echo "Ex 3 : Escreva uma função que receba graus Celsius e converta para Farenheit."; ?>
</p>

<p>
    <?php
        function cel_to_far( $gCelsius ){
            $gFarenheit = (1.8 * $gCelsius) + 32;
            return $gFarenheit;
        }

        echo cel_to_far(50);
    ?>
</p>

<p>
    <?php echo "Ex 4 : Escreva uma função que converta metros para centímetros."; ?>
</p>

<p>
    <?php
        function m_to_c( $meters ){
            $centimeters = $meters * 100;
            return $centimeters;
        }

        echo m_to_c(5);
    ?>
</p>

<p>
    <?php echo "Ex 5 : Escreva uma função que receba um número indeterminado de parâmetro e imprima o maior e o menor deles."; ?>
</p>

<p>
    <?php
        function biggest_and_lowest( ...$things ){
            echo "Max = ".max($things)."<br>Min = ".min($things);
        }
        echo "Teste lexicográfico :<br>";
        biggest_and_lowest("streets","crab","ortorrinolaringologista");

        echo "<br><br>Teste com números:<br>";
        biggest_and_lowest(87,-1,-5,999,-34,55);
        
        echo "<br><br>For Fun:<br>";
        biggest_and_lowest("things","Zeta",10,-5,0);
    ?>
</p>

<p>
    <?php echo "Ex 6 : Escreva uma função que receba um número e exiba o dia correspondente da semana. 
                (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido"; ?>
</p>

<p>
    <?php
        function week_day( $number ){
            if ($number == 1){
                echo "Domingo";
            }
            elseif ($number == 2){
                echo "Segunda";
            }
            elseif ($number == 3){
                echo "Terça";
            } 
            elseif ($number == 4){
                echo "Quarta";
            } 
            elseif ($number == 5){
                echo "Quinta";
            } 
            elseif ($number == 6){
                echo "Sexta";
            } 
            elseif ($number == 7){
                echo "Sábado";
            } 
            else{
                echo "Valor inválido!";
            }
        }

        week_day(5);
        echo "<br>";
        week_day(10);
    ?>
</p>

<p>
    <?php echo "Ex 7 : Faça um Programa que peça os 3 lados de um triângulo. O programa deverá informar se os valores podem ser um triângulo.
                       Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.";
    ?>
</p>

<p>
    <?php

        function exists($a,$b,$c){

            if( (abs($b - $c) < $a) && ($a < ($b + $c)) ){
                return true;
            }
            elseif( (abs($a - $c) < $b) && ($b < ($a + $c)) ){
                return true;
            }
            elseif( (abs($a - $b) < $c) && ($c < ($a + $b)) ){
                return true;
            }
            else{
                return false;
            }
        }
        function triangle_type($a, $b, $c){

            if( exists($a, $b, $c) ){

                if( $a==$b && $a==$c ){
                    echo "Esse triângulo é equilátero";
                }
                elseif( $a==$b || $a==$c || $b==$c ){
                    echo "Esse triângulo é isósceles";
                }
                else{
                    echo "Esse triângulo é escaleno";
                }
            }
            else{
                echo "Não existe um triângulo com esses 3 números.";
            }
        }

        triangle_type(25,25,25);
        echo "<br>";
        triangle_type(25,22,22);
        echo "<br>";
        triangle_type(22,22,25);
        echo "<br>";
        triangle_type(22,25,22);
        echo "<br>";
        triangle_type(22,23,24);
        echo "<br>";
        triangle_type(1,0,2);
        echo "<br>";
        triangle_type(-25,-25,-25);
    ?>
</p>

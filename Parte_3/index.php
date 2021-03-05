<?php

require __DIR__.'/bootstrap.php';

$annie = new pessoa("Annie", "Feminino", 25);

echo $annie->getNome()." do sexo - ".$annie->getSexo()." - tem ".$annie->getIdade()." anos.";
echo "<br><br>";

$annie->fazerAniversario();
echo "Ela acabou de fazer aniversário! Sua idade agora é ".$annie->getIdade();
echo "<br><br>";

$harryPotter = new livro("Harry Potter e o Prisioneiro de Azkaban", "J.K. Rowling", 258, $annie);
$harryPotter->detalhes();
echo "<br><br>";

$jonas = new pessoa("Jonas", "Masculino", 21);
$gameOfThrones = new livro("A Saga of Ice and Fire", "J.R.R Martin", 671, $jonas);

$gameOfThrones->folhear(670);


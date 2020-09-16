<?php

$name='Janusz';
$username='Nowak';
echo 'Imię: $name<br>';

echo "Imię: $name";
//konkatenacja
echo "Nazwisko: $username".'<br>';

//typy danych boolean
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo "$fałsz<br>"; //Nic nie wyświetli
//typ integer
$bin=0b1011; //11
$oct=011; //9
$dec=11; //11
$hex=0xA; //10
echo "$hex<hr>";

//składnia heredoc
$name='Janusz';
$username='Kekowy';

$text =<<<LABEL
Imię: $name<br>
Nazwisko: $username<br>
<hr>
LABEL;
echo $text;

echo <<<L
heredoc 2<br>
Imię: $name<hr>
L;

// nowdoc
echo <<<'L'
nowdoc 2<br>
Imię: $name<br>
L;
$city="Poznań";
echo "Nazwa zmiennej \$city wartość: $city";

?>

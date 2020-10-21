<?php

$text = <<<T
zsk- Zespol
Szkol
Komunikacji
T;
echo $text;
echo nl2br($text);
$name ="jANUsz";
echo "<br>$name<br>";
echo strtolower($name);
echo strtoupper($name);
//
$name= "jANUsz nowak";
//duże pierwsze litery (tylko pierwsze slowo)
echo '<br>',ucfirst($name);
//duże pierwsze litery (dla wszystkich slow)
echo '<br>',ucwords($name);
$name=<<<T
janusz
T;
echo '<br>',ucfirst($name);
$lorem =<<<LOREM
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;
echo $lorem;
echo wordwrap($lorem,40, '<br>');
echo wordwrap($lorem,40, '<hr>');
//czyszczenie zawartosci bufora
ob_clean();
?>

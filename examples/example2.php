<pre>
<?php

require "../classes/customString.php";

$string = file_get_contents('string.txt');

$CustomString = new customString($string);
$CustomString->setFilterWords(array("de", "het", "een", "te"));

var_dump($CustomString->getFrequentieTable());
var_dump($CustomString->getUsers());

?>
</pre>
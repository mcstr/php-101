<?php

// Array of ppl

$people = array (
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierrer', 'salt' => 215863)
);



// CHECK how arrays works

$thing1 = array('perro', 'gato', 'jamon', 'verduras');

$thing2 = ['perro', 'gato', 'jamon', 'verduras'];

var_dump($thing1);
echo"<br>";
var_dump($thing2);
echo"<br>";
echo $thing1['0'];
echo"<br>";
echo $thing2['0'];
echo"<br>";
echo strlen($thing1[0]);

echo '<br>';
echo 'wir sind hier';
echo '<br>';


echo '<br>';
echo "<pre>" . print_r($thing1, true) . "</pre>";
echo '<br>';
echo "<pre>" . print_r($thing2, true) . "</pre>";
echo '<br>';
echo "<pre>" . print_r($thing2[0], true) . "</pre>";

?>
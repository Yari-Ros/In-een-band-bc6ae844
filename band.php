  
<?php
$album = array('Boy Pablo' =>20.99,
'Feeling Lonely' => 8.99,
'Wtf' => 7.99,
'Tkm' =>4.99);
echo "Album overview:" .PHP_EOL;
foreach ($album as $tunes => $price) {
  echo $tunes . " Cost $" . $price .PHP_EOL;
}
echo "The average price of every track is '$" . ($price/count($album)) . "'.";
<?php
$animals = array('Eurasia' => array('Canis lupus', 'Castor fiber', 'Folivora', 'Alces alces', 'Sus scrofa', 'Panthera'),
'Africa' => array('Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi', 'Gorilla'));

$beasts = ['Canis lupus', 'Castor fiber', 'Alces alces', 'Sus scrofa', 'Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi'];

$monster = implode("<br>", $beasts);

$name = ['Canis', 'Castor', 'Alces', 'Sus', 'Diceros', 'Panthera', 'Eudorcas', 'Equus'];
$result = ['Sus', 'Diceros', 'Eudorcas', 'Equus', 'Canis', 'Panthera', 'Castor', 'Alces'];
$fantasy_name = str_replace($name, $result, $monster);

$type = ['lupus', 'fiber', 'alces', 'scrofa', 'bicornis', 'leo', 'thomsonii', 'grevyi'];
$res = ['thomsonii', 'grevyi', 'scrofa', 'alces', 'lupus', 'fiber', 'bicornis', 'leo'];
$fantasy_type = str_replace($type, $res, $monster);

$fantasy_animals = ['Fantasy place' => [$monster]];

foreach ($fantasy_animals as $region => $animal) {
  echo '<h2>' . $region, '</h2>';
  foreach ($animal as $monsters) {
    echo $monsters, '<br>';
  }
}
 ?>

<?php
$animals = array(
'Eurasia' => array('Canis lupus', 'Castor fiber', ' Alces alces', 'Sus scrofa ', 'Folivora', 'Panthera'),
'Africa' => array('Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi', 'Gorilla'));

foreach ($animals as $region) {
  $beast = array();
  foreach ($region as $animal ) {
    if (strlen($animal) > 8) {
    //  $arraybeast = array_fill(0, 1, $animal);
    //  foreach ($arraybeast as $anim) {
    //    $arraybeastes = array_merge($arraybeast, $anim);
    //    print_r($arraybeastes);
    //    echo $arraybeastes . "<br>";
    //  }
    $bear = explode(',' ,$animal);
    $beast = array_merge($beast, $bear);
    var_dump($beast) ;
    echo $beast;
    echo "1 <br>";
    }
  }
}

//$beasts = ['Canis lupus', 'Castor fiber', 'Alces alces', 'Sus scrofa', 'Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi'];

//$monster = implode("<br>", $beasts);

//$name = ['Canis', 'Castor', 'Alces', 'Sus', 'Diceros', 'Panthera', 'Eudorcas', 'Equus'];
//$result = ['Sus', 'Diceros', 'Eudorcas', 'Equus', 'Canis', 'Panthera', 'Castor', 'Alces'];
//$fantasy_name = str_replace($name, $result, $monster);

//$type = ['lupus', 'fiber', 'alces', 'scrofa', 'bicornis', 'leo', 'thomsonii', 'grevyi'];
//$res = ['thomsonii', 'grevyi', 'scrofa', 'alces', 'lupus', 'fiber', 'bicornis', 'leo'];
//$fantasy_type = str_replace($type, $res, $monster);

//$fantasy_animals = ['Fantasy place' => [$monster]];

//foreach ($fantasy_animals as $region => $animal) {
  //echo '<h2>' . $region, '</h2>';
  //foreach ($animal as $monsters) {
    //echo $monsters, '<br>';
//  }
//}
 ?>

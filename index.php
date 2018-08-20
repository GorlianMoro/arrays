<?php
$animals = array(
'Eurasia' => array('Canis lupus', 'Castor fiber', ' Alces alces', 'Sus scrofa ', 'Folivora', 'Panthera'),
'Africa' => array('Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi', 'Gorilla'));

$beastr = array();

foreach ($animals as $reg)
{
  foreach ($reg as $beast)
  {
    if (strlen($beast) > 8)
    {
      $beastr[] = $beast;
    }
  }
}

shuffle($beastr);
foreach ($beastr as $fant_animal)
{
  //echo $fant_animal . "<br>";
  $expanim = explode(" ", $fant_animal);
  print_r ($expanim);
}

 ?>

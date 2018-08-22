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
$expan = array();
$expan2 = array();
foreach ($beastr as $fant_animal)
{
  $expanim = explode(" ", $fant_animal);
  $expan[] = $expanim[0];
  $expan2[] = $expanim[1];
}

shuffle($expan2);
foreach ($expan as $anim)
{
  foreach ($expan2 as $anim2)
  {
    $sumbea = $anim . " " . $anim2;
    $fantabea[] = $sumbea;
  }
}
foreach ($fantabea as $beast)
{
  echo $beast . "<br>";
}
 ?>

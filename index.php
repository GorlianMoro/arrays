<?php
$animals = array(
'Eurasia' => array('Canis lupus', 'Castor fiber', 'Alces alces', 'Sus scrofa ', 'Folivora', 'Panthera'),
'Africa' => array('Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi', 'Gorilla'));

$expan = array();
$expan2 = array();
foreach ($animals as $reg)
{
  foreach ($reg as $anim)
  {
    $expanim = explode(" ", $anim);
    if (count($expanim) >= 2)
    {
      $expan[] = $expanim[0];
      $expan2[] = $expanim[1];
    }
  }
}

shuffle($expan);
$fantabea = array();
foreach ($expan as $anim)
{
  shuffle($expan2);
  foreach ($expan2 as $anim2)
  {
    $sumbea = $anim . " " . $anim2 . " ";
    $fantabea[] = $sumbea;
  }

  foreach ($fantabea as $beast)
  {
  }
  echo $beast;
}
 ?>

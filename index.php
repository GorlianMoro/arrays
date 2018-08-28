<?php
$animals = array(
'Eurasia' => array('Canis lupus', 'Castor fiber', 'Alces alces', 'Sus scrofa ', 'Folivora', 'Panthera'),
'Africa' => array('Diceros bicornis', 'Panthera leo', 'Eudorcas thomsonii', 'Equus grevyi', 'Gorilla'));

foreach ($animals as $reg)
{
  foreach ($reg as $anim)
  {
    $expanim = explode(" ", $anim);
    if (!empty($expanim[1]))
    {
      $expan[] = $expanim[0];
      $expan2[] = $expanim[1];
    }
  }
}

shuffle($expan);
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

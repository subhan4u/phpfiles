<?php

class Base {
  private $someprop = 'javid';
  private $moreprop = 'abdul';
}

$b = new ReflectionClass("Base");
$bb = $b->getProperty('someprop');
$cc = $b->getProperty('moreprop');
$bb->setAccessible(true);
$cc->setAccessible(true);

$d = new Base();
echo $bb->getValue($d);
echo $cc->getValue($d);

echo $d->someprop;
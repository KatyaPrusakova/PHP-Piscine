#!/usr/bin/php
<?php
if ($argc < 3) {
  return;
}
$str = [];
$i = 2;
while ($i < $argc) {
  $key = explode(':', $argv[$i]);
  $str[$key[0]] = $key[1];
  $i++;
}
if (array_key_exists($argv[1], $str)) {
  echo $str[$argv[1]] . "\n";
}
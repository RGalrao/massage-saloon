<?php


function abrv($text, $num_caracters){
  $result = substr(strip_tags($text), 0, $num_caracters);
  return $result . "...";
}

?>
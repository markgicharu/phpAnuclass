<?php
  $bar="outside";//global scope
  function foo(){
    $bar="inside";//localscope
  }
  echo $bar;
  echo foo($bar);

?>

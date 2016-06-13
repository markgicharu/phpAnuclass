<?php
  $bar="outside";//global scope
  function foo(){
	 // global $bar;
    $bar="inside";//localscope
  }
	foo();
	echo $bar;
?>

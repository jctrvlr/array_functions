<?php
$array = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($array);
print_r($reversed);
print_r($preserved);
?>
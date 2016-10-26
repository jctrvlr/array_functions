<!DOCTYPE html>
<html>
<body>
Example output: <span><?php
$array = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($array);
$preserved = array_reverse($array, true);

print_r($array);
print_r($reversed);
print_r($preserved);
?>
</span>
<pre>
$array = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($array);
print_r($reversed);
print_r($preserved);
</pre>
</body>
</html>

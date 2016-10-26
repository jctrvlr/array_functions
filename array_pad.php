<!DOCTYPE html>
<html>
<body>
Example output: <span><?php
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
print_R($result);
// result is array(12, 10, 9, 0, 0)
$result = array_pad($input, -7, -1);
print_r($result);
//result is array(-1, -1, -1, -1, 12, 10, 9)
?>
</span>
<pre>
$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
// result is array(12, 10, 9, 0, 0)
$result = array_pad($input, -7, -1);
//result is array(-1, -1, -1, -1, 12, 10, 9)
</pre>
</body>
</html>

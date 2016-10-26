<!DOCTYPE html>
<html>
<body>
Example output: <span><?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
echo '<br>';
$key = array_search('green', $array); // $key = 2;
print_r($key);
echo '<br>';
$key = array_search('red', $array); // $key = 1;
print_r($key);
?>
</span>
<pre>
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
echo "&lt;br&gt;";
$key = array_search('green', $array); // $key = 2;
print_r($key);
echo "&lt;br&gt;";
$key = array_search('red', $array); // $key = 1;
print_r($key);
</pre>
</body>
</html>

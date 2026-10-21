<?php
$v1 = 42;
$v2 = "42";
$v3 = 15.8;
$v4 = true;
$v5 = false;
$v6 = null;
echo $v5;
echo $v4;
//`42`, `"42"`, `15.8`, `true`, `false`, `null`
?>
<pre>
<?php
var_dump($v1);
var_dump($v2);
var_dump($v3);
var_dump($v4);
var_dump($v5);

var_dump($v6);



?>
</pre>
<pre>
<?php
$v2 = (int) $v2;
var_dump($v2);
$v3 = (int) $v3;
var_dump($v3);
$v1 = (string) $v1;
var_dump($v1);
?>
</pre>
<?php
$a = [];
$b = 0;
$c = "0";

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;

?>

<!DOCTYPE html>
<html>
<body>

<?php
var_dump(test(20,84));
var_dump(test(14,50));
var_dump(test(11,45));
var_dump(test(25,40));

function test($x, $y) {
    return ($x <= 20 || $y >= 50) || ($y <=20 ||$x >= 50);
}
?> 

</body>
</html>

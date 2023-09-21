<!DOCTYPE html>
<html>
<body>

<?php
function test($str) {
	$s = substr($str, -1);
	return $s . $str . $s;
}
echo test("Red")."\n";
echo test("Green")."\n";
echo test("1")."\n";
?>

</body>
</html>

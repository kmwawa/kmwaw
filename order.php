<!DOCTYPE html>
<html lange="pl">
<head>
<meta charset="utf8" />
<title>wwww</title>
</head>

<body>

<?php
$pączków = $_POST['pączków'];
$grzebieni = $_POST['grzebieni'];
$suma = 0.99 * $pączków + 1.29 * $grzebieni;
echo<<<END
<h2> Podsw</h2>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<td>ef</td><td>$pączków</td>
</tr>
<tr>
<td>dd</td><td>$grzebieni</td>
</tr>
<tr>
<td>Suma</td><td>$suma</td>
</tr>
</table>

END;

?>

</body>
</html>
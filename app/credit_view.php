<html lang = pl xml:lang = pl>
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
</head>
<body>

<form action = "<?php print(_APP_URL); ?> /app/calc_credit.php" method="get">
    <label for = "id_x"> Wysokość Kredytu: </label> <br>
    <input id = "id_x" type = "text" name = "x" value = "<?php if (isset($x)) print($x); ?>" /> <br> <br>
    <label for = "id_y"> Oprocentowanie: </label> <br>
    <input id = "id_y" type = "text" name = "y" value = "<?php if (isset($y)) print($y); ?>" /> <br> <br>
    <label for = "id_z"> Na ile lat: </label> <br>
    <input id = "id_z" type = "text" name = z value = "<?php if (isset($z)) print($z); ?>" /> <br> <br>
    <input type = "submit" value = "Oblicz" />
</form>

<?php
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f55; width:400px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #8f8; width:400px;">
<?php echo 'Miesięczna rata: '.$result; ?>
</div>
<?php } ?>

</body>
</html>
<?php
echo "echo ";
print "print ";
print_r("print_r ");
var_dump("var_dump");

echo nl2br("\n this is new line \n");

//Variable:
$nama = "string ";
$gabung = "gabung ";
$plus = 2 + 3;

echo "2 + 2 = " . 2 + 2 . nl2br("\n");

var_dump(1 > 5);
var_dump(1 == "1");
var_dump(1 === "1");
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<button style="display: block">
		Hello <?php echo "php inside html"; ?>
	</button>

	<?php
		echo "<button style='display: block'>html inside php</button>";
	?>

	<p><?php echo $nama . $gabung . $plus; ?></p>
</body>
</html>

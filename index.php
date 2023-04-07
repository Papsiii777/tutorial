<?php
$global_variable = "global ito haha";
$wyns_variable = "haha wyn, lower cases -> upper cases ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>helloooo</title>
</head>

<body>
	<h1>
	</h1>


	<?php echo $global_variable ?>

	<h1>AFter staged changes</h1>
	<p>paragraph</p>

	<h1>Wyn's code let's gooo!</h1>
	<h3>
		<?php echo strtoupper($wyns_variable) ?>
	</h3>
</body>

</html>
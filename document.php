<?php

require_once "connect.php";
$id = $_GET['id'];

$sql = "SELECT * FROM `docs` WHERE `id_doc` = '$id'";
$result = $mysqli->query($sql);
	while ($row = $result->fetch_object()) {
		$id = $row->id_doc; 
		$name = $row->name; 
		$doc = $row->document;
		$theam =$row->id_theam;
		$id_cat = $row->id_cat;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles\style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Aaccount_box">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<title><?php echo $name;?></title>
</head>
<body>
	<div class="navigation">
		<div class="n-n">
			<a href="index.php"><div class="naw">ГОЛОВНА</div></a>
			<a href="catalog.php"><div class="naw">КАТЕГОРІЇ</div></a>
			<div class="naw" id="glav"><span id="opa">ДОКУМЕНТ</span></div> 
			<!-- контрольные самостялтельные лабораторные  -->
			<a name ="html"></a>
		</div>
	</div>

		<a href="index.php"><div class="back">Повернутися</div></a>

		<div class="name-docs"><?php echo $name;?></div>
		<div class="vne">
			<div class="document"><?php echo $doc;?></div>
		</div>
</body>
</html>
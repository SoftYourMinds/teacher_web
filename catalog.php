<?php

require_once "connect.php";
$sql = "SELECT * FROM `docs` WHERE 1";
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
<html lang="ru">
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles\style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Aaccount_box">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<title>Категорії</title>
</head>
<body>
	<div class="navigation">
		<div class="n-n">
			<a href="index.php"><div class="naw">ГОЛОВНА</div></a>
			<div class="naw" id="glav"><span id="opa">КАТЕГОРІЇ</div></a>
			<!-- <a href="#footer"><div class="naw">ІНФОРМАЦІЯ</div></a>  -->
			<!-- контрольные самостялтельные лабораторные  -->
		</div>
	</div>
	<div class ="tools">
		
	
		<select class="aboba" id="demo" name="demo" onchange="select()">
				<option  value="all">Усі</option>
				<option  value="lb">Лабораторні роботи</option>
				<option value="sr">Самостійні роботи</option>
				<option value="lek">Лекції</option>
				<option  value="other">Інше</option>
			</select>

		<input  id="search-text" onkeyup="tableSearch()" type="text" placeholder="Знайти...">
		
	</div>
	<div class="catrgory-cont">

		<table id ="t_all" style="display: block;">
			<thead>
				<tr>
					<th id="z0">Назва документу</th>
					<th id="z1">Назва категорії</th>
					<th id="z2">Документ</th>
					<th id="z3">Назва розділу</th>
				</tr>
			</thead>
			<?php
				$sql = "SELECT * FROM `docs` WHERE 1";
				$result = $mysqli->query($sql);
					while ($row = $result->fetch_object()) {
						$id = $row->id_doc; 
						$name = $row->name; 
						$doc = $row->document;
						$theam =$row->id_theam;
						$id_cat = $row->id_cat;
					$sqli ="SELECT * FROM `theams` where `id_theam` ='$theam'";
					$res = $mysqli->query($sqli);
					while ($r = $res->fetch_object()) {
						$theam_name = $r->name;
					}
					$sqli ="SELECT * FROM `category` where `id_cat` ='$id_cat'";
					$res = $mysqli->query($sqli);
					while ($r = $res->fetch_object()) {
						$cat_name = $r->category;
					}
				echo "<tr>
					
					<td>".$name."</td>
					<td>".$cat_name."</td>
					<td>
					<a href = 'document.php?id=".$id."'>
						<span><i id ='dd' class = 'fa fa-file-word-o fa-5x'></i></span>
					</a>
					</td>
					<td>
						".$theam_name ."
					</td>
					</tr>";
				}
			?>
		</table>

		<table id ="t_lb" style="display:none">
			<thead>
				<tr>
					<th id="z0">Назва документу</th>
					<th id="z1">Назва категорії</th>
					<th id="z2">Документ</th>
					<th id="z3">Назва розділу</th>
				</tr>
			</thead>
			<?php
				$sql = "SELECT * FROM `docs` WHERE `id_cat` = 1";
				$result = $mysqli->query($sql);
					while ($row = $result->fetch_object()) {
						$id = $row->id_doc; 
						$name = $row->name; 
						$doc = $row->document;
						$theam =$row->id_theam;
						$id_cat = $row->$id_cat ;
					$sqli ="SELECT * FROM `theams` where `id_theam` ='$theam'";
					$res = $mysqli->query($sqli);
					while ($r = $res->fetch_object()) {
						$theam_name = $r->name;
					}
					// $sqli ="SELECT * FROM `category` where `id_cat` =1";
					// $res = $mysqli->query($sqli);
					// while ($r = $res->fetch_object()) {
					// 	$cat_name = $r->category;
					// }
				echo "<tr>
					
					<td>".$name."</td>
					<td>Лабораторні роботи</td>
					<td>
					<a href = 'document.php?id=".$id."'>
						<span><i id ='dd' class = 'fa fa-file-word-o fa-5x'></i></span>
					</a>
				</td>
					<td>
						".$theam_name ."
					</td>
					</tr>";
					}
			?>
		</table>

		<table id ="t_sr" style="display: none">
			<thead>
				<tr>
					<th id="z0">Назва документу</th>
					<th id="z1">Назва категорії</th>
					<th id="z2">Документ</th>
					<th id="z3">Назва розділу</th>
				</tr>
			</thead>
			<?php
				$sql = "SELECT * FROM `docs` WHERE `id_cat` = 2";
				$result = $mysqli->query($sql);
					while ($row = $result->fetch_object()) {
						$id = $row->id_doc; 
						$name = $row->name; 
						$doc = $row->document;
						$theam =$row->id_theam;
						$id_cat = $row->$id_cat ;
					$sqli ="SELECT * FROM `theams` where `id_theam` ='$theam'";
					$res = $mysqli->query($sqli);
					while ($r = $res->fetch_object()) {
						$theam_name = $r->name;
					}
					// $sqli ="SELECT * FROM `category` where `id_cat` ='2";
					// $res = $mysqli->query($sqli);
					// while ($r = $res->fetch_object()) {
					// 	$cat_name = $r->category;
					// }
				echo "<tr>
					
					<td>".$name."</td>
					<td>Самостійні роботи</td>
					<td>
					<a href = 'document.php?id=".$id."'>
					
							<span><i id ='dd' class = 'fa fa-file-word-o fa-5x'></i></span>
				
				</a>
				</td>
					<td>
						".$theam_name ."
					</td>
					</tr>";
					}
			?>
		</table>

		<table id ="t_lek" style="display:none">
			<thead>
				<tr>
					<th id="z0">Назва документу</th>
					<th id="z1">Назва категорії</th>
					<th id="z2">Документ</th>
					<th id="z3">Назва розділу</th>
				</tr>
			</thead>
			<?php
				$sql = "SELECT * FROM `docs` WHERE `id_cat` = 4";
				$result = $mysqli->query($sql);
					while ($row = $result->fetch_object()) {
						$id = $row->id_doc; 
						$name = $row->name; 
						$doc = $row->document;
						$theam =$row->id_theam;
						$id_cat = $row->$id_cat ;
					$sqli ="SELECT * FROM `theams` where `id_theam` ='$theam'";
					$res = $mysqli->query($sqli);
					while ($r = $res->fetch_object()) {
						$theam_name = $r->name;
					}
					// $sqli ="SELECT * FROM `category` where `id_cat` =4";
					// $res = $mysqli->query($sqli);
					// while ($r = $res->fetch_object()) {
					// 	$cat_name = $r->category;
					// }
				echo "<tr>
					
					<td>".$name."</td>
					<td>Лекції</td>
					<td>
					<a href = 'document.php?id=".$id."'>
							<span><i id ='dd' class = 'fa fa-file-word-o fa-5x'></i></span>
				
				</a>
				</td>
					<td>
						".$theam_name ."
					</td>
					</tr>";
					}
			?>
		</table>

		<table id ="t_other" style="display:none">
			<thead>
				<tr>
					<th id="z0">Назва документу</th>
					<th id="z1">Назва категорії</th>
					<th id="z2">Документ</th>
					<th id="z3">Назва розділу</th>
				</tr>
			</thead>
			<?php
				$sql = "SELECT * FROM `docs` WHERE `id_cat` = 5";
				$result = $mysqli->query($sql);
					while ($row = $result->fetch_object()) {
						$id = $row->id_doc; 
						$name = $row->name; 
						$doc = $row->document;
						$theam =$row->id_theam;
						$id_cat = $row->$id_cat ;
					$sqli ="SELECT * FROM `theams` where `id_theam` ='$theam'";
					$res = $mysqli->query($sqli);
					while ($r = $res->fetch_object()) {
						$theam_name = $r->name;
					}
					// $sqli ="SELECT * FROM `category` where `id_cat` =5";
					// $res = $mysqli->query($sqli);
					// while ($r = $res->fetch_object()) {
					// 	$cat_name = $r->category;
					// }
				echo "<tr>
					
					<td>".$name."</td>
					<td>Інше</td>
					<td>
					<a href = 'document.php?id=".$id."'>
					<span><i id ='dd' class = 'fa fa-file-word-o fa-5x'></i></span>
							
					
				</a>
				</td>
					<td>
						".$theam_name ."
					</td>
					</tr>";
					}
			?>
		</table>
	</div>
	<!-- <a name="footer"></a>
<div class="footer">
		<a href="">@МНК з дисципліни Веб-дизайн 2021</a>
		<a href="https://www.instagram.com/yuliia.ananchenko/?hl=ru">Викладач: Ананченко Ю.М</a>
		<a href="https://classroom.google.com/u/0/c/MTQ0NDU1OTgwMDY4">Gogle Classroom</a>
</div> -->
	<script>
		



	function select() {
		var all = document.getElementById('t_all');
		var lb= document.getElementById('t_lb');
		var sr = document.getElementById('t_sr');
		var lek = document.getElementById('t_lek');
		var other = document.getElementById('t_other');
		var phrase = document.getElementById('search-text');

		var sel = document.getElementById('demo').selectedIndex;
		var options = document.getElementById('demo').options;
		if (options[sel].value == "all") {
			all.style.display = 'block';
			lb.style.display = 'none';
			sr.style.display = 'none';
			lek.style.display = 'none';
			other.style.display = 'none';
			phrase.disabled = false;
		} else if (options[sel].value == "lb") {
			all.style.display = 'none';
			lb.style.display = 'block';
			sr.style.display = 'none';
			lek.style.display = 'none';
			other.style.display = 'none';
			phrase.disabled = true;
		} else if (options[sel].value == "lek") {
			all.style.display = 'none';
			lb.style.display = 'none';
			sr.style.display = 'none';
			lek.style.display = 'block';
			other.style.display = 'none';
			phrase.disabled = true;
		}
		else if (options[sel].value == "sr") {
			all.style.display = 'none';
			lb.style.display = 'none';
			sr.style.display = 'block';
			lek.style.display = 'none';
			other.style.display = 'none';
			phrase.disabled = true;
		}else {
			all.style.display = 'none';
			lb.style.display = 'none';
			sr.style.display = 'none';
			lek.style.display = 'none';
			other.style.display = 'block';
			phrase.disabled = true;
		}
	}

		
		
	
		
	
		
	function tableSearch() {
		var phrase = document.getElementById('search-text');
		var table = document.getElementById('t_all');
		var regPhrase = new RegExp(phrase.value, 'i');
		var flag = false;
	

		
		for (var i = 1; i < table.rows.length; i++) {
			flag = false;
			for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
				flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
				if (flag) break;
			}
			if (flag) {
				table.rows[i].style.display = "";
			} else {
				table.rows[i].style.display = "none";
			}

		}

	}
	
	


	</script>
</body>
</html>
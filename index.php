<?php
require_once "connect.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles\style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.google.com/icons?selected=Material%20Icons%20Outlined%3Aaccount_box">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<title>МНК-Веб</title>
</head>
<body>
	<div class="header" id ="header">
		
		<img src = "images\head.png">
			<span id ="h-h1" class="h-headline1">Навчально-методичний комплекс з дисципліни:</span>
			<span id ="h-h2" class="h-headline2">Веб-технології та веб-дизайн</span>
		
	</div>
	<div class="navigation">
		<div class="n-n">
		<a href="index.php"><div class="naw" id="glav"><span id="opa">ГОЛОВНА</span></div></a>
		<a href="catalog.php"><div class="naw">КАТЕГОРІЇ</div></a>
		<a href="#footer"><div class="naw">ІНФОРМАЦІЯ</div> 
			<!-- контрольные самостялтельные лабораторные  -->
			<a name ="html"></a>
		</div>
	
		
	</div>
<div class="vneshka">
	<div class="content">
		
		<div class ="module"> 
	
		<div class="cont-name">	Модуль 1 HTML</div>
		<div class='docs'>
		<?php 
				$sql = "SELECT * FROM `docs` WHERE `id_theam` = '1'";
				$result = $mysqli->query($sql);
				while ($row = $result->fetch_object()) {
					$id = $row->id_doc; 
					$name = $row->name; 
					$id_cat = $row->id_cat;
					if($id_cat =="1"){
						echo "

							
							<a href = 'document.php?id=".$id."'>
								
								<div class = 'doc-card' id='doc-card' onmouseout='out()'>
									<div class='fo1'>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-5x'></i></span>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-3x'></i></span>
										<div class='name-doc'>".$name."</div>
									</div>
								</div>
							</a>";
					}else if($id_cat =="2"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-3x'></i></span>
									
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="4"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-3x'></i></span>
									
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="5"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='other' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='other' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}
				}
			
			?>	<a name ="css"></a>
		</div>
		</div>
		<div class ="module"> 
		
			<div class="cont-name">	Модуль 2 CSS</div>
			<div class='docs'>
			<?php 
				$sql = "SELECT * FROM `docs` WHERE `id_theam` = '2'";
				$result = $mysqli->query($sql);
				while ($row = $result->fetch_object()) {
					$id = $row->id_doc; 
					$name = $row->name; 
					// $row->document, 
					// $$row->id_theam, 
					$id_cat = $row->id_cat;
					if($id_cat =="1"){
						echo "
							<a href = 'document.php?id=".$id."'>
								
								<div class = 'doc-card' id='doc-card' onmouseout='out()'>
									<div class='fo1'>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-5x'></i></span>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-3x'></i></span>
										<div class='name-doc'>".$name."</div>
									</div>
								</div>
							</a>";
					}else if($id_cat =="2"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="4"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="5"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='other' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='other' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}
				}
			
			?>		<a name ="js"></a>
			</div>
			
		</div>
			

			
	

		<div class ="module">
	
			<div class="cont-name">	Модуль 3 JS</div>
			<div class='docs'>
			<?php 
				$sql = "SELECT * FROM `docs` WHERE `id_theam` = '3'";
				$result = $mysqli->query($sql);
				while ($row = $result->fetch_object()) {
					$id = $row->id_doc; 
					$name = $row->name; 
					// $row->document, 
					// $$row->id_theam, 
					$id_cat = $row->id_cat;
					if($id_cat =="1"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='lb' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='lb' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
				}else if($id_cat =="2"){
					echo "
					<a href = 'document.php?id=".$id."'>
						
						<div class = 'doc-card' id='doc-card' onmouseout='out()'>
							<div class='fo1'>
								<span><i id ='sr' class = 'fa fa-file-word-o fa-5x'></i></span>
								<span><i id ='sr' class = 'fa fa-file-word-o fa-3x'></i></span>
								<div class='name-doc'>".$name."</div>
							</div>
						</div>
					</a>";
				}else if($id_cat =="4"){
					echo "
					<a href = 'document.php?id=".$id."'>
						
						<div class = 'doc-card' id='doc-card' onmouseout='out()'>
							<div class='fo1'>
								<span><i id ='lek' class = 'fa fa-file-word-o fa-5x'></i></span>
								<span><i id ='lek' class = 'fa fa-file-word-o fa-3x'></i></span>
								<div class='name-doc'>".$name."</div>
							</div>
						</div>
					</a>";
				}else if($id_cat =="5"){
					echo "
					<a href = 'document.php?id=".$id."'>
						
						<div class = 'doc-card' id='doc-card' onmouseout='out()'>
							<div class='fo1'>
								<span><i id ='other' class = 'fa fa-file-word-o fa-5x'></i></span>
								<span><i id ='other' class = 'fa fa-file-word-o fa-3x'></i></span>
								<div class='name-doc'>".$name."</div>
							</div>
						</div>
					</a>";
				}
			}
		
		?>	
			
		<a name ="sr"></a>	
			</div>
		</div>

	
		<div class ="module"> 
		<a name ="sr"></a>	
			<div class="cont-name">	Самостійні роботи</div>
			<div class='docs'>
			<?php 
				$sql = "SELECT * FROM `docs` WHERE `id_cat` = '2'";
				$result = $mysqli->query($sql);
				while ($row = $result->fetch_object()) {
					$id = $row->id_doc; 
					$name = $row->name; 
					// $row->document, 
					// $$row->id_theam, 
					$id_cat = $row->id_cat;
					if($id_cat =="1"){
						echo "
							<a href = 'document.php?id=".$id."'>
								
								<div class = 'doc-card' id='doc-card' onmouseout='out()'>
									<div class='fo1'>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-5x'></i></span>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-3x'></i></span>
										<div class='name-doc'>".$name."</div>
									</div>
								</div>
							</a>";
					}else if($id_cat =="2"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="4"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="5"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='other' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='other' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}
				}
			
			?>	
	
			</div>
		</div>	
		
		
		<div class ="module"> 

		<a name ="kp"></a>
			<div class="cont-name">Курсовий проект</div>
			<div class='docs'>
			<?php 
				$sql = "SELECT * FROM `docs` WHERE `id_theam` = '5'";
				$result = $mysqli->query($sql);
				while ($row = $result->fetch_object()) {
					$id = $row->id_doc; 
					$name = $row->name; 
					// $row->document, 
					// $$row->id_theam, 
					$id_cat = $row->id_cat;
					if($id_cat =="1"){
						echo "
							<a href = 'document.php?id=".$id."'>
								
								<div class = 'doc-card' id='doc-card' onmouseout='out()'>
									<div class='fo1'>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-5x'></i></span>
										<span><i id ='lb' class = 'fa fa-file-word-o fa-3x'></i></span>
										<div class='name-doc'>".$name."</div>
									</div>
								</div>
							</a>";
					}else if($id_cat =="2"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='sr' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="4"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='lek' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}else if($id_cat =="5"){
						echo "
						<a href = 'document.php?id=".$id."'>
							
							<div class = 'doc-card' id='doc-card' onmouseout='out()'>
								<div class='fo1'>
									<span><i id ='other' class = 'fa fa-file-word-o fa-5x'></i></span>
									<span><i id ='other' class = 'fa fa-file-word-o fa-3x'></i></span>
									<div class='name-doc'>".$name."</div>
								</div>
							</div>
						</a>";
					}
				}
			
			?>	
		
			</div>
		</div>
	</div>
	<div class="left-menu">
		<span>Навігація</span>
		<a href="#html"><div class="row-menu">Модуль 1 HTML</div></a>
		<a href="#css"><div class="row-menu">Модуль 2 CSS</div></a>
		<a href="#js"><div class="row-menu">Модуль 3 JS</div></a>
		<a href="#sr"><div class="row-menu">Самостійні роботи</div></a>
		<a href="#kp"><div class="row-menu">Курсовий проект</div></a>
	</div>
</div>

<!-- <div class="laps"></div> -->
<a name="footer"></a>
<div class="footer">
		<a href="">@МНК з дисципліни Веб-дизайн 2021</a>
		<a href="https://www.instagram.com/yuliia.ananchenko/?hl=ru">Викладач: Ананченко Ю.М</a>
		<a href="https://classroom.google.com/u/0/c/MTQ0NDU1OTgwMDY4">Gogle Classroom</a>
</div>
	<script src="js\anime.min.js">	</script>

	<script>

		var hmove = anime({
			targets: ['img'],
			left: '0px', // -> '250px'
			
			opacity: [0, 1],
			easing: 'easeInOutExpo'
		});
		var h1Move = anime({
			targets: ['.h-headline1',],
			left: '3%', // -> '250px'
			 duration: 1000,
			opacity: [0, 0.8],
			easing: 'easeInOutExpo'
		});

		var h2Move = anime({
			targets: ['.h-headline2'],
			left: '3%', // -> '250px'
			duration: 1000,
			opacity: [0, 1],
			// duration: 1000,
			easing: 'easeInOutExpo'
		});


		var doc_card= document.getElementById('doc-card');
		doc_card.addEventListener("mouseover", function() {
			var a = document.getElementById('one');
			a.style.display = 'block';
			var show = anime({
			targets: ['.check'],
			// top: '-20px', // -> '250px'
			opacity: [0, 1],
			// duration: 1000,
			easing: 'easeInOutExpo'
		});
		});


		function out(){
			var a = document.getElementById('one');
			a.style.display = 'none';
			var show1 = anime({
			targets: ['.check'],
				// top: '20px', // -> '250px'
				opacity: [1, 0],
				easing: 'easeInOutExpo'
		});
		}
	</script>

	
</body>
</html>
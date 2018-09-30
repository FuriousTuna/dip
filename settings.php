<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "utf-8">	
			<link rel="stylesheet" href="reset.css">
			<link rel="stylesheet" href="style3.css">
			<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
		</head>
		<body>
			<header>
				<h1>Scheduler</h1>
				<a href="kab.html">Личный кабинет</a>
				<a href="index.html" class="aa">Выход</a>
			</header>
			<div class="sett">
				<select class="list" name="r">
						<option>Лист 1</option>
						<option>Лист 2</option>
						<option>Лист 3</option>
						<option>Лист 4</option>
				</select>
				<?php
					include "db1.php";
					printf('<form action="set.php" method="POST">');
					$query=$dbh->prepare('SELECT * FROM settings');
					$query->execute();
					$query->setFetchMode(PDO::FETCH_ASSOC);
					while($y=$query->fetch())
						{
							if($y['r2']==0)
							{
							printf('<p><input name="ta[]" type="checkbox" id="%s" value="%s"><label for="%s">%s</label>',$y['val'],$y['val'],$y['val'],$y['name']);
							}
							else {
								printf('<p><input name="ta[]" type="checkbox" id="%s" value="%s" checked><label for="%s">%s</label>',$y['val'],$y['val'],$y['val'],$y['name']);
								}
						}
					printf('<p><input type="submit" class="submit2" value="Сохранить"></p></form>');
				?>
				
				
			</div>
		</body>
	</html>
	
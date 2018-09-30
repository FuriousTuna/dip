<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "utf-8">	
			<link rel="stylesheet" href="reset.css">
			<link rel="stylesheet" href="style3.css">
		</head>
		<body>
			<header>
				<h1>Scheduler</h1>
			</header>
			<div class="w">
				<form action="create_user.php" method="post">
					<p><input placeholder="Имя" name="name" maxlength="20" class="i" required>
					<input placeholder="Отчество" name="otc" maxlength="20" class="i" required></p>
					<p><input placeholder="Фамилия" name="fam" maxlength="25" class="ii" required></p>
					<p><input placeholder="Логин" name="login" maxlength="20" class="i" required>
					<input type="password" placeholder="password" maxlength="20" name="pas" class="i" required></p>
					<p class="f">Дата рождения</p>
					
					<select class="date" name="day" required>
					
						<option>День</option>
						<?php 
						for($i=1;$i<=31;$i++)
						{
							printf('<option>%s</option>',$i);
						}
						?>
					</select>
					<select class="month" name="month" required>
						<option>Месяц</option>
						<option>Январь</option>
						<option>Февраль</option>
						<option>Март</option>
						<option>Апрель</option>
						<option>Май</option>
						<option>Июнь</option>
						<option>Июль</option>
						<option>Август</option>
						<option>Сентябрь</option>
						<option>Октябрь</option>
						<option>Ноябрь</option>
						<option>Декабрь</option>
					</select>
					<select class="year" name="year" required>
						<option>Год</option>
						<?php 
						for($i=1900;$i<=date('Y');$i++)
						{
							printf('<option>%s</option>',$i);
						}
						?>
					</select>
					
					<p><input placeholder="Телефон" name="phone" maxlength="15" class="ii" required></p>
					<p><input placeholder="Почта" name="mail" maxlength="15" class="ii" required></p>
					<p><input placeholder="Место работы" name="work" maxlength="30" class="ii" required></p>
					<!--<p class="f"><input name="f" type="checkbox" value="1" required="required">Согласен на обработку персональных данных-->
					<p><input type="submit" value="Зарегистрироваться" class="submit"></p>
				</form>
			</div>
		</body>
	</html>
	
<?php
require_once '../scripts/view.php';

        $inline_javascript = <<<EOD
$(document).ready(function() {
    $("#signup_form").validate({
        rules: {
            password: {
                minlength: 6
                },
                confirm_password: {
                    minlength: 6,
                    equalTo: "#password"
                }
            },
            messages: {
                password: {
                    minlength: "Пароль должен иметь не менее 6 символов"
                },
                confirm_password: {
                    minlength: "Пароль должен иметь не менее 6 символов",
                    equalTo: "Ваши пароли не совпадают."
                }
            }
        });
    });
EOD;
        page_start("Регистрация пользователя", $inline_javascript);
?>

	<div id="content">
		<h1>Вступайте в наш виртуальный клуб</h1>
		<p>Пожалуйста, введите ниже свои данные для связи в Интернете:</p>
		<form id="signup_form" action="create_user.php" method="POST" enctype="multipart/form-data">
			<fieldset>
			
				<label for="first_name">Имя:</label>
				<input type="text" name="first_name" size="20" class="required"><br>
				<label for="last_name">Фамилия:</label>
				<input type="text" name="last_name" size="20" class="required"><br>
                <label for="username">Имя пользователя:</label>
                <input type="text" name="username" size="20" class="required"><br>
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" size="20" class="required password"><br>

                <div class="password-meter">
                    <div class="password-meter-message"></div>
                    <div class="password-meter-bg">
                        <div class="password-meter-bar"></div>
                    </div>
                </div>
                <br>

                <label for="confirm_password">Подтверждение пароля:</label>
                <input type="password" id="confirm_password" name="confirm_password" size="20" class="required"><br>

				<label for="email">Адрес электронной почты:</label>
				<input type="text" name="email" size="50" class="required email"><br>
				<label for="facebook_url">URL в Facebook:</label>
				<input type="text" name="facebook_url" size="50" class="url"><br>
				<label for="twitter_handle">Идентификатор в Twitter:</label>
				<input type="text" name="twitter_handle" size="20"><br>
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
				<label for="user_pic">Отправка изображения:</label>
				<input type="file" name="user_pic" size="30">
				<label for="bio">Биография:</label>
				<textarea name="bio"  cols="40" rows="10"></textarea>
			</fieldset>
			<br>
			<fieldset class="center">
			<input type="submit" value="Вступить в клуб"><br>
			<input type="reset" value="Очистить и начать все сначала"><br>
			</fieldset>
		</form>
	</div>
	
	<div id="footer"></div>
</body>
</html>
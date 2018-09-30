<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "utf-8">	
			<script type="text/javascript" src="http://yandex.st/jquery/1.6.0/jquery.min.js"></script>
			<script type="text/javascript" src="http://yandex.st/highlightjs/5.15/highlight.min.js"></script>
			<link rel="stylesheet" href="reset.css">
			<link rel="stylesheet" href="style3.css">
			<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
		</head>
		<body>
			<header>
				<h1>Scheduler</h1>
				<a href="kab.html">Личный кабинет</a>
				<a href="index.html" class="aa">Выход</a>
				<p><input placeholder="Поиск" name="search" class="search">
			</header>
			<aside>
				<p><a href="settings.php"><i class="fa fa-cog fa-2x fa-fw" aria-hidden="true"></i></a>
				<p><i class="fa fa-pencil-square-o fa-2x fa-fw" aria-hidden="true" id="new"></i><div id="div3"></div>
				<p><i class="fa fa-bold fa-2x fa-fw" aria-hidden="true" id="bold"></i>
				<p><i class="fa fa-italic fa-2x fa-fw" aria-hidden="true" id="ital"></i>
				<p><i class="fa fa-underline fa-2x fa-fw" aria-hidden="true" id="un"></i>
				<p><i class="fa fa-font fa-2x fa-fw" aria-hidden="true" id="font"></i><div id="div1"></div>
				<p><i class="fa fa-align-left fa-2x fa-fw" aria-hidden="true" id="left"></i>
			</aside>
			<div class="wrapper">
			
			<script>
			
			var u=0;
			
			$(function()	{
				$('table#editable td').dblclick(function()	{
					var val = $(this).html();
					var code = '<input type="text" id="edit" value="'+val+'" />';
					$(this).empty().append(code);
					$('#edit').focus();
					$('#edit').blur(function()	{
						var val = $(this).val();
						$(this).parent().empty().html(val);
					});
				});
				$(window).keydown(function(event){
					if(event.keyCode == 13) {
						$('#edit').blur();
					}
				});
			});
			
			$(function()	{
				$('table#editable td').click(function()	{
					$('table#editable td').css({"background": "white"});
					u=$(this);
					$(this).css({"background": "#d6e5ef"});
				});
				
			});
			
			$(function()	{
				$('#new').click(function()	{
					$("#div3").html('<i class="fa fa-plus-circle"  id="close2" aria-hidden="true" ></i>'+
					'<div class="for2"><form><h2>Новая задача</h2>' +
                        '<input placeholder="Задача" name="task" class="task">'+
					    '<input placeholder="Продолжительность" name="duration" class="task">' +
                        '<input placeholder="Время изменения" name="time" class="task">'+
					    '<input placeholder="Время добавления" name="add" class="task">' +
                        '<input placeholder="Дата начала выполнения" name="start" class="task">'+
					    '<input placeholder="Планиpуемая дата окончания" name="plan" class="task">' +
                        '<input placeholder="Дата выполнения" name="real" class="task">'+
					    '<input placeholder="Статус" name="status" class="task">' +
                        '<input placeholder="Приоритет" name="priority" class="task">'+
					    '<input placeholder="Процент выполнения" name="persent" class="task">' +
                        '<input placeholder="Сложность" name="complic" class="task">'+
					    '<input placeholder="Исполнитель" name="person" class="task">' +
                        '<input placeholder="Комментарий" name="com" class="task">'+
					    '<input type="submit" class="submit4" id="sub1" value="Добавить">' +
                        '</p></form></div>').css({"display": "block"});
					$(function()	{
					$('#close2').click(function()	{
						var div = $("#div3");
						div.hide(); 
						});
					});
					$(function()	{
					$('#sub2').click(function()	{
						var div = $("#div3");
						div.hide(); 
						});
					});
				});
			});
			
			$(function()	{
				$('#bold').click(function()	{
					if($(window.u).css('font-weight')!=700)
					{
						$(window.u).css({"font-weight": "700"});
					}
					else if($(window.u).css('font-weight')==700)
					{
						$(window.u).css({"font-weight": "300"});
					}
				});
			});
			
			$(function()	{
				$('#ital').click(function()	{
					if($(window.u).css('font-style')!=='italic')
					{
						$(window.u).css({"font-style": "italic"});
					}
					else if($(window.u).css('font-style')=='italic')
					{
						$(window.u).css({"font-style": "normal"});
					}
				});
			});
			
			$(function()	{
				$('#un').click(function()	{
					if($(window.u).css('text-decoration')!=='underline')
					{
						$(window.u).css({"text-decoration": "underline"});
					}
					else if($(window.u).css('text-decoration')=='underline')
					{
						$(window.u).css({"text-decoration": "none"});
					}
				});
			});
			
			
			$(function()	{
				$('#font').click(function()	{
						$("#div1").html('<div class="pal"><div class="red" id="col4"></div><div class="darkmagenta" id="col3"></div>'+
						'<div class="blue" id="col2"></div><div class="blue2" id="col5"></div><div class="green" id="col"></div>'+
						'<div class="black" id="col7"></div></div>').css({"display": "block"});
						$(function()	{
							$('#col').click(function()	{
									$(window.u).css({"color": "green"});
									$("#div1").css({"display": "none"});
							});
							$('#col2').click(function()	{
									$(window.u).css({"color": "blue"});
									$("#div1").css({"display": "none"});
							});
							$('#col3').click(function()	{
									$(window.u).css({"color": "darkmagenta"});
									$("#div1").css({"display": "none"});
							});
							$('#col4').click(function()	{
									$(window.u).css({"color": "red"});
									$("#div1").css({"display": "none"});
							});
							$('#col5').click(function()	{
									$(window.u).css({"color": "#039b80"});
									$("#div1").css({"display": "none"});
							});
							$('#col7').click(function()	{
									$(window.u).css({"color": "black"});
									$("#div1").css({"display": "none"});
							});
						});
				});
			});
			
			$(function()	{
				$('#left').click(function()	{
					if($(window.u).css('text-align')!=='left')
					{
						$(window.u).css({"text-align": "left"});
					}
					else if($(window.u).css('text-align')=='left')
					{
						$(window.u).css({"text-align": "center"});
					}
				});
			});
						
			$(function()	{
				$('#stack').click(function()	{
					$("#div2").html('<i class="fa fa-times-circle" id="close" aria-hidden="true" ></i><div class="for"><form>'+
						'<h2>Обратная связь <i class="fa fa-commenting" aria-hidden="true"></i></h2>'+
						'<p><input placeholder="Имя" name="name"  maxlength="15" class="mail"></p>'+
						'<p><input placeholder="Почта" name="mail" maxlength="15" class="mail"></p>'+
						'<p><textarea class="area" name="message" maxlength="200" placeholder="Ваше сообщение"></textarea></p>'+
						'<p><input type="submit" class="submit3" id="sub" value="Отправить"></p></form></div>').css({"display": "block"});
					$(function()	{
					$('#close').click(function()	{
						var div = $("#div2");
						div.hide(); 
						});
					});
				});
			});
			
			
			
			$(function(){
				$(document).mouseup(function (e){ 
				var div = $("#div2"); 
				if (!div.is(e.target) 
					&& div.has(e.target).length === 0) { 
						div.hide(); 
					}
				});
			});
			
			$(function(){
				$(document).mouseup(function (e){ 
				var div = $("#div1"); 
				if (!div.is(e.target) 
					&& div.has(e.target).length === 0) { 
						div.hide(); 
					}
				});
			});
			
			$(function(){
				$(document).mouseup(function (e){ 
				var div = $("#div3"); 
				if (!div.is(e.target) 
					&& div.has(e.target).length === 0) { 
						div.hide(); 
					}
				});
			});
			
			</script>
			<table id="editable" class="index">
			<tr>	
			<?php
				/*include "db1.php";
				$query=$dbh->prepare('SELECT * FROM settings');
				$query->execute();
				$query->setFetchMode(PDO::FETCH_ASSOC);
				while($y=$query->fetch())
					{
						if($y['r2']==1)
						{
							printf('<th>%s</th>',$y['name']);
						}
					}
				*/
			?>
				</tr>
			
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				<tr><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				<td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td><td>Содержимое ячейки</td>
				</tr>
				
			</table>
			<div id="div2"></div>
			</div>
			
			<div class="st">
				<span class="fa-stack fa-lg" id="stack">
					<i class="fa fa-comment fa-stack-2x" aria-hidden="true"></i>
					<i class="fa fa-envelope fa-stack-1x" aria-hidden="true"></i>
				</span>	
			</div>
			
		</body>
	</html>
	
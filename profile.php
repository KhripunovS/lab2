<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body2>

    <header class="header">
			<div class="container">
				<div class="header__inner">
					<div class="header__logo">
						<img src="images/logo.png" alt="">
					</div> 
					
					<nav class="nav">
						<a class="nav__link" href="index.html">О нас</a>
						<a class="nav__link" href="suit.html">Номера</a>
						<a class="nav__link" href="contacts.html">Контакты</a>
						<a class="nav__link" href="bron.html">Забронировать</a>
					</nav>
				</div> 
			</div> 
		
		</header>

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#">Ваш адрес: <?= $_SESSION['user']['email'] ?></a>
        <h4 style="margin: 10px 0;">Ваш номер:  <?= $_SESSION['user']['room'] ?></h4>
        <h5 style="margin: 10px 0;">Дата: <?= $_SESSION['user']['date'] ?></h5>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body2>
</html>
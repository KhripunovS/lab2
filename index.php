<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
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
<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body2>
</html>
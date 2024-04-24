<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="..\img\css\style.css">
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="logo.php" alt="Logo" />
      </div>
      <nav>
        <ul>
          <li><a href="#">О нас</a></li>
          <li><a href="#">Отзывы</a></li>
          <li><a href="#">Товары</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </nav>
      <div class="user">
        <?
        $isLoggedId = false;
        if($isLoggedId) {
            echo "<a href='#'>Личный кабинет</a>";
        }
        else {
            echo "<a href='#'>Войти</a>";
        }
        ?>
      </div>
    </header>
    <div class="banner">
      
    </div>
  </body>
</html>

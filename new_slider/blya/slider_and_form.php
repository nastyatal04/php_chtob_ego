<?require_once("connect.php")?>
<?require_once("functions.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задолбаться можно</title>
    <link rel="stylesheet" href="style_blya.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
<body>
    <form action="" method="get">
      <div class="kontainer">
        <label for="">Имя<input type="text" name="name"/></label>
        <label for="">Email<input type="text" name="email"/></label>
        <label for="">
          Отзыв
          <textarea name="msg" id="" cols="30" rows="10"></textarea>
        </label>
        <div class="checking-div">
            <input type="checkbox" name="check" id="checkbx">
            <label for="subscribe" name="check-label">Subscribe me to the newlettter</label>
        </div>
        <button class="otpravka">Отправить</button>
      </div>
    </form>
    <section>
      <div class="swiper mySwiper container">
        <div class="swiper-wrapper content">
        <?
                $result = mysqli_query($connect, "SELECT * FROM `rewiews` ORDER BY `id` DESC");
                while($row = mysqli_fetch_assoc($result)) {
                    echo  "<div class='swiper-slide card'><div class='card-content'><p><strong>ИМЯ:</strong>".$row['name']."</p><p><strong>EMAIL:</strong>".$row['email']."</p><p><strong>MESSAGE:</strong>".$row['message']."</p></div></div>";
                }
                mysqli_close($connect);
                ?>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="j.js"></script>
</body>
</html>
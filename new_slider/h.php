<?require_once("../connect.php")?>
<?require_once("../functions.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Card Slider HTML CSS | Codehal</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="c.css" />
  </head>
  <body>
  <form action="">
      <div class="kontainer">
        <label for="">Имя<input type="text" /></label>
        <label for="">Email<input type="text" /></label>
        <label for="">
          Отзыв
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </label>
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
          <!-- <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div>
          <div class="swiper-slide card">
            <div class="card-content">
              <p>Имя</p>
              <p>Email</p>
              <p>Отзыв</p>
            </div>
          </div> -->
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

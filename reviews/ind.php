<?require_once("../connect.php")?>
<?require_once("../functions.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
section {
  position: relative;
  height: 100px;
  width: 1075px;
  display: flex;
  align-items: center;
}
.swiper {
  width: 950px;
}
.container {
  border-radius: 20px;
}
.card .image {
  width: 140px;
  height: 140px;
  border-radius: 50%;
}
.card .image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #000;
}
.card {
  position: relative;
  background: white;
  border: 3px solid #0ef;
  border-radius: 20px;
}

.card .card-content {
  position: relative;
  display: flex;
  align-items: center;
  flex-direction: column;
  padding: 30px;
}
.card .social-media {
  position: absolute;
  top: 10px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.card .social-media i {
  color: #fff;
  margin-top: 10px;
  cursor: pointer;
  transition: 0.3s;
}
.card .social-media i:hover {
  color: #0ef;
}
.card .name-profession {
  display: flex;
  align-items: center;
  flex-direction: column;
  margin-top: 10px;
  color: #fff;
}
.name-profession .name {
  font-size: 20px;
  font-weight: 600;
}
.name-profession .profession {
  font-size: 15px;
  font-weight: 500;
}
.card .rating {
  display: flex;
  align-items: center;
  margin-top: 18px;
}
.card .rating i {
  font-size: 18px;
  color: #0ef;
  margin: 0 2px;
}
.card .button {
  display: flex;
  justify-content: space-around;
  width: 110%;
  margin-top: 20px;
}
.card .button button {
  background: #0ef;
  border: none;
  outline: none;
  color: #000;
  font-weight: 600;
  padding: 8px 22px;
  border-radius: 20px;
  font-size: 14px;
  cursor: pointer;
  transition: 0.3s;
}
.card .button button:hover {
  background: #fff;
}
.swiper-pagination-bullet {
  height: 7px;
  width: 26px;
  background: #0ef;
  border-radius: 25px;
}
.swiper-button-next,
.swiper-button-prev {
  color: #0ef;
}

  </style> -->
</head>
<body>
<section>
    <div class="container">
        <div class="row">    
            <form id="algin-form">
                <div class="form-group">
                    <h4>Leave a comment</h4>
                    <label for="message">Message</label>
                    <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style="background-color: white;"></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="fullname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</div>
                </div>
                <div class="form-inline">
                    <input type="checkbox" name="check" id="checkbx">
                    <label for="subscribe" name="check-label">Subscribe me to the newlettter</label>
                </div>
                <div class="form-group">
                    <div id="post" class="btton">Post Comment</div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- <section>
      <div class="swiper mySwiper container">
        <div class="swiper-wrapper content">
                <?
                // $result = mysqli_query($connect, "SELECT * FROM `rewiews` ORDER BY `id` DESC");
                // while($row = mysqli_fetch_assoc($result)) {
                //     echo  "<div class='swiper-slide card'><div class='card-content'><p><strong>ИМЯ:</strong>".$row['name']."</p><p><strong>EMAIL:</strong>".$row['email']."</p><p><strong>MESSAGE:</strong>".$row['message']."</p></div></div>";
                //     // echo "<div class='card-content'>";
                //     // echo "<p><strong>ИМЯ:</strong>".$row['name']."</p>";
                //     // echo "<p><strong>EMAIL:</strong>".$row['email']."</p>";
                //     // echo "<p><strong>MESSAGE:</strong>".$row['message']."</p>";
                //     // echo "</div>";
                // }
                // mysqli_close($connect);
                ?>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  grabCursor: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
    </script> -->
<!-- <div class="slider-container">
      <div class="slider">
        <?
        //   $result = mysqli_query($connect, "SELECT * FROM `rewiews` ORDER BY `id` DESC");
        //   while($row = mysqli_fetch_assoc($result)) {
        //       echo "<div class='reviews'>";
        //       echo "<p><strong>ИМЯ:</strong>".$row['name']."</p>";
        //       echo "<p><strong>EMAIL:</strong>".$row['email']."</p>";
        //       echo "<p><strong>MESSAGE:</strong>".$row['message']."</p>";
        //       echo "</div>";
        //   }
        //   mysqli_close($connect);

          // $result = mysqli_query($connect, "SELECT * FROM `banners`;");
          // if(mysqli_num_rows($result) > 0) {
          //   foreach($result as $image) {
          //     echo '<img
          //     src="'.$image["img"].'"
          //     alt="'.$image["text"].'"
          //   />';
          //   }
          // }
          // else { echo "В БД нет элементов";}
        ?>
      </div>
      <button class="prev-button" aria-label="Посмотреть предыдущий слайд">
        &lt;
      </button>
      <button class="next-button" aria-label="Посмотреть следующий слайд">
        &gt
      </button>
    </div>
    <script src="../slider/scripts.js"></script> -->
<!--<div class="slider">-->
<?
// $result = mysqli_query($connect, "SELECT * FROM `rewiews` ORDER BY `id` DESC");
// while($row = mysqli_fetch_assoc($result)) {
//     echo "<div class='reviews'></div>";
//     echo "<p><strong>ИМЯ:</strong>".$row['name']."</p>";
//     echo "<p><strong>EMAIL:</strong>".$row['email']."</p>";
//     echo "<p><strong>MESSAGE:</strong>".$row['message']."</p>";
// }
// mysqli_close($connect);
?>
<!--</div>-->

</body>
</html>
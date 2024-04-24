<?require_once("connect.php")?>
<head lang="ru">
  <meta charset="UTF-8" />
  <title>Document</title>
  <style>
    .page-title {
      text-align: center;
    }

    .slider-container {
      position: relative;
      width: 600px;
      height: 400px;
      margin: 0 auto;
      overflow: hidden;
    }

    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slider .reviews {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .prev-button,
    .next-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      background-color: transparent;
      border: none;
      font-size: 24px;
      color: white;
    }

    .prev-button {
      left: 10px;
    }

    .next-button {
      right: 10px;
    }
  </style>
</head>
<body>
  <main>
    <div class="slider-container">
      <div class="slider">
        <?
          $result = mysqli_query($connect, "SELECT * FROM `rewiews` ORDER BY `id` DESC");
          while($row = mysqli_fetch_assoc($result)) {
              echo "<div class='reviews'>"
              echo "<p><strong>ИМЯ:</strong>".$row['name']."</p>";
              echo "<p><strong>EMAIL:</strong>".$row['email']."</p>";
              echo "<p><strong>MESSAGE:</strong>".$row['message']."</p>";
              echo "</div>";
          }
          mysqli_close($connect);

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
  </main>

  <script src="scripts.js">
// const slider = document.querySelector(".slider");
// const slides = Array.from(slider.querySelectorAll("img"));
// const slideCount = slides.length;
// //Для самостоятельной анимации
// let currentIndex = 0;
// function nextSlide() {
//   currentIndex = (currentIndex + 1) % slideCount;
//   slider.style.transform = "translateX(" + -currentIndex * 100 + "%)";
// }

// setInterval(nextSlide, 1000);

  </script> 
</body>

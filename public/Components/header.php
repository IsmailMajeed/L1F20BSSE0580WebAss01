<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div style="position:relative">
    <nav onclick="document.getElementById('navbar').classList.add('show')" class="menu">
      <?php
        include('./Icons/Menu.php')
      ?>
    </nav>
    <div id="navbar" class="flex-line navbar">
      <nav onclick="document.getElementById('navbar').classList.remove('show')" class="close-btn">
        <?php
          include('./Icons/Close.php')
        ?>
      </nav>
      <div class="flex-line gap">
        <span class="center">
          <?php
            include('./Icons/Home.php')
          ?>
        </span>
        <a href="/">Home</a>
      </div>
      <div>
        <a href="/FoodAndDrink">Food & drink</a>
      </div>
      <div>
        <a>Home & garden</a>
      </div>
      <div>
        <a href="appliances">Appliances</a>
      </div>
      <div>
        <a>Texhnology</a>
      </div>
      <div>
        <a>Entertainment</a>
      </div>
      <div>
        <a>Toy and nursery</a>
      </div>
      <div>
        <a>Sport & leisure</a>
      </div>
      <div>
        <a>Finance</a>
      </div>
      <div>
        <a>Sale</a>
      </div>
      <div>
        <a href="/more">More</a>
      </div>
    </div>
  </div>
</body>
</html>
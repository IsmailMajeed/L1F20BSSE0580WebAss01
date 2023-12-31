<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div>
    <form>
      <div class="flex-line gap">
        <span>
          Search
        </span>
        <span>
          <input type="text">
        </span>
        <span class="select">
          <input type="text">
          <button type="button">
            <?php 
              include('../public/Icons/Dropdown.php');
            ?>
          </button>
        </span>
        <span class="flex-line goBtn">
          <span class="center rotate">
            <?php
              include('../public/Icons/Dropdown.php')
            ?>
          </span>
          <button type="button">Go</button>
        </span>
      </div>
      <div class="flex-line gap text-sm">
        <div class="flex-line">
          <span class="center rotate">
            <?php 
              include('../public/Icons/Dropdown.php');
            ?>
          </span>
          <span>Help center</span>
        </div>
        <div class="flex-line">
          <span class="center rotate">
            <?php 
              include('../public/Icons/Dropdown.php');
            ?>
          </span>
          <span>Store Locator</span>
        </div>
        <div class="flex-line">
          <span class="center rotate">
            <?php 
              include('../public/Icons/Dropdown.php');
            ?>
          </span>
          <span>My account</span>
        </div>
        <div class="flex-line">
          <span class="center rotate">
            <?php 
              include('../public/Icons/Dropdown.php');
            ?>
          </span>
          <span>Register</span>
        </div>
      </div>
    </form>
    <nav>
      <?php 
        include('../public/Components/header.php')
      ?>
    </nav>
    <div class="container">
      <div class="flex-right">
        <div class="flex-line gap">
          <span>
            <?php include('../public/Icons/Basket.php')?>
          </span>
          <span>
            My basket
          </span>
          <span>0 items</span>
        </div>
        <div class="total">
          <span>Total</span>
          <span>£0.00</span>
        </div>
      </div>
      <div class="cover">
        <img src="{{ asset('Images/CoverImg.png') }}" alt="">
        <div class="itemsContainer">
          <div class="itemContainer">
            <div>
              <h3>Groceries</h3>
              <div>
                <span class="center rotate">
                  <?php
                    include('../public/Icons/Dropdown.php')
                  ?>
                </span>
                <span>Order groceries and have them deliver to you</span>
              </div>
            </div>
            <img src="{{ asset('Images/Item1.png') }}" alt="">
          </div>

          <div class="itemContainer">
            <div>
              <h3>Days</h3>
              <div>
                <span class="center rotate">
                  <?php
                    include('../public/Icons/Dropdown.php')
                  ?>
                </span>
                <span>Making Everyday special with our  festival ideas</span>
              </div>
            </div>
            <img src="{{ asset('Images/Item2.png') }}" alt="">
          </div>

          <div class="itemContainer">
            <div>
              <h3>Sainsbury's Bank</h3>
              <div>
                <span class="center rotate">
                  <?php
                    include('../public/Icons/Dropdown.php')
                  ?>
                </span>
                <span>Two Credit Card offers, which one would you choose</span>
              </div>
            </div>
            <img src="{{ asset('Images/Item3.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div>
      <?php 
        include('../public/Components/Footer.php')
      ?>
    </div>
  </div>
</body>
</html>
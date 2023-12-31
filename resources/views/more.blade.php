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

    <div>
      More Page
    </div>

    <div>
      <?php 
        include('../public/Components/Footer.php')
      ?>
    </div>
  </div>
</body>
</html>
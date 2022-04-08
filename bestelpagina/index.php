<?php
// DIT IS DE HOMEPAGINA
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Document</title>
    <link rel="stylesheet" href="Assets/css/style.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav>
      <ul>
        <li>
          <p>Hallo, <?php echo $_SESSION['user_name']; ?>
          </p>
        </li>
        <li>
          <a class="active" href="../Overzichtspagina/index.php">Home</a>
        </li>
        <li><a href="#">Over ons</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Winkelwagen</a></li>
        <li><a href="../logout.php">Uitloggen</a></li>
      </ul>
      <img class="logo" src="assets/img/logo.png" alt="" />
    </nav>

    <!-- Overzicht artikelen -->
    <div class="container">
      <div class="overzichtfloat">
        <!-- Dropdown -->
        <div class="aantal">
          <div class="dropdown">
            <img src="./Assets/img/sneaker.png" alt="" />
            <span>Aantal</span>
            <select name="aantal">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
            <div class="bestelknop">
              <button>
                <a href="../Factuurpagina/verstuur.php">Bestellen</a>
              </button>
            </div>
          </div>
          <p>
            <span>NIKE AIR JORDAN 1 PATENT BRED SNEAKERS, <br />
              ROOD - ZWART</span>
            <br />
            Een kleurencombinatie die al meer dan 35 jaar wordt geassocieerd met
            His Airness, de Air Jordan 1 Black and Red, maakt dit seizoen een
            comeback en hij straalt als nooit te voren. Hij dankt zijn
            beroemdheid aan zijn status als 'verboden' schoen en de majestueuze
            sprongen die MJ ermee maakte tijdens de Dunk Contest in 1985. Het
            lakleer geeft deze editie van één van MJ's meest legendarische looks
            iets luxueus.
          </p>
        </div>
        <!-- Totaalprijs -->
        <div class="totaalprijs">
          <span>totaalprijs</span>
          <p>
            <br />
            Subtotaal - € 119,95<br /><br />
            Verzending - € 0,00<br /><br />
            Totaalprijs (inclusief btw) - € 119,95<br /><br />
          </p>
        </div>
      </div>

      <!-- Verwachtte leverdatum -->
      <div class="leverdatum">
        <p>
          <span>Verwachte leveringstermijn</span><br />
          Morgen tussen 18:00 en 19:00
        </p>
      </div>
      <!-- Betaalmethoden -->
      <div class="betaalmethoden">
        <img src="./Assets/img/betaalmethodes.jpg" alt="" />
      </div>
    </div>
    <!-- Footer -->
    <div class="copyright">
      Copyright ©2022 All rights reserved | Julian van Husen
    </div>
  </body>

  </html>

<?php
} else {
  header("Location: ../index.php");
  exit();
}
?>
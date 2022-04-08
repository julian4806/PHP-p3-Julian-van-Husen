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
        <li><a class="active" href="../Overzichtspagina/index.php">Home</a></li>
        <li><a href="#">Over ons</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Winkelwagen</a></li>
        <li><a href="../logout.php">Uitloggen</a></li>
      </ul>
      <img class="logo" src="assets/img/logo.png" alt="" />
    </nav>

    <!-- Productoverzicht -->
    <div class="container-productoverzicht">
      <div class="container">
        <input type="radio" name="image" id="one" checked />
        <input type="radio" name="image" id="two" />
        <input type="radio" name="image" id="three" />
        <input type="radio" name="image" id="four" />
        <div class="display-image"></div>
      </div>

      <div class="bestelinfo">
        <!-- Producttitel -->
        <div class="producttitel">
          NIKE AIR JORDAN 1 PATENT BRED SNEAKERS<br />ROOD - ZWART
        </div>
        <!-- Prijs -->
        <div class="prijs">€149.95</div>

        <hr />
        <!-- Maat -->
        <div class="maat">
          <span>Maat</span>
          <select name="land" id="land">
            <option>32</option>
            <option>33</option>
            <option>34</option>
            <option>35</option>
            <option>36</option>
            <option>37</option>
            <option>38</option>
            <option>39</option>
            <option>40</option>
          </select>
        </div>
        <!-- Bestelknop -->
        <div class="bestelknop">
          <button><a href="../Bestelpagina/index.php">Bestellen</a></button>
        </div>
        <!-- Levertijd -->
        <div class="levertijd">
          1-4 werkdagen - <span>Gratis</span> <br />
          Standaard levering
        </div>
      </div>

      <!-- Productinformatie -->
      <div class="productinformatie">
        <span>NIKE AIR JORDAN 1 PATENT BRED SNEAKERS, ROOD - ZWART</span>

        <p>
          Een kleurencombinatie die al meer dan 35 jaar wordt geassocieerd met
          His Airness, de Air Jordan 1 Black and Red, maakt dit seizoen een
          comeback en hij straalt als nooit te voren. <br />

          Hij dankt zijn beroemdheid aan zijn status als 'verboden' schoen en de
          majestueuze sprongen die MJ ermee maakte tijdens de Dunk Contest in
          1985. <br />

          Het lakleer geeft deze editie van één van MJ's meest legendarische
          looks iets luxueus.
        </p>
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
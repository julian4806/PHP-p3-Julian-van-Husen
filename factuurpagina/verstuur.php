<script src="script.js" defer></script>

<body>
  <?php

  if (isset($_POST['verstuur'])) {
    echo "Bedankt voor uw bestelling " . $_POST['voornaam'] . " " . $_POST['tussenvoegsel'] . " " . $_POST['achternaam'] . "!" . '<br>';


    echo "Bedankt dat u voor ons heeft gekozen." . "<br>";
    echo "We sturen uw bestelling zo spoedig mogelijk naar de " . $_POST['straatnaam'] . " " . $_POST['huisnummer'] . " in " . $_POST['plaats'] . "." . "<br>" . "<br>";

    echo "<b>" . "U keert over 10 seconden weer terug naar de homepagina" . "</b>"  .  "<br>";
  }
  ?>

  <progress value="0" max="10" id="progressbar"></progress>

  <form action="" method="POST">

    <p>Voornaam: <input type="text" name="voornaam" value="" required></p>
    <p>Tussenvoegsel: <input type="text" name="tussenvoegsel" value=""></p>
    <p>Achternaam: <input type="text" name="achternaam" value="" required></p>
    <p>E-mailadres: <input type="email" name="emailadres" value="" required></p>
    <p>Plaats: <input type="text" name="plaats" value="" required></p>
    <p>Straatnaam: <input type="text" name="straatnaam" value="" required></p>
    <p>Huisnummer: <input type="text" name="huisnummer" value="" required></p>
    <p>Postcode: <input type="text" name="postcode" value="" required></p>

    <input type="submit" name="verstuur" id="submit" value="betalen" onclick="submit">
  </form>

  <br>
  <div>
    <button><a style="color: black;" href="../Bestelpagina/index.php">Keer terug naar de bestelpagina</a></button>
  </div>
</body>

<!-- 

<form action="./verstuur.php" method="post">
    <input type="submit" name="button1" class="button" value="Bestellen"/>
</form>

 -->
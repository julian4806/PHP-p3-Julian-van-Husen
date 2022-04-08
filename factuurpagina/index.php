<?php
// DIT IS DE HOMEPAGINA
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betaalpagina</title>
</head>

<body>
    <form action="./verstuur.php" method="POST">

        <p>Voornaam: <input type="text" name="voornaam" value="" required></p>
        <p>Tussenvoegsel: <input type="text" name="tussenvoegsel" value=""></p>
        <p>Achternaam: <input type="text" name="achternaam" value="" required></p>
        <p>E-mailadres: <input type="email" name="emailadres" value="" required></p>
        <p>Plaats: <input type="text" name="plaats" value="" required></p>
        <p>Straatnaam: <input type="text" name="straatnaam" value="" required></p>
        <p>Postcode: <input type="text" name="postcode" value="" required></p>
        <p>Huisnummer: <input type="text" name="huisnummer" value="" required></p>

        <input type="submit" name="verstuur" value="betalen">
    </form><br>
    <div class="bestelknop">
        <button><a style="color: black;" href="../Bestelpagina/index.php">Keer terug naar de bestelpagina</a></button>
    </div>
</body>
</body>

</html>

<?php
} else {
  header("Location: ../index.php");
  exit();
}
?>
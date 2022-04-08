<?php
// DIT IS DE HOMEPAGINA
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    require_once("../db_conn.php");
    $query = " SELECT * FROM `products` ";
    $result = mysqli_query($conn, $query);

    
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <!-- Navbar -->
        <nav>
            <ul>
                <li>
                    <p>Hallo, <?php echo $_SESSION['user_name']; ?>
                    </p>
                </li>
                <li><a class="adminpage" href="../adminpagina/index.php">👨‍💼</a></li>
                <li><a class="active" href="../Overzichtspagina/index.php">Home</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Winkelwagen</a></li>
                <li><a href="../logout.php">Uitloggen</a></li>
            </ul>
            <img class="logo" src="assets/img/logo.png" alt="">
        </nav>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="wrapper">
                <div class="sidebar">
                    <h2>Merken</h2>
                    <ul>
                        <li><a href="#">Jordan</a></li>
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">BOSS</a></li>
                        <li><a href="#">Calvin Klein</a></li>
                        <li><a href="#">ECCO</a></li>
                        <li><a href="#">Iceberg</a></li>
                    </ul>
                </div>
            </div>

            <!-- Productenoverzicht -->
            <?php
            echo "<main>";

            while ($row = mysqli_fetch_array($result)) {
                echo "

                <figure>
                    <img src='../productbeheer/images/" . $row['image'] . "' > <br />
                    
                        <span>" . $row['title'] . "</span>
                        <p>
                            " . $row['description'] . "
                        </p>
                </figure>
                
                ";
            }


            echo "</main>"
            ?>

            <!-- Footer -->
            <div class="copyright">
                Copyright ©2022 All rights reserved | Julian van Husen
                <a href="../productpagina/index.php"></a>
            </div>
    </body>

    </html>

<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>
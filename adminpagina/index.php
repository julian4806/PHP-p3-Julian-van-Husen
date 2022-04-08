<!-- https://www.youtube.com/watch?v=zz_2DMmcjZU -->

<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table {
                border: 2px solid;
            }

            table td {
                border: 1px solid;
            }
        </style>
    </head>

    <body>

        <table>
            <tr>
                <td><a href="./view.php"> Manage all users </a></td>
            </tr>
            <tr>
                <td> <a href="../productbeheer/view.php"> Manage all products </a></td>
            </tr>
        </table>
        <table>
            <br><br>
            <tr>
                <td> <a href="../overzichtspagina/index.php"> Back to the Homepage </a></td>
            </tr>
            <tr>
                <td> <a href=" ../logout.php"> Sign Out </a></td>
            </tr>
        </table>



    </body>

    </html>


<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>
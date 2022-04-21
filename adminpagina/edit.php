<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



    require_once("../db_conn.php");
    $UserID = $_GET['GetID'];
    $query = " SELECT * FROM `users` WHERE id='" . $UserID . "'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $UserID = $row['id'];
        $UserName = $row['user_name'];
        $UserEmail = $row['email'];
        // $UserPassword = $row['password'];
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h3> Update Form in PHP </h3>
                        </div>
                        <div class="card-body">
                            <form action="update.php?ID=<?php echo  $UserID ?>" method="POST">
                                <input type="text" class="form-control" placeholder=" Username " name="username" value="<?php echo $UserName ?>" >
                                <input type="email" class="form-control" placeholder=" Email " name="email" value="<?php echo $UserEmail ?>">
                                <!-- <input type="text" class="form-control" placeholder=" Password " name="password" value="<?php //echo $UserPassword ?>"> -->
                                <button name="update">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>

    </body>

    </html>


<?php
} else {
    header("Location: index.php");
    exit();
}
?>
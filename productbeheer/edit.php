<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // Ensures Connection


    require_once("../db_conn.php");
    $ProductID = $_GET['GetID'];
    $query = " SELECT * FROM `products` WHERE id='" . $ProductID . "'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $ProductID = $row['id'];
        $ProductTitle = $row['title'];
        $ProductImage = $row['image'];
        $ProductDescription = $row['description'];
        // $UserPassword = $row['password'];
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <h3> Update Products </h3>
                        </div>
                        <div class="card-body">
                            <form action="update.php?ID=<?php echo  $ProductID ?>" method="POST" enctype="multipart/form-data">
                                <input type="text" placeholder=" Product Title " name="title" value="<?php echo $ProductTitle ?>">
                                <input type="file" placeholder=" Product Image " name="image" value="<?php echo $ProductImage ?>">
                                <textarea type="text" placeholder=" Product Description " name="description" ><?php echo $ProductDescription ?></textarea>
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
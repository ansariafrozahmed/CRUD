<?php
// $alert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'database/db_connect.php';
    $id = $_GET['updateid'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];

    if ($name) {
        // INSERT INTO `crud` (`id`, `name`, `email`, `number`, `time`) VALUES ('1', 'afroz', 'afroz@gmail.com', '7208820113', current_timestamp());
        // $sql = "INSERT INTO `crud` (`name`, `email`, `number`,`time`) VALUES ('$name', '$email', '$number', current_timestamp())";

        $sql = "UPDATE `crud` SET `name` = '$name', `email` = '$email', `number` = '$number' WHERE `crud`.`id` = $id;";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            header('location:index.php');
            
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php 
    include 'includes/header.php' 
    ?>
    <!-- ------------- -->

    <div class="container w-25 my-5">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Enter Your Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Enter Your Number</label>
                <input type="number" class="form-control" name="number" id="number">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- ----------------- -->
    <?php
    // include 'includes/footer.php' 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
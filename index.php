<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php' ?>
    <!-- ------------- -->
    <div class="container">
        <table class=" table ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Creation Time</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'database/db_connect.php';

                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $number = $row['number'];
                        $time = $row['time'];

                        echo '
                            <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $number . '</td>
                            <td>' . $time . '</td>
                            <td>
                            <button type="button" class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-decoration-none text-light">Update</a></button>
                            <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-light">Delete</a></button>
                            </td>
                            </tr>
                        ';
                    }
                }

                ?>

            </tbody>
        </table>

    </div>
    <!-- ----------------- -->
    <?php
    // include 'includes/footer.php' 
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php

require '../api/connection.php';

$id = $_GET["id"];

$query = "SELECT id, name, address FROM employee WHERE id='$id'";

$sql = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | Employee Manager</title>
</head>
<body>
    <h1>Edit Data</h1>
    <br><br><br>
    <form action="../api/edit.php" method="post">
        id      : <input type="text" name="id" value="<?php echo $data["id"] ?>">
        <br>
        name    : <input type="text" name="name" value="<?php echo $data["name"] ?>">
        <br>
        address : <input type="text" name="address" value="<?php echo $data["address"] ?>">
        <br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>
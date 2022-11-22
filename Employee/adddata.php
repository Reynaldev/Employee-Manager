<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h1>Add Data</h1>
    <br><br><br>
    <form action="../api/add.php" method="post">
        Name    : <input type="text" name="name">
        <br>
        Address : <input type="text" name="address">
        <br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
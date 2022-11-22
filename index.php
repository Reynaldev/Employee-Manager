<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>
</head>
<body>
    <h1>Employee Manager</h1>

    <a href="/Employee/adddata.php"><input type="submit" value="Add Employee"></a>

    <?php 
    include 'api/connection.php';

    $query = "SELECT * FROM employee";

    $data = mysqli_query($conn, $query);
    
    echo "<table border='1'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Address</th>";
            echo "<th>Action</th>";
        echo "</tr>";

        while($row = mysqli_fetch_assoc($data)) {
            echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["address"]."</td>";

                echo "<td>";
                    echo "<a href='Employee/editdata.php?id=".$row["id"]."'>Edit</a>";
                    echo " | ";
                    echo "<a href='api/delete.php?id=".$row["id"]."'>Delete</a>";
                echo "</td>";
            echo "</tr>";
        }

    echo "</table>";
    
    ?>
</body>
</html>
<?php

require 'connection.php';

$name = $_POST["name"];
$address = $_POST["address"];

$query = "INSERT INTO employee(name, address) VALUES('$name', '$address')";

$insert_db = mysqli_query($conn, $query);

if (!$insert_db) {
    # code...
    ?>

    <script>
        alert("Failed to add data");
        window.location.replace("/");
    </script>

    <?php

    return;
}

?>

<script>
    alert("Data added succesfully");
    window.location.replace("/");
</script>
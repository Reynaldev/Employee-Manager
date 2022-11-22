<?php

require 'connection.php';

$id = $_POST["id"];
$name = $_POST["name"];
$address = $_POST["address"];

$query = "UPDATE employee SET name='$name', address='$address' WHERE id='$id'";

$update_db = mysqli_query($conn, $query);

if (!$update_db) {
    # code...
    ?>

    <script>
        alert("Failed to update data");
        window.location.replace("/");
    </script>

    <?php

    return;
}

?>

<script>
    alert("Data updated succesfully");
    window.location.replace("/");
</script>
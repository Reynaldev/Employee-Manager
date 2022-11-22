<?php

require 'connection.php';

$id = $_GET["id"];

$query = "DELETE FROM employee WHERE id='$id'";

$delete_db = mysqli_query($conn, $query);

if (!$delete_db) {
    # code...
    ?>

    <script>
        alert("Failed to delete data");
        window.location.replace("/");
    </script>

    <?php

    return;
}

?>

<script>
    alert("Data deleted succesfully");
    window.location.replace("/");
</script>
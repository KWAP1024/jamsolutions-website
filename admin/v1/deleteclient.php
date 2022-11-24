<?php
require("../../database/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM client WHERE id='$id'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header("location: client.php");
    } else {
        echo "Sorry can't delete client";
    }
}
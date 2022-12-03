<?php
if (isset($_POST['go'])) {
    $name = $_POST['name'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "client/";
    $photo = str_replace(" ","-",$file);

    $adduser = "INSERT INTO client (name,photo) VALUES('$name','$photo');";

    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $photo);
        echo "Client Uploaded Successfully";
    } else {
        echo "Failed To Upload Client";
    }
}

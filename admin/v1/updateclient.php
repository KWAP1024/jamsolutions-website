<?php
if (isset($_POST['go'])) {
    $name = $_POST['name'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "client/";
    $photo = str_replace(" ", "-", $file);

    $query = "UPDATE client SET name='$name', photo='$photo' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        move_uploaded_file($path, $folder . $photo);
        echo "Client Updated Successfully";
    } else {
        echo "Failed To Update Client";
    }
}

<?php
if (isset($_POST['go'])) {
    $bighead = $_POST['bighead'];
    $smallhead = $_POST['smallhead'];
    $category = $_POST['category'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "project/";
    $photo = str_replace(" ", "-", $file);

    $query = "UPDATE project SET smallhead='$smallhead',bighead='$bighead',category='$category', photo='$photo' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        move_uploaded_file($path, $folder . $photo);
        echo "Project Updated Successfully";
    } else {
        echo "Failed To Update Project";
    }
}

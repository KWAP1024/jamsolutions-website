<?php
if (isset($_POST['go'])) {
    $bighead = $_POST['bighead'];
    $smallhead = $_POST['smallhead'];
    $category = $_POST['category'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "project/";
    $photo = str_replace(" ","-",$file);

    $adduser = "INSERT INTO project (bighead,smallhead,photo,category) VALUES('$bighead','$smallhead','$photo','$category');";

    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $photo);
        echo "Project Photo Uploaded Successfully";
    } else {
        echo "Failed To Upload Project Photo";
    }
}

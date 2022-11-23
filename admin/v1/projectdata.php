<?php
if (isset($_POST['go'])) {
    $bighead = $_POST['bighead'];
    $smallhead = $_POST['smallhead'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "project/";
    $photo = str_replace(" ","-",$file);

    $adduser = "INSERT INTO project (bighead,smallhead,photo) VALUES('$bighead','$smallhead','$photo');";

    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $photo);
        echo "Project Photo Uploaded Successfully";
    } else {
        echo "Failed To Upload Project Photo";
    }
}

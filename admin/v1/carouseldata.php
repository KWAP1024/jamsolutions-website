<?php
if (isset($_POST['go'])) {
    $bigtext = $_POST['bigtext'];
    $explaintext = $_POST['explaintext'];
    // $photo = $_POST['photo'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "carousel/";
    $photo = str_replace(" ","-",$file);

    $adduser = "INSERT INTO carousel (bigtext,explaintext,photo) VALUES('$bigtext','$explaintext','$photo');";

    $query = mysqli_query($conn, $adduser);

    if ($query) {
        move_uploaded_file($path, $folder . $photo);
        echo "Photo Uploaded Successfully";
    } else {
        echo "Failed To Upload Photo";
    }
}

<?php
if (isset($_POST['go'])) {
    $bigtext = $_POST['bigtext'];
    $explaintext = $_POST['explaintext'];
    $photo = $_POST['photo'];

    $adduser = "INSERT INTO carousel (bigtext,explaintext,photo) VALUES('$bigtext','$explaintext','$photo');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        echo "Photo Uploaded Successfully";
    } else {
        echo "Failed To Upload Photo";
    }
}

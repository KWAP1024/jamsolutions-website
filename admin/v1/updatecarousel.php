<?php
if (isset($_POST['go'])) {
    $bigtext = $_POST['bigtext'];
    $explaintext = $_POST['explaintext'];

    $file = $_FILES["photo"]["name"];
    $path = $_FILES['photo']['tmp_name'];
    $folder = "carousel/";
    $photo = str_replace(" ", "-", $file);

    $query = "UPDATE carousel SET bigtext='$bigtext', explaintext='$explaintext', photo='$photo' WHERE id ='$id' ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        move_uploaded_file($path, $folder . $photo);
        echo "Carousel Updated Successfully";
    } else {
        echo "Failed To Update Carousel";
    }
}

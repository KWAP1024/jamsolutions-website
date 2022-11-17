<?php
include('../../database/connect.php');

$query = "SELECT * FROM carousel";
$result = mysqli_query($conn, $query);

$fo = 1;
while ($ret = mysqli_fetch_array($result)) {
    $bigtext = $ret['bigtext'];
    $explaintext = $ret['explaintext'];
    $photo = $ret['photo'];
    // }


    echo "ID = ".$fo++."<br>";
    echo "Big Text = " . $bigtext . "<br>";
    echo "Explain Text = " . $explaintext . "<br>";
    echo "The Photo = " . $photo . "<br>";
?>
    <br>
<?php
}
?>
<?php
include 'header.php';
?>
<h1>view page</h1>
<div class="view-container">
    <?php
    $name=mysqli_real_escape_string($conn, $_GET['name']);
    $opentime = mysqli_real_escape_string($conn, $_GET['opentime']);
$sql = "SELECT * FROM view WHERE name='$name' AND opentime='$opentime'";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);
if ($queryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='view-box'>
                    <h3>".$row['id']."</h3>
                    <p>".$row['name']."</p>
                    <p>".$row['description']."</p>
                    <p>".$row['tel']."</p>
                    <p>".$row['address']."</p>
                    <p>".$row['zipcode']."</p>
                    <p>".$row['opentime']."</p>
                    <p>".$row['px']."</p>
                    <p>".$row['py']."</p>
                </div>";
    }
}

?>

</div>
</body>
</html>
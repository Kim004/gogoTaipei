<?php
include 'header.php';
?>
<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>
<h1>Front page</h1>
<h2>所有景點</h2>

<div class="view-container">
    <?php
        $sql="SELECT * FROM view";
        $result=mysqli_query($conn,$sql);
        $queryResults=mysqli_num_rows($result);
        if($queryResults>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<div class='view-box'>
                    <h3>".$row["id"]."</h3>
                    <p>".$row["name"]."</p>
                    <p>".$row["description"]."</p>
                    <p>".$row["tel"]."</p>
                    <p>".$row["address"]."</p>
                    <p>".$row["zipcode"]."</p>
                    <p>".$row["opentime"]."</p>
                    <p>".$row["px"]."</p>
                    <p>".$row["py"]."</p>
                </div>";
            }
        }


?>

</div>
</body>
</html>
<?php
include 'header.php';
?>
<h1>Search page</h1>
<div class="view-container">
    <?php
    if(isset($_POST['submit-search'])){
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql="SELECT * FROM  view WHERE id LIKE '%$search%' OR name LIKE  '%$search%' OR description LIKE '%$search%' OR tel LIKE '%$search%' OR address LIKE '%$search%' OR zipcode LIKE '%$search%' OR opentime LIKE '%$search%' OR px LIKE '%$search%' OR py LIKE '%$search%'";
        $result=mysqli_query($conn,$sql);
        $queryResults=mysqli_num_rows($result);
        echo "共有".$queryResults."個結果!";
        if($queryResults>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<a href='view.php?name=".$row['name']."&opentime=".$row['opentime']."'><div class='view-box'>
                    <h3>".$row['id']."</h3>
                    <p>".$row['name']."</p>
                    <p>".$row['description']."</p>
                    <p>".$row['tel']."</p>
                    <p>".$row['address']."</p>
                    <p>".$row['zipcode']."</p>
                    <p>".$row['opentime']."</p>
                    <p>".$row['px']."</p>
                    <p>".$row['py']."</p>
                </div></a>";

            }
        }else{
            echo "There are no results matching your search";
        }
    }

?>
    </div>
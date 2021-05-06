<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php 
$q="SELECT * FROM `places` WHERE city LIKE '%".$_GET["query"]."%' OR place LIKE '%".$_GET["query"]."%';";
$count="SELECT COUNT(*) FROM `places` WHERE city LIKE '%".$_GET["query"]."%' OR place LIKE '%".$_GET["query"]."%';";
$result = mysqli_query($conn , $q) or die (mysqli_error($conn));
$count_result = mysqli_query($conn , $count) or die (mysqli_error($conn));

    while ($row = mysqli_fetch_array($result)) {
        echo "<br>";
        // printf("city: %s\n place:%s \n :%s: \n", $row['city'],$row['place'], $row['image']);
               
        $image = $row['image'];
        $description = $row['description'];
        $city=$row['city'];
        $place=$row['place'];
  
?>
<div>
  Total Search results are:
  <p><?php echo mysqli_fetch_array($count_result)[0] ?></p>
</div>
<div class="card" style="background-color:pink; width: 28rem; display:flow-root; margin:auto;">
<p class="card-text"><b>City Name: </b><?php echo$city ?></p>
    <p class="card-text"><b>Place: </b><?php echo$place ?></p>
     <img class="card-img-top" style="margin-left:12.5%;" height="200" Width="200" src=<?php echo $image; ?> alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><b>Description: </b><br><?php echo$description ?></p>
   
  </div>
</div>
<?php
}
?>

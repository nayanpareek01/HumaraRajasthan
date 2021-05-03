<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php 
$q="SELECT * FROM `places` WHERE city LIKE '%".$_GET["query"]."%' OR place LIKE '%".$_GET["query"]."%';";
$result = mysqli_query($conn , $q) or die (mysqli_error($conn));

    while ($row = mysqli_fetch_array($result)) {
        echo "<br>";
        // printf("city: %s\n place:%s \n :%s: \n", $row['city'],$row['place'], $row['image']);
        $image = $row['image'];
        $description = $row['description'];
    }
?>


<div class="card" style="width: 28rem; display:flow-root; margin:auto;">
  <img class="card-img-top" height="100" Width="100" src=<?php echo $image; ?> alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><?php echo$description ?></p>
  </div>
</div>
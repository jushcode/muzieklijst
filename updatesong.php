<!-- Fetch Data -->
<?php
//Add config
include 'config.php';

$id=$_GET['id']; // GET the 'id' from url

$result=mysqli_query($conn,"SELECT* from songs Where id=$id"); 

// Query for fetching
while($res=mysqli_fetch_assoc($result)){
  $artist=$res['artist'];
  $title=$res['title'];
}

?>
<form class="" action="" method="post">
  Artist <input type="artist" name="artist" value="<?php echo $artist; ?>">
  Title <input type="title" name="title" value="<?php echo $title; ?>">
  <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
  <input type="submit" name="update" value="Wijzigen">
  <input type="submit" name="delete" value="Verwijder">
</form>
<a href="index.php">Ga terug</a>

<!-- Update Function -->
<?php
if(isset($_POST['update'])){
  $id=$_POST['id'];
  $artist=$_POST['artist'];
  $title=$_POST['title'];

  $result=mysqli_query($conn, "UPDATE songs SET artist='$artist',title='$title' Where id=$id");
  if($result){
    header("location:index.php");
  }
  else{
    echo "Niet gelukt om te wijzigen";
  }
}
 ?>

<!-- Delete Function -->
 <?php
if(isset($_POST['delete'])){
  $result=mysqli_query($conn, "DELETE from songs Where id=$id");
  if($result){
    header("location:index.php");
  }
  else{
    echo "Niet gelukt om te verwijderen";
  }
}
  ?>

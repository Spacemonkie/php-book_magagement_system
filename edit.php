<?php include("db.php"); 
$id=$_GET['id'];
$get=mysqli_query($conn,"select * from books where id=$id");
$data=mysqli_fetch_assoc($get);
?>

<html>
<head><title>Edit Book</title></head>
<body>
<h2>Edit Book</h2>

<form method="post">
Book Name: <input type="text" name="bname" value="<?php echo $data['book_name']; ?>"><br><br>
Author: <input type="number" name="bauthor" value="<?php echo $data['bauthor']; ?>"><br><br>
Year of Publication: <input type="date" name="bdate" value="<?php echo $data['year']; ?>"><br><br>
Genre: <input type="text" name="bgenre" value="<?php echo $data['genre']; ?>"><br><br>
Pages: <input type="text" name="bpages" value="<?php echo $data['pages']; ?>"><br><br>
<input type="submit" name="update" value="Update Show">
</form>

<?php
if(isset($_POST['update'])){
  $m=$_POST['bname'];
  $s=$_POST['bauthor'];
  $st=$_POST['bdate'];
  $et=$_POST['bgenre'];
  $sd=$_POST['bpages'];

  $q=$conn->prepare("update books set book_name=?,author=?,genre=?,publication=?,pages=? where id=?");
  $q->bind_param("sisssi",$m,$s,$st,$et,$sd,$id);
  if($q->execute()){
    echo "Book updated.<br>";
  }else{
    echo "Update failed.";
  }
}
?>
<br>
<a href="index.php">Back</a>
</body>
</html>

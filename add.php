<?php include("db.php"); ?>
<html>
<head><title>Add Book</title></head>
<body>
<h2>RD & Sons Library</h2>

<form method="post">
Book Name: <input type="text" name="bname" required><br><br>
Author: <input type="text" name="bauthor" required><br><br>
Year of Publication: <input type="date" name="bdate" required><br><br>
Genre: <input type="text" name="bgenre" required><br><br>
Pages: <input type="number" name="bpages" required><br><br>
<input type="submit" name="add" value="Add Book">
</form>

<?php
if(isset($_POST['add'])){
  $m=$_POST['bname'];
  $s=$_POST['bauthor'];
  $st=$_POST['bdate'];
  $et=$_POST['bgenre'];
  $sd=$_POST['bpages'];

  $q=$conn->prepare("insert into books(book_name,author,publication,genre,pages) values(?,?,?,?,?)");
  $q->bind_param("sisss",$m,$s,$st,$et,$sd);
  if($q->execute()){
    echo "Book added successfully<br>";
  }else{
    echo "Error adding book";
  }
}
?>
<br>
<a href="index.php">Back to Home</a>
</body>
</html>

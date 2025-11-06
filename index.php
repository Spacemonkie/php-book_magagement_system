<?php include("db.php"); ?>
<html>
<head>
<title>RD & Sons Library</title>
</head>
<body>
<h2>RD & Sons Library List</h2>
<a href="add.php">Add New Book</a><br><br>

<table border="1" cellpadding="6">
<tr>
<th>B_ID</th>
<th>Book</th>
<th>Author</th>
<th>Publication Date</th>
<th>Genre</th>
<th>Page Count</th>
<th>Actions</th>
</tr>

<?php
$sql="select * from books order by genre,publication";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
  while($r=mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>".$r['b_id']."</td>";
    echo "<td>".$r['book_name']."</td>";
    echo "<td>".$r['author']."</td>";
    echo "<td>".$r['publication']."</td>";
    echo "<td>".$r['genre']."</td>";
    echo "<td>".$r['pages']."</td>";
    echo "<td><a href='edit.php?id=".$r['id']."'>Edit</a> | <a href='delete.php?id=".$r['id']."' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";
    echo "</tr>";
  }
}else{
  echo "<tr><td colspan='7'>No books yet</td></tr>";
}
?>
</table>

</body>
</html>

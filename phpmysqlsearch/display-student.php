<?php
include("conn.php");

$param="";
$name="";
$marks="";
if(isset($_GET['search']))
{
	$name=$_GET['name'];
	$marks=$_GET['marks'];
		
	$param=" where stu_name='$name' or marks='$marks'";	
}
?>
<html>
<body>
<form action="" method="get">
<p>
	<label>Name : </label>
	<input type="text" name="name" value="<?php echo $name; ?>" />
</p>
<p>
	<label>Marks : </label>
	<input type="text" name="marks" value="<?php echo $marks; ?>" />
</p>
<p>
	<input type="submit" name="search" value="search" />
</p>
</form>
<table border="1" width="600">
<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Marks</th>
	<th>City</th>
</tr>
<?php
$sql="select students.id,students.stu_name,students.marks,cities.city_name from students inner join cities on students.city_id=cities.id".$param;
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{
	
?>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['stu_name']; ?></td>
	<td><?php echo $row['marks']; ?></td>
	<td><?php echo $row['city_name']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
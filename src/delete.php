<?php
$conn=mysqli_connect("mariadb","root","ezcommit");
mysqli_select_db($conn,"infoii");
$int_stud=$_REQUEST['int_stud'];
$query="DELETE FROM infodb WHERE id='$int_stud'";
$checkresult = mysqli_query($conn,$query);
if ($checkresult) {
echo "Stergere efectuata";
} else {
echo "Stergere neefectuata";
}

$sql="SELECT * FROM infodb";
	$afisare=mysqli_query($conn,$sql);
echo "<table border=2>";
echo "<tr>
	<td>int_stud</td>
	<td>stud</td>
	<td>sala</td>
	<td>datan</td>
	<td>nota_BD</td>
	<td>nota_SO</td>
	<td>nota_DAW</td>
</tr>";
while ($row=mysqli_fetch_row($afisare)) {
echo "<tr>
    <td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	<td>$row[6]</td>
</tr>";
}
echo "</table>";

?>

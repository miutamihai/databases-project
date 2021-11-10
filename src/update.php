<?php
$conn=mysqli_connect("mariadb","root","ezcommit");
mysqli_select_db($conn,"infoii");

$id_stud=$_REQUEST['int_stud'];
$numen=$_REQUEST['numen'];
$notabd=$_REQUEST['notabd'];
$query="UPDATE infodb SET stud='$numen',nota_db='$notabd' WHERE id='$id_stud'";
$checkresult = mysqli_query($conn,$query);
if ($checkresult) {
echo "Modificare efectuata";
} else {
echo "Modificare neefectuata";
}
//mysql_close();
$sql="SELECT * FROM infodb";
        	$afisare=mysqli_query($conn,$sql);
echo "<table border=2>";
echo "<tr>
        	<td>id_stud</td>
        	<td>Stud</td>
        	<td>sala</td>
        	<td>Data nasterii</td>
        	<td>notabd</td>
        	<td>notaso</td>
        	<td>notadaw</td>
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

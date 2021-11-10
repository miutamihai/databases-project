<?php

$conn=mysqli_connect("mariadb","root","ezcommit");
if (mysqli_ping($conn)) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", mysqli_error($conn));
}
mysqli_select_db($conn,"infoii");

$stud=$_POST['stud'];
$sala=$_POST['sala'];
$datan=$_POST['datan'];
$nota_db=$_POST['nota_BD'];
$nota_so=$_POST['nota_SO'];
$nota_daw=$_POST['nota_DAW'];
$query="INSERT INTO infodb(stud,sala,datan,nota_db,nota_so,nota_daw) VALUES('${stud}','${sala}','${datan}','${nota_db}','${nota_so}','${nota_daw}')";

if (!mysqli_query($conn,$query)) {
die(mysqli_error($conn));
} else {
printf("Datele au fost introduse\n");
}

$sql="SELECT * FROM infodb";
	$afisare=mysqli_query($conn,$sql);
echo "<table border=2>";
echo "<tr>
	<td>int_stud</td>
	<td>stud</td>
	<td>sala</td>
	<td>datan</td>
	<td>nota_DB</td>
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

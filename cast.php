<?php
$db =mysqli_connect("localhost", "root", "","username");
$a=$_POST["cast"];
$b=$_POST["gen"];
$sql="SELECT * FROM register where cast ='$a' and Gender='$b'";
$res = mysqli_query($db,$sql,);
echo "<table border=3>";
echo "<tr><th>Name</th><th>Dob</th><th>Height</th><th>Mothertongue</th><th>Gender</th><th>Cast</th><th>Relilgion</th><th>State</th><th>City</th><th>Pincode</th><th>Qulification</th><th>Occupation</th><th>sector</th><th>annualincome</th><th>Familymember</th><th>Mobileno</th></tr>";
for ($i=0;$i<mysqli_num_rows($res);$i++)
{
$row=mysqli_fetch_row($res);
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td><td>$row[14]</td><td>$row[15]</td><td>$row[16]</td></tr>";
}
echo "</table>";	
mysqli_close($db);
?>
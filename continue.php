<HTML>
<BODY BGCOLOR="VIOLET">
<center>
<?php
$db = mysqli_connect("localhost", "root", "", "username");
$a=$_POST["a"];
$b=$_POST["b"];
$sql ="insert into password  values('$a',$b)";
$res=mysqli_query($db,$sql);
mysqli_close($db);
echo "YOU ACCOUNT CREATE SUCCESSFUL!....<br>";
echo "<form name=frm action='http://localhost/html/project.html'><input type='submit' value='LOGIN'></form>";
?>
</center>
</BODY>
</HTML>
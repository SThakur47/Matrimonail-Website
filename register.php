<?php
$db =mysqli_connect("localhost", "root", "","username");
$a=$_POST["reg"];
$b=$_POST["name"];
$c=$_POST["dob"];
$d=$_POST["height"];
$e=$_POST["lang"];
$f=$_POST["gen"];
$g=$_POST["cas"];
$h=$_POST["reli"];
$i=$_POST["state"];
$j=$_POST["city"];
$k=$_POST["pin"];
$l=$_POST["quli"];
$m=$_POST["occup"];
$n=$_POST["sec"];
$o=$_POST["inco"];
$p=$_POST["mem"];
$q=$_POST["num"];
$sql="insert into register values($a,'$b','$c',$d,'$e','$f','$g','$h','$i','$j',$k,'$l','$m','$n',$o,$p,$q)";
$res=mysqli_query($db,$sql);
echo "<table><tr><th><img src='http://localhost/html/image.jpg'></th>";
echo "<th width='500' bgcolor='orange'><font face ='algerian' color='blue'>YOUR DETAIL's IS SUCCESSFUL REGISTER!......</font></th></tr></table><hr>";
echo "<center><font face ='algerian' size='5' colo='red'>your registration id:-$a</font></center>";
echo "<font algin ='bottom' face='arial black'><marquee direction='right' bgcolor='orange'>THANKYOU TO VISIT IT!...........</marquee></font>";
echo "<center><form name=frm action='http://localhost/satish.php'><input type='submit' value='NEXT'></form></center>";
mysqli_close($db);
?>
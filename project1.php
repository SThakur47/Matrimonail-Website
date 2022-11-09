<?php
$db =mysqli_connect("localhost", "root", "","username");
$n=$_POST["a"];
$p=$_POST["b"];
$sql ="SELECT * FROM password where username='$n' and Password='$p'";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res)>=1)
{
echo "<center><marquee direction='right' bgcolor='#07f338'><FONT SIZE='28' face='algerian'>WELCOME TO MATRIMONIAL.COM</font></marquee></center>";
echo "<table><tr><th><img src='http://localhost/html/download.jpg'></th><th width='78000' bgcolor='#ff01a6'><font face='algerian' size='5'><font color='red'>R<font color='green'>E<font color='pink'>G<font color='blue'>I<font color='#f91506'>S<font color='skyblue'>T<font color='orange'>R<font color='brown'>A<font color='red'>T<font color='green'>I<font color='green'>O<font color='green'>N</font> <font color='red'>f<font color='orange'>o<font color='#f91506'>r<font color='blue'>m<form name=frm method=POST action='http://localhost/html/save.html'><br><input type='submit' value='LOGIN'></form></th><th><img src='http://localhost/html/photo.jpg'></th></tr></table><hr>";
echo "<font align='right'><center><font size='5' face='algerian'><u>MATCHED BY MATRMONIAL.COM</u></font></center><table boder='4'><tr><th><IMG SRC='http://localhost/html/js.jpg'></th><th><img src='http://localhost/html/js2.jpg'></th><th><img src='http://localhost/html/js3.jpg'></th><th><img src='http://localhost/html/down.jpg'></th><th width='12345' bgcolor='yellow'><font face='algerian'>search With Your Choice<br>
<form name=frm method=POST action='http://localhost/satish.php'>Regid:<input type='text' name='a' value=''><br><input type='submit' value='search'></form></th></tr>";
echo"<tr><td>Shipra weds Rajesh</td><td>Ruchi weds Rahul</td><td>Geetanjali weds Rahul</td><td>Rani weds sunil</td></tr></table></font><hr color='blue'>";
echo "<footer>DEVELOP BY:- satish<br>Mobile no.=8628091822<br>E.mail-satish8628091822@gmail.com<br>at solution,baijnath<br>(under mr. sunil sir)</footer>";
}
else 
{
echo "<center><font face='arial black' color='red'>Sorry You are not valid user</font></center>";
}
mysqli_close($db);
?>
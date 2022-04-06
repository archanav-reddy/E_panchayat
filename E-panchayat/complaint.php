<html>
<body> 
<title>COMPLAINT INVOICE</title>
<?php
$host="Complaint invoice";
$username="root";
$password="";
$db_name="panchayat";
$table="epanchayat";
$con=mysqli_connect("$host", "$username", "$password",
$db_name);
if(!$con)
{
die("cannot connect");
}
$name=$_POST['name'];
$adhn=$_POST['adhn'];
$addr=$_POST['addr'];
$phno=$_POST['phno'];
$emailid=$_POST['emailid'];
$comp=$_POST['comp'];
$sql="INSERT INTO $table(name, adhn, addr, phno, emailid,
comp) VALUES('$name',
'$adhn', '$addr', '$phno', '$emailid', '$comp')";
$result=mysqli_query($con,$sql);
mysqli_close($con);
?>
<script>
function conf(){
var ask=window.confirm("Do you want to register thiscomplaint?");

if(ask){
window.alert("YOUR COMPLAINT IS SUCCESSFULLY COLLECTED");
window.location.href="complaint.html";
}
}
</script>
<h2 align=center> COMPLAINT DETAILS</h2><br>
<h2>
<p align=center>
<table cellspacing=20>
<form>
<tr><td>Name: <td><?php echo $_POST["name"]; ?></tr>
<tr><td>Aadhar number:<td><?php echo $_POST["aadhn"];?></tr>
<tr><td>Address: <td><?php echo $_POST["addr"]; ?></tr>
<tr><td>Contact number:<td><?php echo $_POST["phno"];?></tr>
<tr><td>E-mail id: <td><?php echo $_POST["emailid"]; ?></tr>
<tr><td>Complaints Registered: <td>
<?php echo $_POST["comp"]; ?></tr>
</table>
<br><br>
<input type="button" onclick="conf()" value="PLACE YOUR
COMPLAINT"/>
</form>
</p></h2>
</body> 
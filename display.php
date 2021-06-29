<?php
$con=new mysqli("localhost","root","","patient_db");
if(!$con)
{
	echo "database error";
}
else
{
if(isset($_POST['s']))
{
	$p=($_POST['pname']);
	$a=($_POST['ad']);
	$d=($_POST['dname']);
	$ad=($_POST['adate']);
	$r=($_POST['rno']);
	$q="INSERT INTO ptable(pname,address,dname,adate,rno) VALUES ('$p','$ad','$d','$ad','$r')";
	if($con->query($q)==TRUE)
	{
		echo"inserted successfully";
	}
	else
	{
		echo"can't insert";
	}
}
if(isset($_POST['d']))
{
	$sq="SELECT * FROM ptable";
	$result=$con->query($sq);
	echo"<center>";
	echo"<table border='1'>";
	echo"<tr><th>Patient Name</th><th>Doctor's Name</th><th>Room no</th></tr>";
	while($row=$result->fetch_assoc())
	{
		echo"<tr><td>".$row['pname']."</td><td>".$row['dname']."</td><td>".$row['rno']."</td></tr>";
	}
	echo"</table></center>";
}
}
$con->close();
?>

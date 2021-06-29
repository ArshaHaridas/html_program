<?php
$c=new mysqli("localhost","root","");
if(!$c)
{
	die("error database creation".$c->connect_error);
}
$con="CREATE DATABASE patient_db";
if($c->query($con)==TRUE)
{
	echo"database created\n";
}
else
{
	echo"error";
}
$c2=new mysqli("localhost","root","","patient_db");
$t="CREATE TABLE ptable(pname varchar(50) not null,address Varchar(50),dname varchar(50) not null,seatno int,adate date,rno varchar(100))";
if($c2->query($t)==TRUE)
{
	echo"\nTable created";
}
$c->close();
?>
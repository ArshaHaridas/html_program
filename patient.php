<html>
<title>HOSPITAL IN-PATIENT MANAGEMENT SYSTEM</title>
<head>
	<style>
		h4{
			font-family:algerian;
			text-align:center;
		}
		body
		{
			align-content:center;
		}
		table{
			text-align:center;
			margin:50px;
			padding:100px;
			background-color:lightgreen;
		}
		input
		{
			width:100%;
		}
	</style>

</head>
<body>
	<form action="display.php" method="POST" name="regform">
		<center>
		<table border="1">
			<h4>PATIENT REGISTRATION FORM</h4>
			<tr>
				<td>Patient Name</td>
				<td><input type="text" name="pname" id="pname" required/></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="ad" required/></textarea>
			</tr>
			<tr>
				<td>Doctor's Name</td>
				<td><input type="text" name="dname" id="dname" required/></td>
			</tr>
			<tr>
				<td>Admission date</td>
				<td><input type="date" name="adate" id="adate" min="2020-01-01" max="2021-12-31"></td>
			</tr>
			<tr>
				<td>Room no</td>
				<td><input type="text" name="rno" id="rno"></td>
			</tr>
			<tr>
				<td><input type='submit' value="submit" id="s" name="s" onclick="validate()"></td>
				<td><input type='submit' value="Display" id="d" name="d"></td>
			</tr>
		</table>
	</center>
	</form>

<script>
		function validate()
		{
			var pname=document.getElementById("pname");
			var rno=document.getElementById("rno");
			var name=/^[A-Z a-z]+$/;
		
			if(pname.value=="")
			{
				window.alert("enter valid name");
			}
			if(!(pname.value.match(name)))
			{
				window.alert("enter valid name");
			}
			if(rno.value=="")
			{
				window.alert("enter valid no");	
		
			}
			if(isNaN(rno.value))
			{
				window.alert("enter valid seatno");
			}
		
		}
	</script>			
</body>
</html>
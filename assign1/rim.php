<html>
<body bgcolor="orange">
<form>
<fieldset>
<legend align="center">PERSONAL INFO</legend>
<center>

 <?php
	echo  "Name : ", $_POST["n1"]."  ". $_POST["l1"];
	echo "<br>";
	echo  "DOB : ", $_POST["d1"];
	echo "<br>";
	echo  "Gender : ", $_POST["g1"];
	echo "<br>";
    $sem = (isset($_POST['sem']) ? $_POST['sem']: null);
	print("Semester: ".$sem[0]);
	echo "<br>";
	$brn = (isset($_POST['brn']) ? $_POST['brn']: null);
	print("Branch: ".$brn[0]);
	echo "<br>";
	echo "Address : ", $_POST["a1"];
	echo "<br>";
	echo "Contact no.  : ", $_POST["m1"];
	echo "<br>";
	echo "Email-ID : ",  $_POST["e1"];
	echo "<br>";
	$blg = (isset($_POST['blg']) ? $_POST['blg']: null);
	print("Blood Group: ".$blg[0]);

 ?>
 </center>
 </fieldset>
 </form>
 </body>
 </html>
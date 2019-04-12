<?php
	include 'db.php';
	if (isset($_POST['submit'])) {
		$a=$_POST['name'];
		$b=$_POST['email'];
		$c=$_POST['pass1'];
	}

	<script language="javascript" type="text/javascript">
    function Validate() {
    	
        var p = document.getElementByName("pass1").value;
        var c = document.getElementByName("pass2").value;
        if ( p!= c) {
            alert("Passwords do not match.");
            return false;
        }
        location.href='index2.php';
        return true;
    }
	$que="insert into frn(name, email, password) values('$a','$b','$c')";
	$result=mysql_query($que) or die("mysql_error($con)");
	if($result)
	{
		echo "<script>alert('Data inserted successfully');</script>";
		echo "<script>location.href='1.php';</script>";
		}
	else
	{
		echo "<script>alert('Error in data insertion');</script>";
	}


?>	
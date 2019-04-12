<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>
		firstpage
	</title>
	<style>
	.box input[type="button"]
{
	border: 0;
	background:none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 40px;
	outline: none;
	color:white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}
.box input[type="button"]:focus
{
	background: #2ecc71;
}
</style>
</head>
<body>
	<form class="box" action="index2.php" method="POST">
		<h1>Registration form</h1>
		<input type="text" name="name" placeholder="Enter your name" />
		<input type="text" name="email" placeholder="Enter your Email" />
		<input type="password" name="pass1" placeholder="Create password" />
		<input type="password" name="pass2" placeholder="Confirm password" />
		<input type="submit" name ="submit" value="submit" />
	</form>
</script>
</body>
</html>
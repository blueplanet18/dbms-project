<?php
error_reporting(E_ALL ^ E_WARNING);
$db=mysqli_connect('localhost','root','') or die("could not connect to database");

mysqli_select_db($db,'onlinecourier');

$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['password']);

$query=mysqli_query($db,"select * from clogin where email='$email' and password='$password'");

$result=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	body{
		background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)), url(../img/ppp.jpg);
	    background-size:  100% 100%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	.head{
		font-size: 2.5em;
		font-family: "times new roman",serif;
		font-variant: small-caps;
		color: black;
		text-decoration: overline;
		text-align: center;
		text-shadow: 4px 2px white;
	}
	.container p{
		margin-left: 45%;
		font-size: 3.5em;
		text-shadow: 6px 4px white;
		font-variant: small-caps;
	}
	@media only screen and (min-width: 700px){
	 a h1{
		font-family: "lucida handwriting";
		font-weight: 900;
		font-size: 3em;
		color:white;
		padding: 0.2% 0.4% 0.2% 3%;
		float: left;
		margin: 0;
		display: inline-block;
		background-image: linear-gradient(to right,rgba(112,128,144,1),rgba(112,128,144,0));
		text-align: left;
    }

	}
	a h1{

		font-family: "lucida handwriting";
		font-weight: 900;
		text-shadow: 4px 2px #000000;
		font-size: 3em;
		display: inline-block;
		color:#002A53;
		padding: 0.2% 0.4% 0.2% 3%;
	    margin: 0;
		background-image: linear-gradient(to right,rgba(112,128,144,1),rgba(112,128,144,0));
		float: left;
		
	}
    button a{
		float: right;
		color: black;
		font-family: "times new roman",serif;
		font-weight: bold;
		font-size: 1.5em;
		color: white;
	}
    button{
		float: right;
		margin-top:1.3em;
		margin-right: 2em;
		background-color: black;
	}
	button a:hover{
		background-color: white;
		color: black;
		text-decoration: none;
	}
	
	.navbar {
		margin-top: 1.5em;
		text-align: center;
		font-size: 1.8em;

	}
	ul li{
		margin: 0.5em;
		font-family: "times new roman",serif;
		font-weight: bold;
		background:linear-gradient(grey,20%,white);
		width: 86vw;

	}
	li a{
		color: black;
	}
	li a:hover{
		background-color: black;
		color: white;
		text-decoration: none;

	}
	
</style>
<body>
	<button ><a href="customer.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
	 <a href="X.php" target="_blank"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></a>
<div class="container" style="float: left; margin-top: 2em;">
	<p style="font-weight: bolder; font-family:'times new roman'; font-size: 3.7em;">Welcome!!!  <?php echo $result['name']; ?></p>

	<div class="navbar">
			<ul  style="list-style: none;">
				
			<li><a href="ship.php?a=<?php echo $result['userID'];?>">Ship Parcel</a></li>
			<li><a href="">Shippment History</a></li>
			<li><a href="">Suggestions</a></li>
		</ul>
			
		</div>
</div>

</body>
</html>
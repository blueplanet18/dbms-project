<?php
error_reporting(E_ALL ^ E_WARNING);
$db=mysqli_connect("localhost","root","","onlinecourier") or die("could not connect to database");
$sql="select * from suggest";
$query=mysqli_query($db,$sql);
$result=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Suggestions</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<style type="text/css">
	body{
		background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.8)), url(../img/ppp.jpg);
	    background-size:  100% 100%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	@media only screen and (min-width: 700px){
	 .heading h1{
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
	.heading h1{

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
	h2{
			font-size: 2.5em;
			color: #580000; text-shadow: 4px 2px white;
			font-variant: small-caps;
			font-family: "times new roman",serif;
			font-weight: bold;
			text-decoration: underline;
			text-align: center;

		}
		.container{
			padding-top: 10em;
		}
		table tr,th,td{
		padding:0.3em;
	}
	th h2{
			font-size: 2.5em;
			color: #580000; text-shadow: 4px 2px white;
			font-variant: small-caps;
			font-family: "times new roman",serif;
			font-weight: bold;
			text-decoration: underline;
			text-align: center;

		}
		tr th,td{
			padding: 0.2em;
			height: 50px;
		}
		tr td{
			font-size: 1em;
			font-weight: 600;
		}
		td
		{
			text-align: center;
		}
	</style>

<body>
	<button ><a href="manager.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
	 <div class="heading"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></div>
	 <div class="container">
	 	<table align="center" border="1px" style="width: 1000px; line-height: 30px; border: 3px solid black; background-color: white; ">
			<tr>
				<th colspan="2" style="height: 70px;" ><h2>Customers Suggestion</h2></th>
			</tr>
			<tr>
				<th style="font-size: 1.7em; color: #580000; text-shadow: 4px 2px white; text-align: center;">UserID</th>
				<th style="font-size: 1.7em; color: #580000; text-shadow: 4px 2px white; text-align: center;">Suggestion</th>
				

			</tr>

				<tr>
			
					<td><?php echo $result['userID'];?></td>
	                <td><?php echo $result['text'];?></td>
	               

	            </tr>

		</table>

	 </div>


</body>
</html>
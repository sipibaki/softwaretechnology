<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Give your suggestion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="index" class="container">
        <div class="col-md-12">

			Test:<br>
			Suggestion: <?php echo $_POST["suggestion"]; ?><br>

			<?php
			   $mood = $_POST['mood'];

			   foreach ($mood as $mood=>$value) 
				{
					echo "Mood : ".$value."<br />";
				}
				
				$servername = "localhost";
				$username = "username";
				$password = "";

				// Create connection
				$conn = new mysqli($servername, $username, $password);

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully";
				
				
			?>

			<h1 class="text-center">Thank you for giving us your suggestion!</h1>
			
			<form role="form" action="index.html" method="get">
				<button type="submit" class="btn btn-default">Ok</button>
			</form>
	    </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html> 
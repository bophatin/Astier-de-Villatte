<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/pro.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<title>Home Page - Astier de Villatte</title>
</head>

<body>
    <?php include("headerView.php"); ?>

    <div id="form">
		<div class="background-form">
			<form method="post" action="pro.php?page=log">
			    <label for="username">NAME</label>
                <input type="text" id="username" name="username" class="pseudo-log"/>
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password" class="mdp-log"/>
                <input type="submit" id="submit" value="CONNEXION" class ="button"/>
			</form> 
			<div id="resultat" class="error-msg"></div>
		</div>
	</div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="public/js/ajax.js"></script>
</body>

</html>


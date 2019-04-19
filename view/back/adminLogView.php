<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/admin.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Back Office</title>
</head>

<body>
	<div id="wrapper-log">

        <div class="left-container-log">
            <h1>Admin</h1>
            <img src="public/img/logo.png">
        </div>
        
        <div class="right-container-log">
            <div id="form">
                <form method="post">
                    <label for="username">NON D'UTILISATEUR</label>
                    <input type="text" name="username" id="pseudo-log"/>
                    <label for="password">MOT DE PASSE</label>
                    <input type="password" name="password" id="mdp-log"/>
                    <input type="submit" name="submit" value="CONNEXION" class ="button"/>
                 </form> 
                 <div class="error-msg"><?= (isset($error)) ? $error : '' ?></div>
            </div>
        </div>
    </div>

    <footer></footer>
</body>

</html>

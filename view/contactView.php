<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/contact.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Contact - Astier de Villatte</title>
</head>

<body>
    <div class="img_back"><img src="public/img/contact.jpg"></div>

    <div id="wrapper-form">
        <div class="container-form">
            <div class="bloc-left-form">
                <a href="index.php"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="bloc-right-form">
                <div class="container-txt-right">
                    <h1>Tell us everything,</h1>
                    <div id="form_contact">
                        <form action="index.php?page=action" id="contact" method="POST">
                        <div class="container-flex">
                            <div class="left">
                                <div class="p_form">
                                    <label for="nom" class="nom">Nom</label>
                                    <br/><input id="nom" name="nom" type="text" class="input_bottom">
                                    <br/><span id="msg_nom"></span>
                                </div>
                                <div class="p_form">
                                    <label for="sujet" class="sujet">Sujet</label>
                                    <br/><input id="sujet" name="sujet" type="text" class="input_bottom">
                                    <br/><span id="msg_sujet"></span>
                                </div>
                                <div class="p_form">
                                    <label for="email" class="email">Email</label>
                                    <br/><input id="email" name="email" type="email">
                                    <br/><span id="msg_email"></span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="p_form">
                                    <label for="message" class="message">Message</label>
                                    <br/><textarea id="message" name="message" cols="53"></textarea>
                                    <br/><span id="msg_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="butt">
                            <input type="submit" name ="submit" value="Envoyer" class="button"/>
                        </div>
                        </form>
                        <span id="msg_all"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="public/js/ajax.js"></script>
</body>



</html>
$(document).ready(function() {

    $("#submit").click(function(e) {
        e.preventDefault();

        $.post(
            'pro.php?page=log', { 
                username : $('#username').val(),
                password : $('#password').val()
            },
            function(data) {
                if(data == 'Success'){
                    $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                }
                else {
                    $("#resultat").html("<p>Mauvais identifiants !</p>");
                }
            },
            'text'
        );
    });

    $("#sendemail").click(function(e) {
        e.preventDefault();

        $.post(
            'index.php', {
                email : $('#email').val(),
            },
            function(data) {
                if(data == 'Success') {
                    $("#response").html("<p>Nous avoons bien enregistré votre email !</p>");
                } else {
                    $("#response").html("<p>Cette adresse mail est invalide !</p>");
                } 
            },
            'text'
        );
    });


});

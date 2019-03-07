$(document).ready(function() {

    /*$("#submit").click(function(e) {
        e.preventDefault();

        $.post(
            'pro.php', { 
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

    $("#submit").click(function(){
        $.ajax({
           url : 'pro.php',
           type : 'POST',
           dataType : 'text',
           success : function(text, statut){
                $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
           },
           error : function(text, statut, erreur){
                $("#resultat").html("<p>Mauvais identifiants !</p>");
           }
        });
    });*/

   $("#sendemail").click(function(e) {
        e.preventDefault();

        $.post(
            'index.php', {
                email : $('#email').val(),
            },
            function(data) {
                if(data == 'Success') {
                    $("#response").html("<p>Nous avons bien enregistré votre email !</p>");
                } else {
                    $("#response").html("<p>Cette adresse mail est invalide !</p>");
                } 
            },
            'text'
        );
    });
});

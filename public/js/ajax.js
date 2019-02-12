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
                    $("#resultat").html("<p>Identifiants incorrects</p>");
                }
            },
            'text'
        );
    });

});
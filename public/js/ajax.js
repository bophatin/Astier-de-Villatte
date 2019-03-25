$(document).ready(function() {

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

    $("#contact").submit(function(e) {

        e.preventDefault();

        var nom  = $("#nom").val();
        var sujet = $("#sujet").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var dataString = {'nom': nom, 'sujet': sujet, 'email': email, 'message': message};
        var msg_all = "Merci de remplir tous les champs";
        var msg_alert = "Merci de remplir ce champs";

        if (dataString  == "") {
            $("#msg_all").html(msg_all);
         } else if (nom == "") {
            $("#msg_nom").html(msg_alert);
        } else if (sujet == "") {
            $("#msg_sujet").html(msg_alert);
        } else if (email == "") {
            $("#msg_email").html(msg_alert);
        } else if (message == "") {
            $("#msg_message").html(msg_alert);
        } else {
            $.ajax({
                type : "POST",
                url: $(this).attr("action"),
                data: dataString,
                success : function() {
                    $("#contact").html("<p>Formulaire bien envoyé</p>");
                },
                error: function() {
                    $("#contact").html("<p>Erreur d'appel, le formulaire ne peut pas fonctionner</p>");
                }
            });
        }
        return false;
    });
   
});

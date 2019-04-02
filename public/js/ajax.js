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
        var msg_nom = "Merci de remplir votre nom";
        var msg_sujet = "Merci de remplir le sujet";
        var msg_email = "Merci de remplir votre email";
        var msg_msg = "Merci de remplir le message";

        if (dataString  == "") {
            $("#msg_all").html(msg_all);
         } else if (nom == "") {
            $("#msg_nom").html(msg_nom);
        } else if (sujet == "") {
            $("#msg_sujet").html(msg_sujet);
        } else if (email == "") {
            $("#msg_email").html(msg_email);
        } else if (message == "") {
            $("#msg_message").html(msg_msg);
        } else {
            $.ajax({
                type : "POST",
                url: "index.php?page=contact", /*$(this).attr("action")*/
                data: dataString,
                success : function() {
                    $("#contact").html("<p>Votre message a bien été envoyé !</p>");
                },
                error: function() {
                    $("#contact").html("<p>Une erreur est survenue, le formulaire ne peut pas être envoyé !</p>");
                }
            });
        }
        return false;
    });
   
});

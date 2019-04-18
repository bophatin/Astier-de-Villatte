$(document).ready(function() {

    $("#newsletter").submit(function(e) {
        e.preventDefault();

        var email = $("#email").val();
        var submit = $("#sendemail").val();
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regex = re.test(String(email).toLowerCase());
        var dataString = {'email': email, 'sendemail': submit};
        var msg_error = "Merci de remplir votre email";
        var msg_error_1 = "Cette adresse mail est invalide !";

        if (email == "") {
            $("#response_error").html(msg_error);
        } else if (!regex) {
            $("#response_error").html(msg_error_1);
        } else {
            $.ajax({
                type : "POST",
                url : "index.php?page=action",
                data : dataString,
                success : function() {
                    $("#response_ok").html("<p>Nous avons bien enregistré votre email !</p>");
                },
                error : function() {
                    $("#response_error").html("<p>Cette adresse mail dysfonctionne</p>");
                }
            });
        }
        return false;
    });

    $("#contact").submit(function(e) {
        e.preventDefault();

        var nom  = $("#nom").val();
        var sujet = $("#sujet").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var submit = $("#btn_submit").val();
        var dataString = {'nom': nom, 'sujet': sujet, 'email': email, 'message': message, 'submit': submit};
        var msg_all = "Merci de remplir tous les champs";
        var msg_nom = "Merci de remplir votre nom";
        var msg_sujet = "Merci de remplir le sujet";
        var msg_email = "Merci de remplir votre email";
        var msg_msg = "Merci de remplir le message";

        /* rajouter if else, if else  au lieu de else if else if */
        /* mettre un <p> en display none et ecrire si le champs est vide faire apparaitre le p, s'il est rempli le cacher */

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
                url: "index.php?page=contact",
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

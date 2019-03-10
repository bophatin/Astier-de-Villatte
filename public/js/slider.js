
var Slider = {

    init : function() {
        slide = $("#carrousel .slide"); 
        indexSlide = slide.length -1; 
        i = 0; // initialiser un compteur
        currentSlide = slide.eq(i); // cible l'image courante, qui possède l'index i (0 pour l'instant)
        /*slide.css("display", "none");
        currentSlide.css("display", "block");*/

        var self = this;

        $("#button-next").click(function() {
            self.next();
        });

        $("#button-previous").click(function() {
            self.previous();
        });

        $(document).keydown(function(e) { 
            var appui = e.keyCode; 
            if(appui == 37){ 
                self.previous();
            }
            else if(appui == 39) { 
                self.next();
            }
        });

        slide.css("display", "none");
        slide.first().css("display", "block");
    },

    next : function() {
        i++; 
        if (i <= indexSlide) {
            slide.css("display", "none"); 
            currentSlide = slide.eq(i); 
            currentSlide.css("display", "block"); 
        } 
        else {
            i = indexSlide;
        }
    },

    previous : function() {
        i--; 
        if (i >= 0) {
            slide.css("display", "none"); 
            currentSlide = slide.eq(i); 
            currentSlide.css("display", "block"); 
        } 
        else {
            i = 0;
        }
    }, 

}
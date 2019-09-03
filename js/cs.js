$( document ).ready(function() {
    $('#aff').affix({
   offset: {
     top: 110,
     bottom: function () {
       return (this.bottom = $('.footer').outerHeight(true))
     }
   }
 });
 });
 
 $(window).scroll(function() {
     var height = $(window).scrollTop();
     if (height > 100) {
         $('#btt').fadeIn();
     } else {
         $('#btt').fadeOut();
     }
 });
 $(document).ready(function() {
     $("#back2Top").click(function(event) {
         event.preventDefault();
         $("html, body").animate({ scrollTop: 0 }, "slow");
         return false;
     });
 
 });
$(document).ready(function(){
   $('.next-right').on('click', function(){
      var currentImg = $('.active');
      var nextImg = currentImg.next();
       
       if(nextImg.length){
           nextImg.removeClass('w3-animate-left')
           nextImg.removeClass('w3-animate-right')
           currentImg.removeClass('w3-animate-right');
           currentImg.removeClass('w3-animate-left');
           
           currentImg.removeClass('active').css('z-index', -10);
           currentImg.addClass('w3-animate-left');
           
           nextImg.addClass('active').css('z-index',10);
           nextImg.addClass('w3-animate-right')
       }
   }); 
    
  $('.prev-left').on('click', function(){
      var currentImg = $('.active');
      var prevImg = currentImg.prev();
    
       if(prevImg.length){
           currentImg.removeClass('w3-animate-right');
           currentImg.removeClass('w3-animate-left');
           prevImg.removeClass('w3-animate-left');
           prevImg.removeClass('w3-animate-right');
           
           currentImg.addClass('w3-animate-right');
           currentImg.removeClass('active').css('z-index', -10);
        
           prevImg.addClass('active').css('z-index',10);
           prevImg.addClass('w3-animate-left');
       }
   });     
});
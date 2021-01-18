(function(){
  
    var alerta = document.getElementById('alerta');
  
    var timer= setTimeout(function(){
    alerta.style.display="none";
    },3000);
  })();



  
$(window).on('scroll', function(){
    
    if($(window).scrollTop()){
    
    $('nav').addClass('black');
    }else{
        $('nav').removeClass('black');
    }
    })
 


   
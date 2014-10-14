/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//alert(jQuery);
jQuery(document).ready(
  function() { 
      
     jQuery("html").niceScroll({cursorcolor:"transparent"});
    
    jQuery("html").getNiceScroll().hide();
    jQuery(".story-desc").niceScroll();

  }

);

jQuery(document).ready(function (){
                
             setmargin();
             jQuery(window).resize(function (){
                setmargin(); 
             });
                
            function setmargin()
            {
               var h=jQuery(window).height();
               //jQuery(".coming-soon").css({"margin-top":(h/2)-50});
            }
            });



$( document ).ready(function() {
    $('.slick-slider').slick({
        slidesToShow: 4,
        dots: false, 
        infinite: false,  
        asNavFor: '.slider-nav', 
  
       
        responsive: [ 
          {
            breakpoint: 1521,     
            settings: {
              appendArrows: '.tarrif-section', 
            }
          },
          {
            breakpoint: 1400, 
            settings: {
              slidesToShow: 3,
              appendArrows: '.tarrif-section', 
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              appendArrows: '.tarrif-section', 
            
            }
          },
          { 
            breakpoint: 768, 
            
            settings: {
              slidesToShow: 1,
              appendArrows: '.tarrif-section', 
            }
          }
        ]
      });  

      $('.slider-nav').slick({
        slidesToShow: 4,
        dots: false,  
        infinite: false,   
        arrows: false,
        
        responsive: [ 
          {
            breakpoint: 1400, 
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
            }
          },
          { 
            breakpoint: 768, 
            
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });  
});
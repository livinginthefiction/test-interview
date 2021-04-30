$(document).ready(function () {
  //css variable polyfill for ie
  cssVars();


  $('.dropdown .dropdown-menu .dropdown-item').on('click', function () {
    let value = $(this).text();
    $(this).parent().parent().find('.dropdown-toggle').text(value);
  });

  if ($('.tarrif-section').length !== 0) {
    let waypoint = new Waypoint({
      element: document.getElementById('tarrif-section'),
      handler: function (direction) {

        if (direction == 'up') {
          $('.slick-arrow').addClass('fixed-slick');
        } else {
          $('.slick-arrow').removeClass('fixed-slick');
        }

      },
      offset: '-150%'
    })

    let waypoint2 = new Waypoint({
      element: document.getElementById('tarrif-section'),
      handler: function (direction) {
        if (direction == 'up') {
          $('.slick-arrow').removeClass('fixed-slick');
        } else {
          $('.slick-arrow').addClass('fixed-slick');
        }
        console.log('sadasd');
      },
      offset: '30%'

    })
  }

  //bootstrap collapse 
  $('.accordion').on('show.bs.collapse', function () {
    $('.accordion-content').removeClass('show');
    $('.btn-link').addClass('collapsed');
    $('.btn-link').attr('aria-expanded', false);
  })

});


$(window).scroll(function () {
  if ($(window).scrollTop() >= 600) {
    $('body').addClass('fixed');
  } else {
    $('body').removeClass('fixed');
  }
});







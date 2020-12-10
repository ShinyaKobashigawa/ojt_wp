// $(function() {
//     // articleをホバーで発動
//     $('p::after').hover(
//         function() {
//         //     $('p::after').css('width','50px');
//         // },
//         // function() {
//         //     $('p::after').css('width',)
//         // }
//         $(this).toggleClass('.ling_lg');
//         });
// });

$(function () {
    $('article')
        .on('mouseover',function () {
            $(this).find('.line_p').addClass('active');        
        })
        .on('mouseleave',function () {
            $(this).find('.line_p').removeClass('active');        
        });
});

$(function() {
  $('.hamburger').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.globalMenuSp').addClass('active');
      } else {
          $('.globalMenuSp').removeClass('active');
      }
  });
});

$(function(){
  // Hide all images except the first within your "fade In" <div>
  $('.fadein img:gt(0)').hide();
  // Set an interval to occur every 3 seconds (3000ms)
  setInterval(function(){
    // Fade out the first element and fade in the next and then move the elements
    $('.fadein :first-child').fadeOut()
       .next('img').fadeIn()
       .end().appendTo('.fadein');}, 
    3000);
    })
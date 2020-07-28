$(document).ready(function () {
//     console.log("đã ready");

   $('#scrollUp').on('click', function () {
      //   console.log("đã vào hàm");
        // $('html,body').animate({scrollTop : $('.chapter2').offset().top}, 1400,"easeOutElastic");
        $('html,body').animate({scrollTop: 0},1600,"easeOutExpo");
   });



});
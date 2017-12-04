$(document).ready(function() {


//   var scrollMagicController = new ScrollMagic.Controller();
//
// //section2
//     var blurbTween = TweenMax.staggerFromTo('#PortfolioHeader .animateHeader', 0.5,
//         {
//             y: 200,
//             opacity: 0
//         },
//         {
//             y: 0,
//             opacity: 1
//         },
//         0.1
//     );
//     var blurbScene = new ScrollMagic.Scene({
//         triggerElement: '#PortfolioHeader',
//         duration: 500,
//         offset: -500
//     })
//     .setTween(blurbTween)
//     .addTo(scrollMagicController);
//
//     var InterestedTween = TweenMax.staggerFromTo('#gettingConnected .connectSection', 0.5,
//         {
//             y: 200,
//             opacity: 0.3
//         },
//         {
//             y: 0,
//             opacity: 1
//         },
//         0.1
//     );
//     var InterestedScene = new ScrollMagic.Scene({
//         triggerElement: '#gettingConnected',
//         duration: 500,
//         offset: -300
//     })
//     .setTween(InterestedTween)
//     .addTo(scrollMagicController);

    window.sr = ScrollReveal();
    sr.reveal('.logoOne', {duration: 2000, origin: 'top', distance: '200px'},50);
    sr.reveal('.statement', {duration: 2000, origin: 'top', distance: '200px'},50);
    sr.reveal('.formBelow', {delay: 1000, duration: 2000, origin: 'bottom', distance: '100px'},50);
    sr.reveal('.tagline', {duration: 2000, origin: 'bottom', distance: '200px'},50);
    sr.reveal('.mainButton', {delay: 2000, duration: 2000},50);
    sr.reveal('.home-about-textbox', {viewFactor: 0.01, duration: 2000},50);

//   if ($(window).width() > 991) {
//   $("#porfolioText").show();
//   $("#firstImageA").show();
//   $("#firstImageB").hide();
// }
// else {
//   $("#firstImageA").hide();
//   $("#firstImageB").show();
//   $("#porfolioText").hide();
//
// }

$(window).scroll(function() {
  parallax();
});



function parallax() {
  var wScroll = $(window).scrollTop();
  $('.home-hero').css('background-position', 'center ' + (wScroll*0.25)+'px');
  $('.formBox').css('margin-top', (12 - (wScroll*0.008))+'em');
  // $('.sideText').css('margin-top', (8 + (wScroll*0.01))+'vh');

  if ($(window).width() > 991) {
    $('.home-about-textbox').css('margin-top', (-8 + (wScroll*0.01))+'rem');
  }

}

// $( window ).resize(function() {
// if ($(window).width() > 991) {
//   $("#porfolioText").show();
//   $("#firstImageA").show();
//   $("#firstImageB").hide();
// }
// else {
//   $("#porfolioText").hide();
//   $("#firstImageA").hide();
//   $("#firstImageB").show();
//
// }
// });



// var canvasDiv = document.getElementById('particle-canvas');
// var options = {
//   particleColor: '#355C7D',
//   interactive: true,
//   speed: 'medium',
//   density: 'high'
// };
// var particleCanvas = new ParticleNetwork(canvasDiv, options);
//

});

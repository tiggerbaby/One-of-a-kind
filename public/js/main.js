var fooReveal = {
 duration    : 1000,
delay       : 200,
};

window.sr = ScrollReveal();
sr.reveal('.foo', fooReveal);

$('#myAffix').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})

// Google

 function initMap() {
  var myLatLng = {lat: -41.282663, lng: 174.774553};

  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 16
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Hello World!'
  });
  
  // Info window
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading">One-of-a-Kind</h4>'+
      '<div id="bodyContent">'+
      '<p>Level 1, 104 The Terrace, Wellington</p>' + 
      '</div>'+
      '</div>';
      var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

      marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}




// Instagram API

var id = '219634874';
var token = '219634874.4efb854.6bf2f192c04f49cf90f114ced64e185e';

  $(document).ready(function () {
 
  $('#selector').pongstgrm({
    accessId:     id,
    accessToken:  token,
    count: '4',
  });
  $('#selector').pongstgrm({ show: 'lasercutting'});
 
});
 
  $(document).ready(function (){
  $('#profile').pongstgrm({
  accessId:     id,
    accessToken:  token,
  show:             'profile',
  picture_size:     '64',                  // sets profile picture to 64x64 pixels, no need to add px
  profile_bg_img:   '/img/combs.jpg', // image url
  profile_bg_color: '#d9534f',             // background color
});

});  

    $(document).ready(function () {
 
  $('#recentWork').pongstgrm({
    accessId:     id,
    accessToken:  token,
    count: '12',
  });
  $('#recentWork').pongstgrm({ show: 'lasercutting'});
 
});


// SVG

function showSVG(idName){
// Elements to inject
  var svgInjector = document.querySelectorAll(idName);

  // Do the injection
  SVGInjector(svgInjector,{
    each: function(svg){
      var svgID = $(svg).attr('id');
      var viv = new Vivus(svgID, 
        {
        type: 'async'
        , duration: 100
      });

      $(svg).click(function(){
        viv.reset().play();
      });      
    }
  }); 
}

//  $(function(){
$(document).ready(function () {    
  
  showSVG('#svg1');
  showSVG('#svg2');
  showSVG('#svg3');
  showSVG('#svg4');
  showSVG('#svg5');
  });

// Countdown Timer
$(function(){
  FlipClock.Lang.Custom = { days:'Days', hours:'Hours', minutes:'Minutes', seconds:'Seconds' };
  var opts = {
    clockFace: 'DailyCounter',
    countdown: true,
    language: 'Custom'
  };  
  var countdown = 1472703660 - ((new Date().getTime())/1000); // from: 09/01/2016 04:21 pm +1200
  countdown = Math.max(1, countdown);
  $('.clock-builder-output').FlipClock(countdown, opts);
});




// var svgInjector = document.querySelectorAll('#svg2');

//   // Do the injection
//   SVGInjector(svgInjector,{
//     each: function(svg){
//       var svgID = $(svg).attr('id');
//       var viv = new Vivus(svgID, 
//         {
//         type: 'async'
//         , duration: 100
//       });

//       $(svg).click(function(){
//         viv.reset().play();
//       });      
//     }
//   }); 

//   var svgInjector = document.querySelectorAll('#svg3');

//   // Do the injection
//   SVGInjector(svgInjector,{
//     each: function(svg){
//       var svgID = $(svg).attr('id');
//       var viv = new Vivus(svgID, 
//         {
//         type: 'async'
//         , duration: 100
//       });

//       $(svg).click(function(){
//         viv.reset().play();
//       });      
//     }
//   }); 

// var svgInjector = document.querySelectorAll('#svg4');

//   // Do the injection
//   SVGInjector(svgInjector,{
//     each: function(svg){
//       var svgID = $(svg).attr('id');
//       var viv = new Vivus(svgID, 
//         {
//         type: 'async'
//         , duration: 100
//       });

//       $(svg).click(function(){
//         viv.reset().play();
//       });      
//     }
//   }); 

// var svgInjector = document.querySelectorAll('#svg5');

//   // Do the injection
//   SVGInjector(svgInjector,{
//     each: function(svg){
//       var svgID = $(svg).attr('id');
//       var viv = new Vivus(svgID, 
//         {
//         type: 'async'
//         , duration: 100
//       });

//       $(svg).click(function(){
//         viv.reset().play();
//       });      
//     }
//   });   


// });


// function showSVG(tagId)
// {
//   var svgInjector = document.querySelectorAll(tagId);

//   // Do the injection
//   SVGInjector(svgInjector,{
//     each: function(svg){
//       var svgID = $(svg).attr('id');
//       var viv = new Vivus(svgID, 
//         {
//         type: 'async'
//         , duration: 100
//       });

//       $(svg).click(function(){
//         viv.reset().play();
//       });      
//     }
//   }); 
// }

// //  $(function(){
// $(document).ready(function () {    
  
//   showSVG('#svg1');
//   showSVG('#svg2');
//   showSVG('#svg3');
//   showSVG('#svg4');
//   showSVG('#svg5');
  
  
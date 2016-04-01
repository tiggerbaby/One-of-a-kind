// var fooReveal = {
//  duration    : 1000,
// delay       : 200,
// };

// window.sr = ScrollReveal();
// sr.reveal('.foo', fooReveal);

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
  $(document).ready(function () {
 
  $('#selector').pongstgrm({
    accessId:     '219634874',
    accessToken:  '219634874.4efb854.6bf2f192c04f49cf90f114ced64e185e'
  });
  $('#selector').pongstgrm({ show: 'feed' });
 
});

   
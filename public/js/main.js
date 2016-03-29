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


   
if(window.location.hash) {
  var hash = window.location.hash;
  $('.accordion a[href="' + hash + '"]').trigger('click');
}
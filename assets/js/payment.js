function bookChoice(){
  var kode = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  var long = 12;
  var randomCode = '';
  for (var i = 0; i < long; i++) {
    var rand = Math.floor(Math.random() * kode.length-1) + 1;
    randomCode += kode[rand];
  }
  $('#validationTooltip04').val(randomCode);
}

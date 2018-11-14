function bookChoice(){
  var nana = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  var long = 8;
  var randomCode = '';
  for (var i = 0; i < long; i++) {
    var rand = Math.floor(Math.random() * nana.length-1) + 1;
    randomCode += nana[rand];
  }
  $('#validationTooltip04').val(randomCode);
}

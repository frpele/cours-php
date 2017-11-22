$(document).ready(function(){
// dom chargé

var server = 'http://localhost:8000';
// ciblage et mise en cache
var btnTestAjax     = $('button#btnTestAjax');
var btnListFruits   = $('button#btnListFruits');
var fruitDisplay    = $('div#fruitDisplay');

// fonctions
var ajaxFn = function() {
  $.get(server + '/fruits/api/json', function(res) {
    console.log(res);
    console.log(typeof res);
    // la réponse du serveur (res) est une chaine de caractères
    // au format json
    var fruit = JSON.parse(res);
    console.log(fruit);
    console.log(typeof fruit);
    console.log('Nom du fruit: ' + fruit.name);

    var fruitData = 'Nom: ' + fruit.name;
    fruitData += '<br />' + 'Origin: ' + fruit.origin;

    // fruitDisplay.html('<strong>' +  fruit.name + '</strong>');
    fruitDisplay.html(fruitData);

  });
}

var ajaxListFruits = function () {

  console.log('liste des fruits');

}

// événements
btnTestAjax.click(ajaxFn);
btnListFruits.click(ajaxListFruits);

});

$(document).ready(function(){
// dom chargé

var app = {
  server:'http://localhost:8000',
  data: {
    fruits:null
  }
};
// ciblage et mise en cache
var appHtml = $('div#app');
var btnTestAjax     = appHtml.find('button#btnTestAjax');
var btnListFruits   = appHtml.find('button#btnListFruits');
var fruitDisplay    = appHtml.find('div#fruitDisplay');
var selectFormat    = appHtml.find('select#selectFormat');
// var btnTestAjax     = $('button#btnTestAjax');
// var btnListFruits   = $('button#btnListFruits');
// var fruitDisplay    = $('div#fruitDisplay');

function init() {
    // appHtml.fadeOut(1000);
  ajaxListFruits();
  }

// fonctions
var ajaxFn = function() {
  $.get(app.server + '/fruits/api/json', function(res) {
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
  var format = selectFormat.val();
  if (!app.data.fruits) {
    // Si les données n'ont pas déjà été stockées, on les demande au serveur
    $.get(app.server + '/fruits/api/list', function(res){
      var fruits = JSON.parse(res);
      // les requetes ajax sont asynchrones
      // il faut s'assure que la réponse du serveur est reçue
      //
      app.data.fruits = fruits;
      fruitDisplay.html(transformToHtml(app.data.fruits, format));
    });
  } else {
    // les données ont déjà été reçues
    fruitDisplay.html(transformToHtml(app.data.fruits, format));
  }
}

var transformToHtml = function(fruits,type) {
  var output = '';

  if(type == 'table') {
    output += '<table class="table table-bordered table-striped">';
    var header = '<tr><th>Nom</th><th>Origine</th><th>Comestible</th><th>Producteur</th></tr>';
    var url = app.server + '/fruits/api/details/';

    output += header;
    // itération sur fruits
    fruits.forEach(function(fruit) {
    var comestible = (fruit.comestible) ? 'oui' : 'non';

    if(fruit.producer == undefined) {
      var producer = 'Aucun producteur';
    } else {
      var producer = fruit.producer;
    }

    output += '<tr><td><a href="'. app.server + fruit.id +'">' + fruit.name + '</a></td>';
    output += '<td>' + fruit.origin + '</td>';
    output += '<td>' + comestible + '</td>';
      output += '<td>' + producer + '</td></tr>';
    });
    output += '</table>';
  }

  if(type == 'list') {
    output += '<ul>';
    // itération sur fruits
    fruits.forEach(function(fruit) {
    output += '<li>' + fruit.name + '</li>';
    });
    output += '</ul>';
  }

  return output;
}


// événements
btnTestAjax.click(ajaxFn);
btnListFruits.click(ajaxListFruits);
selectFormat.change(ajaxListFruits);

init();

});

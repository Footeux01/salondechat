// $("#actualisation").onclick(function(){

//     var donnees = $(this).serialize();

//     $.ajax({

//       url: 'minichat_post',
//       type: 'GET',
//       data : 'pseudo' + 'message',
//       dataType : 'donnees',
//       success: function(){
//         //retour correspond a la variable qui récupère tous les messages
//         for(var i=0; i< retour.length; i++){
//           $('pseudo').append("<p>"+retour[i]['pseudo']+" message:"+retour[i]['message']+"</p>")
//         }
//       },
//       error: function(){
//         window.location = "inc/error.php";//Retour Accueil car Erreur
//       }
//     });

// });

function refresh_msg(){
  $.ajax({
    url: 'minichat_post.php',
    type: 'GET',
    success: function(retour, status){
      //retour correspond a la variable qui récupère tous les messages
      for(var i=0; i< retour.length; i++){
        $('.chatonline').append("<p>"+retour[i]['pseudo']+" message:"+retour[i]['message']+"</p>")
      }
    },
    error: function(objet, statut, error){
      console.log(erreur);
    }
  });
}

setInterval(refresh_msg(), 1000);
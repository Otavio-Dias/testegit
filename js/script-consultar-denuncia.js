$(document).ready(function(){
          $('#EnviaDados').on('click', function(e){
            e.preventDefault();
            var form = $('form')[0];
            var formData = new FormData(form);
            var audioElement = document.createElement('audio');
            audioElement.setAttribute('src', 'js/win-notification.wav');
            $.ajax({
              type: 'POST',
              url:'restrito/consultar_denuncia2.php',
              data: formData,
              contentType: false,
              cache: false,
              processData: false,
              beforeSend: function () {
                $('#loader').css('visibility','visible')
              },
              success: function (data){
               audioElement.play();
               $('#loader').css('visibility','hidden')
               $('#content').empty().append(data)
              },
              error: function (xhr, ajaxOptions, thrownError){
              $('#loader').css('visibility','hidden')
               $('.modal-body').append(
                '<h1> Ocorreu um erro :( </h1><br>'+
                '<p> Tente novamente mais tarde! Código do erro <b>'+xhr+'</b></p>')
               $('#myModal').modal('show')
              }
              //beforeSend:function (){
               // $('#loader').css('visibility','visible')
            // }

           });

        $('#close_modal').on('click', function(){
          location.href = 'index.php'
        })
     });
  });
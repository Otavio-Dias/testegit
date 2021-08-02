$(document).ready(function(){
        $('#ajax_form').submit(function(e){  
          var form =  $('form')[0];
          formDados = new FormData(form);
          e.preventDefault(); 
          var audioElement = document.createElement('audio');
          audioElement.setAttribute('src', 'js/win-notification.wav');
          $.ajax({
            type: 'POST',
            url:'restrito/gravar_b_ideias.php',
            data: formDados,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
              $('#loader').css('visibility','visible')
              $('#EnviaDados').prop('disabled', true)
            },
            success: function (data){
             audioElement.play();
             $('#loader').css('visibility','hidden')
             $('#procotocolo-gerado').append(data)
             $('#myModal').modal('show')
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
          $('#fecharModal').on('click', function(){
            location.href = 'index.php'
          })
        })// send data - função do clique do botão
      $('#MostraTermos').on('click', () => {
        $('#myModalPoliticas').modal('show')
      })
     });
$(document).ready(function(){

        var images = [];



        $('#ajax_form').submit(function(e){
            var form =  $('form')[0];
            formDados = new FormData(form);
            var images_attr = document.querySelector("#file").files;
            var imgteste = document.querySelector("#img_1")
              for (var i = 0; i < images.length; i++) {
                //console.log(images[i])
                var file = new File([images[i]], images_attr[i].name, { type: images_attr[i].type });
                formDados.append(document.querySelector("#file").getAttribute("name"), file)
                }

              

          e.preventDefault(); 

          var audioElement = document.createElement('audio');

          audioElement.setAttribute('src', 'js/win-notification.wav');

          $.ajax({

            type: 'POST',

            url:'restrito/gravar_indicacao.php',

            data: formDados,

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function () {

              $('#loader').css('visibility','visible')

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













         // Cria link de download

        

        // Mostra as imagens reduzidas

        resizeImage = (e) => {

            var newImage = new Image()

            newImage.onload = () => {

                var canvas = document.createElement("canvas");

                var value = 35;



                newImage.width *= value / 100;

                newImage.height *= value / 100;

                newImage.id = "img_1";

                var ctx = canvas.getContext("2d");

                ctx.clearRect(0, 0, canvas.width, canvas.height);

                canvas.width = newImage.width;

                canvas.height = newImage.height;

                ctx.drawImage(newImage, 0, 0, newImage.width, newImage.height);

                canvas.toBlob(function (blob) {

                    images.push(blob)

                }, document.querySelector("#file").files[e.target.index].type, 0.8); // 0.8 is the image quality



                // createLinkDownloadImage(canvas);



            }

            newImage.src = e.target.result;

            

        }



        loadImages = (input) => {

          console.log('chegou aqui')

            images = [];

            if (input.files.length > 0) {

                var array_imgs = Array.from(input.files);



                array_imgs.forEach((img, index) => {

                    var reader = new FileReader();

                    reader.index = index;

                    reader.onload = resizeImage;

                    console.log('Reload feito')

                    reader.readAsDataURL(input.files[index]);

                })

            }

            

        }



      



       // var form = $('form')[0];

       // var formData = new FormData(form);

      /*

       $.ajax({

        type:'POST',

        url:'restrito/processa.feed.php',

        contentType: false,

        cache: false,

        processData: false,

        dataType: 'text',

        success: (data) => {

          $('#ListarBox').append(data)



        }

      })*/



      $('#MostraTermos').on('click', () => {

        $('#myModalPoliticas').modal('show')

      })

     });
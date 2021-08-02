$(document).ready(() => { 
	$.ajax({
      type: 'POST',
      url:'c_panel/controllers/dashboard.php',
      contentType: false,
      cache: false,
      processData: false,
      dataType: 'json',
      success: function (data){
       $('#dash-index-indicacoes').empty().append(data.numero_indicacoes)
       $('#dash-index-denuncias').empty().append(data.numero_denuncias)      
     },             
          });
})
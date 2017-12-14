$(document).ready(function(){
  buscarUsuario()
})

function buscarUsuario(){
  $('#form-buscar').on('submit',function(e){
  	$("#text-resultados").remove()
  	$('.nuevos_registros').empty()
    e.preventDefault()
    var form = this
    $.ajax({
    	method: "POST",
    	dataType: "json",
    	url: form.action,
    	data: $('#form-buscar').serialize()
    }).done(function(response){
    	if(response.user.length > 0){   
       	$.each(response, function(i, item) {
       		$.each(item, function(i, value) {
       			$('#buscar_resultados').append("'<tr class='nuevos_registros'><td>"+ value.id +"</td><td>"+ value.name +"</td><td>"+ value.email +"</td><td>"+ value.country +"</td><td>"+ value.created_at +"</td></tr>'")
       		})
   			})
    	}else{
    	  $('#buscar_resultados').append("'<tr><td colspan='5' class='text-center' id='text-resultados'>No se encontraron resultados :(</td></tr>'")
    	}
    })
  })
}

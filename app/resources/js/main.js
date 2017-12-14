$(document).ready(function(){
	cargaListadoPaises()
	crearUsuario()
})


function cargaListadoPaises(){
	$.getJSON("https://pkgstore.datahub.io/core/country-list/data_json/data/8c458f2d15d9f2119654b29ede6e45b8/data_json.json", function( data ) {
	  $.each(data, function(i, item) {
	    $("#country").append('<option value='+ item.Code +'>'+ item.Name +'</option>')
	  })
	})
}


function crearUsuario(){
	$("#form-1").validate({
	  rules: {
   		name: { required: true, minlength: 3},
   		email: { required: true, email: true},
   		password: { required:true, minlength: 6},
   		country: { required: true }
   	},
    submitHandler: function(){
    	var form = this
    	$.ajax({
    		method: "POST",
    		url: $('#form-1').attr('action'),
    		data: $('#form-1').serialize()
    	}).done(function(response){
    		$("#registro_ok").show();
    		$('#form-1')[0].reset();
    	})     
    }
	});
}
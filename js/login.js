$(document).ready(function(){
	//$("#login").hide();
	$("#login").submit(function(){
		debugger;
		$("#login").hide();
		$("#cargando").show();
		$.ajax({
			type:"POST",
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success:function(data){
				$("#resultado").html(data);
				if($("#txtLogin").val() == 1){
					location.reload();
				}else{
					$("#login").show();
					$("#error").show();
					$("#cargando").hide();
				}
			},
			error:function(error){
			}
		})
		return false;
	});
});
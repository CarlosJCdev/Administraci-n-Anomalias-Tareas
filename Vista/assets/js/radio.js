
	$(function){
		$(".op").click(function(){
			if($(this).val() =='F'){
				$("#txtDescripcion").removeAttr('disabled');
				$("#txtDescripcion").focus();
			}else{
				$("#txtDescripcion").attr('disabled','disabled');
			}
		})
	})

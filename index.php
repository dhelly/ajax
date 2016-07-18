<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax</title>
	<style>
		.modal {
		    display:    none;
		    position:   fixed;
		    z-index:    1000;
		    top:        0;
		    left:       0;
		    height:     100%;
		    width:      100%;
		    background: rgba( 255, 255, 255, .8 ) 
            url('ajax-loader.gif') 
            50% 50% 
            no-repeat;
		}

		body.loading {
		    overflow: hidden;   
		}

		body.loading .modal {
	    	display: block;
	    }	
	</style>
</head>
<body>

	<div class="modal"></div>
	
	<h3>Estudo Ajax</h3>

	<form id='form_ajax' method="POST">
		<legend>Envio </legend>	
		<input type="text" name="nome" id="nome" id="inputNome" required="required">
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<div class="resultado"></div>


<script src="jquery-3.1.0.min.js"></script>
<script>

	$('#form_ajax').submit(function() {
	    $('.modal').show();
	    $.post('ajax.php', $( "#form_ajax" ).serialize() , function(data) {
	        $('.modal').hide();
	        $('body').html(data);
	    });
	    return false;
	});


</script>

</body>
</html>
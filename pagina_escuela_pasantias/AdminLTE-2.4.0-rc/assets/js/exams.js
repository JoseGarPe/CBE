var question;
var identificador;
var element;

$( document ).ready(function() {
	question = $('#numQuestions').val();
	identificador = $('#numQuestions').val();

    $("#add").click(function() {
    	if(question == 50){
    		alert("No puedes agregar mas de 50 preguntas !!");
    		return;
    	}
    	question++;
    	identificador++;
		$("#container").append(" \
						<div class='question'> \
							<input type='hidden' name='question-" + identificador + "' value='set'/> \
							<div class='question-header'> \
								<span class='close' onclick='remove.call(this)'>X</span> \
								<h4>Pregunta</h4> \
							</div> \
							<div class='input-group'> \
						    	<div class='input-group-addon'>Enunciado de la pregunta:</div> \
						    	<input type='text' class='form-control' name='enunciado-" + identificador + "' placeholder='Introduzca el enunciado de la pregunta' required/> \
						    </div> \
						    <div class='input-group'> \
						    	<div class='input-group-addon'>Opción 1:</div> \
						    	<input type='text' class='form-control' name='opcion-" + identificador + "-1' placeholder='Introduzca el enunciado de la opción 1' required/> \
						    	<div class='input-group-addon'> \
						    		<label> \
						    			Correcta: \
						    			<input type='radio' value='1' name='respuesta-" + identificador + "' required /> \
						    		</label> \
						    	</div> \
						    </div> \
						    <div class='input-group'> \
						    	<div class='input-group-addon'>Opción 2:</div> \
						    	<input type='text' class='form-control' name='opcion-" + identificador + "-2' placeholder='Introduzca el enunciado de la opción 2' required/> \
						    	<div class='input-group-addon'> \
						    		<label> \
						    			Correcta: \
						    			<input type='radio' value='2' name='respuesta-" + identificador + "' /> \
						    		</label> \
						    	</div> \
						    </div> \
						    <div class='input-group'> \
						    	<div class='input-group-addon'>Opción 3:</div> \
						    	<input type='text' class='form-control' name='opcion-" + identificador + "-3' placeholder='Introduzca el enunciado de la opción 3' required/> \
						    	<div class='input-group-addon'> \
						    		<label> \
						    			Correcta: \
						    			<input type='radio' value='3' name='respuesta-" + identificador + "' /> \
						    		</label> \
						    	</div> \
						    </div> \
						    <div class='input-group'> \
						    	<div class='input-group-addon'>Opción 4:</div> \
						    	<input type='text' class='form-control' name='opcion-" + identificador + "-4' placeholder='Introduzca el enunciado de la opción 4' required/> \
						    	<div class='input-group-addon'> \
						    		<label> \
						    			Correcta: \
						    			<input type='radio' value='4' name='respuesta-" + identificador + "' /> \
						    		</label> \
						    	</div> \
						    </div> \
						</div>");
		$('#numQuestions').val(question);
	});
});
	
function remove(){
	element = $(this);
	alertify.set({labels: {
        ok: "Aceptar",
        cancel: "Cancelar"
    }});
    alertify.confirm("<p>¿Realmente desea eliminar esta pregunta?</p>",
        function(e){
            if(e){
            	if(question == 1){
            		alert("El examen debe tener como minimo 1 pregunta !!");
            		return;
            	}
            	var parent = element.parent().parent();
				parent.css({left: 100 + "%"});
				setTimeout(function(){
				  	parent.remove();
				  	question--;
					$('#numQuestions').val(question);
				}, 500);
            }
        }
    );
}
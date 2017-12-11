function agregarDatos(id){
	cadena="id="+id;
	$.ajax({
type:"POST",
url:"../registros/registro_observacion.php",
data:,
success:function(r){
	$('#resultados1').html(r);
}
});

}
	

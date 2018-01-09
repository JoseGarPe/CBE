$(document).ready(function(){
	$( ".heading" ).click( handler );
	$( ".more" ).hide();
});

function handler( event ) {
  var target = $( event.target );
  target.next('.more').slideToggle(400);
}
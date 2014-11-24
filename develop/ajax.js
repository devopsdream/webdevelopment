$(document).ready(
	function(){
});

function senddetails(){
	var details = $('form1').serialize();
	$.post("ajax.php", function(data){
		if(data.error){
			$('body').append('<p>value: ' + data.error + '</p>');
		}
	});
}
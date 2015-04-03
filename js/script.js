function addList(){
	var text = $("#uzrasai").val();
$(li).append('<li><input type="checkbox" class="baigta"/>'+text+'<button class="istrinti">Ištrinti</button></li>');
	$("#uzrasai").val('');
}
function deleteList()
{
	$(this).parent().remove();
}
function finishList(){
	if ( $(this).parent().css('textDecoration') == 'line-through'){
		$(this).parent().css('textDecoration', 'none');
		} else {
			$(this).parent().css('textDecoration', 'line-through');
		}
}

function kalbos (){
	
	$("#kalbos").show(3000);
	
}

$(function()
{
$("#ziureti").on('click', kalbos);
$("#prideti").on('click', addList);
$(document).on('click', '#istrinti', deleteList);
$(document).on('click', '#baigta', finishList);
});


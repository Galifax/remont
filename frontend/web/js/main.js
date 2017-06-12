    $(function(){
$('#modalButton').click(function(){
    $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));
});
});

$('.order-search').hide();
$('#search-hide').hide();
$('#search-show').click(function(){
	$('.order-search').animate({height: "show"}, 300);
	$('#search-show').hide();
	$('#search-hide').show();
});

$('#search-hide').click(function(){
	$('.order-search').animate({height: "hide"}, 300);
	$('#search-show').show();
	$('#search-hide').hide();
});


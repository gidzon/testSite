$(document).ready(function(){
	$('.add-cart').bind('click', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id'),
		qty = $('.quantity input').val() ? $('.quantity input').val() : 1;
			  
		$.ajax({
			url:"/cart/add"+id,
			data: {
				id:id,
				qty:qty
			},
			dataType: "json",
			type: 'GET',
			success: function(res){
				showCart(res);
			}
		})
	});
});

function showCart(cart){
	console.log(cart);
}
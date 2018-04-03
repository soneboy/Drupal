$(document).ready(function () {
    $(document).on('click','.add-cart',function() {
        var parent = $(this).parent();
        var cart = {};
        cart.color = parent.find('.product-colors').find('.selected').find('a').data('color');
        cart.size = parent.find('.product-sizes').find('.selected').data('size');
        cart.name = parent.parent().next().find('.product-name').data('name');
        cart.price = parent.parent().next().find('.price').data('price');
        cart.quantity = 1;
        cart.img = parent.parent().find('img.front').attr('src');
        console.log(cart);
        cart.id = $(this).data('id');

        $.ajax({
            url: '../../cart',
            data: cart,
            method: 'POST',
            success: function(result){
                $('.basket-items').text(result.length);
            },
            error: function(jqXHR, textStatus, errorThrown){
               console.log(textStatus);
            }
        });
    });
});
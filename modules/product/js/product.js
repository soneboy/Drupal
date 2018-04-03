$(document).ready(function () {
    $(document).on('click','.add-to-cart',function() {
        var cart = {};
        cart.color = $('.color-name').text();
        cart.size = $('.product-sizes').find('li.selected').find('a').text();
        cart.name = $('.product-name').text();
        cart.price = $('.product-price').text();
        cart.quantity = 1;
        cart.img = $('.full-width').attr('src');
        cart.id = window.location.href.split('/').pop();

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
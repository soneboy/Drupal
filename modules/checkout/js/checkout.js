$(document).ready(function () {
    $(document).on('click','.remove-product',function() {
        var key = $(this).data('index');
        var box = $(this).parent();
        var deleteObj = {};
        deleteObj.delete = key;
        $.ajax({
            url: '../checkout',
            method: 'POST',
            data: deleteObj,
            success: function(result){
                box.fadeOut()
                $('.price').text(result.totalPrice);
                $('.total-price').text(result.totalPrice);
            },
            error: function(jqXHR, textStatus, errorThrown){
            }
        });
    });

    $(document).on('change','.quantity-selection',function() {
        var quantity = $(this).val();
        var price = $(this).parent().parent().find('.order-price');
        var newPrice = parseInt(price.data('price')) * parseInt(quantity);
        var key = $(this).data('index');
        var quantityObject = {};
        quantityObject.quantity = quantity;
        quantityObject.key = key;
        $.ajax({
            url: '../checkout',
            method: 'POST',
            data: quantityObject,
            success: function(result){
                    price.text(newPrice);
                    $('.price').text(result.totalPrice);
                    $('.total-price').text(result.totalPrice);

            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus);
            }
        });
    });
});
// JavaScript para mostrar el carrito al pasar el cursor sobre el producto
$(document).ready(function () {
    $('.product-item').hover(
        function () {
            $(this).find('.cart-icon').fadeIn('fast');
        },
        function () {
            $(this).find('.cart-icon').fadeOut('fast');
        }
    );
});

// productDetails.js
$(document).ready(function() {
    $('.product-img a').click(function(event) {
        event.preventDefault();
        var productDetailUrl = $(this).attr('href');
        window.location.href = productDetailUrl;
    });
});


function customerEmailCheck(email) {
    $.ajax({
        type: "GET",
        url: "http://localhost/advance-ecommerce/public/customer-email-check",
        data:{email: email},
        dataType: "JSON",
        success: function (response) {
            $('#emailError').text(response);
        }
    });
}


$(document).on('keyup', '#prodSearch', function () {
    var inputText = $(this).val();
    // console.log(inputText);
    $.ajax({
        type: "GET",
        url: "http://localhost/samadfullproject/advance-ecommerce/public/api/get-all-product",
        data:{text: inputText},
        dataType: "JSON",
        success: function (response) {
            // console.log(response);
            // $('#emailError').text(response);
            console.log(response);
            var div = '';
            $.each(response, function (key, value) {
                div += '<div class="axil-product-list">';
                div += '<div class="thumbnail">';
                div += '<a href="">';
                div += '<img src="'+value.image+'" style="height: 60px;" alt="Yantiti Leather Bags"/>';
                div += '</a>';
                div += '</div>';
                div += '<div class="product-content">';
                div += '<h6 class="product-title"><a href="single-product.html"> '+value.name+' </a></h6>';
                div += '<div class="product-price-variant">';
                div += '<span class="price current-price">'+value.selling_price+'</span>';
                div += '<span class="price old-price">$49.99</span>';
                div += '</div>';
                div += '<div class="product-cart">';
                div += '<a href="cart.html" class="cart-btn"><i class="fal fa-shopping-cart"></i></a>';
                div += '<a href="wishlist.html" class="cart-btn"><i class="fal fa-heart"></i></a>';
                div += '</div>';
                div += '</div>';
                div += '</div>';
            });
            $('#searchResult').empty();
            $('#searchResult').append(div);
            $('#searchResultCount').text(response.length);
        }
    });
});

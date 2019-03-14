
// when click 
$(".singleProduct").click(function () {
    // collect data
    var value = $('.quantity-section input');
    var values = [];
    value.each(function () {
        values.push($(this).attr("name"));
    });
    var obj = $.extend({}, values);
    var json = JSON.stringify(obj);
    console.log(obj);
    console.log("bbb");
    var id = $(this).data("id");
    var product={id:id ,value: json};
//    alert(id);
    // call ajax
    $.ajax({
        url: "../controller/ProductDetails.php",
        type: "GET",
        // sent data object to server
        data:product,
        
        success: function (data) {
//            alert(data);
            $(".order_products_table").append(data);
        }
    });

});
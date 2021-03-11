    $(button).click(function () { 
    $.ajax({
        type: "GET",
        url: "expression.txt",
        dataType: "text",
        success: function (response) {
            $("button").after(response); 
        }
    });
})

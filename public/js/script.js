$("#conference-options").hide();
$("#conference-control").click(function() {
    $("#hall-options").hide();
    $("#conference-options").show();
});
$("#hall-control").click(function() {
    $("#conference-options").hide();
    $("#hall-options").show();
});

function updatePriceData(val) {
    $("#priceOutput").html(val);
}

$(function() {
    $('[data-toggle="popover"]').popover();
});

$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

// rating

$(document).ready(function() {
    $.get("tt.html", function(data) {
        $("#ciallo").html(data);
	
    });	
})
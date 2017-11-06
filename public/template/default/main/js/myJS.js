jQuery(document).ready(function($) {
	
});


function selectTravel(url){
	$.ajax({
		url: url,
		cache: false,
		success: function(data, status){
			console.log(status);	
			console.log(data);	
		},
	})
}
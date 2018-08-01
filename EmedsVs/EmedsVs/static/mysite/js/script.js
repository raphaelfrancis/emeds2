$(document).ready(function () {

    $('#ifrmPreview').load(function () {

        $("#ifrmWrapper").removeClass('loading');

		setTimeout(function () {
			$('.floater').fadeIn('slow');
		}, 1000);       

    });


});
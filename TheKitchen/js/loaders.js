$('.carousel.carousel-slider.myslider').carousel({
			    fullWidth: true,
			    indicators: true,
			  });

    	

$(document).ready(function() { 
	  $('.sidenav').sidenav(); 
  $(".slider").slider({ full_width: true });  
  $('.parallax').parallax();
  $('.myreviews').carousel({
  	numVisible: 7,
  	shift: 55,
  	padding: 55
  });
  $('.modal').modal();
}); 


function toggleModal(heading, description){

	$('#info-modal-heading').text(heading);

	$('#info-modal-content').text(description);

	var instance = M.Modal.getInstance($('#modal3'));

	instance.open();

}
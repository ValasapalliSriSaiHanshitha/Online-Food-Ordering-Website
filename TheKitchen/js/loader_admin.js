 $(document).ready(function(){
    $('.sidenav').sidenav();

    $('select').formSelect();

    $('.modal').modal();

    fullTopNav();

    setHeight();

    $( window ).resize(function() {
	    fullTopNav();

	});
  });

 function setHeight() {
 	var height = $('body').height();

 	$('.left-sidebar').height(height);
 }


 function fullTopNav() {
    if (window.matchMedia('(max-width: 992px)').matches) {

    	if ($("#left-sidebar").hasClass("col s2")) {

    		$('#left-sidebar').toggleClass('col s2');
    	}

    	if ($("#topnav").hasClass("s10")) {
    		$('#topnav').toggleClass('s10');
    		$('#topnav').toggleClass('s12');
    	}
    } else {
    	if (!$("#left-sidebar").hasClass("col s2")) {

    		$('#left-sidebar').toggleClass('col s2');
    	}

    	if ($("#topnav").hasClass("s12")) {
    		$('#topnav').toggleClass('s10');
    		$('#topnav').toggleClass('s12');
    	}
    }
}
	//jQuery dependant script
	$('html').removeClass('no-js').addClass('js'); 

	let menu = $('#main-nav'); //the menu itself
	let menuBtn = $('#menu'); //the hamburger button

	menuBtn.click( function(e){
		e.preventDefault();
		menuBtn.toggleClass('active');
		menu.toggleClass('active');

		if(menuBtn.hasClass('active')){
			$('i.icon-menu').removeClass('icon-menu').addClass('icon-cancel-circled');
		}else{
			$('i.icon-cancel-circled').removeClass('icon-cancel-circled').addClass('icon-menu');
		}

	})

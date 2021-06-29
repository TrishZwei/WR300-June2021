$('html').removeClass('no-js').addClass('js'); //lets us know JS is on the page

	var menu = $('#main-nav'); //the menu itself
	var menuBtn = $('#menu'); //the hamburger/menu button
	var wrap = $('#wrap');

	menuBtn.click( function(e){
		menuBtn.toggleClass('active');
		menu.toggleClass('active');
		wrap.toggleClass('active');

		if(menuBtn.hasClass('active')){
			$('i.icon-menu').removeClass('icon-menu').addClass('icon-cancel-circled');
		}else{
			$('i.icon-cancel-circled').removeClass('icon-cancel-circled').addClass('icon-menu');
		}
		//e.preventDefault();
		return false;

	})
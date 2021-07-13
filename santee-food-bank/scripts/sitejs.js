function getTheHours() {
    //alert('called');
    var open=false;
    var d = new Date();
    var h = d.getHours();
    var m = d.getMinutes();
    var day = d.getDate();
    var curState = '';
    var divclass = "closed";
    var willBe='.';

    switch (d.getDay()) {
    case 0:
    //"Sunday";
        open=false;
        if(day>12 && day<20){
            willBe = ' and will be open again this Tuesday for commodities distribution.';
        }else{
        willBe = ' and will be open again this Wednesday.';
        }
        break;

    case 1:
    //"Monday";
        open=false;
        if(day>13 && day<19){
            willBe = ' and will be open again this Tuesday for commodities distribution.';
        }else{
        willBe = ' and will be open again this Wednesday.';
        }
        break;

    case 2:
    //"Tuesday";
        //commodities distribution on third tuesday of month
        //day of month must be greater than 14 but less than 22
        if(day>14 && day<22 && h>10 && h<13){
            open=true;
            divclass = "comopen";
        }else{
            willBe = ' and will be open again this Wednesday.';
        }
        break;

    case 3:
    //"Wednesday";
        if(h>8 && h<11){
            open=true;
            divclass = "fbopen";
        }else if(h<9){
            willBe = ' and will be open at 9:00 AM today.';
        }else{
            willBe = ' and will be open again this Friday.';            
        }
        break;

    case 4:
    //"Thursday";
        open=false;
        willBe = ' and will be open again this Friday.';
        break;
    case 5:
    //"Friday";
        if(h>8 && h<11){
            open=true;
            divclass = "fbopen";
        }else if (h<9){
          willBe = ' and will be open at 9:00 AM today.';  
        }else if((h<11 && day<7) || (day>13 && day<21)){
        willBe = ' and will be open again this Saturday.'; 
        }else{
            //this left intentionally empty.
        }
        break;
    case 6:
    //"Saturday";
        //first and third saturday of month --
        //the day of month value must be less than 8 
        if(day<8 && h>8 && h<11){
            open=true;
            divclass = "fbopen";
        }else if(day>14 && day<22 && h>8 && h<11){
            open=true;
            divclass = "fbopen";    
        }else if(day>11 && day<19){
            willBe = ' and will be open again this Tuesday for commodities distribution.';
        }else{
        willBe = ' and will be open again this Wednesday.';
        }

        break;
}


if(open==true){
//  alert('true');
curState = 'currently open';
}else{
//  alert('false');
curState = 'currently closed'
}


return document.write('<div class="'+divclass+'" id="open-close">The Santee Food Bank is '+curState+willBe+'</div>');

}

$(document).ready(function(){
		$("html").removeClass('no-js').addClass('js');
		var $menu = $('#menu'),
		$menulink = $('.menu-link');

	$menulink.click(function(){
	$menulink.toggleClass('active');
	$menu.toggleClass('active');
	return false;
	}); // end menu toggle


if($('body').hasClass('contact')){
//js form validation
	$('#contactform').validate(
            {
                // validate on focus out, but on live form ONLY works with input="text". All others will be validated on submit
                // http://stackoverflow.com/questions/10151266/showing-error-off-focus-validation-jquery
                onfocusout: function(element) { 
                    $(element).valid(); 
                },

                rules:{
                    //uses name attribute to identify
                    name:'required',
                    email:{
                        required:true,
                        email:true
                    }, //closes email    
                }, //closes rules

                messages:{
                    name:{
                        required:"Please supply your name"
                    },//closes name message
                    email:{
                        required:"please supply your email",
                        email:"this is not a valid email"
                    }, //closes email message
                    message:{
                        required:"You left this blank, please write your message."
                    }
                },//closes messages
                errorPlacement:function(error,element){
                    if(element.is(":radio")||element.is(":checkbox")){
                        error.appendTo(element.parent().parent().parent());
                    }else{
                        error.insertAfter(element);
                    }

                }//end of error placement

            });//end of validate
    }

	}); // end doc ready...
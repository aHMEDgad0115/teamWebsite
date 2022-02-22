/*  -------------------------------------------------------  */

'use strict';

(function ($) {

    

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });


'use strict';
$ ('html').niceScroll();
//check


//start header
const header1 = document .querySelector('.navbar');

document.addEventListener('scroll',()=>{
    var scrol=window.scrollY;
    if (scrol > 300 ) {
        header1.style.backgroundColor = " #bbb ";
        
    }else {
        header1.style.backgroundColor = "transparent";

    }
});

// end header




})(jQuery);
 $('.has-sub').on('click', function(){
	$('.submenu', this).css('display', 'block');  
	$(this).addClass('opened');  
});
 
$(document).mouseup(function(e) {
	var container = $(".submenu");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
    	$('.submenu').hide();   
    	$('.has-sub').removeClass('opened');   
    }
});


$('.mobile-nav-trigger').on('click', function(){
    $('.mobile-nav').show();
    // $('body').css({
    //     'position': 'fixed',
    //     'overflow': 'hidden'
    // });
	$( '.mobile-nav' ).animate({
        'right':'0px'
    }, {
        duration: 400,
        easing: 'easeOutQuart'
    });  
});

function hideMobileNav(){
    // $('body').css({
    //     'position': 'relative',
    //     'overflow': 'auto'
    // });
    $( '.mobile-nav' ).animate({
        'right':'-300px'
    }, {
        duration: 400,
        easing: 'easeOutQuart',
        complete: function() {
            $('.mobile-nav').hide();
        }
    }); 
}

$(document).mouseup(function(e) {
    var container = $(".mobile-nav, .mobile-nav-trigger");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {   
        hideMobileNav();
    }
});

$('.mobile-nav-close-trigger').on('click', function(){
    hideMobileNav();
});
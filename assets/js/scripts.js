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
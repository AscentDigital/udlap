(function($) {
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
            'right':'-500px'
        }, {
            duration: 500,
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

    $("#contact-form").validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {required: true},
        },
        submitHandler: function(form) {
            $('#contact-submit').text('Sending...').attr('disabled', true);
            var data = $(form).serialize();

            $.ajax({
                type: "POST",
                url: udlap_contact_form_vars.ajaxUrl,
                data: $(form).serialize() + '&nonce=' + udlap_contact_form_vars.nonce + '&action=udlap_contact_form',
                success: function () {
                    $('#contact-success').show();
                    $('#contact-submit').text('Send').attr('disabled', false);
                }
            });

            return false;
        }
    });
   
})( jQuery );

function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

$('.select-items > div:first-child').hide();
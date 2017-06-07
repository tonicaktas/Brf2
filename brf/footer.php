
<div class="wrapper">
<footer id="footer">
        <div class="container">
          <h3>Kontakta styrelsen och dela med dina åsikter. Vi hör av oss så fort vi har svar</h3>
            <?php echo do_shortcode( ' [contact-form-7 id="54" title="Kontaktformulär 1" html_class="use-floating-validation-tip"] ' ); ?>
        </div>
    </footer>
  </div>



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>   

<?php wp_footer(); ?>
		<!-- Slick modal invoke -->
		<script type="text/javascript">
			$(document).ready(function() {
			    $('.openSlickModal-1').click(function(){

			    // Modal 1
			    $('#popup-1').slickModals({
			        // Hide on pages
			        hideOnPages: [

			            '/foo/page2/',
			            '/foo/page3/'
			        ],
			        // Popup type
			        popupType: 'delayed',
			        delayTime: 0,
			        scrollTopDistance: 100,
			        // Popup cookies
			        setCookie: false,
			        cookieDays: 30,
			        cookieTriggerClass: 'setCookie-1',
			        cookieName: 'slickModal-1',
			        cookieScope: 'domain',
			        // Overlay styling
			        overlayBg: true,
			        overlayClosesModal: true,
			        overlayBgColor: 'rgba(0,0,0,0.2)',
			        overlayTransitionSpeed: '0.4',
			        // Background effects
			        pageEffect: 'none',
			        blurBgRadius: '5px',
			        scaleBgValue: '1',
			        // Popup styling
			        popupWidth: '30%',
              popupPositin:'fixed',
			        popupHeight: '100%',
			        popupLocation: 'topRight',
			        popupAnimationDuration: '0.6',
			        popupAnimationEffect: 'slideBottom',
			        popupShadowOffsetX: '0',
			        popupShadowOffsetY: '0',
			        popupShadowBlurRadius: '60px',
			        popupShadowSpreadRadius: '0',
			        popupShadowColor: 'rgba(255,255,255,0.2)',
			        popupBackground: 'rgba(33, 42, 46,.1)',
			        popupRadius: '0',
			        popupMargin: '0',
			        popupPadding: '0',
			        // Responsive rules
			        responsive: false,
			        breakPoint: '480px',
			        mobileLocation: 'center',
			        mobileWidth: '100%',
			        mobileHeight: 'auto',
			        mobileRadius: '0',
			        mobileMargin: '0',
			        mobilePadding: '20px',
			        // Animate content
			        contentAnimate: false,
			        contentAnimateEffect: 'slideRight',
			        contentAnimateSpeed: '0.4',
			        contentAnimateDelay: '0.4',
			        // Youtube videos
			        videoSupport: true,
			        videoAutoPlay: true,
			        videoStopOnClose: true,
			        // Close and reopen button
			        addCloseButton: false,
			        buttonStyle: 'icon',
			        enableESC: true,
			        reopenClass: 'openSlickModal-1',
			        // Additional events
			        onSlickLoad: function() {
			            // Remove item(s) from the cart
			            var count = $('#popup-1').find('.slickWindow .cartItems .item').length,
			            	t = 0;
			            $('#popup-1').find('.slickWindow .cartItems .item').each(function() {
			            	p = $(this).find('.data .price span').text().replace('$', '').replace('.','');
			            	f = Math.floor(p) / 100;
			            	t += f++;
			            	sum = parseFloat(t).toFixed(2);
			            	$(this).find('.data .remove').click(function() {
			            		count--
			            		p = $(this).siblings('.price').find('span').text().replace('$', '').replace('.','');
			            		f = Math.floor(p) / 100;
			            		sum = parseFloat(sum - f).toFixed(2);
			            		$('#popup-1 .slickWindow').find('.total span').text('$ ' + (sum));
			            		$(this).closest('.item').addClass('hidden').delay(300).queue(function() {
			            		    $(this).remove();
			            		});
			            		$('#popup-1 .slickWindow .info span').text(count);
			            		if (count < 1) {
			            			$('#popup-1 .slickWindow').find('.actions, .cartItems, .total, .info').hide();
			            			$('#popup-1').find('.slickWindow .emptyCart').fadeIn();
			            		}
			            	});
			            });
			        },
			        onSlickClose: function() {
			            console.log("Slick is hidden")
			        }
			    });
			   });

			});
		</script>
<script>


$( document ).ready(function() {

$('button').click(function(){
  $('.navbar-toggle').toggleClass('button-move');
  $('.navbar').addClass('green-move');
  $('.navmenu').toggleClass('nav-move');
})

$(window).click(function(){
  $('.navbar-toggle').removeClass('button-move');
  $('.navmenu').removeClass('nav-move');
  $('.navbar').addClass('green-move');

})



$(function() {

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();


        if (scroll >= 250) {
          $('.navbar').addClass("greenback");
        } else if($(window).width() < 767) {
          $('.navbar').addClass("greenback");
        } else {
          $('.navbar').removeClass("greenback");
        }
    });

});


});


$('.in').click(function(){
  // $(this).addClass('border');
  $(this).find('.lable_item').addClass('font-size');
  $(this).find('.your-name').addClass('change');
  $(this).find('.your-email').addClass('change');
  $(this).find('.your-subject').addClass('change');

  $(this).find('.wpcf7-number').addClass('change');
});

$('.wpcf7-textarea').click(function(){
  $(this).css({'padding-top':'50px'});
  $('.lable_item_textarea').addClass('font-size-textarea');
})


$('.wpcf7-text').focus(function(){
  $('.lable_item').addClass('font-size');
  $('.wpcf7-text').addClass('change');
})



$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});








</script>

    <!-- <script type="text/javascript">
    var s = skrollr.init();
    </script> -->

<script>
var value = $(document).width();
if(value > 1280){
  value = 1280;
}

$(document).ready(function(){
  $( "<style>.showcase::after { border-right: " + value + "px solid white; }</style>" ).appendTo( "head" );
  $( "<style>.row-styrelsen::before { border-left: " + value + "px solid white; }</style>" ).appendTo( "head" );
  $( "<style>.row-styrelsen::after { border-right: " + value + "px solid white; }</style>" ).appendTo( "head" );
  $( "<style>footer::before { border-left: " + value + "px solid white; }</style>" ).appendTo( "head" );



// // Create fresco gallery of wordpress galleries
   $('.gallery a').addClass('fresco');
  
   $('.gallery').each(function(i) {
     $(this).find('a').each(function() {
       $(this).attr('data-fresco-group', 'gallery' + i);
     });
   });

});

</script>


</body>
</html>

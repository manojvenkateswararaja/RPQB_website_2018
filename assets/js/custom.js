$(window).on('load resize', function(){
	
});
$(document).ready(function(){

/*--form_modal--*/
		$('.form_modal .form_label').click(function(e) {
			$(this).next().focus();
		});
		$('.form_modal .form-control').focusin(function(e) {
			 $(this).siblings('.form_label').css({'top':'-7px','font-size':'11px'});
		});
		$('.form_modal .form-control').focusout(function(e) {
		   if($(this).val().length == 0) {
			   $(this).siblings('.form_label').css({'top':'10px','font-size':'16px'})
		   }
		   else if($('.form_modal .form-control').val().length !== 0) {
				$(this).siblings('.form_label').css({'top':'-7px','font-size':'11px'});
		   }
		});
		/*--form_modal_link--*/
		
		
		/*--hamburger-ico--*/
		$(document).on('click','.hamburger-ico', function(){
			$('.page_left_section').toggleClass('open');
		});
	
		/*--submenu--*/
	$('.serice_menu_list').mouseenter(function(){
		$('.page_left_section').addClass('submenu-open');
	});
	
	$('.other_submenulist').mouseenter(function(){
		$('.page_left_section').removeClass('submenu-open');
	});

$(".menuitems li").click(function(){
	$(this).children("ul").slideToggle();
});
$(".goTop").click(function(){
	$("html, body").animate({scrollTop:0}, 500, 'swing');
});
$("#nav-icon1").click(function(){
	$(this).toggleClass('open');
});
$(window).scroll(function(){
	if($(this).scrollTop()>10){
		$(".goTop").fadeIn(500);
	}else{
		$(".goTop").fadeOut(500);
	}
});
});



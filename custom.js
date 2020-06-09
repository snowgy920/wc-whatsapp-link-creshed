(function($) {
	function porto_init_user_link_popups() {
		$(document).on('click', '.login-popup .porto-link-login', function(e){
			e.preventDefault();
			$.magnificPopup.close();
			$('#porto_login_form_trigger').click();
			return false;
		});
		$(document).on('click', '.login-popup .porto-link-register', function(e){
			e.preventDefault();
			$.magnificPopup.close();
			$('#porto_register_form_trigger').click();
			return false;
		});

		$('#porto_login_form_trigger').magnificPopup({
			tLoading: '<i class="porto-loading-icon"></i>',
			callbacks: {
				open: function() {
					$('#login_form_popup').show();
					$(window).trigger('porto_login_popup_opened');
				}
			}
		});
		$('#porto_register_form_trigger').magnificPopup({
			tLoading: '<i class="porto-loading-icon"></i>',
			callbacks: {
				open: function() {
					$('#register_form_popup').show();
					$(window).trigger('porto_login_popup_opened');
				}
			}
		});
	}
    $(document).ready(function(){
		if ($.isFunction($.fn.magnificPopup)) {
			porto_init_user_link_popups();
		} else {
			setTimeout(function() {
				if ($.isFunction($.fn.magnificPopup)) {
					porto_init_user_link_popups();
				}
			}, 500);
		}
    });

}).apply(this, [jQuery]);
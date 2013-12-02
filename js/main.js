$(document).ready(function () {	

	/* Captcha */
	var a = Math.ceil(Math.random() * 10);
    var b = Math.ceil(Math.random() * 10);       
    var c = a + b
    function DrawBotBoot()
    {
        $("<label>Combien font "+ a + " + " + b +"?</label>").appendTo( $('#captcha') );
        $("<input placeholder='Combien font "+ a + " + " + b +"?' id='BotBootInput' type='text' maxlength='2' size='2' required />").appendTo( $('#captcha') );
    }    
    function ValidBotBoot(){
        var d = document.getElementById('BotBootInput').value;
        if (d == c) return true;        
        return false;
        
    }
    DrawBotBoot();
	
	
	/* Contact form */
    $('#contact-form').submit(function(e) {
    	if(!ValidBotBoot()) {
    		alert("Le résultat n'est pas correct. Veuillez recommencer");
    		$('#captcha input').addClass('form-error').val('');
    	} else {
	    	$.ajax({
		    	async: false,
	            url:"/wordpress/wp-content/themes/aquakid/send-mail.php",
	            type: "POST",
	            dataType: "script",
	            data: $('#contact-form').serialize(),
	            success: function(){  
	            	$('.form-btn').toggle();
	                $('#form-success').toggle();
	                $('#captcha input').removeClass('form-error');
	            }
	        });
        }

        e.preventDefault();
        return false;
    });
    
    // Placeholders for old browsers
    placeholderOldBrowsers();
    
    // Loader only on home page
    if( $('body').hasClass( 'l-home' ) ) {
	    $('#home-characters').load(function(){
	    	$('#loader').animate({ 'opacity': '0' }, 500, function(){
	     		$(this).hide();
	    	});
	    });
    }
    
});

/**
* Placeholders for old browsers
*/
function placeholderOldBrowsers() {
    if (!Modernizr.input.autofocus) {
        $('input, textarea').each(function(){
            if ($(this).attr('autofocus'))
                $(this).focus();
        });
    }
    if (!Modernizr.input.placeholder) {
        $('input, textarea').each(function(){
            if ($(this).attr('placeholder')) {
                var placeholder_text = $(this).attr('placeholder');
                $(this).attr('value', placeholder_text).addClass('nc');
                $(this).val(placeholder_text)
            }
        });

        // for all fields with uncleared initial value, on focus
        $('.nc').focus(function() {
	
        	// if it is uncleared
	        if ($(this).hasClass('nc')) {
	
		        // remeber the initial value
		        $textbox = $(this).val();
		
		        // and remove it
		        $(this).removeClass('nc').val('');
       		}
        }).focusout(function() { // on focus out

	        // if there is no new value posted by user
	        if ($(this).val() == '')
	
	        	// mark as uncleared and show initial value
        		$(this).addClass('nc').val($textbox);
        });
    }
}
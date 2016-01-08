(function ($) {
	$( document ).ready(function() {
		var eventMethod = window.addEventListener ? 'addEventListener' : 'attachEvent';
		var eventer = window[eventMethod];
		var messageEvent = eventMethod == 'attachEvent' ? 'onmessage' : 'message';
		//listen to message from child window
		eventer(messageEvent, function(e) {			
			if($.isNumeric(e.data)){
				document.getElementById('iframeAdventureOffice').height = e.data + 'px';	
			}
		}, false);
	});	
})(jQuery);

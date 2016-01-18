

    $(document).ready(function(){
    	//when the page is loaded, DO THE THING

    	$('.carousel').carousel({
        	interval: 5000//changes the speed
    	});

    	$('button.service-btn').click(function(){
    		//when a button with the class "service-btn" is clicked...
    		console.log($(this).attr("data-service-name"));

    	});

    });
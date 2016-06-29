

    $(document).ready(function(){
    	//when the page is loaded, DO THE THING

    	$('.carousel').carousel({
        	interval: 5000//changes the speed
    	});

    	$('button.service-btn').click(function(){
    		//when a button with the class "service-btn" is clicked...

            var serviceName = $(this).attr('data-service-name');

            $('#mustache-render').load(
                "mustache_templates/"+serviceName+"-form.mustache #"+serviceName+"-form",
                function(){
                    $("#form-content").html(
                        Mustache.render(
                            $("#"+serviceName+"-form").html(),
                            null
                        )

                    );
                }
            );

            $('html, body').animate({
                scrollTop: $("#form-title").offset().top
            }, 700);

    	});

    });
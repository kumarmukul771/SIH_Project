$(document).ready(function()
{
	$(window).scroll(function()
	{
		// if from is greater than 40px then show the button else hide the button
		if( $(this).scrollTop()>40 )
		$('#topBtn').fadeIn();
		else
		$('#topBtn').fadeOut();

	})

	// if click on the button , then move the page ( body or html ) to top i.e 0px from top
	$('#topBtn').click(function()
	{
		// $('html,body').animate ....
		// write above code or below one
		
		$('html').animate(
		{
			scrollTop: 0
		}, 800);
	})
})
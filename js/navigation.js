$(document).ready(function()
{
	//menu hiding
	$('img_txt').click(function()
	{
		var image		= $(this).find('.arrow').get(0);
		var container	= $(this).next('nav_items');

		if ($(container).is(':hidden'))
		{
			$(image).attr('src', '/imgages/arrow-down_black.png');
		}
		else
		{
			$(image).attr('src', '/images/arrow-right_black.png');
		}

		$(container).slideToggle('fast');
	});

	//innitial setup
	set_spans();

	$('#account_menu')
		.css('width', $('#account_menu').width() + 14 + 'px');
	$('#account_nav .nav_containerInner').css('width', $('#account_menu').css('width'));

	function set_spans()
	{
		$('#account_nav span').html($('#account_menu option:selected').html());
	}
});
function openMashon() {
	open('/mashon','mashon',"status=0,resizable=0,height=700,width=1024,scrollbars=0,directories=0,menubar=0,location=0,toolbar=0");
}
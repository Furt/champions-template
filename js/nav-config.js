animatedcollapse.addDiv('nav_home', 'fade=0,speed=100')
animatedcollapse.addDiv('nav_com', 'fade=0,speed=100')
animatedcollapse.addDiv('nav_login', 'fade=0,speed=100')
animatedcollapse.addDiv('nav_help', 'fade=0,speed=100')
animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()
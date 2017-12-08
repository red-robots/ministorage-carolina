/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	$('.analytics a').one('click',function(e){
	    e.preventDefault();
	    function temp(){
	        var $this = $(this);
	        if($this.attr('href')!==undefined) {
                window.location = $this.attr('href');
            }
        }
        var placeClick = temp.bind(this);
	    setTimeout(placeClick,1000);

		var label_regex = new RegExp("\\blabel:\\S+\\b");
		var cat_regex = new RegExp("\\bcat:\\S+\\b");
		var action_regex = new RegExp("\\baction:\\S+\\b");
		var label_matches = this.className.match(label_regex);
		var cat_matches = this.className.match(cat_regex);
		var action_matches = this.className.match(action_regex);
		var label = null;
		var cat = null;
		var action = null;
		if(label_matches){
			label = label_matches[0].split(':')[1];
		}
		if(cat_matches){
			cat = cat_matches[0].split(':')[1];
		}
		if(action_matches){
			action = action_matches[0].split(':')[1];
		}
		if(cat||label||action){
			ga('send', {
				hitType: 'event',
				hitCallback: function(){
					placeClick();
				},
				eventCategory: cat,
				eventAction: action,
				eventLabel: label,
				eventValue: 1
			});
		}
    });

	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});

	/*
	*
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
 	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
		smoothHeight: true
	}); // end register flexslider
	

	 // The slider being synced must be initialized first
	  $('#carousel').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth: 100,
	    itemMargin: 5,
	    asNavFor: '#slider'
	  });
	 
	  $('#slider').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel"
	  });
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	

	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

});// END #####################################    END
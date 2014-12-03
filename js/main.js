jQuery(document).ready(function($) {

	// initialize Isotope after all images have loaded
var $container = $('#portfolio-items').imagesLoaded( function() {
  
	  	$container.isotope({
		  	itemSelector: '.item',
		  	layoutMode: 'fitRows'
	  	});
  
  });
  
  	// initialize RoyalSlider
  	$(".royalSlider").royalSlider({
        // options go here
        // as an example, enable keyboard arrows nav
        keyboardNavEnabled: true
	}); 
	
	
    $("#menu").mmenu({
       "offCanvas": {
          "zposition": "front",
          "position": "bottom"
       },
       "footer": {
          "add": true,
          "title": "Global"
       },
       "header": true
    });
       
 

  
});



					




jQuery(document).ready(function($) {
  $('#full-width-slider').royalSlider({
    arrowsNav: true,
    loop: false,
    keyboardNavEnabled: true,
    controlsInside: false,
    imageScaleMode: 'fill',
    arrowsNavAutoHide: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 960,     
    autoScaleSliderHeight: 350,
    controlNavigation: 'bullets',
    thumbsFitInViewport: false,
    navigateByClick: true,
    startSlideId: 0,
    autoPlay: false,
    transitionType:'move',
    globalCaption: false,
    deeplinking: {
      enabled: true,
      change: false
    },
    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
    imgWidth: 1400,
    imgHeight: 680
  });
});

jQuery(document).ready(function($) {
  $('#gallery-1').royalSlider({
    fullscreen: {
      enabled: true,
      nativeFS: true
    },
    controlNavigation: 'thumbnails',
    //autoScaleSlider: true, 
    //autoScaleSliderWidth: 960,     
    //autoScaleSliderHeight: 850,
    loop: false,
    imageScaleMode: 'fit-if-smaller',
    navigateByClick: true,
    numImagesToPreload:2,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    fadeinLoadedSlide: true,
    globalCaption: false,
    globalCaptionInside: false,
    thumbs: {
      appendSpan: true,
      firstMargin: true,
      paddingBottom: 4
    }
  });
});
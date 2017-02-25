$(function() {

  // For Bootstrap Carousel
	// $('.carousel').carousel({interval: 7000});

  // setting navLogo link to go back to home page
	if($('body').attr('id') != 'home'){
		$('ul.nav').children("li").children("a").each(function() {
			$(this).attr('href','/' + $(this).attr('href'));
		});
		$('#navLogo').attr('href','/');
	}
    // change FB like box for small screens
    if ($(window).width() <= 768) {
    	$('.fb-like-box').attr('data-width','300px');
    	$('.fb-like-box').attr('data-height','285px');
    	$('.fb-like-box').attr('data-stream',false);
    }


// 	//highlight current nav
// 	$("# a:id('navLogo')").addClass('active');
// 	$("#about a:contains('About')").parent().addClass('active');
	$("#calendarPage a:contains('Calendar')").parent().addClass('active');
// 	$("#instructors a:contains('Instructors')").parent().addClass('active');
  $("#forms a:contains('Forms')").parent().addClass('active');

	$("#events a:contains('Events')").parent().addClass('active');
// 	$("#classes a:contains('Classes')").parent().addClass('active');
// 	$("#gallery a:contains('Gallery')").parent().addClass('active');
	$("#history a:contains('History')").parent().addClass('active');
	$("#payment a:contains('Payment')").parent().addClass('active');
});


var lastId,
    topMenu = $("#topNav"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });


menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;

  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 500);
  e.preventDefault();

  if($(window).width() <= 768){
      $('.navbar-collapse').collapse('hide');
  }

});

$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});

(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

var gallery = $("#gallery"),
    galleryImgs1 = gallery.find("img");

galleryImgs1.on('click',function() {

      $('#galleryModal1').modal({
        show: true,
      });

});

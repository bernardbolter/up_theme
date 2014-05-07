$( window ).load(function() {
	$('#hero_bot').css('width', '100%').css('width', '-=175px');
	$('#hero_top').css('width', '100%').css('width', '-=175px');
});

$( window ).resize(function() {
	$('#hero_bot').css('width', '100%').css('width', '-=175px');
	$('#hero_top').css('width', '100%').css('width', '-=175px');
});

$(document).ready(function(){
	var userFeed = new Instafeed({
        get: 'user',
        userId: 785386824,
        accessToken: '785386824.467ede5.5bf6ecb3d1ba45008205930d2a3f4ea9',
        limit: 1,
        resolution: 'low_resolution',
        template: '<div class="instafeed_image"><a href="{{link}}" class="insta_link_img"><img src="{{image}}" /><p class="insta_link_text">#pullupgallery<span class="insta_link_text_under"><span class="icon-instagram"></span> follow on instagram</span></p></a></div>'
    });
    userFeed.run();
 });

$(window).load(function() {
			$('.insta_caption').each(function(){
			    var $this=$(this);
				$this.html($this.text().replace(/(?:\s|^)(?:#(?!(?:\d+|\w+?_|_\w+?)(?:\s|$)))(\w+)(?=\s|$)/g, '<span style="color: #204f86; opacity: 0.8;">$&</span>'));
	});
});

$(document).ready(function() {
$('.contact_nav').singlePageNav({
		speed: 2000
	});        
});
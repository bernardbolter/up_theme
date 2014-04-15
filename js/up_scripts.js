$( window ).load(function() {
	var hero = $('#hero');
	var head_height = hero.height();
	$('#hero_bot').css('top', head_height).css('top', '-=18px');
	$('#hero_border_right').css('height', head_height).css('height', '-=224px');
	$('#hero_border_left').css('height', head_height).css('height', '-=224px');
	$('#hero_bot').css('width', '100%').css('width', '-=224px');
	$('#hero_top').css('width', '100%').css('width', '-=224px');
});

$( window ).resize(function() {
	var hero_2 = $('#hero');
	var head_height_2 = hero_2.height();
	$('#hero_bot').css('top', head_height_2).css('top', '-=18px');
	$('#hero_border_right').css('height', head_height_2).css('height', '-=224px');
	$('#hero_border_left').css('height', head_height_2).css('height', '-=224px');
	$('#hero_bot').css('width', '100%').css('width', '-=224px');
	$('#hero_top').css('width', '100%').css('width', '-=224px');
});

$(document).ready(function(){
	var userFeed = new Instafeed({
        get: 'user',
        userId: 785386824,
        accessToken: '785386824.467ede5.5bf6ecb3d1ba45008205930d2a3f4ea9',
        limit: 1,
        resolution: 'low_resolution',
        template: '<div class="instafeed_image"><a href="{{link}}" class="insta_link_img"><img src="{{image}}" /><p class="insta_link_text">#pullupgallery<span class="insta_link_text_under">follow on instagram</span></p></a></div><div class="color_tweet_box"><a href="http://www.twitter.com/pullupgallery" class="tweet_box"><div class="tweet_icons"><span class="icon-twitter"></span><span class="icon-instagram"></span></div><p class="insta_caption">{{caption}}</p><p class="tweet_follow">follow on twitter</p></a></div>'
    });
    userFeed.run();
 });

$(window).load(function() {
			$('.insta_caption').each(function(){
			    var $this=$(this);
				$this.html($this.text().replace(/(?:\s|^)(?:#(?!(?:\d+|\w+?_|_\w+?)(?:\s|$)))(\w+)(?=\s|$)/g, '<span style="color: red; opacity: 0.8;">$&</span>'));
	});
});
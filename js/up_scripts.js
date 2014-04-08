$( document ).ready(function() {
    $('#hero_top').css('width', '100%').css('width', '-=224px');
});

$( window ).resize(function() {
    $('#hero_top').css('width', '100%').css('width', '-=224px');
});

$( document ).ready(function() {
    $('#hero_bot').css('width', '100%').css('width', '-=224px');
});

$( window ).resize(function() {
    $('#hero_bot').css('width', '100%').css('width', '-=224px');
});

$( document ).ready(function() {
	var hero = $('#hero');
	var head_height = hero.height();
	$('#hero_bot').css('top', head_height).css('top', '-=18px');
	$('#hero_border_right').css('height', head_height).css('height', '-=224px');
	$('#hero_border_left').css('height', head_height).css('height', '-=224px');
});

$( window ).resize(function() {
	var hero_2 = $('#hero');
	var head_height_2 = hero_2.height();
	$('#hero_bot').css('top', head_height_2).css('top', '-=18px');
	$('#hero_border_right').css('height', head_height_2).css('height', '-=224px');
	$('#hero_border_left').css('height', head_height_2).css('height', '-=224px');
});
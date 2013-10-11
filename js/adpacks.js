jQuery(function($){

	// AdPacks CSS
	var css = '\
		#bsaHolder{				right: 25px;position: absolute;	top: 0;	width: 375px;z-index: 10;}\
		#bsaHolder span{		text-shadow:1px 1px 0 #fff;}\
		#bsap_aplink,\
		#bsap_aplink:visited{	bottom: 10px;color: #aaa;font: 11px arial, sans-serif;position: absolute;right: 14px;border:none;}\
		#bsaHolder .bsa_it_p{	display:none;}\
		#bsaHolder .bsa_it_ad{	height: 110px; font-size: 12px; background: -moz-linear-gradient(#F3F3F3, #FFFFFF, #F3F3F3) repeat scroll 0 0 transparent; background: -webkit-gradient(linear,0% 0%,0% 100%,color-stop(0, #f3f3f3),color-stop(0.5, #fff),color-stop(1, #f3f3f3)); background-color:#f4f4f4;\
								border-color: #fff;overflow: hidden;padding: 10px 10px 0;-moz-box-shadow: 0 0 2px #999;-webkit-box-shadow: 0 0 2px #999;box-shadow: 0 0 2px #999;\
								-moz-border-radius: 0 0 4px 4px;-webkit-border-radius: 0 0 4px 4px;border-radius: 0 0 4px 4px;}\
		#bsaHolder img{			display:block;border:none;float: left;}\
		#bsa_closeAd{			width:15px;height:15px;overflow:hidden;position:absolute;top:10px;right:11px;border:none !important;\
								text-decoration:none !important;background:url("http://www.jquery4u.com/demos/images/x_icon.png") no-repeat;}\
		#bsa_closeAd:hover{	background-position:left bottom;}\
		.bsa_it_t {  font-size: 14px !important; color: black; display: inline-block;    font-weight: bold;    margin-bottom:\5px;    padding-left: 10px;    width: 200px; margin-bottom: 10px; }\	.bsa_it_d {  color: black; display: block; margin-left: 130px; padding: 10px; }\
		#bsaHolder a { text-decoration: none; }\
	';

	addStyle(css);

	// AdPacks markup
	$('body').prepend('<div id="bsaHolder">\
		<a href="" id="bsa_closeAd" title="Hide this Ad!"></a>\
    	<div id="bsap_1266165" class="bsarocks bsap_ea957971a5e1fed9f25dd8e7a8b9f59e"></div>\
	    <a href="http://adpacks.com" id="bsap_aplink">via Ad Packs</a>\
	</div>');

	// $('<a>',{
		// href:'',
		// id:'bsa_closeAd',
		// title:'Hide this Ad!',
		// click:function(){
			// $(this).parent().remove();
			// return false;
		// }
	// }).appendTo('#bsaHolder');
	
	$('#bsa_closeAd').bind('click', function(e) {
		e.preventDefault();
		$('#bsaHolder').remove();
		return false;
	});

	// AdPacks.com ad code
	(function(){
	  var bsa = document.createElement('script');
		 bsa.type = 'text/javascript';
		 bsa.async = true;
		 bsa.src = '//s3.buysellads.com/ac/bsa.js';
	  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
	})();
	
	
	function addStyle(str){
		var style = document.createElement('style');
	
		style.setAttribute("type", "text/css");
		if (style.styleSheet) {   // IE
			style.styleSheet.cssText = str;
		} else {                // the world
			style.appendChild(document.createTextNode(str));
		}
		
		jQuery('head').append(style);
		$('html').css('background-attachment','scroll');
	}
});
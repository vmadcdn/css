<?
$body_width = $_GET['bw'];if(!$body_width){$body_width = 100;}
?>
body {background: #333333; font-family: "Trebuchet MS", Trebuchet, Verdana; font-size: 0.8em;}
div#container {margin: auto; background: #FFFFFF; width: <?=$body_width;?>px;}
div#content {margin-top: 5px; background: #FFFFFF; width: <?=($body_width-30);?>px; border: 10px solid #FFFFFF;}
div#nav {float: left; width: <?=($body_width-45);?>px; background: #FFFFFF; border: 1px solid #C08DD0; padding: 5px 5px 5px 5px; margin-top: 10px;}
	div#nav h1 {color: #5a0377; font-size: 1.3em; margin: 0px;}
	div#nav h2 {color: #5a0377; font-size: 1.2em; margin: 0px; padding-left: 10px;}
	div#nav ul {padding: 5px 5px 10px 20px; margin: 0px;}
	div#nav li {list-style:none; }
	div#nav a, div#nav a:hover, div#nav a:visited {text-decoration: none; color: #5a0377}
	div#nav a:visited {color: #9909c8;}
div#text  {float: left; width: <?=($body_width-20);?>px; background: #FFFFFF; padding: 10px 5px 5px 5px;}
	div.entry  {border: 1px solid #C08DD0; padding: 1px; margin-bottom: 10px;}
	div.button  {border: 0px solid #C08DD0; padding: 1px; margin-bottom: 5px;}
	div.entry h1 {background: #5A0377; padding-left: 5px; color: #FFFFFF; font-size: 1.5em;}
	div.entry h2 {background: #E7D3EE; padding-left: 10px; font-size: 1.3em; color: #5a0377;}
	div.entry a , div.entry a:hover {color: #5a0377; text-decoration: underline;}
	div.entry a:visited {color: #9909c8;}
/*div#header {position: absolute; top: 0px; background: #750799 url(header.jpg) no-repeat; height: 300px; width: 980px; border: 10px solid #FFFFFF;}*/
span.note {font-size: 0.7em;}

table { border-collapse: collapse; font-size: 1em; width: 100%; }
col#title { width: 30%; }
col#tagline { width: 45%; }
col#genre { width: 10%; }
col#score { width: 8%; }
col#code { width: 7%; }

.clearfix:after {content:"."; display:block; height:0; clear:both; visibility:hidden;}
.clearfix {display:inline-block;}
/* Hide from IE Mac \*/
.clearfix {display:block;}
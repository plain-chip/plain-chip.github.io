
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html><head><!-- Welcome to some of the ugliest HTML ever!!! -->
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<meta content="Irongeek, Iron geek, vulnerabilities, pen-testing, videos, hacking, hacker, zaurus, articles, tutorials" name="keywords"> 
<meta content="Irongeek's Information Security site with tutorials, articles and other information." name="description">
<meta content="Irongeek.com" name="author"> <meta content="Irongeek.com" name="copyright">
<style type="text/css">
/*I got the idea and main code for the tabs from EXPLODING-BOY.COM */
body {
float:left;
margin:0;
padding:0;
font: 12px/1.5em Arial;
line-height: 1.3;
}
h2 {
font: bold 14px Verdana, Arial, Helvetica, sans-serif;
color: #000;
/* margin: 0px; */
padding: 0px 0px 0px 15px;
}
img {
border: none;
} 
/*- Menu Tabs 1--------------------------- */ 
#tabs1 {
width:100%;
background:#58D60D;
font-size:75%;
font-weight: bold;
line-height:normal;
border-bottom:0px solid #BCD2E6;
}
#tabs1 ul {
margin:0;
padding:0px 0px 0 0px;
list-style:none;
}
#tabs1 li {
float:center;
display:inline;
margin:0;
padding:0;
}
#tabs1 a {
float:left;
background:url("images/css/tableft1.gif") no-repeat left top;
margin:0;
padding:0 0 0 4px;
text-decoration:none;
A { text-decoration:none }
}
#tabs1 a span {
float:left;
display:block;
background:url("images/css/tabright1.png") no-repeat right top;
padding:5px 15px 4px 6px;
color:#009900;
}
/* Commented Backslash Hack hides rule from IE5-Mac \*/
#tabs1 a span {float:none;}
/* End IE5-Mac hack */
#tabs a:hover span {
color:#00aa00;
}
#tabs1 a:hover {
background-position:0% -42px;
}
#tabs1 a:hover span {
background-position:100% -42px;
}
</style><style type="text/css">
.adHeadline {font: bold 8pt Arial; text-decoration: underline; color: #2BA94F;}
.adText {font: normal 8pt Arial; text-decoration: none; color: #000000;}
</style><style type="text/css">
.adHeadline {font: bold 8pt Arial; text-decoration: underline; color: #2BA94F;}
.adText {font: normal 8pt Arial; text-decoration: none; color: #000000;}
</style>
</head>
<body style="background-color: rgb(0, 0, 0);" link="#008000" vlink="#002000"><div align="left">
<table style="border-collapse: collapse;" bgcolor="#ffffff" border="0" cellpadding="12" cellspacing="0">
<tbody> <tr> 
<td colspan="2"> 
<table width="95%">
<TR>
<td><a href="//www.irongeek.com/"><img src="/sigs/logo.php" alt="A Logo" align="left" border="0" ></a>
</td>
<TD align="center">
<!-- temp section for banners and such -->
</TD>
<TD align="center">
<p>Feel free to include my content in your page via my<br>
<a href="https://feedproxy.google.com/IrongeeksSecuritySite">RSS feed<img border="0" align="middle" src="/images/irongeekbutton.png"><img border="0" src="/images/feed-icon-28x28.png" align="middle"></a>
<a href="https://twitter.com/irongeek_adc" class="twitter-follow-button" data-show-count="false">Follow @irongeek_adc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</TD>
<TD align="right">
<!--  Donation Code -->
<small>Help Irongeek.com pay for <BR>bandwidth and research equipment:</small><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="irongeek@irongeek.com">
<input type="hidden" name="item_name" value="Irongeek's Website Bandwidth &amp; Research Fund">
<input type="hidden" name="buyer_credit_promo_code" value="">
<input type="hidden" name="buyer_credit_product_category" value="">
<input type="hidden" name="buyer_credit_shipping_method" value="">
<input type="hidden" name="buyer_credit_user_address_change" value="">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-DonationsBF">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> 
<!--  Donation Code -->
<a href="https://www.subscribestar.com/irongeek">Subscribestar</a> or
<a href="https://www.patreon.com/irongeek">Patreon</a>
</TD></TR></TABLE>
</td></tr>
<tr>
<td align="center" colspan="2"  bgcolor="#58D60D" STYLE="background-image: 
     url('images/tile_back.gif'); background-repeat:repeat-y;">
<center>
<!-- Begin Google Ads -->
<script type="text/javascript"><!--
google_ad_client = "pub-3256770407637090";
//Link Bar
google_ad_slot = "4488811736";
google_ad_width = 728;
google_ad_height = 15;
//--></script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- End Google Ads -->
</center>
<P>
<div id="tabs1" align="left">
<ul>
<li><a href="/"><span>Irongeek Security</span></a></li>
<li><a href="i.php?page=security/hackingillustrated"><span>Hacking Illustrated Videos</span></a></li>
<li><a href="i.php?page=security/security"><span>InfoSec Articles</span></a></li>
<li><a href="i.php?page=mobile-device-hacking"><span>Mobile Pen-testing Tools</span></a></li>
<li><a href="i.php?page=security/code"><span>Apps/Scripts</span></a></li>
<li><a href="i.php?page=reviews/reviews"><span>Reviews</span></a></li>
<li><a href="https://feedproxy.google.com/IrongeeksSecuritySite"><span>RSS</span></a></li>
<li><a href="browserinfo.php"><span>Your IP</span></a></li>
<li><a href="security-podcasts.php"><span>Podcasts</span></a></li>
<li><a href="i.php?page=hoosier"><span>Hoosier Hackers</span></a></li>
<li><a href="newscat.php"><span>Newscat</span></a></li>
<li><a href="i.php?page=links"><span>Links</span></a></li>
<li><a href="i.php?page=contact"><span>Contact</span></a></li>
<li><a href="i.php?page=forum/index"><span>Forums</span></a></li>
<li><a href="i.php?page=workout/workout"><span>Workout</span></a></li>
<li><a href="i.php?page=fitness/nutrition"><span>Nutrition</span></a></li>
<li><a href="i.php?page=fitness/supplements"><span>Supplements</span></a></li>
<li><a href="i.php?page=humor/humor"><span>Humor</span></a></li>
<li><a href="i.php?page=campuses-that-use-irongeek-for-teaching-infosec-in-higher-education"><span>Irongeek Campuses</span></a></li>
<li><a href="fed-watch.php"><span>Fed Watch</span></a></li>
<li><a href="i.php?page=books"><span>Books</span></a></li>
<li><a href="http://www.printfection.com/irongeek/"><span>Store</span></a></li>
<li><a href="i.php?page=about"><span>About</span></a></li>
<li><span><a href="https://twitter.com/irongeek_adc" class="twitter-follow-button" data-show-count="false">Follow @irongeek_adc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></span></li>
</ul>
</div>
</td></tr> <tr> <td valign="top" width="100" bgcolor="#58D60D" STYLE="background-image: 
     url('images/tile_back.gif'); background-repeat:repeat-y;">
<p>
<!-- Bandwidth Help -->

<!-- Bandwidth Help -->
<!-- SiteSearch Google -->
Search Irongeek.com:<br>
<form action="https://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3256770407637090:2007347459">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="text" name="q" size="25">
    <input type="submit" name="sa" value="Search">
  </div>
</form>

<script type="text/javascript" src="https://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>
<!--  End SiteSearch Google -->
<!--  Start Google Translate-->
<div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    gaTrack: true,
    gaId: 'UA-186935-2'
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!--  End Google Translate-->
Affiliates:<br>
<a href="http://www.irongeek.com/"><img src="/images/irongeekbutton.png" alt="Irongeek Button" border="0"></a><br>
<a href="http://www.social-engineer.com/social-engineer-training/"><img src="/images/buttons/se-88x31.gif" alt="Social-engineer-training Button" border="0"></a><br>
<br>
<p>
<p>	 
Help Irongeek.com pay for bandwidth and research equipment:</p>
<!-- Donation Code -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="irongeek@irongeek.com">
<input type="hidden" name="item_name" value="Irongeek's Website Bandwidth &amp; Research Fund">
<input type="hidden" name="buyer_credit_promo_code" value="">
<input type="hidden" name="buyer_credit_product_category" value="">
<input type="hidden" name="buyer_credit_shipping_method" value="">
<input type="hidden" name="buyer_credit_user_address_change" value="">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax" value="0">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-DonationsBF">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="paypalpixle" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
<td valign="top" > 
<div STYLE="text-align:center;">
<!-- Begin Google Ads -->
<script type="text/javascript"><!--
google_ad_client = "pub-3256770407637090";
//Top Banner
google_ad_slot = "5139272459";
google_ad_width = 728;
google_ad_height = 90;
//--></script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- End Google Ads --> 
</div>
<br>

<p align="left">
<BR>
<div STYLE="position:relative; float: right;">
<!-- Begin Google Ads -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Right Skyscraper -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-3256770407637090"
     data-ad-slot="8538484264"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- End Google Ads -->
</div> 
<div>
<p>
<!-- google_ad_section_start -->
<!-- Begin Content --><title>Homoglyph Attack Generator and Punycode Converter</title>
<script type="text/javascript">
function genForm()
{
var HostNameWC=document.forms["HomoForm"]["hname"].value;
var HostName=HostNameWC.toLowerCase();
var finalstring="";
var Homos=new Array();
Homos[' ']=' ᅟᅠ         　ㅤ';
Homos['!']='!ǃ！';
Homos['"']='"״″＂';
Homos['$']='$＄';
Homos['%']='%％';
Homos['&']='&＆';
Homos["'"]="'＇";
Homos['(']='(﹝（';
Homos[')']=')﹞）';
Homos['*']='*⁎＊';
Homos['+']='+＋';
Homos[',']=',‚，';
Homos['-']='-‐𐆑－';
Homos['.']='.٠۔܁܂․‧。．｡';
Homos['/']='/̸⁄∕╱⫻⫽／ﾉ';
Homos['0']="0OoΟοОоՕ𐒆Ｏｏ";
Homos['o']='Oo0ΟοОоՕ𐒆Ｏｏ';
Homos['1']='1Iا１';
Homos['2']='2２';
Homos['3']='3３';
Homos['4']='4４';
Homos['5']='5５';
Homos['6']='6６';
Homos['7']='7𐒇７';
Homos['8']='8Ց８';
Homos['9']='9９';
Homos[':']=':։܃܄∶꞉：';
Homos[';']=';;；';
Homos['<']='<‹＜';
Homos['=']='=𐆐＝';
Homos['>']='>›＞';
Homos['?']='?？';
Homos['@']='@＠';
Homos['[']='[［';
Homos['\\']='\\＼';
Homos[']']=']］';
Homos['^']='^＾';
Homos['_']='_＿';
Homos['`']='`｀';
Homos['a']='AaÀÁÂÃÄÅàáâãäåɑΑαаᎪＡａ';
Homos['b']='BbßʙΒβВЬᏴᛒＢｂ';
Homos['c']='CcϲϹСсᏟⅭⅽ𐒨Ｃｃ';
Homos['d']='DdĎďĐđԁժᎠḍⅮⅾＤｄ';
Homos['e']='EeÈÉÊËéêëĒēĔĕĖėĘĚěΕЕеᎬＥｅ';
Homos['f']='FfϜＦｆ';
Homos['g']='GgɡɢԌնᏀＧｇ';
Homos['h']='HhʜΗНһᎻＨｈ';
Homos['i']='IilɩΙІіاᎥᛁⅠⅰ𐒃Ｉｉ';
Homos['j']='JjϳЈјյᎫＪｊ';
Homos['k']='KkΚκКᏦᛕKＫｋ';
Homos['l']='LlʟιاᏞⅬⅼＬｌ';
Homos['m']='MmΜϺМᎷᛖⅯⅿＭｍ';
Homos['n']='NnɴΝＮｎ';
Homos['0']="0OoΟοОоՕ𐒆Ｏｏ";
Homos['o']='Oo0ΟοОоՕ𐒆Ｏｏ';
Homos['p']='PpΡρРрᏢＰｐ';
Homos['q']='QqႭႳＱｑ';
Homos['r']='RrʀԻᏒᚱＲｒ';
Homos['s']='SsЅѕՏႽᏚ𐒖Ｓｓ';
Homos['t']='TtΤτТᎢＴｔ';
Homos['u']='UuμυԱՍ⋃Ｕｕ';
Homos['v']='VvνѴѵᏙⅤⅴＶｖ';
Homos['w']='WwѡᎳＷｗ';
Homos['x']='XxΧχХхⅩⅹＸｘ';
Homos['y']='YyʏΥγуҮＹｙ';
Homos['z']='ZzΖᏃＺｚ';
Homos['{']='{｛';
Homos['|']='|ǀا｜';
Homos['}']='}｝';
Homos['~']='~⁓～';
Homos['ß']='ßӧ';
Homos['ä']='ÄӒ';
Homos['ö']='ÖӦ';
finalstring='<td valign="top"><input type="radio" onClick="UpdateOutput()"' +CheckedStr+ ' name="lcrev" value="' + String.fromCharCode(0x202E) + '" />Rev<sup>202E</sup><br></td>';
for (LettersIndex=0; LettersIndex < HostName.length; LettersIndex++){
	var TheChoices='';
	var CheckedStr="";
	var ValueInsert="";
	if (typeof Homos[HostName[LettersIndex]] === "undefined"){
	}else{
	for (HomosIndex=0; HomosIndex < Homos[HostName[LettersIndex]].length; HomosIndex++){
		var ThisChar=Homos[HostName[LettersIndex]][HomosIndex];
		var UnicodeCodePoint=ThisChar.charCodeAt(0).toString(16);
		var UnicodeCodePointColor=(parseInt(UnicodeCodePoint,16)*parseInt(100,16)).toString(16);
		if ((isLetter(HostNameWC[LettersIndex]) && ((isUpperCase(HostNameWC[LettersIndex]) && HomosIndex==0) || (isLowerCase(HostNameWC[LettersIndex]) && HomosIndex==1)))|| (!isLetter(HostNameWC[LettersIndex]) && HomosIndex==0)){
			CheckedStr='checked="checked"';
		} else{
			CheckedStr="";
		}
		if (ThisChar=='"'){
			ValueInsert= "value='" + ThisChar +"'";
		} else {
			ValueInsert= 'value="' + ThisChar +'"';
		}
		TheChoices=TheChoices+'<input type="radio" onClick="UpdateOutput()"' +CheckedStr+ ' name="lc' + LettersIndex +'" ' + ValueInsert + ' />' + ThisChar +'<sup style="color:#' + UnicodeCodePointColor +';font-size : smaller;">'+ UnicodeCodePoint + '</sup></br>';
	}
	finalstring=finalstring+'<td valign="top">' + TheChoices +'</td>';
	
}
document.getElementById("choices").innerHTML='<table><tr>'+finalstring+'</tr></table>';
UpdateOutput();
}
}


function UpdateOutput(){
var HostName=document.forms["HomoForm"]["hname"].value.toLowerCase();
var HostString="";
var finallinkstring="";
var finalplainstring="";
var finalstring="";
var FilteredHostString="";
HostString=HostString+getCheckedValue(document.forms["HomoForm"]["lcrev"]);
for(ChoiceIndex=0;ChoiceIndex < HostName.length;ChoiceIndex++){
	HostString=HostString+getCheckedValue(document.forms["HomoForm"]["lc"+ChoiceIndex]);
}
FilteredHostString=escapeHTMLEncode(HostString);
document.forms["HomoForm"]["uhname"].value=HostString;
finallinkstring='This one is for testing linking:<p><a href="http://' + FilteredHostString +'">' + FilteredHostString +"</a><p>";
finalplainstring='This one is so you can copy & paste:<p>' +FilteredHostString;
finalstring=finallinkstring+finalplainstring;
document.getElementById("output").innerHTML=finalstring;
}

//Function from http://www.somacon.com/p143.php
function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}

//2 Functions from Josh at http://stackoverflow.com/questions/1027224/how-can-i-test-if-a-letter-in-a-string-is-uppercase-or-lowercase-using-javascrip
function isUpperCase(myString) { 
  return (myString == myString.toUpperCase()); 
} 
function isLowerCase(myString) { 
  return (myString == myString.toLowerCase()); 
}

function isNoCase(myString) { 
  return (isLowerCase(myString)==isUpperCase(myString)); 
}
//Function from pointy http://stackoverflow.com/questions/5212132/check-for-letter-validation-not-working
function isLetter(c) {
  c = c.toUpperCase();
  return c >= "A" && c <= "Z";
}
//Function from http://sanzon.wordpress.com/2008/05/01/neat-little-html-encoding-trick-in-javascript/
 function escapeHTMLEncode(str) {
  var div = document.createElement('div');
  var text = document.createTextNode(str);
  div.appendChild(text);
  return div.innerHTML;
 }
</script>
</head>

<body>
<h1><center>Homoglyph Attack Generator</center></h1> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This app is meant to make it easier to 
generate homographs based on Homoglyphs than having to search for 
look-a-like character in Unicode, then coping and pasting. Please use 
only for legitimate pen-test purposes and user awareness training. I 
also recommend webapp developers use it to test out possible user 
impersonation attacks in their code. This is still a work in progress, 
so please send me suggestions (especially for new Homoglyphs to add). 
While this tool was designed with making IDNA/Punycode names for putting 
into DNS to display foreign characters in a browsers URL bar, it can be 
used for other things. Try ignoring the IDNA/Punycode stuff and just 
making look alike user names for systems that accept Unicode. I made 
this tool to easily generate homographs based on homoglyphs in Unicode 
and to test out how different apps display them. It seems like a lot of 
modern browsers have gotten better at warning the users of attack, but 
I'd love to hear experiences about other apps that accept 
Unicode/Punycode/Internationalized Domain Names, especially 
webapps.<p>For more information see my <a 
href="http://www.irongeek.com/i.php?page=security/homoglyph-attack-proje 
ct"> Paper Proposal for &quot;Out of Character: Use of Punycode and 
Homoglyph Attacks to Obfuscate URLs for Phishing&quot;</a>. 


<form name="HomoForm" method="post">
<table border="0" cellpadding="2" cellspacing="2" align="center">
<tr><td><b>1st</b>, type in a name to look like:</td><td><input type="text" size="100" name="hname" onkeyup="genForm()" onchange="genForm()" onclick="genForm()" value=""></td></tr>
<tr><td><b>2nd</b>, choose homoglyphs to use:</td><td><p id="choices"></p></td></tr>
<tr><td><b>3rd</b>, Output will be something like this:</td><td><p id="output">Output appears here.</p></td></tr>
<tr><td><b>4th</b> submit so PHP can generate the IDNA/Punycode:</td><td><input type="hidden" name="uhname"><input type="submit" value="Submit"></td></tr>
<tr><td colspan="2" align="center">
<br><b>Unicode URL to give out:</b> <br><b>Encoded label to set up in DNS:</b> </td><tr>
</table>
</form>
<p><p>Below is phlyLabs original converter if you want to try taking the Homograph back and forth:
 <table border="0" cellpadding="2" cellspacing="2" align="center">
  <thead>
   <tr>
    <th align="left">Original (Unicode)</th>
    <th align="right">Punycode (ACE)</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td align="right">
     <form action="/homoglyph-attack-generator.php" method="get">
      <input type="text" name="decoded" value="" size="30" maxlength="255" /><br />
      <select size="1" name="idn_version"><option value="2003">IDNA 2003</option><option value="2008" selected="selected">IDNA 2008</option></select>      <input type="submit" name="encode" value="Encode &gt;&gt;" />     </form>
    </td>
    <td align="left">
     <form action="/homoglyph-attack-generator.php" method="get">
      <input type="text" name="encoded" value="" size="48" maxlength="255" /><br />
      <input type="submit" name="decode" value="&lt;&lt; Decode" />     </form>
    </td>
   </tr>
  </tbody>
 </table>
 <br />
 <center>PHP code based on examples and libraries from phlyLabs Berlin; part of <a href="http://phlymail.com/">phlyMail</a><br>Also thanks to <a href="http://homoglyphs.net">http://homoglyphs.net</a> for helping me find more glyphs.</center>
</div>
<br>
<table width="90%"><tr valign="top" align="center"><td><table border="1"><tr align="center"><td><b>Char</b></td><td><b>Homoglyphs<b></td></tr><tr><td> </td><td> ᅟ ᅠ                   　 ㅤ</td></tr><tr><td>!</td><td> ! ǃ ！</td></tr><tr><td>"</td><td> " ״ ″ ＂</td></tr><tr><td>$</td><td> $ ＄</td></tr><tr><td>%</td><td> % ％</td></tr><tr><td>&</td><td> & ＆</td></tr><tr><td>'</td><td> ' ＇</td></tr><tr><td>(</td><td> ( ﹝ （</td></tr><tr><td>)</td><td> ) ﹞ ）</td></tr><tr><td>*</td><td> * ⁎ ＊</td></tr><tr><td>+</td><td> + ＋</td></tr><tr><td>,</td><td> , ‚ ，</td></tr><tr><td>-</td><td> - ‐ 𐀠񴐠－</td></tr><tr><td>.</td><td> . ٠ ۔ ܁ ܂ ․ ‧ 。 ． ｡</td></tr><tr><td>/</td><td> / ̸ ⁄ ∕ ╱ ⫻ ⫽ ／ ﾉ</td></tr><tr><td>0</td><td> 0 O o Ο ο О о Օ 𐐠𱠠Ｏ ｏ</td></tr><tr><td>1</td><td> 1 I ا １</td></tr><tr><td>2</td><td> 2 ２</td></tr><tr><td>3</td><td> 3 ３</td></tr><tr><td>4</td><td> 4 ４</td></tr><tr><td>5</td><td> 5 ５</td></tr><tr><td>6</td><td> 6 ６</td></tr><tr><td>7</td><td> 7 𐐠𱰠７</td></tr><tr><td>8</td><td> 8 Ց ８</td></tr><tr><td>9</td><td> 9 ９</td></tr></table></td><td><table border="1"><tr align="center"><td><b>Char</b></td><td><b>Homoglyphs<b></td></tr><tr><td>:</td><td> : ։ ܃ ܄ ∶ ꞉ ：</td></tr><tr><td>;</td><td> ; ; ；</td></tr><tr><td><</td><td> < ‹ ＜</td></tr><tr><td>=</td><td> = 𐀠񴀠＝</td></tr><tr><td>></td><td> > › ＞</td></tr><tr><td>?</td><td> ? ？</td></tr><tr><td>@</td><td> @ ＠</td></tr><tr><td>[</td><td> [ ［</td></tr><tr><td>\</td><td> \ ＼</td></tr><tr><td>]</td><td> ] ］</td></tr><tr><td>^</td><td> ^ ＾</td></tr><tr><td>_</td><td> _ ＿</td></tr><tr><td>`</td><td> ` ｀</td></tr><tr><td>a</td><td> A a À Á Â Ã Ä Å à á â ã ä å ɑ Α α а Ꭺ Ａ ａ</td></tr><tr><td>b</td><td> B b ß ʙ Β β В Ь Ᏼ ᛒ Ｂ ｂ</td></tr><tr><td>c</td><td> C c ϲ Ϲ С с Ꮯ Ⅽ ⅽ 𐐠𺀠Ｃ ｃ</td></tr><tr><td>d</td><td> D d Ď ď Đ đ ԁ ժ Ꭰ ḍ Ⅾ ⅾ Ｄ ｄ</td></tr><tr><td>e</td><td> E e È É Ê Ë é ê ë Ē ē Ĕ ĕ Ė ė Ę Ě ě Ε Е е Ꭼ Ｅ ｅ</td></tr><tr><td>f</td><td> F f Ϝ Ｆ ｆ</td></tr><tr><td>g</td><td> G g ɡ ɢ Ԍ ն Ꮐ Ｇ ｇ</td></tr><tr><td>h</td><td> H h ʜ Η Н һ Ꮋ Ｈ ｈ</td></tr><tr><td>i</td><td> I i l ɩ Ι І і ا Ꭵ ᛁ Ⅰ ⅰ 𐐠𰰠Ｉ ｉ</td></tr><tr><td>j</td><td> J j ϳ Ј ј յ Ꭻ Ｊ ｊ</td></tr><tr><td>k</td><td> K k Κ κ К Ꮶ ᛕ K Ｋ ｋ</td></tr></table></td><td><table border="1"><tr align="center"><td><b>Char</b></td><td><b>Homoglyphs<b></td></tr><tr><td>l</td><td> L l ʟ ι ا Ꮮ Ⅼ ⅼ Ｌ ｌ</td></tr><tr><td>m</td><td> M m Μ Ϻ М Ꮇ ᛖ Ⅿ ⅿ Ｍ ｍ</td></tr><tr><td>n</td><td> N n ɴ Ν Ｎ ｎ</td></tr><tr><td>0</td><td> 0 O o Ο ο О о Օ 𐐠𱠠Ｏ ｏ</td></tr><tr><td>p</td><td> P p Ρ ρ Р р Ꮲ Ｐ ｐ</td></tr><tr><td>q</td><td> Q q Ⴍ Ⴓ Ｑ ｑ</td></tr><tr><td>r</td><td> R r ʀ Ի Ꮢ ᚱ Ｒ ｒ</td></tr><tr><td>s</td><td> S s Ѕ ѕ Տ Ⴝ Ꮪ 𐐠𵠠Ｓ ｓ</td></tr><tr><td>t</td><td> T t Τ τ Т Ꭲ Ｔ ｔ</td></tr><tr><td>u</td><td> U u μ υ Ա Ս ⋃ Ｕ ｕ</td></tr><tr><td>v</td><td> V v ν Ѵ ѵ Ꮩ Ⅴ ⅴ Ｖ ｖ</td></tr><tr><td>w</td><td> W w ѡ Ꮃ Ｗ ｗ</td></tr><tr><td>x</td><td> X x Χ χ Х х Ⅹ ⅹ Ｘ ｘ</td></tr><tr><td>y</td><td> Y y ʏ Υ γ у Ү Ｙ ｙ</td></tr><tr><td>z</td><td> Z z Ζ Ꮓ Ｚ ｚ</td></tr><tr><td>{</td><td> { ｛</td></tr><tr><td>|</td><td> | ǀ ا ｜</td></tr><tr><td>}</td><td> } ｝</td></tr><tr><td>~</td><td> ~ ⁓ ～</td></tr><tr><td>ß</td><td> ß ӧ</td></tr><tr><td>ä</td><td> Ä Ӓ</td></tr><tr><td>ö</td><td> Ö Ӧ</td></tr></table></td></tr></table> <b>Changes:</b><br>
11/28/2017: Added ḍ as sugested by rockethamster.
3/11/2012: Added option to use 'Right-To-Left Override' (U+202E) so you can do some stupied EXE tricks, and added a linkless output so you can copy & paste your homography without formatting.
3/11/2012: Added ﾉ for /.
4/3/2012: I found a list of IDN blacklisted characters on Mozilla's site and added them. I also added a table of the homoglyphs I'm using.<br>
3/6/2012: ٠ was also suggested by <a href="https://twitter.com/#!/Voulnet">@Voulnet</a>.<br>
3/5/2012: <a href="https://twitter.com/#!/Voulnet">@Voulnet</a> suggested I add Arabic letter ا. I put it in for l, i, | and 1. 
<!-- End Content --> 
<!-- google_ad_section_end -->
</div>
<p>
15 most recent posts on Irongeek.com:<BR>

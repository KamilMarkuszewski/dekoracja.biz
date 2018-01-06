<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-2">


<title>Wena - Dekoracje Ślubne i Okolicznościowe</title>

<meta name="Wena - Dekoracje Ślubne i Okolicznościowe" content="f">

 
 

<meta name="Keywords" content="dekoracje weselne, dekoracje sal weselnych, legnica, dekoracje ślubne,">


<link href="style.css" rel="Stylesheet" type="text/css">
<?php



$dozw=array('onas','oferta','galeria', 'kontakt', 'zaproszenia');

if (isset($_GET['pokaz'])) $pokaz=$_GET['pokaz']; else $pokaz='onas';
if (!in_array($pokaz,$dozw)) $pokaz=$dozw[0];

if (file_exists($pokaz.'.html')) $adres = $pokaz;

if ($pokaz == 'galeria' ||$pokaz == 'onas'||$pokaz == 'ofer'||$pokaz == 'bukiety'||$pokaz == 'nasze'||$pokaz == 'zaproszenia' ) 
echo "
<script type=\"text/javascript\" src=\"highslide/highslide.js\"></script>
<script type=\"text/javascript\">    
    hs.graphicsDir = 'highslide/graphics/';
    
    // Identify a caption for all images. This can also be set inline for each image.
    hs.captionId = 'the-caption';
    
    hs.outlineType = 'rounded-white';

</script>


<style type=\"text/css\">

.highslide {
        cursor: url(highslide/graphics/zoomin.cur), pointer;
    outline: none;
    
}
.highslide-active-anchor img {
        visibility: hidden;
}
.highslide img {
        border: 1px solid #996600;
}
.highslide:hover img {
        border: 1px solid white;
}

.highslide-wrapper {
        background: white;
}
.highslide-image {
    border: 2px solid white;
    
}
.highslide-image-blur {

}
.highslide-caption {
    display: none;
    
    border: 2px solid white;
    border-top: none;
    padding: 5px;
    background-color: white;
}
.highslide-loading {
    display: block;
        color: black;
        font-size: 8pt;
        font-family: sans-serif;
        font-weight: bold;
    text-decoration: none;
        padding: 2px;
        border: 1px solid black;
    background-color: white;
    
    padding-left: 22px;
    background-image: url(highslide/graphics/loader.white.gif);
    background-repeat: no-repeat;
    background-position: 3px 1px;
}
a.highslide-credits,
a.highslide-credits i {
    padding: 2px;
    color: silver;
    text-decoration: none;
        font-size: 10px;
}


.highslide-move {
    cursor: move;
}
a.highslide-full-expand {
        background: url(highslide/graphics/fullexpand.gif) no-repeat;
        display: block;
        margin: 0 10px 10px 0;
        width: 34px;
        height: 34px;
}

/* These must always be last */
.highslide-display-block {
    display: block;
}
.highslide-display-none {
    display: none;
}

/* These are not Highslide core CSS rules, but define the styles of the caption. */
.control {
        float: right;
    display: block;
    position: relative;
        margin: 0 5px;
        font-size: 9pt;
    font-weight: bold;
        text-decoration: none;
        text-transform: uppercase;
    margin-top: 1px;
    margin-bottom: 1px;
    
}
.control:hover {

    margin-top: 0;
    margin-bottom: 0;
}

}
</style>
";


?>


</head>
<body  leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
<table align='center' border='0' cellpadding='0' cellspacing='0' width='900'>
<tr>
<td height="7"></td>
</tr>
</table>
<table align='center' border='0' cellpadding='0' cellspacing='0' width='900' height="175">
<tr>
<td width="485" height="175" background='img/topnapis.gif' style='repeat: no-repeat;       background-image:url(img/topnapis.gif);'></td>
<td width="415" height="174"  background='img/toptlo.gif' style='        background-image:url(img/toptlo.gif);'><?php 
$top = rand(1,2);

  ?>
  

  <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="412" HEIGHT="174" id="top1" ALIGN="center">

         <param name="wmode" value="opaque"> 

         <PARAM NAME=movie VALUE="./flash/top<?php //echo $top; ?>.swf">
          
          

         <PARAM NAME=menu VALUE=false>

         <PARAM NAME=quality VALUE=high>

         <PARAM NAME=bgcolor VALUE=#BCD3E1>

         <EMBED src="./flash/top<?php //echo $top; ?>.swf" menu=false quality=high bgcolor=#fcfcfc  WIDTH="415" HEIGHT="175" NAME="top" ALIGN="center" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" WMODE="transparent"></EMBED>

        </OBJECT></td></tr></table><table align='center' border='0' cellpadding='0' cellspacing='0' width='900'>
        


<tr valign="top">
<td width="638" valign="top"><table border='0' cellpadding='0'>
<tr valign="top">
<td height="54" valign="top"><table border='0' width="638" cellpadding='0' cellspacing='0' align="'center'">
<tr valign="top">
<td width="156" height="54" valign="top"  ><a href='http://www.dekoracja.biz/index.php?pokaz=onas'><img src="img/m1.gif" alt="wena" border=0></a></td>
<td width="160" height="54"  valign="top" ><a href='http://www.dekoracja.biz/index.php?pokaz=oferta'><img src="img/m2.gif" alt="wena" border=0></a></td>
<td width="160" height="54" valign="top"  ><a href='http://www.dekoracja.biz/index.php?pokaz=zaproszenia'><img src="img/m3.gif" alt="wena" border=0></a></td>
<td width="160" height="54" valign="top"  ><a href='http://www.dekoracja.biz/index.php?pokaz=kontakt'><img src="img/m4.gif" alt="wena" border=0></a></td>

</tr>
</table>



</td>
</tr>
<tr>
<td width="638">



<table width="638" align='center' border='0' cellpadding='0' cellspacing='0' >
<tr>
<td width="638" height="102" background="img/tbu.gif" style='        background-image:url(img/tbu.gif);'>&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/<?php echo $adres; ?>.gif" border=0 height=23 width=72>
</td>
</tr><tr>
<td width="638" height="280" valign="top" background="img/tbc.gif" style='        background-image:url(img/tbc.gif);'>

<table>
<tr>
<td width="628" height="280" valign="top" class="tb" style="padding: 20px 20px 40px 20px;" background="img/platki.gif"><?php include ($adres.'.html');?></td>
</tr>
</table>


</td>
</tr><tr>
<td width="638" height="104"  background="img/tbd.gif"></td>
</tr>
</table></td></tr>
</table></td><td width="262" border='0' cellpadding='0'><table border='0' cellpadding='0'>
<tr><td width="262" height="56"><a href="index.php?pokaz=galeria" ><img src="img/bgal.gif"></a></td></tr>

<tr>
<td  width="262" class='content' >
<div align="Center">
<?php
switch(rand(0,2)){
	case 0:
		echo '<a href="index.php?pokaz=galeria&dir=dek" > <img src="images/design/galeria/dek/'.rand(1,6).'.jpg"><br>Dekoracje sal </a>';
		break;
	case 1:
		echo '<a href="index.php?pokaz=galeria&dir=kos" > <img src="images/design/galeria/kos/'.rand(1,1).'.jpg"><br>Dekoracje kościołów </a>';
		break;
	case 2:
		echo '<a href="index.php?pokaz=galeria&dir=aut" > <img src="images/design/galeria/aut/'.rand(1,1).'.jpg"><br>Dekoracje aut weselnych</a>';
		break;
}
echo '<br><br>';
switch(rand(0,2)){
	case 0:
		echo '<a href="index.php?pokaz=galeria&dir=kosz" > <img src="images/design/galeria/kosz/'.rand(1,1).'.jpg"><br>Kosze dla Rodziców</a>';
		break;
	case 1:
		echo '<a href="index.php?pokaz=galeria&dir=fir" > <img src="images/design/galeria/fir/'.rand(1,7).'.jpg"><br>Dekoracje balonowe</a>';
		break;
	case 2:
		echo '<a href="index.php?pokaz=galeria&dir=cuk" > <img src="images/design/galeria/cuk/'.rand(1,1).'.jpg"><br>Bukiety z cukierków</a>';
		break;
}
echo '<br><br>';
switch(rand(0,3)){
	case 0:
		echo '<a href="index.php?pokaz=galeria&dir=zap" > <img src="images/design/galeria/zap/'.rand(1,3).'.jpg"><br>Zaproszenia </a>';
		break;
	case 1:
		echo '<a href="index.php?pokaz=galeria&dir=cer" > <img src="images/design/galeria/cer/'.rand(1,4).'.jpg"><br>Certyfikaty </a> ';
		break;
	case 2:
		echo '<a href="index.php?pokaz=galeria&dir=nasze" > <img src="images/design/galeria/nasze/'.rand(1,3).'.jpg"><br>Nasze fotki </a>';
		break;
	case 3:
		echo '<a href="index.php?pokaz=galeria&dir=atr" > <img src="images/design/galeria/atr/'.rand(1,3).'.jpg"><br>Atrakcje Ślubne </a>';
		break;
		
}
?>
<br></div>
</td>
</tr>

<tr>
<td width="262" height="56"><a href="index.php?pokaz=kontakt" ><img src="img/bkontakt.gif"></a></td>
</tr>
<tr>
<td   width="262" class='content' >
<div align="Center">
tel.: 721-114-532<br><br>

e-mail: <a href="mailto:wena@dekoracja.biz">wena@dekoracja.biz</a><br><br>

<br>
Sklep przy ul. Marsa<br>
zostaje przeniesiony.<br>
Nowy punkt jest w trakcie remontu.

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<p class="top"><a id="top" name="top" accesskey="t"></a></p>
<div class="fb-like-box" data-href="http://www.facebook.com/wena.legnica" data-height="360"  data-width="240" data-show-faces="true" data-stream="false" data-header="false"></div>
</div>
</td>
</tr>

<!--
<tr>
<td width="262" height="56" background='img/bpor.gif'  ></td>
</tr>
<tr>
<td   width="262" class='content' >
<div align="Center">W budowie</div>

</td>
</tr>
<tr>
<td width="262" height="56" background='img/bpol.gif'  ></td>
</tr>
<tr>
<td   width="262" class='content' >
<div align="Center">		
		
		</div>

</td>
</tr>
-->

<tr>
<td width="262" height="56" background='img/breklama.gif'  ></td>
</tr>
<tr>
<td   width="262" class='content' ><div align="Center">

<a href="http://www.baza-firm.com.pl" target="_blank" title="Twoja Baza Firm">Baza Firm</a> <br>

<BR> 
<!-- stat.4u.pl NiE KaSoWaC -->
<a target=_top href="http://stat.4u.pl/?kajtwena"><img alt="statystyka" src="http://adstat.4u.pl/s4u.gif" border="0"></a>
<script language="JavaScript" type="text/javascript">
<!--
function s4upl() { return "&amp;r=er";}
//-->
</script>


<script language="JavaScript" type="text/javascript" src="http://adstat.4u.pl/s.js?kajtwena"></script>
<script language="JavaScript" type="text/javascript">
<!--
s4uext=s4upl();
document.write('<img alt="statystyka" src="http://stat.4u.pl/cgi-bin/sn.cgi?i=kajtwena&p=<?php

switch($pokaz){

case 'onas': echo(1); break;
case 'oferta': echo(2); break;
case 'galeria': echo(3); break;
case 'kontakt': echo(4); break;
default: echo(0); break;
}
?>'+s4uext+'" width="1" height="1">')
//-->
</script>
<noscript><img alt="statystyki" src="http://stat.4u.pl/cgi-bin/sn.cgi?i=kajtwena&amp;p=<?php

switch($pokaz){

case 'onas': echo(1); break;
case 'oferta': echo(2); break;
case 'galeria': echo(3); break;
case 'kontakt': echo(4); break;
default: echo(0); break;
}
?>&amp;r=ns" width="1" height="1"></noscript>
<!-- stat.4u.pl KoNiEc -->



</div>
</td>
</tr>

</table>




</td>
</tr>
</table>





<table align='center' border='0' width='100%'  cellpadding='0'>
<tr>
<td width="100%"height="91" align="center" class="stopka" background='img/stopka.jpg'>

Copyright &copy; 2008 <a href='http://www.dekoracja.biz'>dekoracja.biz</a> All rights reserved
<br><br>

Projekt i wykonanie <a href='http://www.kajt.prv.pl'>Kajt</a>
<br> <br> 
<?php
		include("54700c1a5559301073f605.php");
		echo @LinkMeShowLinks("", "", " - ", "<div style=\"text-align:center;margin:auto;\">", "</div>");
		?>
</td>
</tr>
</table>


</body>
</html>

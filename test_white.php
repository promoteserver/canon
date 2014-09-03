<?
include("conexion.php");
include('setup.php');
include('function_index.php');
$sqlfp = "SELECT product FROM feature where id = $fid ORDER BY id DESC LIMIT 0 , 3";
$fpexec = mysql_query($sqlfp,$db); 
$ss=mysql_query("select * from banners where id=1");
$ow=mysql_fetch_array($ss);
$wpp = "SELECT * FROM `products` WHERE `status` =1 AND `category` <> 'Select Category' AND `category` <> '0' GROUP BY `category` ORDER BY `products`.`id` ASC LIMIT 0 , 12";
$wxx = mysql_query($wpp,$db); 
?>
<?php include("url.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta name="viewport" content="width=968, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="google-translate-customization" content="fa6bab4ea6faa3c-59f7d274aa7e0df8-gede20d414f48435f-15">
 <meta name="description" content="Purveyors of antique tables, dining tables and chairs, Farmhouse & Reproduction furniture, bronze statues, breakfront bookcases, desks, chests, silver plate accessories & more from around the world.">
 </meta>
 <title>Antique Dining Tables, Desks, Chairs, Reproduction Furniture, Dining Sets </title>
 <link href="<?php echo url; ?>images/fav.ico" rel="shortcut icon" />
 <link href="<?php echo url; ?>css/styles.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo url; ?>css/formulario.css" rel="stylesheet" type="text/css" /> 
<script src="<?php echo url; ?>js/jquery-1.6.2.min.js"></script> 
<script src="/ckeditor/ckeditor.js"></script> 
<script src="<?php echo url; ?>js/formulario.js"></script> 
<script src="<?php echo url; ?>js/jquery.easing.1.3.min.js"></script> 
<script>
function envia()
{
document.formulario.submit();
}
function limpiar()
{
setTimeout('document.formulario.reset()',500);
return false;
}
function ocultar()
{
 div8 = document.getElementById('formenviar');
 div8.style.display = 'none';
 div9 = document.getElementById('mensaje');
 div9.style.display = 'block';
}
 /////////// TERMINA SCRIPT//////////
function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
 var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
 if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
} 
</script> 
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E")); 
</script> 
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6751296-1");
pageTracker._trackPageview();
} catch(err) {}</script> 
<meta name="google-site-verification" content="7Y8jk_sNUKWgUv77VDWBW8Wb4Uuc1RGlLXEJKo3NRFk" />
 </head>
 <body topmargin="0" style="background-image:url(<?php echo url; ?>images/background-top.jpg); background-position:top; background-repeat:repeat-x;">
 <div id="header">
<?php
include("header.php");
 ?>
 </div>
 </div>
 <div id="main">
 <table width="968" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td align="center" valign="top" scope="col">
 <table width="968" height="53" border="0" align="center" cellpadding="0" cellspacing="0" background="<?php echo url; ?>images/header2.jpg"> 
<?php
 include("header-links.php");
 
 ?> 
 </table></td> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="968" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="198" align="left" valign="top" scope="col">
 <div id="left">
 <table width="150" border="0" align="left" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td align="left" valign="middle" scope="col" height="35">&nbsp;</td> 
 </tr> 
 <tr> 
 <td align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/dining-sets/1/" class="menu">Dining Sets</a></td> 
 </tr> 
 <tr> 
 <td align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/chairs/1/" class="menu">Chairs</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/tables/1/" class="menu">Tables</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/bookcases/1/" class="menu">Bookcases</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/art-deco/1/" class="menu">Art Deco</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/bronzes/1/" class="menu">Bronzes</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/desks/1/" class="menu">Desks</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/silverplate/1/" class="menu">Silverplate</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/oil-paintings/1/" class="menu">Oil Paintings </a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>cs/porcelain/1/" class="menu">Porcelain</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>c/architectural/1/" class="menu">Architectural</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>c/tea-caddies/1/" class="menu">Tea Caddies</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>c/mirrors/1/" class="menu">Mirrors</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">
 <a href="<?php echo url; ?>c/glassware/1/" class="menu">Glassware</a></td> 
 </tr> 
 <tr> 
 <td width="131" align="left" valign="middle" scope="col" height="25">&nbsp;</td> 
 </tr> 
 </table> 
 </div></td> 
 <td width="770" align="right" valign="top" scope="col">
 <div id="righ">
 <table width="750" height="35" border="0" align="right" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="723" align="right" bgcolor="#0E0003" scope="col">
 <?php include("search-box.php"); ?></td> 
 <td width="27" align="right" bgcolor="#0E0003" scope="col">&nbsp;</td> 
 </tr> 
 <tr> 
 <td colspan="2" align="right" scope="col">&nbsp;</td> 
 </tr> 
 <tr> 
 <td colspan="2" align="left" scope="col">Popular Searches: 
 <a href="<?php echo url; ?>cs/mirrored-furniture/1/" class="links">Mirrored Furniture</a> | 
 <a href="<?php echo url; ?>cs/lamps-and-lighting/1/" class="links">Lamps and Lighting</a> | 
 <a href="<?php echo url; ?>cs/french-boulle-furniture/1/" class="links">French Boulle Furniture</a> | 
 <a href="<?php echo url; ?>cs/cabinets-and-chests/1/" class="links">Cabinets and Chests</a> | 
 <a href="<?php echo url; ?>search.php?pg=1&category=All&keyword=Statue&search=+" class="links">Statues</a></td> 
 </tr> 
 <tr> 
 <td colspan="2" align="right" scope="col">&nbsp;</td> 
 </tr> 
 <tr> 
 <td colspan="2" align="left" scope="col">
 <table width="750" height="43" border="0" cellspacing="0" cellpadding="0" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat: repeat-x;"> 
 <tr> 
 <td width="634" height="43" align="left" class="titles" scope="col"><a href="<?php echo url; ?>f/All/Featured-Products/1/" class="titles">Featured Products</a></td> 
 <td width="116" align="right" valign="bottom" scope="col" class="show">
 <a href="<?php echo url; ?>f/All/Featured-Products/1/" class="show">Show All</a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td colspan="2" align="right" scope="col" height="25">&nbsp;</td> 
 </tr> 
 <tr> 
 <td colspan="2" align="center" scope="col"> 
 <table width="690" border="0" cellpadding="0" cellspacing="0" id="Featured">
<? 
$x=0;
while ($a=mysql_fetch_array($fpexec)){ 
$x=$x+1;
$sqp = "SELECT * FROM `products` WHERE `fid` ='".$a["product"]."' ORDER BY `products`.`idpd` ASC LIMIT 0 , 1";
$px = mysql_query($sqp,$db); 
$p=mysql_fetch_array($px); 
$sqf = "SELECT * FROM photos where idsec='".$p['fid']."' order by id asc";
$pf = mysql_query($sqf,$db); 
$f=mysql_fetch_array($pf);
if($p["subcategory"]!=0){$qsub=" and subcategory='".$p["subcategory"]."'";}
$sqc = "SELECT * FROM category WHERE category ='".$p["category"]."'".$sub;
$pc = mysql_query($sqc,$db); 
$ct=mysql_fetch_array($pc); 
$linkmode=url.'p/'.$p["titleurlfriendfid"]."/";
if($x==1){
$t1=$p['title'];
$l1=$linkmode;
 ?> 
 <tr> 
 <td width="199" align="left" valign="bottom" scope="col">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="<?=$linkmode?>">
 <img src="<?php echo url; ?>products_img/<?=$f['small']?>" width="<?=$f['sx']?>" height="<?=$f['sy']?>" alt="<?=$t1?>" border=0 /></a></td> 
 </tr> 
 </table> </td> 
 <td width="31" align="left" valign="top" scope="col">&nbsp;</td>
<?}
if($x==2){
$t2=$p['title'];
$l2=$linkmode;
 ?> 
 <td width="200" align="left" valign="bottom" scope="col">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="<?=$linkmode?>">
 <img src="<?php echo url; ?>products_img/<?=$f['small']?>" width=" <?=$f['sx']?>" height="<?=$f['sy']?>" alt="<?=$p['title']?>" border=0 /></a></td> 
 </tr> 
 </table> </td> 
 <td width="30" align="left" valign="top" scope="col">&nbsp;</td>
<?}
if($x==3){ 
$t3=$p['title'];
$l3=$linkmode;
$x=0;
 ?> 
 <td width="199" valign="bottom" scope="col">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="<?=$linkmode?>">
 <img src="<?php echo url; ?>products_img/<?=$f['small']?>" width="<?=$f['sx']?>" height="<?=$f['sy']?>" alt="<?=$p['title']?>" border=0/></a></td> 
 </tr> 
 </table> </td> 
 <td width="31" scope="col">&nbsp;</td> 
 </tr> 
 <tr> 
 <td align="left" valign="top" scope="col">
 <p>
 <a href="<?=$l1?>" class="links"> 
 <?=$t1?> <br /> </a>
 </p></td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td width="200" align="left" valign="top" scope="col">
 <p>
 <a href="<?=$l2?>" class="links"> 
 <?=$t2?> </a>
 </p></td> 
 <td width="30" align="left" valign="top" scope="col">&nbsp;</td> 
 <td valign="top" scope="col">
 <p>
 <a href="<?=$l3?>" class="links"> 
 <?=$t3?> </a>
 </p></td> 
 <td valign="top" scope="col">&nbsp;</td> 
 </tr> 
 <tr> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 </tr>
<?}
}
 ?> 
 <?if($x==1){?> 
 <tr> 
 <td align="left" valign="top" scope="col">
 <p>
 <a href="<?=$l1?>" class="links"><br /> 
 <?=$t1?> <br /> </a>
 </p></td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td width="200" align="left" valign="top" scope="col"></td> 
 <td width="30" align="left" valign="top" scope="col"></td> 
 <td scope="col"></td> 
 <td scope="col"></td> 
 </tr> 
 <tr> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 </tr>
 <?}?>
 <?if($x==2){?> 
 <tr> 
 <td align="left" valign="top" scope="col">
 <p>
 <a href="<?=$l1?>" class="links"><br /> 
 <?=$t1?> <br /> </a>
 </p></td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td width="200" align="left" valign="top" scope="col">
 <p>
 <a href="<?=$l2?>" class="links"><br /> 
 <?=$t2?> </a>
 </p></td> 
 <td width="30" align="left" valign="top" scope="col">&nbsp;</td> 
 <td scope="col"></td> 
 <td scope="col"></td> 
 </tr> 
 <tr> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 <td align="left" valign="top" scope="col">&nbsp;</td> 
 </tr>
 <?}?> 
 </table></td> 
 </tr> 
 </table> 
 </div></td> 
 </tr> 
 </table>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <td align="left" height="43" valign="middle" class="titles" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat: repeat-x;"><a href="<?php echo url; ?>r/All/Latest-Aquisitions/1/" class="titles">Latest Acquisitions</a></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> <td>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="831" align="left" valign="top" scope="col">
 <a href="<?php echo url; ?>cs/dining-sets/1/" class="submenus">Dining Sets</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="<?php echo url; ?>cs/tables/1/" class="submenus"> Tables</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>cs/chairs/1/" class="submenus">Chairs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>cs/mirrored-furniture/1/" class="submenus">Mirrored Furniture</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>cs/bookcases/1/" class="submenus">Bookcases</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>cs/art-deco/1/" class="submenus">Art Deco</a></td> 
 <td width="89" align="right" scope="col">
 <a href="<?php echo url; ?>r/All/Latest-Aquisitions/1/" class="show">Show All</a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> 
 <td background="<?php echo url; ?>images/background2-tit.png">&nbsp;</td> 
 </tr> 
 <tr> <td>
 <div> 
 <iframe src="<?php echo url; ?>animation.php" width="920" height="320" scrolling="no" frameborder="no">
 </iframe> 
 </div></td> 
 </tr> 
 </table>
 </div>
 <div>
 <table width="968" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col" height="30">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="285" align="center" valign="top" scope="col">
 <table width="285" height="227" class="edgesimg"border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <th scope="col">
 <img src="<?php echo url; ?>upload/thumbnail.php?imagen=<?php echo $ow['path']?>&alto=227&ancho=285&calidad=90&aprop=1" border="0" />
 </th> 
 </tr>
 </table></td> 
 <th width="23" scope="col">&nbsp;
 </th> 
 <td width="609" align="left" valign="top" scope="col">
 <table width="609" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td height="75" align="left" valign="middle" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat:repeat-x;" scope="col">
 <table width="609" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td width="444" height="75" align="left" valign="top" class="titles" scope="col">
 <a href="<?php echo url; ?>cs/dining-sets/1/" class="titles"><?=BannerTitle()?></a></td> 
 <td width="165" align="right" valign="bottom" class="show" scope="col">
 <a href="<?php echo url; ?>cs/dining-sets/1/" class="show">Go to Section</a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td align="left" scope="col" > 
<script script src="<?php echo url; ?>jquery-1.3.2.min.js"></script> 
<script script src="<?php echo url; ?>jquery.easing.1.3.js"></script> 
<script script src="<?php echo url; ?>jquery.coda-slider-2.0.js"></script> 
<script type="text/javascript">
 $(document).ready(function() {
 $(function(){$('#coda-slider-2').codaSlider({dynamicArrows: false,});
 });
 });
 </script> 
 <style>.coda-slider-wrapper {padding: 10px 0;} .coda-slider-no-js .coda-slider {height: 100px; overflow: auto !important; padding-right: 20px;} .coda-slider, .coda-slider .panel {width: 600px;} .coda-slider-wrapper.arrows .coda-slider, .coda-slider-wrapper.arrows .coda-slider .panel {width: 600px;} .coda-slider-wrapper.arrows .coda-slider {margin: 0 10px;} .coda-nav-left a, .coda-nav-right a{color: #FFCD0C; padding: 5px; width: 100px;} .coda-nav ul li a.current {background: #39c;} .coda-slider .panel-wrapper {padding: 0px;} .coda-slider p.loading {padding: 20px; text-align: center;} .coda-nav ul {clear: both; display: block; margin: auto; overflow: hidden;} .coda-nav ul li {display: inline;} .coda-nav ul li a {color: #1B1A19; display: block; float: left; margin-right: 1px; padding: 3px 6px; text-decoration: none;} .coda-slider-wrapper {clear: both; overflow: auto;} .coda-slider {float: left; overflow: hidden; position: relative;} .coda-slider .panel{display: block; float: left;} .coda-slider .panel-container{position: relative;} .coda-nav-left{float: left; display:none; margin-left:-40px;} .coda-nav-right{float: right; margin-top:0px;} .coda-nav-left a, .coda-nav-right a {display: block; color:#000; text-align: center; text-decoration: none;} 
 </style> 
 <div class="coda-slider-wrapper"> 
 <div class="coda-slider preload" id="coda-slider-2"> 
 <div class="panel"> 
 <div class="panel-wrapper"> 
 <h1 style="font-size:12px;">Antique Dining Tables and Chairs</h1> Canonbury Antiques were first established in 1964 by Martin Worster. He began with a small stall selling small items, bric a brac and odds and ends within the New Caledonian Market in London. However over the years the small stall rapidly grew in to a chain of antique shops right up to today where they are now regarded as one of the most respected reproduction furniture companies within the UK. 
 </div> 
 </div>
 </div> 
 
 </div></td> 
 </tr> 
 </table></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr>
 </table>
 </div>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td height="85" align="left" valign="bottom" scope="col">
 <img src="<?php echo url; ?>images/purchase-with-confidence.png" width="276" height="33" alt="Purchase with Confidence" /></td> 
 <td align="right" scope="col">
 <table width="470" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td width="115" align="right" valign="bottom" style="background:url(<?php echo url; ?>images/icono-global-shipping.png); background-repeat:no-repeat; background-position:top left;" class="txt2header" scope="col">Global Shipping<br /> in orders over $100</td> 
 <th width="30" scope="col">&nbsp;
 </th> 
 <td width="78" align="center" valign="top" scope="col">
 <img src="<?php echo url; ?>images/icono-returns-policy.png" width="78" height="76" alt="Returns Policy" /></td> 
 <th width="30" scope="col">&nbsp;
 </th> 
 <th width="102" scope="col">
 <img src="<?php echo url; ?>images/verisign.png" width="102" height="59" alt="VeriSign" />
 </th> 
 <th width="30" scope="col">&nbsp;
 </th> 
 <td width="85" align="right" scope="col">
 <img src="<?php echo url; ?>images/iconos-bizcards.png" width="85" height="65" alt="Bizcards" /></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td colspan="2" height="5"></td> 
 </tr> 
 <tr> 
 <td colspan="2" valign="bottom" height="1" bgcolor="#FFCD09"></td> 
 </tr> 
 <tr> <td>&nbsp;</td> <td>&nbsp;</td> 
 </tr> 
 <tr> 
 <td align="left">
 <img src="<?php echo url; ?>images/like-our-merchandise.png" width="245" height="33" alt="Like our Merchandise?" /></td> 
 <td align="right"> 
<script type="text/javascript">
var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i
function checkmail(e){
var returnval=emailfilter.test(e.value)
if (returnval==false){
alert("Please enter a valid email address.")
e.select()
}
return returnval
}
</script>
 <form ACTION="<?php echo url; ?>nlc/newsletter-subscription/" METHOD="POST" >
 <table width="600" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td width="227" align="left" scope="col">
 <img src="<?php echo url; ?>images/subscribe-newsletter.png" width="190" height="20" alt="Subscribe to Our Newsletter:" /></td> 
 <td width="239" align="right" scope="col">
 <input id="emailnews" name="myemail" type="text" class="newsletter"/> </td> 
 <td width="134" align="right" scope="col">
 <input type="image" src="<?php echo url; ?>images/send.png" name="enviar" onclick="return checkmail(this.form.myemail)" value="Enviar" /></td> 
 </tr> 
 </table>
 </form></td> 
 </tr>
 </table>
 </div>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col" height="30">&nbsp;
 </th> 
 </tr> 
 <tr>
 <?$porcelana="Porcelain";?> 
 <td align="left" height="43" valign="middle" class="titles" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat: repeat-x;">
 <a href="<?php echo url; ?>cs/porcelain/1/" class="titles"><?=$porcelana?></a></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> <td>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="831" align="left" valign="middle" scope="col">
 <a href="<?php echo url; ?>s/porcelain/chinese-porcelain/1/" class="submenus">Chinese Porcelain</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="<?php echo url; ?>s/porcelain/japanese-porcelain/1/" class="submenus">Japanese Porcelain</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>s/porcelain/limoges-porcelain/1/" class="submenus">Limoges Porcelain</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>s/porcelain/majolica/1/" class="submenus">Majolica</a></td> 
 <td width="89" align="right" scope="col">
 <a href="<?php echo url; ?>cs/porcelain/1/" class="show">Show All</a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> 
 <td background="<?php echo url; ?>images/background2-tit.png">&nbsp;</td> 
 </tr> 
 <tr> 
 <td height="5"></td> 
 </tr> 
 <tr>
 <?$porcelana="Porcelain";?> 
 <td align="center">
 <table width="880" border="0" cellpadding="2" cellspacing="1"> 
 <tr> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#">
 <?=fotoix( 0, $db, $porcelana ) ?></a></td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#">
 <?=fotoix( 1, $db, $porcelana ) ?></a></td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#">
 <?=fotoix( 2, $db, $porcelana ) ?></a></td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#">
 <?=fotoix( 3, $db, $porcelana ) ?></a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 0, $db ,$porcelana,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 1, $db ,$porcelana,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 2, $db ,$porcelana,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 3, $db ,$porcelana,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 0, $db ,$porcelana,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 1, $db ,$porcelana,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 2, $db ,$porcelana,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 3, $db ,$porcelana,'des',50,url)?>...
 </span></td> 
 </tr> 
 <tr> <td><?=txtx( 0, $db ,$porcelana,'rate',10,url)?></td> 
 <td><?=txtx( 1, $db ,$porcelana,'rate',10,url)?></td> 
 <td><?=txtx( 2, $db ,$porcelana,'rate',10,url)?></td> 
 <td><?=txtx( 3, $db ,$porcelana,'rate',10,url)?></td> 
 </tr> 
 </table></td> 
 </tr> 
 </table>
 </div>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr>
 <?$Architectural="Desks";?> 
 <td align="left" height="43" valign="middle" class="titles" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat: repeat-x;">
 <a href="<?php echo url; ?>cs/desks/1/" class="titles"><?=$Architectural?></a></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> <td>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="831" align="left" valign="middle" scope="col">
 <a href="<?php echo url; ?>s/desks/american-presidents-desk/1/" class="submenus">American Presidents Desk</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="<?php echo url; ?>s/desks/boulle-desk/1/" class="submenus">Boulle Desk</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>s/desks/carlton-house-desks/1/" class="submenus">Carlton House Desks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>s/desks/deco-desks/1/" class="submenus">Deco Desks</a></td> 
 <td width="89" align="right" scope="col">
 <a href="<?php echo url; ?>cs/desks/1/" class="show">Show All</a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> 
 <td background="<?php echo url; ?>images/background2-tit.png">&nbsp;</td> 
 </tr> 
 <tr> 
 <td height="5"></td> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="880" border="0" cellpadding="2" cellspacing="1"> 
 <tr> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" > 
 <?=fotoix( 0, $db, $Architectural ) ?> </td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" > 
 <?=fotoix( 1, $db, $Architectural ) ?> </td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" > 
 <?=fotoix( 2, $db, $Architectural ) ?> </td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" > 
 <?=fotoix( 3, $db, $Architectural ) ?> </td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 0, $db ,$Architectural,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 1, $db ,$Architectural,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 2, $db ,$Architectural,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 3, $db ,$Architectural,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 0, $db ,$Architectural,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 1, $db ,$Architectural,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 2, $db ,$Architectural,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 3, $db ,$Architectural,'des',50,url)?>...
 </span></td> 
 </tr> 
 <tr> <td><?=txtx( 0, $db ,$Architectural,'rate',10,url)?></td> 
 <td><?=txtx( 1, $db ,$Architectural,'rate',10,url)?></td> 
 <td><?=txtx( 2, $db ,$Architectural,'rate',10,url)?></td> 
 <td><?=txtx( 3, $db ,$Architectural,'rate',10,url)?></td> 
 </tr> 
 </table></td> 
 </tr> 
 </table>
 </div>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr>
 <?$chests="Chairs";?> 
 <td align="left" height="43" valign="middle" class="titles" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat: repeat-x;">
 <a href="<?php echo url; ?>cs/chairs/1/" class="titles"><?=$chests?></a></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> <td>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="831" align="left" valign="middle" scope="col">
 <a href="<?php echo url; ?>s/chairs/chippendale-chairs/1/" class="submenus">Chippendale Chairs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="<?php echo url; ?>s/chairs/formal-dining/1/" class="submenus">Formal Dining</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>s/chairs/george-ii-dining-chairs/1/" class="submenus">George II Dining Chairs</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>s/chairs/hepplewhite-dining-chairs/1/" class="submenus">Hepplewhite Dining Chairs</a></td> 
 <td width="89" align="right" scope="col">
 <a href="<?php echo url; ?>cs/chairs/1/" class="show">Show All</a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> 
 <td background="<?php echo url; ?>images/background2-tit.png">&nbsp;</td> 
 </tr> 
 <tr> 
 <td height="5"></td> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="880" border="0" cellpadding="2" cellspacing="1"> 
 <tr> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" > 
 <?=fotoix( 0, $db, $chests ) ?> </td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" > 
 <?=fotoix( 1, $db, $chests ) ?> </td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotoix( 2, $db, $chests ) ?> </a></td> 
 </tr> 
 </table></td> 
 <td width="25%" align="left" valign="bottom">
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotoix( 3, $db, $chests ) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 0, $db ,$chests,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 1, $db ,$chests,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 2, $db ,$chests,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 <td valign="top">
 <table width="190" border="0" align="left" cellpadding="1" cellspacing="1"> 
 <tr> 
 <td valign="top" align="left">
 <?=txtx( 3, $db ,$chests,'title',1000,url)?></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 0, $db ,$chests,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 1, $db ,$chests,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 2, $db ,$chests,'des',50,url)?>...
 </span></td> 
 <td valign="top" align="left">
 <span class="descriptions">
 <?=txtx( 3, $db ,$chests,'des',50,url)?>...
 </span></td> 
 </tr> 
 <tr> <td><?=txtx( 0, $db ,$chests,'rate',10,url)?></td> 
 <td><?=txtx( 1, $db ,$chests,'rate',10,url)?></td> 
 <td><?=txtx( 2, $db ,$chests,'rate',10,url)?></td> 
 <td><?=txtx( 3, $db ,$chests,'rate',10,url)?></td> 
 </tr> 
 
 </table></td> 
 </tr> 
 </table>
 </div>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <td align="left" height="43" valign="middle" class="titles" background="<?php echo url; ?>images/background-tit.png" style="background-position:bottom; background-repeat: repeat-x;">A Wide Antiques Variety</td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> <td>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td width="831" align="left" valign="middle" scope="col">
 <a href="<?php echo url; ?>cs/bookcases/1/" class="submenus">Bookcases</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="<?php echo url; ?>cs/bronzes/1/" class="submenus">Bronzes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>cs/silverplate/1/" class="submenus">Silverplate </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <a href="<?php echo url; ?>cs/cabinets-and-chests/1/" class="submenus">Cabinets and Chests </a></td> 
 <td width="89" align="right" scope="col">&nbsp;</td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td height="10"></td> 
 </tr> 
 <tr> 
 <td background="<?php echo url; ?>images/background2-tit.png">&nbsp;</td> 
 </tr> 
 <tr> 
 <td height="5"></td> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="880" border="0">
<?
$y=0;
while ($w=mysql_fetch_array($wxx)){ 
$y=$y+1;
$sqcat = "SELECT * FROM category WHERE category='".$w['category']."'";
$ctx = mysql_query($sqcat,$db); 
$t=mysql_fetch_array($ctx);
if($t['page']=="cat-sc") {$txcat="cs";}
if($t['page']=="cat") {$txcat="c";} 
if($y==1){
$c1=$w['category'];
$wc1=$w['caturlfriend'];
$wtx1=$txcat;
 ?> 
 <tr> 
 <td width="220" class="submenus" align="left">
 <a href="<?=url?><?=$txcat?>/<?=$w['caturlfriend']?>/1/" class="submenus"><?=$w['category']?></a></td>
<?}
if($y==2){
$c2=$w['category'];
$wc2=$w['caturlfriend'];
$wtx2=$txcat;
 ?> 
 <td width="220" class="submenus" align="left">
 <a href="<?=url?><?=$txcat?>/<?=$w['caturlfriend']?>/1/" class="submenus"><?=$w['category']?></a></td>
<?}
if($y==3){
$c3=$w['category'];
$wc3=$w['caturlfriend'];
$wtx3=$txcat;
 ?> 
 <td width="220" class="submenus" align="left">
 <a href="<?=url?><?=$txcat?>/<?=$w['caturlfriend']?>/1/" class="submenus"><?=$w['category']?></a></td>
<?}
if($y==4){
$c4=$w['category'];
$wc4=$w['caturlfriend'];
$wtx4=$txcat;
$y=0;
 ?> 
 <td width="202" class="submenus" align="left">
 <a href="<?=url?><?=$txcat?>/<?=$w['caturlfriend']?>/1/" class="submenus"><?=$w['category']?></a></td> 
 </tr> 
 <tr> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 0, $db, $c1) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(0, $db ,$c1,'title')?></td> 
 </tr> 
 <tr> 
 <td valign="bottom">&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 1, $db, $c2) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(1, $db ,$c2,'title')?></td> 
 </tr> 
 <tr> 
 <td valign="bottom">&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 2, $db, $c3) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(2, $db ,$c3,'title')?></td> 
 </tr> 
 <tr> 
 <td valign="bottom">&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="bottom">
 <table width="220" border="0"> 
 </table> 
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 3, $db, $c4) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(3, $db ,$c4,'title')?></td> 
 </tr> 
 <tr> 
 <td valign="bottom">&nbsp;</td> 
 </tr> 
 </table></td> 
 </tr>
<?
 }}?>
 <?if($y==1){?><td></td><td></td><td></td> 
 </tr> 
 <tr> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 0, $db, $c1) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(0, $db ,$c1,'title')?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="top"></td> 
 <td valign="top"></td> 
 <td valign="top"></td> 
 </tr>
 <?}?>
 <?if($y==2){?><td></td><td></td> 
 </tr> 
 <tr> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 0, $db, $c1) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(0, $db ,$c1,'title')?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 1, $db, $c2) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(1, $db ,$c2,'title')?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="top">&nbsp;</td> 
 <td valign="top">&nbsp;</td> 
 </tr>
 <?}?>
 <?if($y==3){?><td></td> 
 </tr> 
 <tr> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 0, $db, $c1) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(0, $db ,$c1,'title')?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 1, $db, $c2) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(1, $db ,$c2,'title')?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="bottom">
 <table width="220" border="0"> 
 <tr> <td>
 <table border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" valign="bottom" scope="col" class="edgesimg" >
 <a href="#"> 
 <?=fotow( 2, $db, $c3) ?> </a></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> 
 <td valign="bottom" align="left">
 <?=txtw(2, $db ,$c3,'title')?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table></td> 
 <td valign="top">&nbsp;</td> 
 </tr>
 <?}?> 
 </table> </td> 
 </tr> 
 <tr> 
 <td align="center">&nbsp;</td> 
 </tr> 
 </table>
 </div>
 <div>
 <table width="968" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <th scope="col" background="<?php echo url; ?>images/back-showroom-categories.png" height="84">
 <table width="850" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td align="left" scope="col">
 <a href="<?php echo url; ?>f/All/Featured-Products/1/">
 <img src="<?php echo url; ?>images/featured-products.png" alt="Featured Products" width="68" height="37" border="0" /></a></td> 
 <th scope="col">
 <img src="<?php echo url; ?>images/showroom-categories.png" width="260" height="37" alt="Showroom Categories" />
 </th> 
 <td align="right" scope="col">
 <a href="<?php echo url; ?>r/All/Latest-Aquisitions/1/">
 <img src="<?php echo url; ?>images/lastest-acquisitions.png" alt="Lastest Acquisitions" width="85" height="37" border="0" /></a></td> 
 </tr> 
 </table>
 </th> 
 </tr>
 </table>
 </div>
 <div>
 <table width="968" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <td align="center" valign="top">
<?php
 include("conexion.php");
$result = mysql_query("SELECT * FROM category_order order by position") 
or die(mysql_error()); 
while($row = mysql_fetch_array( $result ))
{
include("conexion.php");
// Get all the data from the "example" table
$result1 = mysql_query("SELECT * FROM category where category='".$row['name_titre']."' group by category") 
or die(mysql_error()); 
while($row1 = mysql_fetch_array( $result1 ))
{
if($row1['page']=="cat-sc")
{
echo '<a href="'.url.'cs/'.$row1['caturlfriend'].'/1/" class="linksmenu">'.$row1['category'].'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
}
else
{
echo '<a href="'.url.'c/'.$row1['caturlfriend'].'/1/" class="linksmenu">'.$row1['category'].'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

}
}
}
 ?></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 <tr> 
 <td height="8" bgcolor="#FFFFFF"></td> 
 </tr>
 </table>
 </div>
 <div>
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0" 
class="desc_table_a"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <td height="50" align="left" valign="middle" class="titles">Lastest News</td> 
 </tr> 
 <tr> 
 <td colspan="2" valign="bottom" height="1" bgcolor="#FFCD09"></td> 
 </tr> 
 <tr> 
<?php

include("conexion.php");
$result3 = mysql_query("SELECT * FROM latest_news where type='n' order by id desc LIMIT 3") or die(mysql_error()); 
while($row3 = mysql_fetch_array( $result3 ))
{

 ?> <td>&nbsp;</td> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="920" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td width="54" align="center" valign="top" style=" background:url(<?php echo url; ?>images/back-num.png) top no-repeat;" scope="col">
 <table width="40" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td height="34" align="center" class="txt2header" scope="col">
 <?php echo strtoupper(date('M', $row3['date'])); ?></td> 
 </tr> 
 <tr> 
 <td align="center" class="titles">
 <?php echo strtoupper(date('d', $row3['date'])); ?></td> 
 </tr> 
 <tr> 
 <td height="28" align="center" class="date1">
 <?php echo strtoupper(date('Y', $row3['date'])); ?></td> 
 </tr> 
 </table></td> 
 <th width="29" scope="col">&nbsp;
 </th> 
 <td width="588" align="left" valign="top" scope="col">
 <table width="588" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <td align="left" scope="col">
 <?php echo'<a href="'.url.'n/'.$row3['titleurlfriend'].'" class="titnews">'.$row3['title'].'</a>'; ?></td> 
 </tr> 
 <tr> 
 <td height="13"></td> 
 </tr> 
 <tr> 
 <td align="left" valign="top" style="text-align:justify">
 <?php echo $row3['summary']; ?></td> 
 </tr> 
 <tr> 
 <td height="28" valign="bottom" >
 <?php echo '<a href="'.url.'n/'.$row3['titleurlfriend'].'" class="show">More</a>'; ?></td> 
 </tr> 
 </table></td> 
 <th width="42" scope="col">&nbsp;
 </th> 
 <td width="205" align="right" valign="top" scope="col">
 <table border="0" align="right" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td align="right" valign="top" class="edgesimg" scope="col">
 <?php echo '<a href="'.url.'n/'.$row3['titleurlfriend'].'"><img src="'.url.'uploads_news/medium_'.$row3['image'].'.jpg" alt="'.$row3['title'].'" title="'.$row3['title'].'" border="0" /></a>'; ?></td> 
 </tr> 
 </table></td> 
 </tr> 
 </table></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
<?php
}
 ?> 
 </tr> 
 <tr> 
 <td colspan="2" valign="bottom" height="1" bgcolor="#FFCD09"></td> 
 </tr> 
 <tr> <td>&nbsp;</td> 
 </tr> 
 </table>
 </div>
 <div>
 <table width="968" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <th scope="col">
 <img src="<?php echo url; ?>images/background01-footer.jpg" width="968" height="80" alt="Background" />
 </th> 
 </tr>
 </table>
 </div>
 <div>
 <table width="968" border="0" cellspacing="0" cellpadding="0"> 
 <tr> 
 <th scope="col">&nbsp;
 </th> 
 </tr> 
 <tr> 
 <td align="center"></td> 
 </tr> 
 <tr> 
 <td align="center">
 <table width="920" border="0" align="center" cellpadding="0" cellspacing="0"> 
 <tr> 
 <td scope="col">
 <div style=" width:920px; border: none; padding-left:20; text-align:justify;" align="left">
<script type="text/javascript">
jQuery(document).ready(function($) {
$(function(){$('#coda-slider-1').codaSlider({dynamicArrows: false,});
});
});
</script>
 <div class="coda-slider-wrapper" style="width:930px;">
 <div class="coda-slider preload" id="coda-slider-1" style="width:930px;">
 <div class="panel" style="width:930px;">
 
 <div class="panel-wrapper" style="width:930px;">
 <h2 style="font-size:13px;">Reproduction Furniture</h2>
 <p>Canonbury Antiques are a specialist purveyor of antique tables and antique desks amongst a fine selection of dining tables, chairs and dining furniture. This encompasses a stunning range of reproduction furniture that includes Art Deco and earlier pieces of fine furniture. Revelling in the sheer quality and luxuriously lavish designs of a world gone by, Canonbury Antiques bring you a revivalist selection of fine dining tables and chairs to add regal and influent charm to your home or office boardroom. We stock a wide selection of beautifully maintained pieces such as the amazing Windsor chairs alongside one of the largest choices of genuine Regency, Georgian and Victorian dining furniture that once stood for Englandâ€™s finest craftsmanship, renowned across the world for its luxurious and detailed features and build quality. 
 </p>
 <p>When you are considering investing in a solid and sturdy dining table, you will instantly appreciate the sheer quality of the dining table and dining sets available within our collection. Whatever your tastes and for what period furniture your appreciation tends to fall to, we have an exquisite and gorgeous collection of individually designed, unique pieces that will undoubtedly provide a focal point within any household. Whether your affection tends to lean towards Spanish, French or Old English dining tables and dining sets, we are the professional experts who have the fantastic resources to supply the ideal farmhouse furniture to suit your needs and requirements. </p>
 <p> Not only purchasing a superior and well appreciated piece of furniture, you are also investing in a piece of history, continuing to receive many years of gratifying service well into the future. Choosing our services when searching for the perfect oak kitchen tables will leave you completely satisfied with the brilliant results that can be attained through choosing a professional supplier such as ourselves. Here at Canonbury Antiques we have been providing superb examples of traditional furniture from many different periods for over 40 years, sourcing our superior furniture from around the globe to bring back to life, to their original glory so that clients and customers from across the UK can own and appreciate genuine original period furniture within their homes, businesses and offices. </p>
 
 <p> We take pride in the fact that we only source the finest examples of reproduction furniture from around the globe. This is portrayed across our entire Victorian, Regency, Mahogany and other dining table range. These are each complimented by our superior range of dining chairs consisting of fantastic names such as Chippendale, Hepplewhite, Regency, Sheraton, Adams, Queen Anne and George II chairs. We take the utmost care when sourcing our dining tables and chairs to ensure that they all have been manufactured to the highest standards using traditional techniques. We believe in providing you the finest pieces of furniture that will not only add elegance to your home but will last you a lifetime. </p>
 </div>
 </div>
 
 </div>
 
 </div> 
 </div></td> 
 </tr>
 </table></td> 
 </tr>
 </table>
 </div>
 
<?php
 include("footer.php");
 ?> 
 </td> 
 </tr> 
 </table>
 </div>
 
 <iframe src="" name="ventana" width="1" height="1" scrolling="si" frameborder="0" style="border:#0066CC 1px solid;" border="0"> El explorador no admite los marcos flotantes o no estÃ¡ configurado actualmente para mostrarlos. 
 </iframe>
 
 </body>
</html>
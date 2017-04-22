<script src="/SRC/jquery-1.11.0.js"></script>

<script src="js/islider.js"></script>
<link type="text/css" rel="stylesheet" href="css/slider.css"  />

<script type="text/javascript">
$(document).ready(function(){
	$('#myslider').islider({speed: 3000, jumper: 'off'});
	$('#myslider2').islider({speed: 2000, jumper: 'on'});
});
</script>

<style type="text/css">
#myslider{width:210px; height:78px;}
#myslider2{width:210px; height:100px;}
</style>

<div id="myslider" class="islider">
	<div class="slide"><img src="images/1.jpg" /></div>
    <div class="slide"><img src="images/2.jpg" /></div>
    <div class="slide"><img src="images/3.jpg" /></div>
</div>

<div id="myslider2" class="islider" style="position:absolute; top:300px;">
	<div class="slide"><img src="images/4.jpg" /></div>
    <div class="slide"><img src="images/5.jpg" /></div>
    <div class="slide"><img src="images/6.jpg" /></div>
    <div class="slide"><img src="images/7.jpg" /></div>
    <div class="slide"><img src="images/8.jpg" /></div>
    <div class="slide"><img src="images/9.jpg" /></div>
</div>
Ez Auto Suggestion JS Plugin
==============================

##Demo
https://yben56.github.io/islider/

##Dependencies
jquery-3.1.1

##Usage
Create a div and wrap ```html<div class='slide'><img /></div>``` insdie it.

```html
<script src="js/islider.js"></script>
<link type="text/css" rel="stylesheet" href="css/slider.css"  />

<div id="myslider" class="islider">
	<div class="slide"><img src="images/1.jpg" /></div>
    <div class="slide"><img src="images/2.jpg" /></div>
    <div class="slide"><img src="images/3.jpg" /></div>
</div>
```

```javascript
$(document).ready(function(){
	$('#myslider').islider({speed: 3000, jumper: 'off'});
});
```

##License
This work is licensed under a [MIT License](http://opensource.org/licenses/MIT).

##Author
This Javascript plugin was written by Benjamin Wong benjamin-w@hotmail.com

simple-bars
===========

Simple-bars is a relatively simple plugin for adding radial progress bars that animate when visible to your website. In order to include the plugin start by adding the following html:

```HTML
<div class="radial" data-percent='85' data-color='red'>
  <div class="radial-clip"></div>
  <div class="radial-fill red"></div>
  <div class="radial-center">
    <h2>85%</h2>
  </div>
</div>
```

In this example, data-percent tells JS how far to animate the progress bar while data-color lets JS know what color the progress bars should be. The ```<h2>``` that is nested within the “radial-center” div is a placeholder that will output the current progress bar position.

The styling can be applied either by linking the included stylesheet, though this will likely cause a conflict if you have any styling already applied to your page. Instead it is advisable to open the included style.css file and copy over the radial section. 

Also keep in mind that in order to set your colors you currently have to create a class with a background-color of your choosing, then reference the class name in the data-color attribute of your html. For example if your html looks like:

```HTML
<div class="radial" data-percent='85' data-color='red'>
```

Your css would look like

```HTML
.red { background-color: #yourcolorhere; }
```

Lastly, don’t forget to include the JS, simply add the below to your file, or alternatively you can copy the contents of “radials.js” over to another JS file that you are already linking to. Just remember that if you do copy over contents to another file that you instantiate the class by adding ```radials = new radials();``` somewhere within your ```$(document).ready()``` function.

```HTML
<script src='./js/radials.js'></script>
```
For a live demo goto <a href='http://www.kyleschneiderman.com/examples/radials/'>http://www.kyleschneiderman.com/examples/radials/</a>. 
Thanks for checking out this plugin and check back in the future for further development!

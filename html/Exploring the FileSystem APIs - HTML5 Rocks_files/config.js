<!DOCTYPE html>
<html lang="en" dir="ltr" itemscope itemtype="http://schema.org/Article">
<head>
<meta charset="utf-8">
<meta name="description" content="A resource for developers looking to put HTML5 to use today, including information on specific features and when to use them in your apps.">
<meta name="keywords" content="html5,html 5,html5 demos,html5 examples,javascript,css3,notifications,geolocation,web workers,apppcache,file api,filereader,indexeddb,offline,audio,video,drag and drop,chrome,sse,mobile">
<meta itemprop="name" content="HTML5 Rocks">
<meta itemprop="description" content="">
<meta itemprop="image" content="/static/images/html5rocks-logo-wings.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>404 - Page Not Found - HTML5 Rocks</title>
<script type='text/javascript'>window.mod_pagespeed_start = Number(new Date());</script><link rel="shortcut icon" href="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/xfavicon.ico.pagespeed.ic.vF173WQIXP.webp">
<link rel="alternate" type="application/rss+xml" title="HTML5 Rocks RSS" href="http://feeds.feedburner.com/html5rocks">
<link rel="publisher" href="https://plus.google.com/111395306401981598462">
<link rel="stylesheet" media="all" href="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/static/css/A.base.min.css,q20130705.pagespeed.cf.WfaLMSZ6YM.css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,800|Source+Code+Pro" rel="stylesheet">
<link rel="apple-touch-icon" href="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/static/images/identity/HTML5_Badge_64.png.pagespeed.ce.S0LMUsq9YG.png">
<link rel="apple-touch-icon-precomposed" href="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/static/images/identity/HTML5_Badge_64.png.pagespeed.ce.S0LMUsq9YG.png">
<script src="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/static/js/modernizr.custom.82437.js.pagespeed.jm.H7yOhhnYd0.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
  <![endif]-->
<style>@-webkit-keyframes spin {
 0% {
   -webkit-transform: rotateY(0deg);
 }
 100% {
   -webkit-transform: rotateY(-360deg);
 }
}@-moz-keyframes spin {
 0% {
   -moz-transform: rotateY(0deg);
 }
 100% {
   -moz-transform: rotateY(-360deg);
 }
}#oops{text-align:center;margin-top:7em;-webkit-perspective:500px;-webkit-transform-style:preserves-3d;-moz-perspective:500px;-moz-transform-style:preserves-3d}#oops img{width:256px;height:256px;-webkit-animation-name:spin;-webkit-animation-duration:5s;-webkit-animation-iteration-count:infinite;-webkit-animation-timing-function:linear;-webkit-animation-delay:2s;-moz-animation-name:spin;-moz-animation-duration:5s;-moz-animation-iteration-count:infinite;-moz-animation-delay:2s}#oops:hover img{-webkit-animation-duration:500ms;-moz-animation-duration:500ms}</style>
</head>
<body data-href="next-config.js" onload="" class="pattern-bg"><noscript><meta HTTP-EQUIV="refresh" content="0;url='http://www.html5rocks.com/en/next/config.js?ModPagespeed=noscript'" /><style><!--table,div,span,font,p{display:none} --></style><div style="display:block">Please click <a href="http://www.html5rocks.com/en/next/config.js?ModPagespeed=noscript">here</a> if you are not redirected within a few seconds.</div></noscript>
<header class="main">
<a id="home_horns" href="/en/"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAyCAYAAABGQBuoAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NEU2NTFGRTQwNjE0MTFFMTg0RjdERTE0MzFDQTlGQjQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NEU2NTFGRTUwNjE0MTFFMTg0RjdERTE0MzFDQTlGQjQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MUQyMTY2QjA2MTMxMUUxODRGN0RFMTQzMUNBOUZCNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MUQyMTY2QzA2MTMxMUUxODRGN0RFMTQzMUNBOUZCNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgNr19cAAAJFSURBVHja7FfrUcMwDE56/U/YIGxQJsBMQJmg6QTQCRomKBukGzBCywTpBikTpEwQJE4CxbFTOzF3cIfudM7Jsb5I1itRJKhpmhlw1XzTDjiJQhAqAq6JM+CcQUIBzEmhErJPkFAAHWUIpoOe0aFIT85nplEgQrfCUgjRGmTLIBbQ/X0FBTE+N5NABsxofYrj+ISMzygIBWClXwOwpvyo6K7QxwXLcN920DWK8JK3wCkpewBOSIaUeecBPKb0la2SIWSP+lktSVUrKiUA1aSaDpViTUyh2yebGCzBkMP6cwS+gpC7hnVJoZiFuGRWfgvKcY1gRV+fyO+DAS5oZeUnzapkVB2Rfjb0CC7j/ndAQixSB8uXcz9o7bnSlJQfe5SjRfewdxjinSklz7JHOdJ+bKm40eRzWleGTF1oFZQznQOkc8GcmZklADjRCq7xIgml7MVYGSgyShuIKGwVvZfbZIYPK6WSss8Sz7BXer0KCkJ66s5MFQLEVG37QPKByguXKU/2AuXg88oUTeeAJKGCVNtPheLKZLVLy3wGfgO+s+xjlr9iSfceM33vwfT+j48tsenCRIkepxzo7092LlG050HWgXY+harx+YWinGiR1w8IvL/RmoyklW3qcAEwdS6dkjGXzIffab2Mu7S3WTfkH63WKwIijHERTxlbw9aCppJB7U6SEvJMvLvjKBPNvxVFPonGc9MGaz41dOXtYIsFuRhF5OiCTWneZ4EXgEdz8gbgyXvD7ZMyNxM/g0aA/3J9lj4EGABt/PzEJtkxBQAAAABJRU5ErkJggg==" alt="HTML5 Rocks" width="24" height="50"></a>
<h1 id="title">
<a href="/en/" title="HTML5 Rocks">HTML5 Rocks</a>
</h1>
<nav>
<ul>
<li id="home_menu"><a class="home" href="/en/" rel="home">Home</a></li>
<li id="tutorials_menu"><a href="/en/tutorials/?page=1" class="tutorials">Tutorials</a></li>
<li id="updates_menu"><a href="/en/updates/" class="updates">Updates</a></li>
<li id="features_show"><a href="#features">HTML5 Features</a></li>
<li id="slides_menu"><a href="/en/slides" class="slides">Slides</a></li>
<li id="resources_menu"><a href="/en/resources" class="resources">Resources</a></li>
<li id="profiles_menu"><a href="/en/profiles" class="profiles">Who We Are</a></li>
<li id="contrib_menu"><a href="https://github.com/html5rocks/www.html5rocks.com/blob/master/CONTRIBUTING.md" target="_blank">Contribute</a></li>
<li id="search_show">
<a href="#search_form">
<span>Search</span>
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RjM0OTMyOUNEN0FEMTFFMEJDMEZDMjAwMjNDNjc0MDciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RjM0OTMyOUREN0FEMTFFMEJDMEZDMjAwMjNDNjc0MDciPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpFNzMzOTM2MUQ3OTkxMUUwQkMwRkMyMDAyM0M2NzQwNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpFNzMzOTM2MkQ3OTkxMUUwQkMwRkMyMDAyM0M2NzQwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pj/umaQAAACdSURBVHjanFLbDQMhDAtMwAiM0lFuBEa4DW4ERmk7ASPQDRghTSSfRKvAPSz5J45D5ODJADM/hE/+RRUuNIKKaGzCDUNSNyhbpgixCIOhZ+jrSIiTjfTl5v/qang55z40xlsYvCEEugqEcbSqplutcBrCiZNw0ugU+zm0cQWreY7OVHC7DDN39WVmCmcDyZdNMBbzGx3AiYnu4CvAALKABcbyDrXxAAAAAElFTkSuQmCC" width="14" height="14" alt="">
</a>
</li>
</ul>
</nav>
<div class="subheader search" style="display: none;" id="search_form">
<div class="search">
<form action="/en/search" id="cse-search-box" role="search">
<img id="search_hide" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RjM0OTMyQTREN0FEMTFFMEJDMEZDMjAwMjNDNjc0MDciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RjM0OTMyQTVEN0FEMTFFMEJDMEZDMjAwMjNDNjc0MDciPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGMzQ5MzJBMkQ3QUQxMUUwQkMwRkMyMDAyM0M2NzQwNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGMzQ5MzJBM0Q3QUQxMUUwQkMwRkMyMDAyM0M2NzQwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ps3igWgAAAFzSURBVHjazJfPSsNAEMZ3EygoBAoepD0VBA+Cp76AvoCvkWfK0+gLeBI8FISc2lMhsFBBCPGbMKGrZP/qNh342LKdzI/Z7OxOpPCwruvmGEgX0OWIywH6hBopZeOKJx2wJYYraCb87QvaA74NggJG2dwEwsbgH4AfnFAAKbOV+D+rAd4boQmAo+BMAxaJgGQrjn+EYiJPCNTBuZ7ptWXTrKHCM3DB/mM2Y46QTL+HcoPzM7SDSkg5gBW0gB4NPi30lnHR55ZgJQeqLBnrwNISizjzAWqzjQP8G7hxxOuhPu/LBA4F9s9kjqW1gZcRwH6JaSOtA7f+rZatCgT+PBxOaVlkllRCTzxWPB8EbSOAtKRbHkPBbeYoeBNweEZFgBVBm0igiAQ3kxyDUmtLFgbHB+jV8zUMB/6L4f8dtTFSu9ru/tie+LQv74D2G0nQD7rdE5dnzZxjnWJCJQTXHP9MGrPJWtDJmu3knxUIePJb5luAAQDWPZwf40bkcAAAAABJRU5ErkJggg==" width="29" height="29" alt="">
<label><input type="search" name="q" id="q" autocomplete="off" placeholder="Search"/></label>
</form>
</div>
</div>
<div class="subheader features" style="display: none;" id="features" tabindex="0">
<div class="features">
<img id="features_hide" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RjM0OTMyQTREN0FEMTFFMEJDMEZDMjAwMjNDNjc0MDciIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RjM0OTMyQTVEN0FEMTFFMEJDMEZDMjAwMjNDNjc0MDciPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGMzQ5MzJBMkQ3QUQxMUUwQkMwRkMyMDAyM0M2NzQwNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGMzQ5MzJBM0Q3QUQxMUUwQkMwRkMyMDAyM0M2NzQwNyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ps3igWgAAAFzSURBVHjazJfPSsNAEMZ3EygoBAoepD0VBA+Cp76AvoCvkWfK0+gLeBI8FISc2lMhsFBBCPGbMKGrZP/qNh342LKdzI/Z7OxOpPCwruvmGEgX0OWIywH6hBopZeOKJx2wJYYraCb87QvaA74NggJG2dwEwsbgH4AfnFAAKbOV+D+rAd4boQmAo+BMAxaJgGQrjn+EYiJPCNTBuZ7ptWXTrKHCM3DB/mM2Y46QTL+HcoPzM7SDSkg5gBW0gB4NPi30lnHR55ZgJQeqLBnrwNISizjzAWqzjQP8G7hxxOuhPu/LBA4F9s9kjqW1gZcRwH6JaSOtA7f+rZatCgT+PBxOaVlkllRCTzxWPB8EbSOAtKRbHkPBbeYoeBNweEZFgBVBm0igiAQ3kxyDUmtLFgbHB+jV8zUMB/6L4f8dtTFSu9ru/tie+LQv74D2G0nQD7rdE5dnzZxjnWJCJQTXHP9MGrPJWtDJmu3knxUIePJb5luAAQDWPZwf40bkcAAAAABJRU5ErkJggg==" width="29" height="29" alt="">
<h2>Features</h2>
<ul>
<li>
<a href="/en/features/offline" class="offline">
<h3>Offline</h3>
</a>
</li>
<li>
<a href="/en/features/storage" class="storage">
<h3>Storage</h3>
</a>
</li>
<li>
<a href="/en/features/connectivity" class="connectivity">
<h3>Connectivity</h3>
</a>
</li>
<li>
<a href="/en/features/file_access" class="file_access">
<h3>File Access</h3>
</a>
</li>
<li>
<a href="/en/features/semantics" class="semantics">
<h3>Semantics</h3>
</a>
</li>
<li>
<a href="/en/features/multimedia" class="multimedia">
<h3>Audio/Video</h3>
</a>
</li>
<li>
<a href="/en/features/graphics" class="graphics">
<h3>3D/Graphics</h3>
</a>
</li>
<li>
<a href="/en/features/presentation" class="presentation">
<h3>Presentation</h3>
</a>
</li>
<li>
<a href="/en/features/performance" class="performance">
<h3>Performance</h3>
</a>
</li>
<li>
<a href="/en/features/nuts_and_bolts" class="nuts_and_bolts">
<h3>Nuts &amp; Bolts</h3>
</a>
</li>
</ul>
</div>
</div>
</header>
<a class="watermark" href="/"></a>
<nav class="paginator home">
<ul class="home">
<li><a class="next" href="/en/mobile">Mobile</a></li>
</ul>
<ul class="mobile">
<li><a class="previous" href="/en/">Home</a></li>
<li><a class="next" href="/en/gaming">Gaming</a></li>
</ul>
<ul class="gaming">
<li><a class="previous" href="/en/mobile">Mobile</a></li>
<li><a class="next" href="/en/business">Business</a></li>
</ul>
<ul class="business">
<li><a class="previous" href="/en/gaming">Gaming</a></li>
</ul>
</nav>
<nav class="paginator features">
<ul class="offline">
<li><a class="next" href="/en/features/storage">Storage</a></li>
</ul>
<ul class="storage">
<li><a class="previous" href="/en/features/offline">Offline</a></li>
<li><a class="next" href="/en/features/connectivity">Connectivity</a></li>
</ul>
<ul class="connectivity">
<li><a class="previous" href="/en/features/storage">Storage</a></li>
<li><a class="next" href="/en/features/file_access">File Access</a></li>
</ul>
<ul class="file_access">
<li><a class="previous" href="/en/features/connectivity">Connectivity</a></li>
<li><a class="next" href="/en/features/semantics">Semantics</a></li>
</ul>
<ul class="semantics">
<li><a class="previous" href="/en/features/file_access">File Access</a></li>
<li><a class="next" href="/en/features/multimedia">Audio/Video</a></li>
</ul>
<ul class="multimedia">
<li><a class="previous" href="/en/features/semantics">Semantics</a></li>
<li><a class="next" href="/en/features/graphics">3D/Graphics</a></li>
</ul>
<ul class="graphics">
<li><a class="previous" href="/en/features/multimedia">Audio/Video</a></li>
<li><a class="next" href="/en/features/presentation">Presentation</a></li>
</ul>
<ul class="presentation">
<li><a class="previous" href="/en/features/graphics">3D/Graphics</a></li>
<li><a class="next" href="/en/features/performance">Performance</a></li>
</ul>
<ul class="performance">
<li><a class="previous" href="/en/features/presentation">Presentation</a></li>
<li><a class="next" href="/en/features/nuts_and_bolts">Nuts &amp; Bolts</a></li>
</ul>
<ul class="nuts_and_bolts">
<li><a class="previous" href="/en/features/performance">Performance</a></li>
</ul>
</nav>
<div class="outline_nav_toggle deactivated">
<img class="show" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAeCAYAAADU8sWcAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTAyRDZFQUJFOEVFMTFFMDg2NkJGNDlCNjE5NENEMzIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTAyRDZFQUNFOEVFMTFFMDg2NkJGNDlCNjE5NENEMzIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDJENkVBOUU4RUUxMUUwODY2QkY0OUI2MTk0Q0QzMiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDJENkVBQUU4RUUxMUUwODY2QkY0OUI2MTk0Q0QzMiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pprl4SwAAAIcSURBVHjazFfNasJAEI6ptiIGBCUQbfAWxWu96EUfwAY8tg+gD1A8F+99gfoA9ijoA9he9GKvIt5EMRJyEFKKDQidlaSIyW5iYkgHhiyZzX4zk/nbEOWAJpNJGh4V4DudGYttn8Bz4EGxWJw7OTfkALQBXKPOIwTeASXeXYEDcEMH9kLIG21QYu0IHECRS1+BBeoypAI3rX4F7TMwpcdHF86uEsF9AD6mZ1BAsHQ7CJ7g8WB3wmazia1Wq7imaWHjXSaTUbPZrOpAAQn4EX6B+geuR3Wf9NVisWBGo9HtdruNWckjkci+UCjI5XJ5baMAyoLOMfgLPKq43cPhkJ/NZqwT3yYSie96vT6PRqN7QgCKyHpat/ps4FwuR7VaLdN+5JleryfsdrsrQgDWjICrkFzt1OJTBcbjcZqw5d4ArxIKDec2tJHSoMQ1RiygtKZxqYU+lGWZ8ZJb0+k0RRALNKZJUMvlkvGa2JIkxUngYWxNVNUbYy2KokmeSqUObCWDlKQURbGtfDQVIGEtZxjmx1j3++b6g1ItmUxaypw2HFpPehPxPK96tYzjuC9Sz6f1xm9VqTSWZT0pAOVWsQPHThtQAiW3wPl8XkYG4IAP5RUWH7gDUKdCh5wLjOp7qVQiNZhB4I3FAEdVrhtISw10mDhSoOvjGGUaJE8rXBOXeheg9ukEG+jo/L8uDRe8Lr0B6MD1Xc3vi+KvAAMAMUEG36eXLzcAAAAASUVORK5CYII=" alt="">
<img class="hide" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAeCAYAAADU8sWcAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTAyRDZFQUZFOEVFMTFFMDg2NkJGNDlCNjE5NENEMzIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTAyRDZFQjBFOEVFMTFFMDg2NkJGNDlCNjE5NENEMzIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5MDJENkVBREU4RUUxMUUwODY2QkY0OUI2MTk0Q0QzMiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MDJENkVBRUU4RUUxMUUwODY2QkY0OUI2MTk0Q0QzMiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlXiDkoAAAIdSURBVHjaxFfNasJAEN6sSkUIBOLBFktF0Junek+96wOU3tt76716tw/Q3msfQO8a8GhP3iKIpdJ6MBAIiEWE7shaos1m18SfD4ZFd2a/mc3szqyEBNHtdq/IAJKlsgmDSjufz7dF1pQESG/JcE1ERuL4JtIgTrz4IiekEN0TkVPkH+BEhTjx7jaJGcQlMtQDEiNq/0zX40dOFR/R7lElO9Bgku+ReIWyMxklB/EZGV55iTWbzUL9fl+xbftk9Z8syz+ZTMaKRqMLDrlN5IY48AU/wo6Jey9iINV1/XwwGKhu851OB6XTaVPTtE8PJ2TKU/6LnER9CYnBIh6Px7Fms5mdz+ch3r5GIpFFsVg0EonE1EPtDk7AKttLuyAGgB7og52HWsl51DSWVqvVuhAldjoAdh4qSz5Mt9z1W/d6PdWyrJiftAY7sGd9e+DFjHt6ieFwqAQ5Vxz7LPbK8NFoFIicYy+HRRaJx+NIVVVhUtM00WQy4ephdEQIRQ5RiESyLTC98lyRTCatIItz7G1Muw9XpFKpQOQcewPTQu8afS6XMxVFmfohBjuwZ0XtvF511iKFQuED7uttiEEf7DxUdGe2N1haUCCgUIg6IFhY6pv1vEa7U18lFSBQUhHtbstHbyYkl968tsd7Za2PW7vhaH9VPQQxs2/fQyP5j5j3aIA6X9nBo+GBEBtBnkulLZ2AxHrz/Vw6xEPxV4ABAB9p/+75XTbuAAAAAElFTkSuQmCC" alt="">
<nav class="outline features">
<h3>HTML5 Features</h3>
<ul>
<li class="offline">
<a href="/en/features/offline" class="section_title offline">Offline</a>
<ul>
<li><a href="/en/features/offline#intro">Intro</a></li>
<li><a href="/en/features/offline#support">Browser Support</a></li>
<li><a href="/en/features/offline#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/offline#demos">Demos</a></li>
<li><a href="/en/features/offline#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/offline#resources">Resources</a></li>
</ul>
</li>
<li class="storage">
<a href="/en/features/storage" class="section_title storage">Storage</a>
<ul>
<li><a href="/en/features/storage#intro">Intro</a></li>
<li><a href="/en/features/storage#support">Browser Support</a></li>
<li><a href="/en/features/storage#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/storage#demos">Demos</a></li>
<li><a href="/en/features/storage#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/storage#resources">Resources</a></li>
</ul>
</li>
<li class="connectivity">
<a href="/en/features/connectivity" class="section_title connectivity">Connectivity</a>
<ul>
<li><a href="/en/features/connectivity#intro">Intro</a></li>
<li><a href="/en/features/connectivity#support">Browser Support</a></li>
<li><a href="/en/features/connectivity#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/connectivity#demos">Demos</a></li>
<li><a href="/en/features/connectivity#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/connectivity#resources">Resources</a></li>
</ul>
</li>
<li class="file_access">
<a href="/en/features/file_access" class="section_title file_access">File Access</a>
<ul>
<li><a href="/en/features/file_access#intro">Intro</a></li>
<li><a href="/en/features/file_access#support">Browser Support</a></li>
<li><a href="/en/features/file_access#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/file_access#demos">Demos</a></li>
<li><a href="/en/features/file_access#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/file_access#resources">Resources</a></li>
</ul>
</li>
<li class="semantics">
<a href="/en/features/semantics" class="section_title semantics">Semantics</a>
<ul>
<li><a href="/en/features/semantics#intro">Intro</a></li>
<li><a href="/en/features/semantics#support">Browser Support</a></li>
<li><a href="/en/features/semantics#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/semantics#demos">Demos</a></li>
<li><a href="/en/features/semantics#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/semantics#resources">Resources</a></li>
</ul>
</li>
<li class="multimedia">
<a href="/en/features/multimedia" class="section_title multimedia">Audio/Video</a>
<ul>
<li><a href="/en/features/multimedia#intro">Intro</a></li>
<li><a href="/en/features/multimedia#support">Browser Support</a></li>
<li><a href="/en/features/multimedia#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/multimedia#demos">Demos</a></li>
<li><a href="/en/features/multimedia#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/multimedia#resources">Resources</a></li>
</ul>
</li>
<li class="graphics">
<a href="/en/features/graphics" class="section_title graphics">3D/Graphics</a>
<ul>
<li><a href="/en/features/graphics#intro">Intro</a></li>
<li><a href="/en/features/graphics#support">Browser Support</a></li>
<li><a href="/en/features/graphics#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/graphics#demos">Demos</a></li>
<li><a href="/en/features/graphics#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/graphics#resources">Resources</a></li>
</ul>
</li>
<li class="presentation">
<a href="/en/features/presentation" class="section_title presentation">Presentation</a>
<ul>
<li><a href="/en/features/presentation#intro">Intro</a></li>
<li><a href="/en/features/presentation#support">Browser Support</a></li>
<li><a href="/en/features/presentation#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/presentation#demos">Demos</a></li>
<li><a href="/en/features/presentation#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/presentation#resources">Resources</a></li>
</ul>
</li>
<li class="performance">
<a href="/en/features/performance" class="section_title performance">Performance</a>
<ul>
<li><a href="/en/features/performance#intro">Intro</a></li>
<li><a href="/en/features/performance#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/performance#themes">Themes</a></li>
<li><a href="/en/features/performance#technologies">Technologies</a></li>
<li><a href="/en/features/performance#techniques">Techniques</a></li>
<li><a href="/en/features/performance#tools">Tools</a></li>
<li><a href="/en/features/performance#further_reading">Further Reading</a></li>
</ul>
</li>
<li class="nuts_and_bolts">
<a href="/en/features/nuts_and_bolts" class="section_title nuts_and_bolts">Nuts &amp; Bolts</a>
<ul>
<li><a href="/en/features/nuts_and_bolts#intro">Intro</a></li>
<li><a href="/en/features/nuts_and_bolts#support">Browser Support</a></li>
<li><a href="/en/features/nuts_and_bolts#updates">What&rsquo;s New</a></li>
<li><a href="/en/features/nuts_and_bolts#demos">Demos</a></li>
<li><a href="/en/features/nuts_and_bolts#in_the_wild">In the Wild</a></li>
<li><a href="/en/features/nuts_and_bolts#resources">Resources</a></li>
</ul>
</li>
</ul>
</nav>
</div>
<div class="page current loaded" id="next-config.js">
<div id="oops">
<script pagespeed_no_defer="">(function(){var d=window,e=document,f="documentElement",g="scrollTop",k="prototype",l="body",m="getAttribute",n="",p="1",q="data",r="img",s="load",t="number",u="on",v="onload",w="pagespeed_lazy_position",x="pagespeed_lazy_replaced_functions",y="pagespeed_lazy_src",z="position",A="relative",B="resize",C="scroll",D="src",E=function(a,b,c){if(a.addEventListener)a.addEventListener(b,c,!1);else if(a.attachEvent)a.attachEvent(u+b,c);else{var h=a[u+b];a[u+b]=function(){c.call(this);h&&h.call(this)}}};d.pagespeed=d.pagespeed||{};var F=d.pagespeed,G=function(a){this.d=[];this.a=0;this.b=!1;this.n=a;this.e=null;this.h=0;this.i=200;this.c=!1};G[k].r=function(){var a=0;typeof d.pageYOffset==t?a=d.pageYOffset:e[l]&&e[l][g]?a=e[l][g]:e[f]&&e[f][g]&&(a=e[f][g]);var b=d.innerHeight||e[f].clientHeight||e[l].clientHeight;return{top:a,bottom:a+b,height:b}};G[k].m=function(a){var b=a[m](w);if(b)return parseInt(b,0);var b=a.offsetTop,c=a.offsetParent;c&&(b+=this.m(c));b=Math.max(b,0);a.setAttribute(w,b);return b};
G[k].q=function(a){var b=this.m(a);return{top:b,bottom:b+a.offsetHeight}};G[k].p=function(a,b){if(a.currentStyle)return a.currentStyle[b];if(e.defaultView&&e.defaultView.getComputedStyle){var c=e.defaultView.getComputedStyle(a,null);if(c)return c.getPropertyValue(b)}return a.style&&a.style[b]?a.style[b]:n};
G[k].o=function(a){if(!this.c&&(0==a.offsetHeight||0==a.offsetWidth))return!1;if(this.p(a,z)==A)return!0;var b=this.r(),c=a.getBoundingClientRect();c?(a=c.top-b.height,b=c.bottom):(c=this.q(a),a=c.top-b.bottom,b=c.bottom-b.top);return a<=this.a&&0<=b+this.a};
G[k].l=function(a){this.k(a);var b=this;d.setTimeout(function(){var c=a[m](y);if(null!=c)if((b.b||b.o(a))&&-1!=a.src.indexOf(b.n)){var h=a.parentNode,H=a.nextSibling;h&&h.removeChild(a);a.getAttribute=a.j;a.removeAttribute(v);a.removeAttribute(y);a.removeAttribute(x);h&&h.insertBefore(a,H);a.src=c}else b.d.push(a)},0)};G[k].loadIfVisible=G[k].l;G[k].t=function(){this.b=!0;this.f()};G[k].loadAllImages=G[k].t;G[k].f=function(){var a=this.d,b=a.length;this.d=[];for(var c=0;c<b;++c)this.l(a[c])};
G[k].g=function(a,b){return a.a?null!=a.a(b):null!=a[m](b)};G[k].u=function(){for(var a=e.getElementsByTagName(r),b=0;b<a.length;++b){var c=a[b];this.g(c,y)&&this.k(c)}};G[k].overrideAttributeFunctions=G[k].u;G[k].k=function(a){var b=this;this.g(a,x)||(a.j=a[m],a.getAttribute=function(a){a.toLowerCase()==D&&b.g(this,y)&&(a=y);return this.j(a)},a.setAttribute(x,p))};
F.s=function(a,b){var c=new G(b);F.lazyLoadImages=c;E(d,s,function(){c.c=!0;c.b=a;c.a=200;c.f()});0!=b.indexOf(q)&&((new Image).src=b);var h=function(){if(!(c.c&&a||c.e)){var b=c.i;(new Date).getTime()-c.h>c.i&&(b=0);c.e=d.setTimeout(function(){c.h=(new Date).getTime();c.f();c.e=null},b)}};E(d,C,h);E(d,B,h)};F.lazyLoadInit=F.s;})();

pagespeed.lazyLoadInit(false, "//1-ps.googleusercontent.com/h/www.gstatic.com/psa/static/1.gif");
</script><img pagespeed_lazy_src="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/static/images/identity/HTML5_Badge_256.png.pagespeed.ce.lbZwockZcR.png" title="I pity da foo who doesn't use HTML5!" alt="I pity da foo who doesn't use HTML5!" width="256" height="256" src="//1-ps.googleusercontent.com/h/www.gstatic.com/psa/static/1.gif" onload="pagespeed.lazyLoadImages.loadIfVisible(this);"/>
<h2>Oops!! We didn't find any HTML5 resources for ya.</h2>
</div>
</div>
<script type="text/javascript" pagespeed_no_defer="">pagespeed.lazyLoadImages.overrideAttributeFunctions();</script><script>(function(){$(document).keydown(function(e){if(e.keyCode===27){$('#search_hide, #features_hide').click();}});$('.outline_nav_toggle').click(function(e){$(this).toggleClass('activated');$(this).find('nav.outline').fadeToggle('fast');});$('#features_show a').click(function(){$('#search_hide').click();if($(this).hasClass('current')){$('.subheader.features').hide();$(this).removeClass('current');$('.watermark').css('top','30px');$('#features_show a').focus();}else{$('.main nav .current').removeClass('current');$(this).addClass('current');$('.subheader.features').show();$('.watermark').css('top','100px');$('#features').focus();}
if(/#features$/.test(this.href))return false;});$('#features_hide').click(function(){$('#features_show').removeClass('current');$('.subheader.features').hide();$('.watermark').css('top','30px');$('#features_show a').focus();});window.isCompatible=function(){return null;};if(isCompatible()===false){document.getElementById('notcompatible').className='';}else if(isCompatible()===true){document.getElementById('compatible').className='';}
if(/^\?utm_/.test(document.location.search)&&window.history.replaceState){window.history.replaceState({},'',document.location.href.replace(/\?utm_.*/,''));}
if($('.toc').length&&$(window).width()>1000){var top=$('.toc').offset().top-50;$(window).scroll(function(event){var y=$(this).scrollTop();if(y>=top){$('.toc').addClass('fixed').removeClass('bottom');}else{$('.toc').removeClass('fixed').removeClass('bottom');}});}})();</script>
<script>var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-15028909-1']);_gaq.push(['_setSiteSpeedSampleRate',50]);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script>
<script defer src="http://1-ps.googleusercontent.com/x/s.html5rocks-hrd.appspot.com/www.html5rocks.com/static/js/search.min.js.pagespeed.ce.hdMERthVbk.js"></script>
<script pagespeed_no_defer="">(function(){var e=window,f=Math,g="round",h="&rit_script=",q="&rit_link=",x="&rit_img=",y="&rit_css=",z="&nttfb=",A="&nfd=",B="&ndt=",C="&nct=",D="&nbt=",E="&mfd=",F="&attfb=",G="&afd=",H="&adt=",I="&act=",J="&abt=",K="";e.pagespeed=e.pagespeed||{};var L=e.pagespeed;
L.getResourceTimingData=function(){if(e.performance&&e.performance.webkitGetEntries){for(var r=0,s=0,k=0,t=0,l=0,u=0,m=0,v=0,n=0,w=0,p=0,c={},d=e.performance.webkitGetEntries(),b=0;b<d.length;b++){var a=d[b].duration;0<a&&(r+=a,++k,s=f.max(s,a));a=d[b].connectEnd-d[b].connectStart;0<a&&(u+=a,++m);a=d[b].domainLookupEnd-d[b].domainLookupStart;0<a&&(t+=a,++l);a=d[b].initiatorType;c[a]?++c[a]:c[a]=1;a=d[b].requestStart-d[b].fetchStart;0<a&&(w+=a,++p);a=d[b].responseStart-d[b].requestStart;0<a&&(v+=a,
++n)}return G+(k?f[g](r/k):0)+A+k+E+f[g](s)+I+(m?f[g](u/m):0)+C+m+H+(l?f[g](t/l):0)+B+l+J+(p?f[g](w/p):0)+D+p+F+(n?f[g](v/n):0)+z+n+(c.css?y+c.css:K)+(c.link?q+c.link:K)+(c.script?h+c.script:K)+(c.img?x+c.img:K)}return K};L.getResourceTimingData=L.getResourceTimingData;})();
(function(){var c=encodeURIComponent,f=window,h="performance",k="unload:",l="on",m="load:",n="load",p="ets=",q="beforeunload",r="EventStart",s="?",t="=",u="&url=",v="&ttfb=",w="&req_start=",x="&ref=",y="&r",z="&nt=",A="&nrp=",B="&nav=",C="&ifr=1",D="&ifr=0",E="&htmlAt=",F="&fp=",G="&dwld=",H="&dom_c=",I="&dns=",J="&connect=",K="&ccul=",L="&ccrl=",M="&ccos=",N="&ccis=",O="&cces=",P="&b_csi=",Q="&",R="";f.pagespeed=f.pagespeed||{};var S=f.pagespeed,T=function(a,d,b,e){this.d=a;this.a=d;this.b=b;this.e=e};S.beaconUrl=R;
T.prototype.c=function(){var a=this.d,d=f.mod_pagespeed_start,b=Number(new Date)-d,a=a+(-1==a.indexOf(s)?s:Q),a=a+p+(this.a==n?m:k),a=a+b;if(this.a!=q||!f.mod_pagespeed_loaded){a+=y+this.a+t;if(f[h]){var b=f[h].timing,e=b.navigationStart,g=b.requestStart,a=a+(b[this.a+r]-e),a=a+(B+(b.fetchStart-e)),a=a+(I+(b.domainLookupEnd-b.domainLookupStart)),a=a+(J+(b.connectEnd-b.connectStart)),a=a+(w+(g-e)),a=a+(v+(b.responseStart-g)),a=a+(G+(b.responseEnd-b.responseStart)),a=a+(H+(b.domContentLoadedEventStart-
e));f[h].navigation&&(a+=z+f[h].navigation.type);e=-1;b.msFirstPaint?e=b.msFirstPaint:f.chrome&&f.chrome.loadTimes&&(e=Math.floor(1E3*f.chrome.loadTimes().firstPaintTime));e-=g;0<=e&&(a+=F+e)}else a+=b;S.getResourceTimingData&&f.parent==f&&(a+=S.getResourceTimingData());a+=f.parent!=f?C:D;this.a==n&&(f.mod_pagespeed_loaded=!0,(b=f.mod_pagespeed_num_resources_prefetched)&&(a+=A+b),(b=f.mod_pagespeed_prefetch_start)&&(a+=E+(d-b)));S.panelLoader&&(d=S.panelLoader.getCsiTimingsString(),d!=R&&(a+=P+d));
S.criticalCss&&(d=S.criticalCss,a+=N+d.total_critical_inlined_size+O+d.total_original_external_size+M+d.total_overhead_size+L+d.num_replaced_links+K+d.num_unreplaced_links);this.b!=R&&(a+=this.b);document.referrer&&(a+=x+c(document.referrer));a+=u+c(this.e);S.beaconUrl=a;(new Image).src=a}};S.f=function(a,d,b,e){var g=new T(a,d,b,e);f.addEventListener?f.addEventListener(d,function(){g.c()},!1):f.attachEvent(l+d,function(){g.c()})};S.addInstrumentationInit=S.f;})();

pagespeed.addInstrumentationInit('http://1-ps.googleusercontent.com/beacon?org=102_3_vo', 'load', '&ft=200', 'http://www.html5rocks.com/en/next/config.js');</script></body>
</html>

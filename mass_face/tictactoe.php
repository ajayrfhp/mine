<?php session_start();?>
<?php require_once("includes/connection.php"); ?>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding"></head>
<style>
div.btable
{
width:500px;
height:500px;
margin-top: 100px; margin-right:auto; margin-bottom:auto; margin-left:100px;
}
div.trow
{
margin-top: 20px; margin-right:20px; margin-bottom:20px; margin-left:20px;
height:100px;
  
  padding: 0; text-align: center; width: 96%;
}
div.l1
{
padding:0;
float:left;
width:25%;
font-size:90px;
height:100px;
border: 5px outset #1ACAD0;
}
div.l4
{
border: 5px outset #1ACAD0;
margin:0;
padding:0;
width:25%
height:100px;
float:right;
}
div.r1
{
margin:0;
padding:0;
float:left;
width:18%;
height:100px;
border: 5px outset #1ACAD0;
}
div.r2
{
margin:0;
padding:0;
float:left;
width:58%;
height:100px;
border: 5px outset #1ACAD0;
}
div.r3
{
margin:0;
padding:0;
float:right;
width:17%;
height:100px;
border: 5px outset #1ACAD0;
}
</style>
<head >
<script>
var pp=1;
as=new Array(); 
 as[1]=1;as[2]=1;as[3]=1;
 as[4]=1;as[5]=1;as[6]=1;
 as[7]=1;as[8]=1;as[9]=1;
nw="";
var timer=setInterval(
function()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	nw=xmlhttp.responseText;
	if(nw!='inactive')
	pp=0;
	else
		pp=1;
	if(nw.indexOf('~')!=-1)
	{
	if(as[1]==-1&&as[9]==-1&&as[2]==-1&&as[3]==-1&&as[4]==-1&&as[5]==-1&&as[6]==-1&&as[7]==-1&&as[8]==-1)
		{
		alert("draw");
		finish();
		}
	
	var arr=nw.split('~');
	var n1=arr[0];
	var n2=arr[1];
	if(n1>0)
	{
	decode(n1,'X');
	}
	if(n2>0)
	{
	decode(n2,'O');
	}
	
	}
	
	}
	else if(nw.indexOf('#')!=-1)
		{
		alert(nw);		
		finish();
		}
	}
xmlhttp.open("GET","http://localhost/mass_face/timer.php",true);
xmlhttp.send();
},500);

  
  function fn2(y)
{

if(as[y]!=-1 && pp==0)
{
var an=inpt(y);
var nw;
if(pp==0)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	nw=xmlhttp.responseText;
	
	
	if(nw.indexOf('~')!=-1)
	{
	//if(nw.indexOf('?')!=-1)
	var arr=nw.split('~');
	var n1=arr[0];
	var n2=arr[1];
	if(n1>0)
	{
	decode(n1,'X');
	}
	
	if(n2>0)
	{
	decode(n2,'O');
	}
	}
	else
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	else
		{
		document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	
	}
 
xmlhttp.open("GET","http://localhost/mass_face/massda.php?num="+an,true);
xmlhttp.send();
var e=document.getElementById('ad');
	e.innerHTML="done";
}
else document.getElementById("txtHint").innerHTML='wait please';
}
else
	{
	var e=document.getElementById('ad');
	e.innerHTML="clicked already";
	}
}
function genr(y)
	{
	genr.x=genr.x*y||y;
	
	return genr.x;
	}
	
function decode(o,e)
	{
	if(o%2==0)
		{
		sh(7,e);
		}
	if(o%3==0)
		{		sh(8,e);
		
		}
	if(o%5==0)
		{
		sh(9,e);
		}
		if(o%7==0)
		{
		sh(4,e);
		}
		 if(o%11==0)
		{
		sh(5,e);
		}
		 if(o%13==0)
		{
		sh(6,e);
		}
		 if(o%17==0)
		{
		sh(1,e);
		}
		 if(o%19==0)
		{
		sh(2,e);
		}
		 if(o%23==0)
		{
		sh(3,e);
		}
	}



	


function inpt(x)
{var ans;
if(x==7)
	ans=genr(2);
else if(x==8)
	ans=genr(3);
else if(x==9)
	ans=genr(5);
else if(x==4)
	ans=genr(7);
else if(x==5)
	ans=genr(11);
else if(x==6)
	ans=genr(13);
else if(x==1)
	ans=genr(17);
else if(x==2)
	ans=genr(19);
else if(x==3)
	ans=genr(23);
	return ans;
	}
function sh(r,ch)
	{
	if(as[r]!=-1)
	{
	var show=document.getElementById(r);
	show.innerHTML=ch;
	as[r]=-1;
	}
	}
	
function fn(x)
	{
	x = x ||-1;
	if(pp==0)
	{
	fn2(x);
	}
	else
	{
	pp=1;
	}
	}

function finish()
{
clearInterval(timer);
window.location="http://localhost/mass_face/over.php";
}
var timer=setInterval(
function()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	nw=xmlhttp.responseText;
	if(nw.indexOf('~')!=-1)
	{
	if(as[1]==-1&&as[9]==-1&&as[2]==-1&&as[3]==-1&&as[4]==-1&&as[5]==-1&&as[6]==-1&&as[7]==-1&&as[8]==-1)
		{
		alert("draw");
		finish();
		}
	var arr=nw.split('~');
	var n1=arr[0];
	var n2=arr[1];
	if(n1>0)
	{
	decode(n1,'X');
	}
	if(n2>0)
	{
	decode(n2,'O');
	}
	
	}
	
	else if(nw.indexOf('#')!=-1)
		{
		alert(nw);		
		finish();
		}
	}
	}
xmlhttp.open("GET","http://localhost/mass_face/timer.php",true);
xmlhttp.send();
},1000);
</script>
</head>
<body >
<div id="btns" class="btable" >
<div class="trow">
	<div class="l1" id="7" onclick="fn('7');"></div>
	<div class="l1" id="8" onclick="fn('8');"></div>
	<div class="l1" id="9" onclick="fn('9');"></div>
</div>
<div class="trow">
	<div class="l1" id="4" onclick="fn('4');"></div>
	<div class="l1" id="5" onclick="fn('5');"></div>
	<div class="l1" id="6" onclick="fn('6');"></div>
</div>
<div class="trow">
	<div class="l1" id="1" onclick="fn('1');"></div>
	<div class="l1" id="2" onclick="fn('2');" ></div>
	<div class="l1" id="3" onclick="fn('3');"></div>
</div> 
</div>
</body>
<p id="ad"></p>
<p>Suggestions: <span id="txtHint"></span></p>
</html>

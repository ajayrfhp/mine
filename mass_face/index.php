<?php include("includes/header.php"); ?>
	<script type="text/javascript">
	function changetext(a)
	{
	var x=document.getElementById(a);
	x.value="";
	}
	function rename(p,q)
	{
	var x=document.getElementById(p);
	if(x.value=="")
	{
	x.value=q;
	}
	}
	
	function validateform()
	{
	var a=document.getElementById('fname');
	var b=a.value;
	e=0;
	//first name empty
	try
		{
		if(b=='your first name')
			throw "empty";
		}
	catch(err)
		{
		var w=document.getElementById('err');
		w.innerHTML="your first name is "+err+".";
		e=1;
		}
	//last name empty
	a=document.getElementById('lname');
	b=a.value;
	try
		{
		if(b=='your last name')
			throw "empty";
		}
	catch(err)
		{
		var w=document.getElementById('err2');
		w.innerHTML="your last name is "+err+".";
		e=1;
		}
	//email id
	a=document.getElementById('email');
	var b=a.value;	
	try
		{
		if(b=='your email id')
			throw "empty";
		}
	catch(err)
		{
		var w=document.getElementById('err3');
		w.innerHTML="your email is "+err+".";
		e=1;
		}
	
	try 
		{
		 var a=document.getElementById('email');
		 a=a.value;
		 var t=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
		 if(t.test(a)==false)
			throw "invalid";
		else if(a.indexOf("spambot.org")!=-1 || a.indexOf("mailinator.com")!=-1)
			throw "invalid enter a Non Blacklisted Email id";
		}
	catch(err)
		{
		var x=document.getElementById('err3');
		x.innerHTML="email id is " +err+ ".";		
		e=1;
		}
	
	
	
	
	//date of birth
	a=document.getElementById('dob');
	var b=a.value;	
	try
		{
		if(b=='your date of birth')
			throw "empty";
		}
	catch(err)
		{
		var w=document.getElementById('err4');
		w.innerHTML="your date of birth is "+err+".";
		e=1;
		}
	
		a=document.getElementById('dob').value;
		b=a.slice(0,2);
	try
		{
	
		if(isNaN(b))
			{
			throw "not a valid number";
			}
		else if(!(parseInt(b)>=1 && parseInt(b)<=31))
			{
			throw "not in bw 1 and 31";
			}
		}
		
		catch(err)
		{
		var x=document.getElementById('err4');
		x.innerHTML="Error:date is " +err+ ".";
		e=1;
		}
		var a=document.getElementById('dob').value;
		var b=a.slice(3,5);
	//month	
		try
		{
		
		if(isNaN(b))
			throw "not a valid number";
		else if(!(parseInt(b)>=1 && parseInt(b)<=12))
			throw "not in bw 1 and 12";
		}
		catch(err)
		{
		var x=document.getElementById('err4');
		x.innerHTML="Error:month is " +err+ ".";
		e=1;
		}
	//year
		var a=document.getElementById('dob').value;
		var b=a.slice(6,10);
		try
		{
		if(isNaN(b))
			throw "not a valid number";
		}
		catch(err)
		{
		var x=document.getElementById('err4');
		x.innerHTML="Error:year is " +err+ ".";
		e=1;
		}
	//pwd
	a=document.getElementById('pwd');
	var b=a.value;	
	try
		{
		if(b=='your password')
			throw "empty";
		}
	catch(err)
		{
		var w=document.getElementById('err5');
		w.innerHTML="your password is "+err+".";
		e=1;
		}
	if(e==1)
	{
	return false;
	}
	}
	</script>
			<form action="user_page.php" method="post">
			Email&nbsp;<input type="text" name="username"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Password&nbsp;<input type="password" name="password"/>&nbsp;&nbsp;&nbsp;
			<input type="submit" name="submit" Value="login"/>
			</form>
			<br/><br/><br/><br/>
	<div class="frm">
			<h1>SIGN UP</h1>
		<form name="signup" action="create_user.php" onsubmit="return validateform()" method="post">
		<input type="text" name="fname" id="fname" value="your first name" onfocus="changetext('fname');" onblur="rename('fname','your first name')";/>
			<input type="text" name="lname" id="lname" value="your last name" onfocus="changetext('lname');" onblur="rename('lname','your last name')"/><br/><br/>
		<input type="text" name="email" id="email" value="your email id" onfocus="changetext('email');" onblur="rename('email','your email id')"/><br/><br/>
		<input type="text" name="dob" id="dob" value="your date of birth" onfocus="changetext('dob');" onblur="rename('dob','your date of birth')"/><br/><br/>
		<input type="text" name="pwd" id="pwd" value="your password" onfocus="changetext('pwd');" onblur="rename('pwd','your password')"/><br/><br/>
		Male<input type="radio" name="gender" value="male">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Female<input type="radio" name="gender" value="female"><br/><br/><br/>
		<input type="submit" value="sign up" name="submit"/>
		</form>
	</div>
	<div class="txt">
	<h1>
	If not registered,<br/><br/>
	Register now!!!
	</h1>
	</div>
	<p id="err">errors</p>
	<p id="err2"></p>
	<p id="err3"></p>
	<p id="err4">enter date as dd/mm/yy</p>
	<p id="err5"></p>
<?php include("includes/footer.php"); ?>
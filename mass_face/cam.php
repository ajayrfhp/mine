<?php
session_start();?>
<?php confirm_logged_in(); ?>
<?php
	function logged_in(){
	return isset($_SESSION['user_id']);
	}
	function confirm_logged_in(){
	if(!logged_in()){
	redirect_tonew("index.php");
	}
	}
	function redirect_tonew($location)
	{
	if($location!=NULL)
		{
		header("Location:{$location}");
		exit;
		}
	}
	
	echo $_SESSION['user_id'];
	?>
<html lang="en">
<body>
	<table><tr><td valign=top>
	<h1>JPEGCam Test Page</h1>
		
	<script type="text/javascript" src="webcam.js"></script>
	
		<script language="JavaScript">
		webcam.set_api_url( 'test.php' );
		webcam.set_quality( 90 ); 
		webcam.set_shutter_sound( true ); 
		</script>
	
		<script language="JavaScript">
		document.write( webcam.get_html(320, 240) );
	</script>
	
		<br/><form>
		<input type=button value="Configure..." onClick="webcam.configure()">
		&nbsp;&nbsp;&nbsp;
		<input type=button value="Take Snapshot" onClick="webcam.snap()">
	</form>
	
	
	<script language="JavaScript">
		webcam.set_hook( 'onComplete', 'my_completion_handler' );
		
		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				var image_url = RegExp.$1;
				// show JPEG image in page
				document.getElementById('upload_results').innerHTML = 
					'<h1>Upload Successful!</h1>' + 
					'<img src="'+image_url+'">';
			}
			else alert("PHP Error: " + msg);
		}
	</script>
	
	</td><td width=50>&nbsp;</td><td valign=top>
		<div id="upload_results"></div>
	</td></tr></table>

	</body>
</html>

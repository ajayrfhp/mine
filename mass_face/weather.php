<form action="" method="post">
Type Your Location : <input type="text" name="myaddress" /> (eg. Whitefield, Bangalore)
</form>
<br />
<?php
if(isset($_POST['myaddress'])){
$myaddress = urlencode($_POST['myaddress']);
$url = "http://maps.googleapis.com/maps/api/geocode/json?address=$myaddress&sensor=false";
$getmap = file_get_contents($url);
$googlemap = json_decode($getmap);
foreach($googlemap->results as $res){
$address = $res->geometry;
$latlng = $address->location;
$formattedaddress = $res->formatted_address;

?>
<br />
<h2>Dynamic Location on Google Map!</h2>
<html>
<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=<?php
echo $latlng->lat ?>&lon=<?php echo $latlng->lng;?>&name=<?php $myaddress ?>"> </iframe>
</html>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $myaddress;?>&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo urlencode($formattedaddress);?>&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
<!--<script src="http://code.jquery.com/jquery-latest.js"></script>
-->
<script src="js/jquery.js"></script>

</script>
<script type="text/javascript">
$(document).ready(function(){
$("#button").click(function(){"
var sendu = $("#username").val();
var sendp = $("#password").val();

$.ajax({
type:"POST",
url: "testphp.php",
data: "username="+sendu+"&password="+sendp,
dataType: "json",
success: function(msg, string, jqXHR){
$("#result").html(msg+string+jqXHR);

});
});
});
</script>
</head>
<body>
<p>
Name<input type="text" id="username" name="username" /><br />
Password<input type="password" id="password" name="password" /><br />
<input type="button" id="button" value="Submit" /><br />
</p>
<div  id ="result"></div>
</body>
</html>

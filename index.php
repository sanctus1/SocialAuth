<?php 
   require 'config.php';

   session_start();

      
   

?>


<!DOCTYPE html>
<html>
<head>


<style>
body  {
    background-image: url("dd.jpg");
	background-repeat: no-repeat, repeat;
	
   
}
</style>


</head>
<body>
<center>
    <h1 >Assignment 3  </h1>

            <a href="
https://www.facebook.com/dialog/oauth?response_type=code&client_id=423177671494122&redirect_uri=https://localhost:8080/fb/index.php&scope=public_profile user_posts user_friends user_photos
"><img src="fb.png" width="200" heigt="100"/></a><br/><br/>
          


<h5> add new status </h5>
	<form action='index.php' method='POST' enctype='multipart/form-data'>
		<lable>Status</lable>
		<input type='text' class='fomr-control' id='msg' name='msg' placeholder='status'>
		<button type='submit id='post'>post on the wall</button>
	</form>
    
        
</center>


</div>

</body>
</html>
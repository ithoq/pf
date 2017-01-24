<?php
// AppID: 146841422472324
// AppSecret: 6e484e539e49181ce08bba80e2797b7a
ini_set ( 'display_errors', 1 );
ini_set ( 'display_startup_errors', 1 );

error_reporting ( E_ALL );
// Note: error_log() messages go to:
// dev: /Applications/MAMP/log/php/php_error.log
// prod: /var/log/apache2/error.log

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Propaganda Finder</title>

<!-- Bootstrap -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">
<!-- Optional bootstrap theme -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
	crossorigin="anonymous">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<link rel="stylesheet"
	href="lib/formvalidation/css/formValidation.min.css">

<link rel="stylesheet" href="lib/datepicker/css/datepicker.css">

<!-- Applications css -->
<link rel="stylesheet" href="css/style_base.css">

<!-- From: https://github.com/datejs/Datejs/blob/master/build/date.js 
<script type="text/javascript" src="js/date.js"></script>
<script type="text/javascript" src="js/GPW.js"></script>
-->

<script type="text/javascript" src="js/pf.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script
	src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<!-- Shared scripts for this app -->

<!-- From: http://bootboxjs.com/ -->
<script type="text/javascript" src="js/bootbox.min.js"></script>

<!-- From http://formvalidation.io -->
<script type="text/javascript"
	src="lib/formvalidation/js/formValidation.js"></script>
<script type="text/javascript"
	src="lib/formvalidation/js/framework/bootstrap.min.js"></script>

<!-- From http://www.eyecon.ro/bootstrap-datepicker/ -->
<script type="text/javascript"
	src="lib/datepicker/js/bootstrap-datepicker.js"></script>


<body>

	<div id="fb-root"></div>
	<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '146841422472324', // App ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
      });
    };
   
    (function(d){
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all.js";
       ref.parentNode.insertBefore(js, ref);
     }(document));

    function Login()
    {
        FB.login(function(response) {
           if (response.authResponse) 
           {
                getUserInfo(); // Get User Information.

            } else
            {
             console.log('Authorization failed.');
            }
         },{scope: 'email'});
    }

    function getUserInfo() {
    	FB.api('/me?fields=id,name,email', function(response) {
		alert("hey " + response.name);
    	 //response.name       - User Full name
    	 //response.link       - User Facebook URL
    	 //response.username   - User name
    	 //response.id         - id
    	 //response.email      - User email

    	 });
    }

    // Login callback
    FB.Event.subscribe('auth.authResponseChange', function(response) {
		debugger;
    	if (response.status === 'connected') {
			//SUCCESS
    	} else if (response.status === 'not_authorized'){
			//FAILED
    	} else {
    		//UNKNOWN ERROR. Logged Out
    	}
    });

    function Logout() {
        FB.logout(function(){document.location.reload();});
    }
  </script>


	Bleh!

</body>
</html>
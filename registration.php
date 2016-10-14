<?php 
?>
<html>
<head>
	
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background='regback.jpg'>
	<div id="legend"> 
	<legend class="" style='margin-left:150px;
	margin-right:250px;'><p style='margin-left:400px;'>Register</p></legend> 
</div>
<form class="form-horizontal" action='' method="POST" style='margin-left:500px;'> <fieldset> 
	
 <div class="control-group"> <!-- Username --> 
	<label class="control-label" for="username">Username</label> 
	<div class="controls"> 
	<input type="text" id="username" name="username" placeholder="" class="input-xlarge"> 
	<p class="help-block">Username can contain any letters or numbers, without spaces</p> 
</div> 
</div> 
	<div class="control-group">
 <!-- E-mail --> <label class="control-label" for="email">E-mail</label> 
	<div class="controls">
 <input type="text" id="email" name="email" placeholder="" class="input-xlarge"> 
	<p class="help-block">Please provide your E-mail</p> 
</div> 
</div> 
	<div class="control-group"> 
	<!-- Password--> <label class="control-label" for="password">Password</label> <div class="controls">
 <input type="password" id="password" name="password" placeholder="" class="input-xlarge"> 
	<p class="help-block">Password should be at least 4 characters</p> 
</div> 
</div> 
	<div class="control-group"> 
	<!-- Password --> <label class="control-label" for="password_confirm">Password (Confirm)</label> 
	<div class="controls"> 
	<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge"> 
	<p class="help-block">Please confirm password</p> 
</div> 
</div>
 <div class="control-group"> 
	<!-- Button --> <div class="controls"> 
	<button class="btn btn-success">Register</button> 
</div> 
</div> 
</fieldset>
 </form>
</body>
</html>
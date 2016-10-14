<?php
if ($_POST['pass']) 
{
	
	$dbhost='localhost:3306';
	$dbuser='root';
	$dbpass='icancode23';
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	$databasefound=mysqli_select_db($conn,'pokedex');
	//echo $_POST['email'];
	$sql="SELECT loginid,password FROM users WHERE loginid='{$_POST['email']}'";
	//echo $sql;
	$dataentercheck=mysqli_query($conn,$sql);
	$arr=mysqli_fetch_assoc($dataentercheck);
	$originalpassword=$arr['password'];
	//echo empty($arr); checking whether the result set is empty or not
	if(!empty($arr))
	{
		
		if (strcmp($_POST['pass'],$originalpassword)==0)
		{
			$context="Hey {$_POST['email']}!";
			global $register;
			$register="false";
		}
		else 
		{
			$context='you have entered a wrong password';
		}
	}
	else
	{ 
		$register='true';
		//echo "you have not registered with us ";
	}

}
?>
<html>
<head>
	
	</script>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body id='mainbody' background='backlanding.jpg'>
<div style='
margin-top:100px;
font-size:250%;
color:#FFFFFF;'id='contentdiv' >
<h1 style='font-size:250%;' id='text'>
	
	</h1>
	
	<button id='but'onclick='navfromlandingpage()' style='position:absolute;
	background-color: black;
	margin-top:90px;
	margin-left:500px'>
	

	</button>


</div>
</body>
<script>//!!!!the condition to handle the wrong password case is pending
	<!--
	var check="<?php echo $register ?>";
	alert(check);
	if (check=='true')
		{
			var body=document.getElementById('mainbody');
			var but=document.getElementById('but');
			var div=document.getElementById('contentdiv');
			var txt=document.getElementById('text');
			but.innerHTML='Register';
			txt.innerHTML="You have not registered with us";


		
		}
		else
		{
			
			var body=document.getElementById('mainbody');
			var but=document.getElementById('but');
			var div=document.getElementById('contentdiv');
			var txt=document.getElementById('text');
			but.innerHTML='Proceed';
			var checker="<?php echo $context ?>";
			txt.innerHTML=checker;
		}

	function navfromlandingpage()
	{
		var check="<?php echo $register ?>";
		if (check=='true')
		{
		window.location.href='registration.php';
		}
		
		/*var check="<?php echo $register ?>";
		var but=document.getElementById('but');
		var k=but.innerHTML;
		//alert(k);
		but.innerHTML="REGISTER";*/

	}
	/*if (check=="true")
	{
		//alert("chal gaya");
		var linktoreg=document.createElement("a");
		var body=document.getElementById("mainbody");
		var txtnode=document.createTextNode("REGISTER WITH US");
		linktoreg.setAttribute("href","registration.php");
		body.appendChild(linktoreg);
		linktoreg.appendChild(txtnode);
	
	}

}
*/


	-->
</script>
</html>
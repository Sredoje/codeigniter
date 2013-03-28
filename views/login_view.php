<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login form</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/a.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"> -->
	


	
</head>
<body>
<header>tralala linkovi</header>

<section id="container">
	<h1>Ajmo login</h1>

	<?php 
	//prikazuje greske validacije
	echo validation_errors();
	echo form_open(base_url().'main/form_data', '');
	
	echo '<br>';
	echo form_input('username','','autocomplete=off'); 
	//autocomplete off da ne bi sam popunjavao

	echo '<br>';
	
	echo '<br>';
	echo form_password('password', '','autocomplete=off');
	echo form_submit('login', 'Log in',"class='btn btn-info'");
	echo form_close();


	 ?>


	
</section>
<footer>about us tralal</footer>

</body>
</html>
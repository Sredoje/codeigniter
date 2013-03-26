<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Valja view</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/a.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css"> -->


	
</head>
<body>

<div id="container">
	<h1>Valja view</h1>
<?php print_r($this->session->all_userdata()) ?>
<a href="<?php echo base_url();?>main/logout">Logout</a>


	
</div>

</body>
</html>
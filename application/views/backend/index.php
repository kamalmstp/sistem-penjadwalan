<?php
	$account_type       =	$this->session->userdata('login_level');
	$account_type_id	=	$this->session->userdata('login_user_id');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title><?php echo $page_title;?></title>

	<meta charset="utf-8" dir="ltr">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php include 'includes_top.php';?>

</head>
<body class="page-body skin-default" >
	<div class="page-container" >
		<?php include $account_type.'/navigation.php';?>
		<div class="main-content">

			<?php include 'header.php';?>

           <h3 style="margin:20px 0px;">
           	<i class="entypo-right-circled"></i>
				<?php echo $page_title;?>
           </h3>

			<?php include $account_type.'/'.$page_name.'.php';?>

			<?php include 'footer.php';?>

		</div>

	</div>
    
    <?php include 'includes_bottom.php';?>

</body>
</html>
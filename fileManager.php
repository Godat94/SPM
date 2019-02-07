<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>BPMN Files Manager | <?php echo SITE_NAME; ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
	<link href="<?php echo BST_URL; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo CSS_URL; ?>style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo JS_URL; ?>jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$( ".menu-icon" ).on('click', function() {
			$( "ul.nav1" ).slideToggle( 300 );
		});
	});
	</script>
</head>
<body>
<!-- Navigation -->
<?php require_once 'elements/nav_menu.php'; ?> 

<header class="bg-primary text-white">
	<div class="container text-center">
		<h1>MANAGE BPMN FILES</h1>
	</div>
</header>
<section id="about">
	<div class="container">
		<!-- Display status message -->
		<?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
		<div class="col-xs-12">
			<div class="alert alert-success"><?php echo $statusMsg; ?></div>
		</div>
		<?php }elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
		<div class="col-xs-12">
			<div class="alert alert-danger"><?php echo $statusMsg; ?></div>
		</div>
		<?php } ?>
		
		<div class="row">
			<div class="col-md-12 search-panel">
				<!-- Search form -->
				<form>
					<div class="input-group mb-3">
						<input type="text" name="searchKeyword" class="form-control" placeholder="Search by title..." value="<?php echo $searchKeyword; ?>">
						<div class="input-group-append">
						  <input type="submit" name="submitSearch" class="btn btn-outline-secondary" value="Search">
						  <a href="<?php echo BASE_URL.'fileManager.php'; ?>" class="btn btn-outline-secondary">Reset</a>
						</div>
					</div>
				</form>
				
				

<!-- Footer -->
<?php require_once 'elements/footer.php'; ?> 

</body>
</html>
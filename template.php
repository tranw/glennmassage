<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description" content="<?php echo $metadesc; ?>" />
    <meta name="keywords" content="<?php echo $metakeywords ?>" />

	<title><?php echo $pagetitle; ?></title>

    <?php include('includes/head-contents.php') ?>

</head>

<body>
	        
    <?php include('includes/setmore-div.php'); ?>

    <?php include('includes/nav.php'); ?>
    
    <?php echo $MAINCONTENT;?>

    <?php include('includes/footer.php') ?>

    <?php include('includes/scripts-bottom.php') ?>
    
</body>

</html>
<?php
include "imagemap.php";
?>

<html>
	<head>
<?php
include("head_code.php")
?>
	<title><?php print $title; ?></title>
 	
	<style type="text/css">
	<?php
		print_image_map_file($map_file, $images_path);
		print_image_map_css($map);
	?>
	</style>
		
	</head>

<body>
<?php
	include("header.php");
?>
<?php
	print_image_map_body($map);
?>
<?php
	include("footer.php");
?>
</body>

</html>

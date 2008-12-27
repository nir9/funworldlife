<div align="center">
	<a href="<?php print site_url(); ?>/welcome">
		<img src="<?php echo base_url(); ?>images/logo_party.png">
	</a>
</div>	

<?php
	// Check if user is logged in
	if (isset($show_not_logged)) {
		include("banner_not_logged.php");
	}
	else if($this->session->userdata('logged_in')) {
		// logged in
		include("banner_logged.php");
	}
	else {
		include("banner_not_logged.php");
	}
?>

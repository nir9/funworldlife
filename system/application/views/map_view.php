
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>
<div align="center">
	<img src="<?php echo base_url(); ?>images/FunworldlifeWorld.png">
		<br><hr>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>

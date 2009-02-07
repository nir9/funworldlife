
<?php 
	$data["title"] = $title;
	$data["show_not_logged"] = true;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
		<div style="background: blue; width: 250; font-family: Arial;">
		<font color="White"><b>דברים קטנים נוספים</b></font></div>
		<a href="images"><img src="<?php echo base_url(); ?>images/images.png"></a>
		</div>
		<br><hr>
		<?php $this->load->view("footer.php", $title) ?>
	</body>
</html>

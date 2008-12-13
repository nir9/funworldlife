
<?php 
	$data = array();
	$data["title"] = "Error | שגיאה";
	$this->load->view("header.php", $data);
?>

		<div dir='rtl' align="center">
		<br>
		<?php echo $message; ?>
		<br>
		<input type="submit" onclick="window.location='javascript:history.back(-1)'" value="חזרה לעמוד הקודם -->">
	
		</div>
		
	</body>
</html>


<?php 
	$data["title"] = $title;
	$this->load->view("header.php", $data) 
?>

		<div dir='rtl' align="center">
	
		<?php echo form_open('buyhouse/submit'); ?>
		
		<fieldset>
		<br>
		צבע הבית:<?php echo form_dropdown($colors['name'], $colors['options']) ?>&nbsp;
		<br>
		
		<?php echo form_hidden('house_id', $house_id); ?>
		<br>
		<?php echo form_submit('submit', 'קנייה'); ?>
		<input type='reset' value='אפס טופס'>
		<br>
		</fieldset>
<?php echo form_close(); ?>
		
		</div>
		<?php $this->load->view("footer.php", $title) ?>
		</div>
	</body>
</html>



<?php 
	$data["title"] = $title;
	$this->load->view("header.php", $data) 
?>

	<div dir='rtl' align='center'>
		<?php 
		$site_url = site_url();
		foreach ($categories as $category => $category_title)
		{
			echo "<a href=$site_url/shops/shop/$category>$category_title</a>";
			echo "<br>\n";
		}		
		?>
		
		</div>
		<?php $this->load->view("footer.php", $title) ?>
		</div>
	</body>
</html>


<?php 
	$data["title"] = $title;
	$this->load->view("header.php", $data) 
?>

	<div dir='rtl' align='center'>


	<?php 
		function show_product_a($id)
		{
			$base = base_url();
			$str = 
"<a href='javascript:void(0);' onclick=\"window.open('$base'+'index.php/show_product/show/$id', '_blank', 'width=500,height=300,scrollbars=yes,status=yes,resizable=yes,screenx=0,screeny=0');\">";
			return $str;
		}

		if ($has_products) {
		
		foreach ($products_info as $product)
		{
			$id = $product["product_id"];
			$image = $product["image"];
			$amount = $products_amount[$id];
		
			print "<table><td>";
			print "$amount X ";
			if (false /*$owned_by_current_user*/ ) {
				print show_product_a($id) . "<img src='$products_images_path/$image'></a>";
			}
			else {
				print "<img src='$products_images_path/$image'>";
			}
			print "</td></table><br><br><br>";		

		}
		
		}
	?>
		
		</div>
		<?php $this->load->view("footer.php", $title) ?>
		</div>
	</body>
</html>


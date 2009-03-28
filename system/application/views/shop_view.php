
<?php 
	$data["title"] = $title;
	$this->load->view("header.php", $data) 
?>

	<div dir='rtl' align='center'>

		<?php 
		
		foreach ($products as $product)
		{	
			$name = $product['name'];
			$price = $product['price'];
			$product_id = $product['product_id'];
			$image = $product['image'];
			
			print "<table><tr>";
			print "<td>מוצר: $name<br>\n";
			print "	מחיר: $price <br>\n";
			print "</td>";
			print "<td>";
			print "	<img src='$images_path/$image' alt='$name'>";
			print "</td>";
			print "<td>";
			print form_open($buyproduct_page);
			print form_hidden('product_id', $product_id);
			if ($owner_data) {
				print form_hidden('owner_id', $owner_data->id);
			}
			print "<input type='text' size='3' value='1' name='amount'>";
			if (isset($product["amount"])) {
				$amount = $product["amount"];
				print " X$amount";
			}
			print "<br>" . form_submit('submit', 'קנייה');
			print form_close();
			print "</td>";
			print "</tr></table>";	
			print "<br>";
		}		
		?>
		
		</div>
		<?php $this->load->view("footer.php", $title) ?>
		</div>
	</body>
</html>


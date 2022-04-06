<table class="table">
		<tr>
			<th>ID</th>
			<th>Название</th>
		    <th>Описание</th>
		    <th>Цена</th>
	  	</tr>
	  	<?php
		  	$products = mysqli_query($connect, "SELECT * FROM `products`");
		  	$products = mysqli_fetch_all($products);
		  		foreach ($products as $product) {
	  	?>
	  		    	<tr>
	  					<td><?= $product[0] ?></td>
	    				<td><?= $product[1] ?></td>
	    				<td><?= $product[2] ?></td>
	    				<td><?= $product[3] ?></td>
	  				</tr>
	  			<?php
	  		}
	  	?>
</table>
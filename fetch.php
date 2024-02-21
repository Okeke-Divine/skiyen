<?php

	$connect = mysqli_connect("localhost","root","","zzz");
	$sql = "SELECT * FROM brand INNER JOIN product ON brand.brand_id = product.brand_id";
	$result = mysqli_query($connect,$sql);
?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<div class="table-responsive container mt-2">
<h1>Joining data from two differnet tables (brand,product)</h1>
	<table class="table table-striped">
		<tr>
			<th>Product Id</th>
			<th>Brand Name</th>
			<th>Product Name</th>
		</tr>
		<?php

			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $row["product_id"]; ?></td>
					<td><?php echo $row["brand_name"]; ?></td>
					<td><?php echo $row["product_name"]; ?></td>
				</tr>
				<?php
			}

		?>
	</table>
</div>

<img src="/logo/api3/reaction/reaction-small.png">
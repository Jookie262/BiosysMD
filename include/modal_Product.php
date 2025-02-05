<div id="myModal" class="modal">
	<!-- Modal content -->
		<div class="modal-content">
			<form action="../actions/product_add.php" method="POST">

				<div class="header">
					<h3 id="Title">Create Product</h3>
					<span class="close">&times;</span>
				</div>

					<div class="form-group">
						<input type="text" class="form-control" name="productdesc"placeholder="Product Description">
					</div>
					<div class="form-group">
						<input type="text" class="form-control"  name="productqty"placeholder="Product Quantity">
					</div>
					<div class="form-group">	
						<input type="text" class="form-control" name="productunit" placeholder="Product Unit">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="unitprice"placeholder="Product Unit Price">
					</div>
					<div class="form-group">
						<input type="date" class="form-control" name="expiry" placeholder="Product Expiration Date">
					</div>
					<div class="form-group">
						<button type="submit" name="submit"class="btn btn-primary">Add</button>
					</div>
			</form>
		</div>
</div>

<div id="updateModal" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
		<form action="../actions/product_update.php" method="POST">

			<div class="header">
				<h3 id="Title">Update Product</h3>
				<span class="close">&times;</span>
			</div>

				<div class="form-group">
					<input type="text" id="proddesc" class="form-control" name="productdesc" placeholder="Product Description">
				</div>
				<div class="form-group">
					<input type="text" id="prodqty" class="form-control"  name="productqty" placeholder="Product Quantity">
				</div>
				<div class="form-group">	
					<input type="text" id="produnit" class="form-control" name="productunit" placeholder="Product Unit">
				</div>
				<div class="form-group">
					<input type="text" id="prodUprice"class="form-control" name="unitprice" placeholder="Product Unit Price">
				</div>
				<div class="form-group">
					<input type="date" id="expiry" class="form-control" name="expiry" placeholder="Product Expiration Date">
				</div>
                <!-- Product ID --><input name="ProdId" id="ProdId" type="hidden">
				<div class="form-group">
					<button type="submit" name="submit"class="btn btn-primary">Update Product</button>
				</div>
		</form>
	</div>
</div>                
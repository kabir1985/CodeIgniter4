<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<div class="container">
	<!----------------Invoice Option Start------------------------>
	<!-- Modal -->
	<div class="modal fade" id="inVoiceAdd" tabindex="-1" role="dialog" aria-labelledby="inVoiceAddLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-align:right;" id="inVoiceAddLabel">Invoice #BBB1243 </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-----------------------------invoice body start------------------------------------->
					<div class="row">
						<div class="col-sm-6">
							<b>Bill To:</b>
						</div>
						<div class="col-sm-6">
							<b>Invoice Date:</b>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card ">
								<div class="card-header">
									<h3 class="text-xs-center"><strong>Order summary</strong></h3>
								</div>
								<div class="card-block">
									<div class="table-responsive">
										<table class="table table-sm">
											<thead>
												<tr>
													<td><strong>Item Name</strong></td>
													<td class="text-xs-center"><strong>Item Price</strong></td>
													<td class="text-xs-center"><strong>Item Quantity</strong></td>
													<td class="text-xs-right"><strong>Total</strong></td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Samsung Galaxy S5</td>
													<td class="text-xs-center">$900</td>
													<td class="text-xs-center">1</td>
													<td class="text-xs-right">$900</td>
												</tr>
												<tr>
													<td>Samsung Galaxy S5 Extra Battery</td>
													<td class="text-xs-center">$30.00</td>
													<td class="text-xs-center">1</td>
													<td class="text-xs-right">$30.00</td>
												</tr>
												<tr>
													<td>Screen protector</td>
													<td class="text-xs-center">$7</td>
													<td class="text-xs-center">4</td>
													<td class="text-xs-right">$28</td>
												</tr>
												<tr>
													<td class="highrow"></td>
													<td class="highrow"></td>
													<td class="highrow text-xs-center"><strong>Subtotal</strong></td>
													<td class="highrow text-xs-right">$958.00</td>
												</tr>
												<tr>
													<td class="emptyrow"></td>
													<td class="emptyrow"></td>
													<td class="emptyrow text-xs-center"><strong>Shipping</strong></td>
													<td class="emptyrow text-xs-right">$20</td>
												</tr>
												<tr>
													<td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
													<td class="emptyrow"></td>
													<td class="emptyrow text-xs-center"><strong>Total</strong></td>
													<td class="emptyrow text-xs-right">$978.00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-------------------------invoice body end----------------------------------------->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<!----------------Invoice Option End------------------------>

	<div class="row">
		<div class="col-sm-7">
			<select style="width: 100%;" id="item" class="form-control select2">
				<option value="0">Select Product</option>
				<?php
				foreach ($product_show_for_sale as $row) {
				?>
					<option value="<?php echo $row["product_id"] ?>">
						<?php echo $row["product_name"] ?>
					</option>
				<?php
				} ?>

			</select>
		</div>
		<div class="col-sm-5">
			<select id="supplier_id" class="form-control select2">
				<option value="">Select Supplier</option>
				<?php
				foreach ($supplier_show as $row) {
				?>
					<option value="<?php echo $row["supplier_id"] ?>">
						<?php echo $row["supplier_name"] ?>
					</option>
				<?php
				}
				?>
			</select>
		</div>
	</div>


	<div class="row mt-3">
		<div class="col-sm-7">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr class="table-info">
							<th scope="col">Product Name</th>
							<th scope="col">Stock</th>
							<th scope="col">Quantity</th>
							<th scope="col">Buy Price</th>
							<th scope="col">Tax</th>
							<th scope="col" onkeypress="return accept_digit_only(event)" class="text-right">Sub-Total </th>

						</tr>
					</thead>
					<tbody id="cartTableBody">

					</tbody>
					<tfoot>

						<tr class="table-light">
							<td colspan="4"></td>
							<td>Total Price</td>
							<td id="totalPrice" onkeypress="return accept_digit_only(event)" class="text-right">0.0</td>
						</tr>
						<tr>
							<td colspan="4"></td>

							<td class="text-right p-0 m-0">

								Discount</td>
							<td class="text-right p-0 m-0">
								<input style="width: 80px;" class="border-0 extra-fields" onkeypress="return accept_digit_only(event)" type="text" id="discount">
							</td>
						</tr>
						<tr>
							<td colspan="4"></td>
							<td class="text-right p-0 m-0">Others Cost</td>
							<td class="text-right p-0 m-0">
								<input style="width: 80px;" class="border-0 extra-fields" onkeypress="return accept_digit_only(event)" type="text" id="others_cost">
							</td>
						</tr>
						<tr class="table-warning">
							<td colspan="4"></td>
							<td><strong>Net Total</strong></td>
							<td class="text-right" onkeypress="return accept_digit_only(event)" id="netTotalPrice"><strong>0.00</strong></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="text-right">
				<button disabled class="btn btn-info text-uppercase" data-toggle="modal" data-target="#inVoiceAdd222222" id="productPurchase">Purchase</button>
			</div>
		</div>

		<div class="col-sm-5">
			<div class="row">
				<?php
				foreach ($product_show_for_sale as $key => $row) {
				?>
					<div class="col-3 mb-2">
						<img data-id="<?php echo $row["product_id"] ?>" src="<?php echo base_url('assets/images/img_empty.png'); ?>" class="img-thumbnail cart_item_image" alt="image 1">
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<!--<div class="col mb-2">
			<div class="row">
				<div class="col-sm-4">
					<button class="btn btn-block btn-light">Continue Shopping</button>
				</div>
				<div class="col-sm-5">

				</div>
				<div class="col-sm-3 text-right">
					<button class="btn btn-primary text-uppercase">Sale</button>
				</div>
			</div>
		</div>-->
	</div>
</div>

<?php
echo $this->endSection();
?>

<?php
echo $this->section('scripts');
?>

<!-- Data table plugin-->
<script type='text/javascript' src="<?php echo base_url('assets/js/jquery.mycart.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/dataTables.bootstrap.min.js') ?>"></script>


<script type='text/javascript'>
	var productsList = <?php echo json_encode($product_show_for_sale, JSON_PRETTY_PRINT) ?>;
	//console.log('sdfsdf ' + JSON.stringify(productsList));
	$(document).ready(function() {

		var itemsInCart = [];
		var totalPrice = 0;

		//////////////////////Supplier option enable disable////////////////////////////////
		function enableButton() {
			var supplier_id = $("#supplier_id :selected").val();

			if ((itemsInCart.length > 0) && (supplier_id != "")) {
				$("#productPurchase").prop("disabled", false);
			} else {
				$("#productPurchase").prop("disabled", true);
			}
		}

		$("#supplier_id").on("change", function() {
			enableButton();
		});
		//////////////////////Supplier option enable disable end///////////////////////////

		$("#productPurchase").on("click", function() {

			var discount = $("#discount").val();
			var others_cost = $("#others_cost").val();
			var supplier_id = $("#supplier_id :selected").val();

			//$(this).prop("disabled", ((supplier_id == "") ? true : false));
			enableButton(); /// supplier option


			var itemsInCartObject = Object.assign({}, itemsInCart);
			//console.log(itemsInCartObject);

			var sales_process_url = "http://localhost/codeigniter4/Purchase/purchase_product";

			$.ajax({
				url: sales_process_url, // complete url from siteurl/constroller/function
				method: 'POST',
				data: {
					cart_data: itemsInCartObject,
					discount,
					others_cost,
					supplier_id
				},
				success: function(data) {
					alert('success');
					//toastr.success('Data Successfully inserted!');
					// clearAllmale();
				},
				error: function() {
					alert('error');
				}
			});

		});


		$("#item").on('change', function() {
			var product_id = $(this).val();
			//alert(product_id);
			productAddToCart(product_id);
		});

		$(".extra-fields").on("input", function() {
			totalCalculation();
		});


		$('body').on("input", ".product_quantity_change", function() {

			var index = $(this).data("id");
			//var newQuantity = $(this).val();
			var newQuantity = Number.parseInt($(this).val());

			if (newQuantity < 1) {
				itemsInCart.splice(index, 1);
			} else {
				itemsInCart[index].quantity = newQuantity;
			}
			drawTable();
		});


		/* Product Delete Strat */
		$('body').on("click", ".btn_item_delete", function() {
			//if (confirm("Really Want to Delete ?")) {
			var index = $(this).data("index");
			itemsInCart.splice(index, 1);
			drawTable();
			//}
		});
		/* Product Delete End */
		/* Image e click kore product add kora strat */
		$('body').on("click", ".cart_item_image", function() {
			var product_id = $(this).data("id");
			productAddToCart(product_id);
		});
		/* Image e click kore product add kora End */
		/*
		Cart Initialize the cart
		*/
		function productAddToCart(product_id) {
			$.each(productsList, function(key, value) {
				if (value.product_id == product_id) {
					var response = itemExist(product_id);
					//console.log("testsdfsd sdf" + response);
					if (response.inCart) {
						itemsInCart[response.productIndex].quantity = itemsInCart[response.productIndex].quantity + 1;
					} else {
						value.quantity = 1;
						itemsInCart.push(value);
					}
					drawTable();
				}
			});
		}

		/*
		Draw / Redraw Table
		*/
		function drawTable() {
			$("#cartTableBody").empty();
			$("#totalPrice").html("0.00");
			totalPrice = 0;
			$.each(itemsInCart, function(key, item) {
				var totalBasePrice = parseInt(item.quantity) * parseFloat(item.buying_unit_price);
				var subTotalTax = parseFloat(totalBasePrice) * (parseFloat(item.tax_perchantage) / 100);
				var subtotalPrice = parseFloat(totalBasePrice) + subTotalTax;
				$("#cartTableBody").append('<tr>' +
					'<td>' + item.product_name + '</td>' +
					'<td>' + item.available_stock + '</td>' +
					'<td>' +
					'<input data-oldQuantity="' + item.quantity + '" data-id="' + key + '" class="product_quantity_change" type = "number"  size="4"' +
					'value="' + item.quantity + '" onkeypress="return accept_digit_only(event)" min="0" max="99999"/> ' +
					'</td>' +
					'<td>' + item.buying_unit_price + '</td>' +
					'<td> ' + item.tax_perchantage + '% = ' + subTotalTax.toFixed(2) + '</td>' +
					'<td class = "text-right" > ' + subtotalPrice.toFixed(2) +
					'<button  data-index="' + key + '" class="badge badge-danger badge-sm btn_item_delete">' +
					'<i class="fa fa-times"></i></button>' +
					'</td>' +
					'</tr>');
				totalPrice += subtotalPrice;
				//item.tax_perchantage.toFixed(2)
			});
			totalCalculation();
			enableButton(); //For supplier select
		}

		/*
		Calculate Table Total / SUbtotal 
		*/
		function totalCalculation() {
			var discount = $("#discount").val();
			if (discount != "") {
				discount = parseFloat((Number.isNaN(discount)) ? 0 : discount);
			} else {
				discount = 0;
			}
			var others_cost = $("#others_cost").val();
			if (others_cost != "") {
				others_cost = parseFloat((Number.isNaN(others_cost)) ? 0 : others_cost);
			} else {
				others_cost = 0;
			}
			var netTotalPrice = (totalPrice + others_cost) - discount;

			$("#totalPrice").html(totalPrice.toFixed(2));
			$("#netTotalPrice").html(netTotalPrice.toFixed(2));
		}


		/*
		Chek Is the selected Item Exist in List
		*/
		function itemExist(product_id) {
			var response = {
				inCart: false,
				productIndex: null
			};
			$.each(itemsInCart, function(key, item) {
				if (item.product_id == product_id) {
					if (!response.inCart) {
						response.inCart = true;
						response.productIndex = key;
					}
				}
			});
			return response;
		}


	});
</script>

</script>
<?php
echo $this->endSection();
?>
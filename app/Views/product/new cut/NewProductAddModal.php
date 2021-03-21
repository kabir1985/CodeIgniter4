<!---------------------------Modal Form for Add New Product Start---------------------------------------->
<!-- Modal -->
<form id="NewProductAdd_Form" method='post' action="<?php echo site_url('/product/productadd/create') ?>">
    <div class='modal fade' id='NewProductAddModalID' tabindex='-1' role='dialog' aria-labelledby='NewProductAddModalID' aria-hidden='true'>
        <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter New Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-4'>
                            <label>Product Name</label>
                            <input required type='text' required class='form-control' name='ProductName' placeholder='Product Name'>
                        </div>
                        <div class='form-group col-md-4'>
                            <label for="inputState">Product Category</label>
                            <select id="ProductCategory" name="ProductCategory" class="form-control">
                                <?php
                                foreach ($category_show as $row) {
                                ?>
                                    <option value="<?php echo $row['product_category_id'] ?>"><?php echo $row['category_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class='form-group col-md-4'>
                            <label for="inputState">Brand</label>
                            <select id="ProductBrand" name="ProductBrand" class="form-control">
                                <?php
                                foreach ($brand_show as $row) {
                                ?>
                                    <option value="<?php echo $row['brand_id'] ?>"><?php echo $row['product_brand_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class='form-row'>

                         <div class='form-group col-md-4'>

                        <label for="inputState">Product Group</label>
                            <select id="product_group" name="product_group" class="form-control">
                                <?php
                                foreach ($group_show as $row) {
                                ?>
                                    <option value="<?php echo $row['product_group_id'] ?>"><?php echo $row['group_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class='form-group col-md-4'>
                            <label for="inputState">Product Unit</label>
                            <select id="ProductUnit" name="ProductUnit" class="form-control">
                                <?php
                                foreach ($unit_show as $row) {
                                ?>
                                    <option value="<?php echo $row['product_unit_id'] ?>"><?php echo $row['product_unit_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                       <!-- <div class='form-group col-md-4'>
                            <label>Code for Barcode</label>
                            <input required type='text' required class='form-control' name='CodeForBarcode' placeholder='Code for Barcode'>
                        </div>-->
                        <div class='form-group col-md-4'>
                            <label>TAX %</label>
                            <input required type='text' required class='form-control' name='TaxPerchantage' placeholder='Tax Perchantage'>
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-4'>
                            <label>Product Initial Quantity</label>
                            <input required type='text' required class='form-control' name='ProductInitialQuantity' placeholder='Product Quantity'>
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Unit Price</label>
                            <input required type='text' required class='form-control' name='UnitPrice' placeholder='Unit Price'>
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Total Price</label>
                            <input required type='text' required class='form-control' name='TotalPrice'>
                        </div>

                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-4'>
                            <input required type='text' required class='form-control' name='CodeForBarcode' placeholder='Code for Barcode'>
                        </div>
                        <div class='form-group col-md-4'>
                            <input required type='text' required class='form-control' name='AlertQuantity' placeholder='Alert Quantity'>
                        </div>
                        <div class="custom-file col-md-4">
                            <input type="file" class="custom-file-input" id="product_image" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose Product Image</label>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='submit' class='btn btn-primary'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!----------------------Modal Form New Product Add End------------------------------------------>


<script type='text/javascript'>
    $(document).ready(function() {

        $('#NewProductAdd_Form').submit(function(event) {
            var postData = new FormData(this);
            alert("kabir");
            $.ajax({
                    //alert("ddd");
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
                    // alert(;
                    data: postData,
                    // dataType: 'json',
                    encode: true,
                    processData: false,
                    contentType: false,
                })
                // using the done promise callback
                .done(function(data) {
                    // alert(data);
                    console.log(data);
                });

            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });

    });
</script>
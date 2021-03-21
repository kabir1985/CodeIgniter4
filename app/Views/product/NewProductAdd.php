<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<div class='app-title'>
    <div>
        <h1><i class='fa fa-th-list'></i> Data Table</h1>
        <p>Table to display analytical data effectively</p>
    </div>

    <!-- Button trigger modal -->
    <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#AddNewProduct'>
        <i class='fa fa-user-plus'></i>
        Add Product
    </button>
</div>



<!---------------Data Table start Here----..............................................--------------------------->
<div class='row'>
    <div class='col-md-12'>
        <div class='tile collapseable show animate__animated  animate__fadeInUp'>
            <div class='tile-body'>
                <div class='table-responsive'>
                    <table class='table table-hover table-bordered' id='sampleTable'>
                        <thead>

                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Group</th>
                                <th>Unit</th>
                                <th>Tax</th>
                                <th>Initial Qnty</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th>Barcode</th>
                                <th>Alert Qnty</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            //print_r($category_show);
                            //exit();
                            if (count($product_show) > 0) {
                                foreach ($product_show as $row) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['product_name'] ?></td>
                                        <td><?php echo $row['category_name'] ?></td>
                                        <td><?php echo $row['product_brand_name'] ?></td>
                                        <td><?php echo $row['group_name'] ?></td>
                                        <td><?php echo $row['product_unit_name'] ?></td>
                                        <td><?php echo $row['tax_perchantage'] ?>%</td>
                                        <td><?php echo $row['productinitial_quantity'] ?></td>
                                        <td><?php echo $row['buying_unit_price'] ?></td>
                                        <td><?php echo $row['selling_unit_price'] ?></td>
                                        <td><?php echo $row['codefor_barcode'] ?></td>
                                        <td><?php echo $row['alert_quantity'] ?></td>
                                        <td>

                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="#" class="btn btn-primary btn-sm btn-edit" data-product_id="<?php echo $row['product_id']; ?>" data-product_name="<?php echo $row['product_name']; ?>" data-product_category="<?php echo $row['product_category']; ?>" data-product_brand="<?php echo $row['product_brand'] ?>" data-product_group="<?php echo $row['product_group'] ?>" data-product_unit="<?php echo $row['product_unit'] ?>" data-tax_perchantage="<?php echo $row['tax_perchantage'] ?>" data-productinitial_quantity="<?php echo $row['productinitial_quantity'] ?>" data-buying_unit_price="<?php echo $row['buying_unit_price'] ?>" data-selling_unit_price="<?php echo $row['selling_unit_price'] ?>" data-codefor_barcode="<?php echo $row['codefor_barcode'] ?>" data-alert_quantity="<?php echo $row['alert_quantity'] ?>">
                                                    <i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm btn-delete" data-delete_id="<?php echo $row['product_id'] ?>"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else
                                echo "Data not Found";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------Data Table End Here-----------............................................-------------------->


<!---------------------------Modal Form for Add New Product Start---------------------------------------->
<!-- Modal -->
<div class='modal fade' id='AddNewProduct' tabindex='-1' role='dialog' aria-labelledby='AddNewProduct' aria-hidden='true'>
    <div class='modal-dialog modal-md modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form id="NewProductAdd_Form" method='post' action="<?php echo site_url('/Product/create') ?>">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter New Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Product Name</label>
                            <input required type='text' required class='form-control' name='product_name' placeholder='Product Name'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label for="inputState">Product Category</label>

                            <select id="product_category" name="product_category" class="form-control">
                                <?php
                                foreach ($category_show as $category) {
                                ?>
                                    <option value="<?php echo $category['product_category_id'] ?>"><?php echo $category['category_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class='form-row'>

                        <div class='form-group col-md-6'>
                            <label for="inputState">Brand</label>
                            <select id="product_brand" name="product_brand" class="form-control">
                                <?php

                                foreach ($brand_show as $brand) {
                                ?>
                                    <option value="<?php echo $brand['brand_id'] ?>"><?php echo $brand['product_brand_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class='form-group col-md-6'>
                            <label for="inputState">Product Group</label>
                            <select id="product_group" name="product_group" class="form-control">
                                <?php
                                foreach ($group_show as $group) {
                                ?>
                                    <option value="<?php echo $group['product_group_id'] ?>"> <?php echo $group['group_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>



                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label for="inputState">Product Unit</label>
                            <select id="product_unit" name="product_unit" class="form-control">
                                <?php

                                foreach ($unit_show as $unit) {
                                ?>
                                    <option value="<?php echo $unit['product_unit_id'] ?>"><?php echo $unit['product_unit_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class='form-group col-md-6'>
                            <label>TAX %</label>
                            <select id="tax_perchantage" name="tax_perchantage" class="form-control">
                                <option selected>Select</option>
                                <?php

                                foreach ($tax_show as $row) {
                                ?>
                                    <option value="<?php echo $row['tax_percentage'] ?>"><?php echo $row['tax_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>

                            <!-- 
                            <input required type='text' required class='form-control' name='tax_perchantage' onkeypress="return accept_digit_only(event)" placeholder='Tax Perchantage'> -->
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Product Initial Quantity</label>
                            <input required type='text' required class='form-control' name='productinitial_quantity' onkeypress="return accept_digit_only(event)" placeholder='Product Quantity'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Buying Unit Price</label>
                            <input required type='text' required class='form-control' name='buying_unit_price' onkeypress="return accept_digit_only(event)" placeholder='Unit Price'>
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Selling Unit Price</label>
                            <input required type='text' required class='form-control' name='selling_unit_price' onkeypress="return accept_digit_only(event)" placeholder="Selling Price">
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Barcode</label>
                            <input required type='text' required class='form-control' name='codefor_barcode' placeholder='Code for Barcode'>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class='form-group col-md-6'>
                            <input required type='text' required class='form-control' name='alert_quantity' onkeypress="return accept_digit_only(event)" placeholder='Alert Quantity'>
                        </div>
                        <div class="custom-file col-md-6">
                            <input type="file" class="custom-file-input" id="product_image" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose Product Image</label>
                        </div>
                    </div>

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='submit' class='btn btn-primary'>Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!----------------------Modal Form New Product Add End------------------------------------------>





<!---------------------------Modal Form for Edit Section Load Start---------------------------------------->
<!-- Modal -->
<div class='modal fade' id='EditProductModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog  modal-lg modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form id="ProductEdit_submit_form" method='post' action="<?php echo site_url('/Product/update') ?>">
                <div class='modal-header'>
                    <h5 class='modal-title' id='#'>Please Update Product</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body' id="#">
                    <input type='hidden' required class='form-control' name='product_id' id='product_id'>
                    <div class='form-row'>
                        <div class='form-group col-md-4'>
                            <label>Product Name</label>
                            <input type='text' required class='form-control' name='product_name' id='product_name'>
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Category Name</label>
                            <select id="product_category" name="product_category" class="form-control">
                                <?php
                                foreach ($product_show as $row) {
                                ?>
                                    <option value="<?php echo $row['product_category_id'] ?>">
                                        <?php echo $row['category_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Brand</label>
                            <select id="product_brand" name="product_brand" class="form-control">
                                <?php
                                foreach ($product_show as $row) {
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
                            <label>Group</label>
                            <select id="product_group" name="product_group" class="form-control">
                                <?php
                                foreach ($product_show as $row) {
                                ?>
                                    <option value="<?php echo $row['product_group'] ?>"><?php echo $row['group_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Unit</label>
                            <select id="product_unit" name="product_unit" class="form-control">
                                <?php
                                foreach ($product_show as $row) {
                                ?>
                                    <option value="<?php echo $row['product_unit_id'] ?>"><?php echo $row['product_unit_name'] ?></option>

                                <?php
                                }
                                ?>
                            </select>


                        </div>
                        <div class='form-group col-md-4'>
                            <label>TAX</label>
                            <input type='text' class='form-control' name='tax_perchantage' id='tax_perchantage' onkeypress="return accept_digit_only(event)">
                        </div>
                    </div>


                    <div class='form-row'>
                        <div class='form-group col-md-4'>
                            <label>Initial Quantity</label>
                            <input type='text' required class='form-control' name='productinitial_quantity' id='productinitial_quantity' onkeypress="return accept_digit_only(event)">
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Buying Unit Price</label>
                            <input type='text' class='form-control' name='buying_unit_price' id='buying_unit_price' onkeypress="return accept_digit_only(event)">
                        </div>
                        <div class='form-group col-md-4'>
                            <label>Selling Unit Price</label>
                            <input type='text' required class='form-control' name='selling_unit_price' id='selling_unit_price' onkeypress="return accept_digit_only(event)">
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Barcode</label>
                            <input type='text' class='form-control' name='codefor_barcode' id='codefor_barcode'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Alert Quantity</label>
                            <input type='text' class='form-control' name='alert_quantity' id='alert_quantity' onkeypress="return accept_digit_only(event)">
                        </div>
                    </div>

                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='submit' class='btn btn-primary'>Save Edit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!----------------------Modal Form Edit Section  End------------------------------------------>

<!-- Modal Delete Product-->

<div class="modal fade" id="DeleteProductModal" tabindex="-1" role="dialog" aria-labelledby="DeleteProductModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4>Are you sure want to delete this Customer?</h4>

            </div>
            <form method="post" action="<?php echo site_url('/Product/delete') ?>">
                <div class="modal-footer">
                    <input type="hidden" required class='form-control' name="delete_id" id="delete_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- End Modal Delete Product-->


<?php
echo $this->endSection();
?>

<?php
echo $this->section('scripts');
?>

<!-- Data table plugin-->
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
<script type='text/javascript' src="<?php echo base_url('assets/js/plugins/dataTables.bootstrap.min.js') ?>"></script>

<script type='text/javascript'>
    $(document).ready(function() {

        $('#sampleTable').DataTable();

        ////-------------------Product Entry Form-------------------------//
        var allowSubmit = true;

        $('#NewProductAdd_Form').submit(function(event) {
            event.preventDefault();

            if (allowSubmit) {
                allowSubmit = false;
                var parentMOdal = $(this).closest('.modal');
                var postData = new FormData(this);
                $.ajax({
                        //alert("ddd");
                        type: $(this).attr("method"),
                        url: $(this).attr("action"),
                        // alert(;
                        data: postData,
                        //dataType: 'json',
                        encode: true,
                        processData: false,
                        contentType: false,
                    })
                    // using the done promise callback
                    .done(function(data) {
                        // alert(data);
                        if (data == 1) {
                            parentMOdal.modal('toggle');
                            //page refresh after submission
                            location.reload();
                            // alert("Success");
                        }
                    });

            }
        });


        //////Product Edit submit into database start/////////////////////////////////

        $('#ProductEdit_submit_form').submit(function(event) {
            event.preventDefault();

            if (allowSubmit) {
                allowSubmit = false;
                var parentMOdal = $(this).closest('.modal');
                var postData = new FormData(this);
                $.ajax({
                        //alert("ddd");
                        type: $(this).attr("method"),
                        url: $(this).attr("action"),
                        // alert(;
                        data: postData,
                        //dataType: 'json',
                        encode: true,
                        processData: false,
                        contentType: false,
                    })
                    // using the done promise callback
                    .done(function(data) {
                        // alert(data);
                        if (data == 1) {
                            parentMOdal.modal('toggle');
                            //page refresh after submission
                            location.reload();
                            // alert("Success");
                        }
                    });

            }
        });

        /////////Product Edit Submit inot database end here//////////////////////



        //...................JQuery for Modal Edit & Delete option...................................



        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const product_id = $(this).data('product_id');
            const product_name = $(this).data('product_name');
            const product_category = $(this).data('product_category');

            const product_brand = $(this).data('product_brand');
            const product_group = $(this).data('product_group');
            const product_unit = $(this).data('product_unit');

            const tax_perchantage = $(this).data('tax_perchantage');
            const productinitial_quantity = $(this).data('productinitial_quantity');
            const buying_unit_price = $(this).data('buying_unit_price');
            const selling_unit_price = $(this).data('selling_unit_price');
            const codefor_barcode = $(this).data('codefor_barcode');
            const alert_quantity = $(this).data('alert_quantity');


            // Set data to Form Edit
            $('#product_id').val(product_id);
            $('#product_name').val(product_name);
            $('#product_category').val(product_category);

            $('#product_brand').val(product_brand);
            $('#product_group').val(product_group);
            $('#product_unit').val(product_unit);

            $('#tax_perchantage').val(tax_perchantage);
            $('#productinitial_quantity').val(productinitial_quantity);
            $('#buying_unit_price').val(buying_unit_price);
            $('#selling_unit_price').val(selling_unit_price);
            $('#codefor_barcode').val(codefor_barcode);
            $('#alert_quantity').val(alert_quantity);
            // Call Modal Edit
            $('#EditProductModal').modal('show');

        });





        // get Delete Product
        $('.btn-delete').on('click', function() {
            // get data from button edit
            const delete_id = $(this).data('delete_id');
            // Set data to Form Edit
            $('#delete_id').val(delete_id);
            // Call Modal Edit
            $('#DeleteProductModal').modal('show');
        });


        //................ JQuery modal Edit & Delete end here........................................
        // ...............For Date Show.............................
        $('.datePicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
        });
        //.................For Date show end........................ 

    });
</script>

<!-- For Calendar start -->

<!-- For Calendar End -->

<?php
echo $this->endSection();
?>
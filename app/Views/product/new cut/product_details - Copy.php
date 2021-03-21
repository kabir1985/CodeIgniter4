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
                            <th>Barcode</th>
                            <th>Tax</th>
                            <th>Initial Qnty</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            <th>Alert Qnty</th>
                            <th>Image</th>
                        </tr>
                        </thead>

                   <tbody>
                        <?php
                        if (count($product_show) > 0) {
                            foreach ($product_show as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['ProductName'] ?></td>
                                    <td><?php echo $row['ProductCategory'] ?></td>
                                    <td><?php echo $row['ProductBrand'] ?></td>
                                     <td><?php echo $row['product_group'] ?></td>
                                    <td><?php echo $row['ProductUnit'] ?></td>
                                    <td><?php echo $row['CodeForBarcode'] ?></td>
                                    <td><?php echo $row['TaxPerchantage'] ?></td>
                                    <td><?php echo $row['ProductInitialQuantity'] ?></td>
                                    <td><?php echo $row['UnitPrice'] ?></td>
                                    <td><?php echo $row['TotalPrice'] ?></td>
                                    <td><?php echo $row['AlertQuantity'] ?></td>
                                    <td><?php echo $row['product_image'] ?></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No data found.</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------Data Table End Here-----------............................................-------------------->



<!---------------------------Modal Form for entry Load Start---------------------------------------->
<!-- Modal -->
  <form id="modalForm" method='post' action="<?php //echo site_url('/supplier/create') ?>">
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Please Enter Customer Group</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;
                    </span>
                </button>
            </div>
                <div class='modal-body'>

                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Group Name</label>
                            <input required type='text' required class='form-control' name='CustomerGroupName' placeholder='Group Name'>
                        </div>
                    </div>
					   <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Discount</label>
                            <input type='text' class='form-control' name='CustomerDiscountAmount' placeholder='Discount Amount'>
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
<!----------------------Modal Form End------------------------------------------>





<!---------------------------Modal Form for Edit Section Load Start---------------------------------------->
<!-- Modal -->
<form id="#" method='post' action="<?php //echo site_url('/supplier/update') ?>">
    <div class='modal fade' id='ModalEditSectionID' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog  modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='#'>Please Enter Supplier Details</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body' id="#">
                    <input type='hidden' required class='form-control' name='supplier_id' id='supplier_id'>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Supplier Name Edit</label>
                            <input type='text' required class='form-control' name='supplier_name' id='supplier_name'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Business Name</label>
                            <input type='text' class='form-control' name='business_name' id='business_name'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Contact Number</label>
                            <input type='text' required class='form-control' name='contact_number' id='contact_number'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>E-mail</label>
                            <input type='text' class='form-control' name='supplier_email' id='supplier_email'>
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Address</label>
                            <input type='text' required class='form-control' name='supplier_address' id='supplier_address'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Entry Date</label>
                            <input type='text' class='form-control datePicker' name='supplier_entry_date' id='supplier_entry_date'>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='submit' class='btn btn-primary'>Save Edit</button>
                </div>
            </div>

        </div>
    </div>
</form>
<!----------------------Modal Form Edit Section  End------------------------------------------>

<!-- Modal Delete Product-->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <form action="<?php //echo site_url('/supplier/delete') ?>" method="post">
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
    $('#sampleTable').DataTable();
</script>
<!-- Google analytics script-->
<script type='text/javascript'>
    $(document).ready(function() {


        // -----------------For Modal Not Disappear after submit start--------------------------------

        $('#modalForm').submit(function(event) {

            var postData = new FormData(this);
            $.ajax({
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: postData,
                    dataType: 'json',
                    encode: true,
                    processData: false,
                    contentType: false,
                })
                // using the done promise callback
                .done(function(data) {
                    console.log(data);
                });

            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });

        // -----------------For Modal Not Disappear after submit End--------------------------------


        //...................JQuery for Modal Edit & Delete option...................................

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const supplier_id = $(this).data('supplier_id');
            const supplier_name = $(this).data('supplier_name');
            const business_name = $(this).data('business_name');

            const contact_number = $(this).data('contact_number');
            const supplier_email = $(this).data('supplier_email');
            const supplier_address = $(this).data('supplier_address');
            const supplier_entry_date = $(this).data('supplier_entry_date');

            // Set data to Form Edit
            $('#supplier_id').val(supplier_id);
            $('#supplier_name').val(supplier_name);
            $('#business_name').val(business_name);

            $('#contact_number').val(contact_number);
            $('#supplier_email').val(supplier_email);
            $('#supplier_address').val(supplier_address);
            $('#supplier_entry_date').val(supplier_entry_date);
            // Call Modal Edit
            $('#ModalEditSectionID').modal('show');

        });

        // get Delete Product
        $('.btn-delete').on('click', function() {
            // get data from button edit
            const delete_id = $(this).data('delete_id');
            //alert(delete_id);
            // Set data to Form Edit
            $('#delete_id').val(delete_id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
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
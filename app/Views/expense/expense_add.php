<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<div class='app-title'>
    <div>
        <h1><i class='fa fa-th-list'></i> Expense Section</h1>
        <!-- <p>Table to display analytical data effectively</p> -->
    </div>

    <!-- Button trigger modal -->
    <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#ExpenseAdd'>
        <i class='fa fa-user-plus'></i>
        Expense Add
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
                                <th>Ref.</th>
                                <th>Category</th>
                                <th>Sub-Category</th>
                                <th>What For</th>
                                <th>Amount</th>
                                <th>Note</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                        if (count($expense_category_sub_category_show) > 0) {
                            foreach ($expense_category_sub_category_show as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['expense_ref_no'] ?></td>
                                    <td><?php echo $row['expense_category_name'] ?></td>
                                    <td><?php echo $row['expense_sub_category_name'] ?></td>
                                    <td><?php echo $row['expense_what_for'] ?></td>
                                    <td><?php echo $row['expense_amount'] ?></td>
                                    <td><?php echo $row['expense_note'] ?></td>
                                    <td><?php echo $row['expense_date'] ?></td>
                                    <td>
                                        <!-- Button to invoke the modal -->
                                        <a href="#" class="btn btn-primary btn-sm btn-edit" data-expense_id="<?php echo $row['expense_id'] ?>" data-expense_ref_no="<?php echo $row['expense_ref_no'] ?>" data-expense_category_name="<?php echo $row['expense_category_name'] ?>" data-expense_sub_category_name="<?php echo $row['expense_sub_category_name'] ?>" data-expense_what_for="<?php echo $row['expense_what_for'] ?>" data-expense_amount="<?php echo $row['expense_amount'] ?>" data-expense_note="<?php echo $row['expense_note'] ?>" data-expense_date="<?php echo $row['expense_date'] ?>"><i class="fa fa-edit"></i></a>

                                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-delete_id="<?php echo $row['expense_id'] ?>"><i class="fa fa-trash-o"></i></a>

                                    </td>
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
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------Data Table End Here-----------............................................-------------------->



<!---------------------------Modal Form for Add Expense Information---------------------------------------->
<!-- Modal -->
<div class='modal fade' id='ExpenseAdd' tabindex='-1' role='dialog' aria-labelledby='ExpenseAdd' aria-hidden='true'>
    <div class='modal-dialog  modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form id="Expense_add_submit_form" method='post' action="<?php echo site_url('/Expense/create') ?>">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter Expense Info</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Ref.No</label>
                            <input required type='text' required class='form-control' name='expense_ref_no' placeholder='Re. No  '>
                        </div>

                        <div class='form-group col-md-6'>
                            <label>Category</label>
                            <select id="expense_category" name="expense_category" class="form-control">
                            <option selected>Select Category</option>
                                <?php
                                foreach ($expense_category_show as $row) {
                                ?>
                                    <option value="<?php echo $row['expense_category_id'] ?>"><?php echo $row['expense_category_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        
                        
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Sub-Category</label>
                            <select id="expense_sub_category" name="expense_sub_category" class="form-control">
                            <option selected>Select Sub-Category</option>
                                <?php
                                foreach ($expense_sub_category_show as $row) {
                                ?>
                                    <option value="<?php echo $row['expense_sub_category_id'] ?>"><?php echo $row['expense_sub_category_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>What For</label>
                            <input required type='text' required class='form-control' name='expense_what_for' placeholder='Expense What For '>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Amount</label>
                            <input required type='text' required class='form-control' name='expense_amount' placeholder='Expense Amount'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Note</label>
                            <input required type='text' required class='form-control' name='expense_note' placeholder='Expense Note'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Date</label>
                            <input required type='text' required class='form-control datePicker' name='expense_date' placeholder='<?php echo date("d-m-Y"); ?>'>
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



<!---------------------------Modal Form for Edit Section Load Start---------------------------------------->
<!-- Modal -->
<div class='modal fade' id='ExpenseEditModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog  modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form id="expense_update_submit_form" method='post' action="<?php echo site_url('/Expense/update') ?>">
                <div class='modal-header'>
                    <h5 class='modal-title' id='#'>Please Update Expense Details</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body' id="#">
                    <input type='hidden' required class='form-control' name='expense_id' id='expense_id'>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Ref. No Edit</label>
                            <input type='text' required class='form-control' name='expense_ref_no' id='expense_ref_no'>
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Category Name</label>
                            <select id="expense_category_name" name="expense_category_name" class="form-control">
                            <option selected>Select Category</option>
                                <?php
                                foreach ($expense_category_show as $row) {
                                ?>
                                    <option value="<?php echo $row['expense_category_id'] ?>"   ><?php echo $row['expense_category_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Sub Category Name</label>                        
                            <select id="expense_sub_category_name" name="expense_sub_category_name" class="form-control">
                            <option selected>Select Sub-Category</option>
                                <?php
                                foreach ($expense_sub_category_show as $row) {
                                ?>
                                    <option value="<?php echo $row['expense_sub_category_id'] ?>"><?php echo $row['expense_sub_category_name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        
                        </div>
                        <div class='form-group col-md-6'>
                            <label>What For</label>
                            <input type='text' class='form-control' name='expense_what_for' id="expense_what_for">
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-6'>
                            <label>Expense Amount</label>
                            <input type='text' required class='form-control' name='expense_amount' id="expense_amount">
                        </div>
                        <div class='form-group col-md-6'>
                            <label>Expense Note</label>
                            <input type='text' class='form-control' name='expense_note' id="expense_note">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class='form-group col-md-12'>
                            <label>Expense Note</label>
                            <input type='text' class='form-control datePicker' name='expense_date' id="expense_date">
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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4>Are you sure want to delete this Expense?</h4>

            </div>
            <form action="<?php echo site_url('/Expense/delete') ?>" method="post">
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

<!-- Google analytics script-->
<script type='text/javascript'>
    $(document).ready(function() {
        $('#sampleTable').DataTable();

        ////-------------------Product Category Entry Form-------------------------//
        var allowSubmit = true;

        $('#Expense_add_submit_form').submit(function(event) {
            // stop the form from submitting the normal way and refreshing the page
            event.preventDefault();

            if (allowSubmit) {
                allowSubmit = false;
                //for modal close variable after submit
                var parentMOdal = $(this).closest('.modal');
                var postData = new FormData(this);
                $.ajax({
                        type: $(this).attr("method"),
                        url: $(this).attr("action"),
                        data: postData,
                        encode: true,
                        processData: false,
                        contentType: false,
                    })
                    .done(function(data) {
                        if (data == 1) {
                            //Modal Remove after submission
                            parentMOdal.modal('toggle');
                            //page refresh after submission
                            location.reload();
                        }
                    });
            }

        });


        //////Category Edit submit into database start/////////////////////////////////

        $('#expense_update_submit_form').submit(function(event) {
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
                    parentMOdal.modal('toggle');
                    //page refresh after submission
                    location.reload();
                    // alert("Success");
                });

            }

        });

        /////////Category Edit Submit inot database end here//////////////////////


        //...................JQuery for Modal Edit & Delete option...................................

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            var expense_id = $(this).data('expense_id');
            var expense_ref_no = $(this).data('expense_ref_no');
            var expense_category_name = $(this).data('expense_category_name');
            var expense_sub_category_name = $(this).data('expense_sub_category_name');
            var expense_what_for = $(this).data('expense_what_for');

            var expense_amount = $(this).data('expense_amount');
            var expense_note = $(this).data('expense_note');
            var expense_date = $(this).data('expense_date');

            //alert(product_category_id);


            // Set data to Form Edit
            $('#expense_id').val(expense_id);
            $('#expense_ref_no').val(expense_ref_no);
            $('#expense_category_name').val(expense_category_name);
            $('#expense_sub_category_name').val(expense_sub_category_name);

            $('#expense_what_for').val(expense_what_for);
            $('#expense_amount').val(expense_amount);
            $('#expense_note').val(expense_note);
            $('#expense_date').val(expense_date);


            // Call Modal Edit
            $('#ExpenseEditModal').modal('show');

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
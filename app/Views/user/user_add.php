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
    <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#UserAdd'>
        <i class='fa fa-user-plus'></i>
        User Add
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
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            // print_r($group_show);
                            //exit();
                            //foreach ($group_show as $row) {


                            ?>
                                <tr>
                                    <td><?php //echo $row['group_name'] ?>Kabir</td>
                                    <td>Sales Manager</td>
                                    <td>sales@gmail.com
                                        <!-- Button to invoke the modal -->
                                        <a href="#" class="btn btn-primary btn-sm btn-edit" data-product_group_id="<?php //echo $row['product_group_id'] ?>" data-group_name="<?php //echo $row['group_name'] ?>">
                                            <i class="fa fa-edit"></i></a>

                                        <a href="#" class="btn btn-danger btn-sm btn-delete" data-delete_id="<?php //echo $row['product_group_id'] ?>"><i class="fa fa-trash-o"></i></a>

                                    </td>
                                    
                                </tr>

                            <?php
                           // }
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
<div class='modal fade' id='UserAdd' tabindex='-1' role='dialog' aria-labelledby='UserAdd' aria-hidden='true'>
    <div class='modal-dialog  modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form id="ProductGroupModal_Form" method='post' action="<?php echo site_url('/Group/create') ?>">
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter New User Details</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Name</label>
                            <input required type='text' required class='form-control' name='product_group_name' placeholder='Group Name'>
                        </div>
                        </div>
                        <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Email</label>
                            <input  type='email' required class='form-control' name='product_group_name' required placeholder='Group Name'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Role</label>
                            <select id="user_role" class="form-control">
                             <option>Administrator</option>
                             <option>Cashier</option>
                             <option>Sales Manager</option>
                             <option>Manager</option>
                            </select>
                        </div>
                    </div>

                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Password</label>
                            <input required type='text' required class='form-control' name='product_group_name' placeholder='Group Name'>
                        </div>
                        </div>
                        <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Confirm Password</label>
                            <input required type='text' required class='form-control' name='product_group_name' placeholder='Group Name'>
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

<!----------------------Modal Form End------------------------------------------>

<!---------------------------Modal Form for Edit Section Load Start---------------------------------------->
<!-- Modal -->

<div class='modal fade' id='product_group_edit' tabindex='-1' role='dialog' aria-labelledby='product_group_edit' aria-hidden='true'>
    <div class='modal-dialog  modal-dialog-centered' role='document'>
        <div class='modal-content'>
            <form id="product_group_edit_form" method='post' action="<?php echo site_url('/Group/update') ?>">
                <div class='modal-header'>
                    <h5 class='modal-title' id='#'>Udate Category Details</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body' id="#">
                    <input type='hidden' required class='form-control' name='product_group_id' id='product_group_id'>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Category Edit</label>
                            <input type='text' required class='form-control' name='group_name' id='group_name'>
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4>Are you sure want to delete this Customer?</h4>

            </div>
            <form action="<?php echo site_url('/Group/delete') ?>" method="post">
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

        ////-------------------Product Group Entry Form-------------------------//
        var allowSubmit = true;

        //product_group_edit_form

        $('#ProductGroupModal_Form').submit(function(event) {
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

        //.........................................................................

        $('#product_group_edit_form').submit(function(event) {
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



        //...................JQuery for Modal Edit & Delete option...................................

        // get Edit Product
        $('.btn-edit').on('click', function() {
            // get data from button edit
            const product_group_id = $(this).data('product_group_id');
            const group_name = $(this).data('group_name');

            // Set data to Form Edit
            $('#product_group_id').val(product_group_id);
            $('#group_name').val(group_name);

            // Call Modal Edit
            $('#product_group_edit').modal('show');

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
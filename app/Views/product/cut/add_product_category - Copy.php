<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<!-- <div class='app-title'>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--<a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#AddNewProductCategory" aria-expanded="false" aria-controls="AddNewProductCategory"><i class='fa fa-user-plus'></i>&nbsp;Add Product Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#AddNewProductSubCategory" aria-expanded="false" aria-controls="AddNewProductSubCategory"><i class='fa fa-user-plus'></i>&nbsp;Add Product Sub-Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Add Product Units</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#AddNewProduct" aria-expanded="false" aria-controls="AddNewProduct"><i class='fa fa-user-plus'></i>&nbsp;Add New Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Existing Product List</a>
                </li>
            </ul>
        </div>
    </nav>

</div> -->



<!---------------Data Table start Here----..............................................--------------------------->
<div class='row'>
    <div class='col-md-12'>
        <div class='tile collapseable show animate__animated  animate__fadeInUp'>
            <div class='tile-body'>


                <ul class="nav nav-tabs responsive" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mr-1" id="ProductCategoryAdd-tab" data-toggle="tab" href="#ProductCategoryAdd" role="tab" aria-controls="home" aria-selected="true">Product Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Product Sub-Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Product Units</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="contact-tab" data-toggle="tab" href="#newproductadd" role="tab" aria-controls="contact" aria-selected="false">New Product Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="contact-tab" data-toggle="tab" href="#newproductadd" role="tab" aria-controls="contact" aria-selected="false">Product List</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="ProductCategoryAdd" role="tabpanel" aria-labelledby="ProductCategoryAdd-tab">

                        <div class="row">
                            <div class="col-12">
                                <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#AddNewProductCategory" aria-expanded="false" aria-controls="AddNewProductCategory"><i class='fa fa-plus'></i>Add </a>

                            </div>

                            <div class="col-12">
                                <div class='table-responsive'>
                                    <table class='table table-hover table-bordered dataTable'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Business Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-12">
                                <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#AddNewProductCategory" aria-expanded="false" aria-controls="AddNewProductCategory"><i class='fa fa-plus'></i>Add </a>

                            </div>

                            <div class="col-12">
                                <div class='table-responsive'>
                                    <table class='table table-hover table-bordered dataTable'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Business Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-12 ">
                                <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#AddNewProductCategory" aria-expanded="false" aria-controls="AddNewProductCategory"><i class='fa fa-plus'></i>Add </a>
                            </div>

                            <div class="col-12">
                                <div class='table-responsive'>
                                    <table class='table table-hover table-bordered dataTable'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Business Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="tab-pane fade" id="newproductadd" role="tabpanel" aria-labelledby="newproductadd-tab">
                        <div class="row">
                            <div class="col-12">
                                <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#AddNewProductCategory" aria-expanded="false" aria-controls="AddNewProductCategory"><i class='fa fa-plus'></i>Add </a>
                            </div>

                            <div class="col-12">
                                <div class='table-responsive'>
                                    <table class='table table-hover table-bordered dataTable'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Business Name</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>





                </div>





            </div>
        </div>
    </div>
</div>

<!---------------Data Table End Here-----------............................................-------------------->



<!---------------------------Modal Form for Add Product Category---------------------------------------->
<!-- Modal -->
<form id="product_category_add_form" method='post' action="<?php echo site_url('/product/category/create') ?>">
    <div class='modal fade' id='AddNewProductCategory' tabindex='-1' role='dialog' aria-labelledby='AddNewProductCategoryLabel' aria-hidden='true'>
        <div class='modal-dialog  modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter Product Category</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Product Category</label>
                            <input required type='text' required class='form-control' name='product_category_name' id='product_category_name' placeholder='Product Category Name'>
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
<!----------------------Modal Form Product Category End------------------------------------------>

<!---------------------------Modal Form for Add Product Sub-Category---------------------------------------->
<!-- Modal -->
<form id="modalForm" method='post' action="<?php echo site_url('/supplier/create') ?>">
    <div class='modal fade' id='AddNewProductSubCategory' tabindex='-1' role='dialog' aria-labelledby='AddNewProductSubCategoryLabel' aria-hidden='true'>
        <div class='modal-dialog  modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter Product Category</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Product Category</label>
                            <input required type='text' required class='form-control' name='supplier_name' placeholder='Name'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Product Sub-Category</label>
                            <input required type='text' required class='form-control' name='supplier_name' placeholder='Name'>
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
<!----------------------Modal Form Product Sub-Category  End------------------------------------------>



<!---------------------------Modal Form for Edit Section Load Start---------------------------------------->
<!-- Modal -->
<form id="#" method='post' action="<?php echo site_url('/supplier/update') ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <h4>Are you sure want to delete this Supplier?</h4>

            </div>
            <form action="<?php echo site_url('/supplier/delete') ?>" method="post">
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
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }


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



        $('#product_category_add_form').submit(function(event) {
            var postData = new FormData(this);
            //alert("kabir");
            $.ajax({
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
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

        //...................JQuery for Modal Edit & Delete option...................................



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
<?php
echo $this->extend('layout');
echo $this->section('content');
?>



<!---------------Tab Menu + Data Table start Here----..............................................--------------------------->
<div class='row'>
    <div class='col-md-12'>
        <div class='tile collapseable show animate__animated  animate__fadeInUp'>
            <div class='tile-body'>


                <ul class="nav nav-tabs responsive" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active mr-1" id="NewProductAdd-tab" data-toggle="tab" href="#NewProductAdd" role="tab" aria-controls="NewProductAdd" aria-selected="false">New Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mr-1" id="ProductCategoryAdd-tab" data-toggle="tab" href="#ProductCategoryAdd" role="tab" aria-controls="home" aria-selected="true">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="ProductBrandAdd-tab" data-toggle="tab" href="#ProductBrandAdd" role="tab" aria-controls="profile" aria-selected="false">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="ProductGroupAdd-tab" data-toggle="tab" href="#ProductGroupAdd" role="tab" aria-controls="ProductGroupAdd" aria-selected="false">Groups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-1" id="ProductUnitAdd-tab" data-toggle="tab" href="#ProductUnitAdd" role="tab" aria-controls="ProductUnitAdd" aria-selected="false">Units</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">

                    <?php echo view('product/NewProductAdd.php'); ?>
                    <?php echo view('product/ProductCategoryAdd.php'); ?>
                    <?php echo view('product/ProductBrandAdd.php'); ?>
                    <?php echo view('product/ProductGroupAdd.php'); ?>
                    <?php echo view('product/ProductUnitAdd.php'); ?>


                </div>

            </div>
        </div>
    </div>
</div>

<!---------------Tab Menu + Data Table End Here-----------............................................-------------------->


<!-----------------------Modal prodact add start------------------------------------------->
<?php echo view('product/NewProductAddModal.php'); ?>
<!-----------------------Modal prodact add------------------------------------------->
<!---------------------------Modal Form for Add Product Category---------------------------------------->
<?php echo view('product/ProductCategoryAddModal.php'); ?>
<!----------------------Modal Form Product Category End------------------------------------------>

<!---------------------------Modal Form for Add Product Sub-Category---------------------------------------->
<?php echo view('product/ProductBrandAddModal.php'); ?>
<!----------------------Modal Form Product Sub-Category  End------------------------------------------>

<?php echo view('product/ProductGroupAddModal.php');
?>
<!---------------------------Modal Form for Add Product Unit---------------------------------------->
<!-- Modal -->
<?php echo view('product/ProductUnitAddModal.php'); ?>
<!----------------------Modal Form Product Unit End------------------------------------------>









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


  

        /...................JQuery for Modal Edit & Delete option...................................

        /// get Edit Product
       // $('.btn-edit').on('click', function() {
          //  alert("test");
       // });


        //................ JQuery modal Edit & Delete end here........................................








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
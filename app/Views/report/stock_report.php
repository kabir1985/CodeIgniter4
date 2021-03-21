----<?php
echo $this->extend('layout');
echo $this->section('content');
?>

<div class='app-title'>	
	<div class="row mx-auto">
    	<div class="col-md-5">
    	   <input type='text' required class='form-control datePicker'  id='category_name' placeholder="Start Date">
    	</div>
    	<div class="col-md-5">
    	   <input type='text' required class='form-control datePicker' name='category_name' id='category_name' placeholder="End Date">
    	</div>
        <div class="col-md-2">
            <button type="button" class="btn btn-outline-info">Filter</button>
        </div>
	</div>
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
                                <th>Product</th>
                                <th>Barcode</th>
                                 <th>Selling Price</th>
                                <th>Stock in Hand</th>
                                <th>Tax</th>
                                <th>Alert Qty</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($product_initial_stock_show as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['product_name']; ?></td>
                                    <td><?php echo $row['codefor_barcode']; ?></td>
                                    <td><?php echo $row['selling_unit_price']; ?></td>
                                    <td><?php echo $row['productinitial_quantity']; ?></td>
                                    <td><?php echo $row['tax_perchantage']; ?></td>
                                    <td><?php echo $row['alert_quantity']; ?></td>
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
$('#sampleTable').DataTable();

        // ...............For Date Show.............................
        $('.datePicker').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
        });
        //.................For Date show end........................ 
</script>

<!-- For Calendar start -->

<!-- For Calendar End -->

<?php
echo $this->endSection();
?>
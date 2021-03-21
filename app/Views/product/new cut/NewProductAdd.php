<!---------------------------Modal Form for Entry  Section Load Start---------------------------------------->
<div class="tab-pane fade show active" id="NewProductAdd" role="tabpanel" aria-labelledby="NewProductAdd-tab">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#NewProductAddModalID" aria-expanded="false" aria-controls="NewProductAddModalID"><i class='fa fa-plus'></i>Add New Product</a>
        </div>

        <div class="col-12">
            <div class='table-responsive'>
                <table class='table table-hover table-bordered dataTable'>
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

<!---------------------------Modal Form for Entry  Section Load End---------------------------------------->



<!---------------------------Modal Form for Edit Section Load Start---------------------------------------->
<!-- Modal -->
<form id="#" method='post' action="<?php //echo site_url('/supplier/update') 
                                    ?>">
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

                <h4>Are you sure want to delete this Product?</h4>

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
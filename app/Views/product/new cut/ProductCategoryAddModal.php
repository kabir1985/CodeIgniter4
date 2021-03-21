<!-- Modal -->
<form id="product_category_add_form" method='post' action="<?php echo site_url('/product/category/create') ?>">
    <div class='modal fade' id='AddProductCategoryModalID' tabindex='-1' role='dialog' aria-labelledby='AddProductCategoryModalID' aria-hidden='true'>
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
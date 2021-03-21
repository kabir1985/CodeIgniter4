<div class="tab-pane fade" id="ProductBrandAdd" role="tabpanel" aria-labelledby="ProductBrandAdd-tab">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#ProductBrandAddModalID" aria-expanded="false" aria-controls="ProductBrandAddModalID"><i class='fa fa-plus'></i>Add Brand </a>
        </div>

        <div class="col-12">
            <div class='table-responsive'>
                <table class='table table-hover table-bordered dataTable'>
                    <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (count($brand_show) > 0) {
                            foreach ($brand_show as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['product_brand_name']
                                        ?></td>
                                    <td><a href="#"><i class="fa fa-edit"></i></a>&nbsp;<a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
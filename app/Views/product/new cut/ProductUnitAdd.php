<div class="tab-pane fade" id="ProductUnitAdd" role="tabpanel" aria-labelledby="ProductUnitAdd-tab">
    <div class="row">
        <div class="col-12 ">
            <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#ProductUnitAddModalID" aria-expanded="false" aria-controls="ProductUnitAddModalID"><i class='fa fa-plus'></i>Add Unit </a>
        </div>

        <div class="col-12">
            <div class='table-responsive'>
                <table class='table table-hover table-bordered dataTable'>
                    <thead>
                        <tr>
                            <th>Unit Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (count($unit_show) > 0) {
                            foreach ($unit_show as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['product_unit_name']
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
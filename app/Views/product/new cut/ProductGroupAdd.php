<div class="tab-pane fade" id="ProductGroupAdd" role="tabpanel" aria-labelledby="ProductGroupAdd-tab">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary float-right text-white mb-1" data-toggle="modal" data-target="#ProductGroupAddModalID" aria-expanded="false" aria-controls="ProductGroupAddModalID"><i class='fa fa-plus'></i>Add Group </a>
        </div>

        <div class="col-12">
            <div class='table-responsive'>
                <table class='table table-hover table-bordered dataTable'>
                    <thead>
                        <tr>
                            <th>Group Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (count($group_show) > 0) {
                            foreach ($group_show as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['group_name']
                                        ?></td>
                                        
                                         <td>
                                            <!-- Button to invoke the modal -->
                                            <a href="#" class="btn btn-primary btn-sm btn-edit" data-group_id="<?php echo $row['product_group_id'] ?>"><i class="fa fa-edit"></i></a>

                                            <a href="#" class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#DeleteGroupModal" data-delete_id="<?php //echo $subject['supplier_id'] ?>"><i class="fa fa-trash-o"></i></a>

                                        </td>
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



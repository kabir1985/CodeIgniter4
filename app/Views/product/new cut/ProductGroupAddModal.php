<!-- Modal -->
<form id="ProductGroupModal_Form" method='post' action="<?php echo site_url('/product/group/create') ?>">
    <div class='modal fade' id='ProductGroupAddModalID' tabindex='-1' role='dialog' aria-labelledby='ProductGroupAddModalID' aria-hidden='true'>
        <div class='modal-dialog  modal-dialog-centered' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Please Enter Product Group</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                        <span aria-hidden='true'>&times;
                        </span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class='form-row'>
                        <div class='form-group col-md-12'>
                            <label>Group Name</label>
                            <input required type='text' required class='form-control' name='product_group_name' placeholder='Group Name'>
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





















<script type='text/javascript'>
    $(document).ready(function() {

        $('#ProductGroupModal_Form').submit(function(event) {
            var postData = new FormData(this);
            //alert("kabir");
            $.ajax({
                    //alert("ddd");
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
                    // alert(;
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

    });
</script>
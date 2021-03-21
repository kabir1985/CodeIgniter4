<?php
echo $this->extend('layout');
echo $this->section('content');
?>


<div class="app-title">
    <!-- <div>
        <h5><i class="fa fa-th-list"></i> Product Details</h5>
     <p>Table to display analytical data effectively</p>
    </div>-->


    <!--  <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-plus-square"></i>Product Category Add
    </button>
	
	   <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-plus-square"></i>Product Sub-Category Add
    </button>
	
	   <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-plus-square"></i>Product Units Add
    </button>

	
	   <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-plus-square"></i>Product Add
    </button>
	-->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--<a class="navbar-brand" href="#">Navbar</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Add Product Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Add Product Sub-Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Add Product Units</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">Add New Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Existing Product List</a>
                </li>
            </ul>
        </div>
    </nav>







    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-user-plus"></i>
        Add
    </button> -->
    <!--     <ul class="nav">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
		  
          <li class="nav-item">  
			   <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">
				<i class="fa fa-plus-square"></i>Units Add
			   </button>
	     </li>
          <li class="nav-item active">
			   <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target=".collapseable" aria-expanded="false" aria-controls="collapseExample">
				<i class="fa fa-plus-square"></i>Product Add
			   </button>
		  </li>
        </ul> -->



</div>


<!---------------------------Form Load Start---------------------------------------->
<div class="tile collapse collapseable animate__animated animate__fadeInTopRight">

    <form>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Item ID</label>
                <input type="text" class="form-control" id="product_name" placeholder="Item ID">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Item Category</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Item Unit</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Item Name</label>
                <input type="text" class="form-control" id="item_name" placeholder="Item Name">
            </div>
            <div class="form-group col-md-4">
                <label>Quantity</label>
                <input type="text" class="form-control" id="item_quantity" placeholder="Item Quantity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Rate</label>
                <input type="text" class="form-control" id="item_rate" placeholder="Each Item Price">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>purchase date</label>
                <input type="text" class="form-control" id="purchase_date" placeholder="Purchase Date">
            </div>
            <div class="form-group col-md-4">
                <label>Supplier Name</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>item note</label>
                <input type="text" class="form-control" id="item_note">
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>
<!------------------------------Form Load end--------------------------------------->





<div class="row">
    <div class="col-md-12">
        <div class="tile collapseable show animate__animated  animate__fadeInUp">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




<?php
echo $this->endSection();
?>







<?php
echo $this->section("scripts");
?>

<!-- Data table plugin-->
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/dataTables.bootstrap.min.js') ?>"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
<!-- Google analytics script-->
<script type="text/javascript">
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
</script>
<?php
echo $this->endSection();
?>
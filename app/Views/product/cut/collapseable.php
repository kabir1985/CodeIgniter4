<?php
echo $this->extend('layout');
echo $this->section('content');
?>


<div class="app-title">
    <div>
        <h1><i class="fa fa-th-list"></i> Collapseable Form</h1>
        <p>Collapseable Form to Create New Form</p>
    </div>

    <button class="btn btn-danger btn-sm" type="button" data-toggle="collapse" data-target="#collapseableForm" aria-expanded="false" aria-controls="collapseExample">
        <i class="fa fa-file"></i>
        Form
    </button>


    <!-- Button trigger modal -->

    <!-- <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul> -->
</div>
<div class="row">

    <div class="col-md-12">
        <div class="collapse" id="collapseableForm">
            <div class="card card-body">

                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </form>

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

<?php
echo $this->endSection();
?>
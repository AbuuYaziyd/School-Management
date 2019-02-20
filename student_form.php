
<?php 
include './layout/header.php';
include './layout/main_sidebar.php';
?>
<!-- Page wrapper  -->

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">New Admission</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Student</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student Form</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" style="min-height:550px">
        <form class="form-horizontal">
            <div class="row">
                <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Personal Info</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
            
            <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
    </div>
        
<?php include './layout/footer.php'; ?>
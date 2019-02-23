
<?php 
include './layout/header.php';
include './layout/main_sidebar.php';
?>
<!-- Page wrapper  -->

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">New Student Admission</h4>
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
            <div class="card">
                <div class="card-body">

                    <div class="row alert alert-info">
                        <div class="col-md-4">
                            <label>Admission in</label>
                            <select name="group">
                                <option  <?php if (isset($group) && $group=="Class One") echo "selected";?> value="Class One">Class One</option>
                                <option  <?php if (isset($group) && $group=="Class Two") echo "selected";?> value="Class Two">Class Two</option>
                                <option  <?php if (isset($group) && $group=="Class Three") echo "selected";?> value="Class Three">Class Three</option>
                                <option  <?php if (isset($group) && $group=="Class Four") echo "selected";?> value="Class Four">Class Four</option>
                                <option  <?php if (isset($group) && $group=="Class Five") echo "selected";?> value="Class Five">Class Five</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label >Roll No <span class="badge pl-2 pr-2 badge-success">213</span></label>
                        </div>
                        <div class="col-md-4 text-right">
                            <label class="">Form No <span class="badge badge-light">433542</span></label>
                        </div>
                    </div>

                    <label class="mt-3 h5">Student Name</label>
                    <div class="form-group row mb-3">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Middle Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-lg-4">
                        <label class="mt-1">Date of Birth</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="mydatepicker" placeholder="dd/mm/yyyy">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ml-3">
                                <label class="m-t-15">Gender</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation1">Male</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation2">Famale</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                    <label class="custom-control-label" for="customControlValidation3">Other</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-3">
                            <label class="m-t-15">Upload Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="mt-1">Address</label>
                        <div class="col-lg-7">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                    </div>
                </div>
            </div>
                

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Student Father</h4>
                            
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="fatherFullName" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="fatherProfession" placeholder="Profession">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="fatherDesignation" placeholder="Designation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="fatherEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="fatherMobile" placeholder="Phone/Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Student Mother</h4>
                            
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="motherFullName" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="motherProfession" placeholder="Profession">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="motherDesignation" placeholder="Designation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="motherEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="motherMobile" placeholder="Phone/Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Student Guardian</h4>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="guardianFullName" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="guardianRealation" placeholder="Relation with Student">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="guardianEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="guardianMobile" placeholder="Phone/Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-top">
                <div class="card-body text-center">
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
        
    <!-- This Page JS -->
    <script src="./assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="./dist/js/pages/mask/mask.init.js"></script>
    <script src="./assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="./assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="./assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="./assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="./assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="./assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="./assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('#mydatepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

<?php include './layout/footer.php'; ?>
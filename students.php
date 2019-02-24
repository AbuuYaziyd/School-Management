<?php 
include './layout/header.php';
include './layout/main_sidebar.php';
?>
  <!-- ============================================================== -->
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
          <div class="row">
              <div class="col-12 d-flex no-block align-items-center">
                  <h4 class="page-title">Students</h4>
                  <div class="ml-auto text-right">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Students</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Student List</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
              <div class="col-12">
                  
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Basic Datatable</h5>
                          <div class="table-responsive">
                              <table id="zero_config" class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Roll No</th>
                                          <th>Class</th>
                                          <th>Section</th>
                                          <th>Mobile</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><a href="">Biprodas Roy</a></td>
                                          <td>120106</td>
                                          <td>Class Three</td>
                                          <td>A</td>
                                          <td>01521337910</td>
                                          <td><a class="mr-2" href="">Edit</a><a href="">Delete</a></td>
                                      </tr>
                                      <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011/07/25</td>
                                          <td>$170,750</td>
                                      </tr>
                                      
                                      <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008/11/28</td>
                                          <td>$162,700</td>
                                      </tr>
                                      <tr>
                                          <td>Brielle Williamson</td>
                                          <td>Integration Specialist</td>
                                          <td>New York</td>
                                          <td>61</td>
                                          <td>2012/12/02</td>
                                          <td>$372,000</td>
                                      </tr>
                                      <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Sales Assistant</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012/08/06</td>
                                          <td>$137,500</td>
                                      </tr>
                                      
                                      
                                      <tr>
                                          <td>Michael Bruce</td>
                                          <td>Javascript Developer</td>
                                          <td>Singapore</td>
                                          <td>29</td>
                                          <td>2011/06/27</td>
                                          <td>$183,000</td>
                                      </tr>
                                      <tr>
                                          <td>Donna Snider</td>
                                          <td>Customer Support</td>
                                          <td>New York</td>
                                          <td>27</td>
                                          <td>2011/01/25</td>
                                          <td>$112,000</td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Biprodas</th>
                                          <th>Student</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </tfoot>
                              </table>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->

<?php include './layout/footer.php'; ?>
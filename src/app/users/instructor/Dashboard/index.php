<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../../../assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../assets/css/bootstrap-5.0.2-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../../../assets/css/footer.css">
</head>
<style>
   .bd-example thead{
        background:#13335b !important;
        opacity:0.8;
    }
    .table-responsive>.table{
        color:#13335b;
    }
</style>
<body>
    <nav class="header navbar fixed-top navbar-expand-sm navbar-light mb-3 flex-row d-flex">
        <div class="container-fluid head" >
            <a href="../../../"  class="nav-brand text-warning" style="margin-left: 49px;">
                <h3>STEM E-Learning</h3>
            </a>
            <span class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </span>

                <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="../../../">
                        <i class="bi bi-house-fill"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-grid-fill"></i> more
                        </a>
                    </li>

                </ul>

                <!-- user account -->
                <span class="d-flex">
                    <a href="" class="nav-link text-white" title="Account">
                        <i class="bi bi-person-circle"></i> 
                        </a>
                </span>
            </div>
        </div>
    </nav>



    <!-- bottom nav -->
  
    <div class="bottom-nav container-fluid flex-row d-flex fixed navbar-expand-md navbar-light mb-3" >

        <div class="flex-start " id="sidenav_icon">
            <label for="check">
                <i class="bi bi-list" id="sidebar-btn"></i>
            </label>
        </div>
    </div>


    <!-- container with sidebar and maincontainer -->
<div class="flex-container">

    <!-- sidebar start -->
    <div class="sidebar" >

        <a href="../../Dashboard" class="nav nav-link active">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>


        <a href="../Content" class="nav nav-link">
            <i class="bi bi-tree-fill"></i><span>  &nbsp; Content</span>
        </a>
       
        <a href="../Student" class="nav nav-link d-flex flex-row">
            <i class="bi bi-clock-history"></i>
            <!-- <i class="material-icons">forum</i> -->
            
            <span>  &nbsp; Student</span>
        </a>
        <a href="../History" class="nav nav-link">
            <i class="bi bi-envelope-fill"></i><span>  &nbsp; History</span>
        </a>
    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-2 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Instructor > Dashboard</span>
        </div>
    
        <div class="container ">
                
            <div class="row">
      
                    <!-- table 1 -->
                <div class="col-md-6 col-lg-4 col-sm-12" >
                        <div class="bd-example">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center text-white">Students</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 text-center fw-bold h2">200</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                </div>
                    <!-- end of tabel 1  -->

                    <!-- table 2  begin-->
                <div class="col-md-6 col-lg-4">
                    <div class="bd-example">
                            <table class="table table-bordered">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="text-center text-white">Instructors</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 text-center fw-bold h2"> 10</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div> 
                  <!-- card2 end  -->


                    <!-- card3  begin-->
                <div class="col-md-6 col-lg-4">
                    <div class="bd-example">
                            <table class="table table-bordered">
                                <thead class="">
                                    <tr>
                                        <th scope="col" class="text-center text-white">Teachers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 text-center fw-bold h2">40</td>                                        
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div> 
        
            </div>
        </div>    
        
        <div class="table-responsive">
            <table class="table table-striped table-sm table-bordered text-capitalize ">
                <h3 class="text-center p-5">Best Student</h3>
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">SID</th>
                    <th scope="col">School</th>
                    <th scope="col">Source</th>
                    <th scope="col">Category</th>
                    </tr>            
                </thead>
                <tbody >
                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr> 

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>

                    <tr>
                    <td>01</td>
                    <td>Vedasto Stem</td>
                    <td>Science</td>
                    <td>01</td>
                    <td>06</td>
                    <td>18</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="container-fluid relative-bottom footer">
    <div class="row text-center" >
            <div class="col-md-6 col-lg-3 text-white ">
                   
                   <h5 class="title">Contact us</h5>
                   <!-- </a> -->
                    <address>
                    +44 345 678 903
                    </address>
                    <address>
                    adobexd@mail.com 
                    </address>
                    <p>Find a Store</p>
            </div>
            <div class="col-md-6 col-lg-3 text-white">
                    <h5 class="title">Customer services</h5>
                    <p class="text-white text-center">
                            <address> Contact us</address>
                            <address>Returns</address>
                            <address>FQA</address>
                    </p>
            </div>
            <div class="col-md-6 col-lg-3 text-white">
                    <h5 class="title">Information</h5>
                    <address>
                    Work with us
                    </address>
                    <address>
                    privacy &amp policy
                    </address>
                    <address>
                    Terms &amp Conditions
                    </address>
            </div>
            <div class="col-md-6 col-lg-3 text-white">
                    <h5 class="title">Contact Administrator</h5>
                    <p class="container">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    <p>
                            <form class="flex-inline d-flex">
                                    <span class="form-group" id="subscribe"> 
                                            <input type="email" class="form-control" placeholder="example@abc.com">
                                    </span>
                                    &nbsp;
                                    <button class="btn text-info bg-white" type="submit">Subscribe</button>
                            </form>
                            
                    </p>
            </div>   
    </div>
    <p class="text-center medium text-white alert-dismissible ">&copy;CapitalSpace2021</p>
    <p class="text-center medium text-white alert-dismissible text-large">V 1.0</p>
</footer>

<script src="../../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/Chart.js"></script>
<script src="../../assets/js/adminChart.js"></script>

</boody>
</html>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.2-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
</head>

<style>
   .bd-example thead{
        background:#13335b !important;
        opacity:0.8;
    }
    .table-responsive>.table{
        color:#13335b;
    }
    #search{
        width: 50%;
        border: 1px solid #13335b;
        justify-content: end;
        align-items: center;
    }
 

</style>
<body>
    <nav class="header navbar fixed-top navbar-expand-sm navbar-light mb-3 flex-row d-flex ">
        <div class="container-fluid head" >
            <a href="../../../"  class="nav-brand text-warning" style="margin-left: 49px;">
                <h3>STEM E-Learning</h3>
            </a>
            <span class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white "></span>
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
  
    <div class="bottom-nav container-fluid flex-row d-flex fixed navbar-expand-md navbar-light mb-3 justify-content-start align-item-center" >

        <div class="flex-start d-flex " id="sidenav_icon">
            <label for="check">
                <i class="bi bi-list" id="sidebar-btn"></i>
            </label>
        </div>
        <!-- <div class="flex-row d-flex flex-end justify-content-center align-item-center" id="searchbar">
            <input type="text" name="" id="search" placeholder="search the web">
                <i class="bi bi-search" id="search_icon"></i>
        </div> -->
    </div>


    <!-- container with sidebar and maincontainer -->
<div class="flex-container">

    <!-- sidebar start -->
    <div class="sidebar" >

        <a href="./" class="nav nav-link active">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>
        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed " data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span> Users</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="users-collapse" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0 ">
                        <a href="./interfaces/students/" class=" nav-link flex-row d-flex  "style="">
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-book-half"></i>&nbsp;<span>Students</span></span>
                        </a>
                        <a href="./interfaces/teachers/" class=" nav-link flex-row d-flex  "style="">
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-pen-fill"></i>&nbsp;<span>Teachers</span></span>
                        </a>

                        <a href="./interfaces/instructors/" class=" nav-link flex-row d-flex  "style="">
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-person-check-fill"></i>&nbsp;<span>Instructors</span></span>
                        </a>


                    </div>
                </div>
            </a>

        </div>


        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed " data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                         <i class="bi-house-door-fill"></i>
                       <span> Department</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0 ">
                        <a href="./interfaces/department" class=" nav-link flex-row d-flex  "style="">
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-eye-fill"></i>&nbsp;<span>view</span></span>
                        </a>

                    </div>
                </div>
            </a>

        </div>
        <a href="#" class="nav nav-link">
            <i class="bi bi-tree-fill"></i><span>  &nbsp; UI Element</span>
        </a>
       
        <a href="../../Forum" class="nav nav-link d-flex flex-row">
            <i class="bi bi-clock-history"></i>            
            <span>  &nbsp; History</span>
        </a>
        <a href="./interfaces/public_sms" class="nav nav-link">
            <span class="d-flex flex-row"><i class="bi bi-envelope-fill"></i><span> Public Message</span></span>
        </a>
    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-2 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Admin > Dashboard</span>
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
                  <!-- card3 end  -->


                  <!-- graphs -->
                      <!-- graph 1  begin-->
                <div class="col-md-6 col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body card-body-expand-md">
                            
                            <div id="bar">
                                <canvas id="myChart" width="400" height="300"></canvas>
                            </div>
                        </div>
                    </div>                    
                </div> 
                  <!-- graph 1 end  -->



                           <!-- graph 3  begin-->
                <div class="col-md-6 col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body card-body-expand-md">
                            
                            <div id="lineg">
                                <canvas id="linegraph" height="300" width="400"></canvas>
                            </div>
                        </div>
                    </div>                    
                </div> 
                  <!-- graph 3 end  -->

                             <!-- graph 4  begin-->
                <div class="col-md-6 col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body card-body-expand-md">
                            <div class="line2">
                                <canvas id="line21" width="400" height="300"></canvas>
                            </div>
                        </div>
                    </div>                    
                </div> 
                  <!-- graph 4 end  -->

                             <!-- graph 5  begin-->
                <div class="col-md-6 col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body card-body-expand-md">
                            <div class="line2">
                                <canvas id="brsz" width="400" height="300"></canvas>
                            </div>
                        </div>
                    </div>                    
                </div> 
                  <!-- graph 5 end  -->

                <!-- graph 2  begin-->
             
                  <!-- graph 2 end  -->


            <div class="row">
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card accordion accordion-flush">
                  <div class="card-header d-flex align-items-center justify-content-between accordion-item">
                    <h3 class="card-title pe-3">Latest Students</h3>

                    <div class="card-subtitle d-flex justify-content-end  align-items-center ">
                      <span class="badge bg-warning ms-4">8 New students</span>
                    <i class="bi bi-dash-lg ps-2 float-end ms-5" data-bs-toggle="collapse" data-bs-target=".cards" aria-expanded="false"></i>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0 cards">
                    <ul class="users-list clearfix " type="none">
                      <li class="d-flex flex-column col-sm-4 col-lg-3 col-md-3 float-start justify-content-center align-items-center">
                        <img src="./../../assets/images/user1.jpg" width="60" height="60" class="rounded-circle" alt="User Image">
                        <a class="users-list-name small text-decoration-none" href="#">Alexander Pierce</a>
                        <span class="users-list-date small text-secondary">Today</span>
                      </li>

                      <li class="d-flex flex-column col-sm-4 col-lg-3 col-md-3 float-start justify-content-center align-items-center">
                        <img src="./../../assets/images/user2.jpg" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name small text-secondary text-decoration-none" href="#">Norman</a>
                        <span class="users-list-date small text-secondary">Yesterday</span>
                      </li>

                      <li class="d-flex flex-column col-sm-4 col-lg-3 col-md-3 float-start justify-content-center align-items-center">
                      <img src="./../../assets/images/user3.jpg" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name small text-secondary text-decoration-none" href="#">Jane</a>
                        <span class="users-list-date small text-secondary">12 Jan</span>
                      </li>

                      <li class="d-flex flex-column col-sm-3  float-start justify-content-center align-items-center">
                      <img src="./../../assets/images/user4.jpg" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name text-decoration-none" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li class="d-flex flex-column col-sm-3 float-start justify-content-center align-items-center">
                      <img src="./../../assets/images/user5.jpg" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name text-decoration-none" href="#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>
                      <li class="d-flex flex-column col-sm-3 float-start justify-content-center align-items-center">
                      <img src="./../../assets/images/user6.jpg" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name text-decoration-none" href="#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                      </li>
                      <li class="d-flex flex-column col-sm-3 float-start justify-content-center align-items-center">
                      <img src="./../../assets/images/avatar2.png" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name text-decoration-none" href="#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                      <li class="d-flex flex-column col-sm-3 float-start justify-content-center align-items-center">
                        <img src="./../../assets/images/avatar3.png" width="60" height="60" class="rounded-circle"   alt="User Image">
                        <a class="users-list-name text-decoration-none" href="#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center ">
                    <a href="javascript::" class="text-decoration-none">View All Students</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>

                  <!-- table -->

                  <div class="d-flex flex-row justify-content-between p-3 ">
                    <div class="justify-content-start">
                        <a href=""><i class="bi bi-box-arrow-in-down downicon"></i><span class="mx-1">Download</span></a>    
                    </div>
             
                    <div class=" flex-row d-flex flex-end justify-content-end align-item-center ms-5 me-0 w-100" id="searchbar">
                        <input type="text" name="" id="search" placeholder="search" class="border">
                        <i class="bi bi-search" id="search_icon"></i>
                    </div>
                </div>

    

                <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table-responsive-xxl">
                        <table class="table table-striped table-sm table-bordered text-capitalize table-hover">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                <td>01</td>
                                <td>Linda MCDonald</td>
                                <td class="text-lowercase">lindaMcdonald@outlook.com</td>
                                <td>Experiment</td>
                                <td>Physics</td>
                                <td>blowingup the baloon</td>
                                <td>pending</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>02</td>
                                <td>vladimir putin</td>
                                <td  class="text-lowercase">scowezeck@putin.co</td>
                                <td>Challange</td>
                                <td>chemistry</td>
                                <td>collecting oxygen</td>
                                <td>pending</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>03</td>
                                <td>rachid edogan</td>
                                <td  class="text-lowercase">rachtayedogan@tecno.co</td>
                                <td>teachers' manual</td>
                                <td>chemistry</td>
                                <td>stem manual</td>
                                <td>pending</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>04</td>
                                <td>sylivansan ramanujan</td>
                                <td  class="text-lowercase">sylivramnujan@gmail.com</td>
                                <td>Project</td>
                                <td>Physics</td>
                                <td>lava lamp</td>
                                <td>approved</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                
                                </tr>
                                <tr>
                                <td>05</td>
                                <td>karumanzila misola</td>
                                <td  class="text-lowercase">karumisola@gmail.com</td>
                                <td>Experiment</td>
                                <td>chemistry</td>
                                <td>Emulsions</td>
                                <td>Cancelled</td>
                                <td class="d-flex flex-row justify-content-around align-items-center" >
                                    <a href="" title="aprove" class="text-success" ><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger" ><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>06</td>
                                <td>zaitun khamis</td>
                                <td  class="text-lowercase">zaitunkh12@gmail.com</td>
                                <td>Challange</td>
                                <td>Physics</td>
                                <td>Rocket propulsion</td>
                                <td>approved</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>07</td>
                                <td>Sadick mihayo</td>
                                <td  class="text-lowercase">sadickmihayo@gmail.com</td>
                                <td>Experiment</td>
                                <td>chemistry</td>
                                <td>Roasting milk</td>
                                <td>pending</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>08</td>
                                <td>telessa may</td>
                                <td  class="text-lowercase">maytel@protonmail.com</td>
                                <td>Project</td>
                                <td>Physics</td>
                                <td>friction force</td>
                                <td>pending</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>09</td>
                                <td>martha mizengwe</td>
                                <td  class="text-lowercase">mizengwemartha@gmail.com</td>
                                <td>Experiment</td>
                                <td>chemistry</td>
                                <td>souring lemon</td>
                                <td>approved</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                <tr>
                                <td>10</td>
                                <td>emmanuel macron</td>
                                <td  class="text-lowercase">emmanmacron@gmail.com</td>
                                <td>Challange</td>
                                <td>Physics</td>
                                <td>renewable energy</td>
                                <td>pending</td>
                                <td class="d-flex flex-row justify-content-around align-items-center">
                                    <a href="" title="aprove" class="text-success"><i class="bi bi-check-lg"></i></a>
                                    <a href="" title="reject" class="text-danger"><i class="bi bi-x-lg"></i></a>
                                </td>
                                </tr>
                                
                            </tbody>
                            <span class="d-flex flex-row col justify-content-start align-items-center">
                           
                                    <a href="" title="aprove" class="text-success me-2"><i class="bi bi-check-lg"></i></a>
                                    <span class="text-link me-4">Aprove</span>
                               
                                    <a href="" title="reject" class="text-danger ms-4 me-2"><i class="bi bi-x-lg"></i></a>
                                    <span class="caption">Cancel</span>
                                    
                                <div class="justify-content-center ps-5 ms-5 pb-2">
                                    <form action="" class="form-group">
                                        <select name="filter" class="form-select" id="">
                                            <option value="min" selected>10</option>
                                            <option value="min-1">25</option>
                                            <option value="min-2">50</option>
                                            <option value="min-3">75</option>
                                            <option value="min-4">100</option>
                                            <option value="min-4">200</option>
                                            <option value="min-4">500</option>
                                        </select>
                                    </form>
                                </div>
                            </span>
                        </table>

                </div>
            </div>
        </div>        
    </div>
</div>

<footer class="container-fluid relative-bottom footer text-center">
    <p class="text-center medium text-white alert-dismissible ">&copy;CapitalSpace2021</p>
    <p class="text-center medium text-white alert-dismissible text-large">V 1.0</p>
</footer>


<script src="./../../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="./../../assets/js/Chart.js"></script>
<script src="./../../assets/js/adminChart.js"></script>

</boody>
</html>


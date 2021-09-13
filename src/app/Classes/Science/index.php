<?php
include_once "../../../assets/PHP/header.php";
?>
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
        <!-- <div class="flex-start  text-white" id="side1">
        <input type="checkbox" id="check1">
            <label for="check1">
                <i class="bi bi-list" ></i>
            </label>
        </div> -->
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
  
    <div class="bottom-nav container-fluid flex-row d-flex fixed navbar-expand-md navbar-light mb-3 justify-content-center align-item-center" >

        <div class="flex-start " id="sidenav_icon">
            <label for="check">
                <i class="bi bi-list" id="sidebar-btn"></i>
            </label>
        </div>
        <div class="flex-row d-flex flex-end justify-content-center align-item-center" id="searchbar">
            <input type="text" name="" id="search" placeholder="search the web">
                <i class="bi bi-search" id="search_icon"></i>
        </div>
    </div>


    <!-- container with sidebar and maincontainer -->
<div class="flex-container">

    <!-- sidebar start -->
    <div class="sidebar" >

        <a href="../../Dashboard" class="nav nav-link ">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed active" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span>  &nbsp; Class</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0 ">
                        <a href="" class="nav nav-link flex-row d-flex active"style="margin-left:-18px;">
                            <i class="bi bi-binoculars-fill"></i>
                            <span>&nbsp;Science</span>
                        </a>

                        <a href="../Technology" class="nav nav-link " id="tech" style="margin-left:-18px;">
                            <i class="bi bi-laptop" ></i>
                            <span>&nbsp;Technology</span>
                        </a>

                    </div>
                </div>
            </a>

        </div>
        <a href="#" class="nav nav-link">
            <i class="bi bi-stopwatch"></i><span>  &nbsp; Last Activity</span>
        </a>
       
        <a href="../../Forum" class="nav nav-link d-flex flex-row">
            <i class="bi bi-chat-right-fill"></i>
            <!-- <i class="material-icons">forum</i> -->
            
            <span>  &nbsp; forum</span>
        </a>
        <a href="#" class="nav nav-link">
            <i class="bi bi-collection-fill"></i><span>  &nbsp; Library</span>
        </a>
        <a href="#" class="nav nav-link justify-content-lg-end align-items-center">
            <i class="bi bi-person-circle"></i><span> &nbsp; Account</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-2 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Classes > Science</span>
        </div>
    
        <div class="container ">
                
            <div class="row">
      
                    <!-- table 1 -->
                <div class="col-md-6 col-lg-4 col-sm-12" >
                        <div class="bd-example">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center text-white">Experiments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-4"></td>
                                        
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
                                        <th scope="col" class="text-center text-white">Project</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-4"></td>
                                        
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
                                        <th scope="col" class="text-center text-white">Challanges</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-4"></td>                                        
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div> 
                  <!-- card3 end  -->

                <div class="table-responsive">
                        <table class="table table-striped table-sm table-bordered text-capitalize ">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Type</th>
                                <th scope="col">Time added</th>
                                <th scope="col">level</th>
                                <th scope="col">field</th>
                                <th scope="col">action</th>
                                <th scope="col">score</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                <td>01</td>
                                <td>Experiment</td>
                                <td>12:00</td>
                                <td>Easy</td>
                                <td>Physics</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>02</td>
                                <td>Project</td>
                                <td>19:00</td>
                                <td>medium</td>
                                <td>chemistry</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>03</td>
                                <td>Challange</td>
                                <td>14:00</td>
                                <td>hard</td>
                                <td>chemistry</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>04</td>
                                <td>Experiment</td>
                                <td>08:56</td>
                                <td>easy</td>
                                <td>Physics</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>05</td>
                                <td>Challange</td>
                                <td>15:30</td>
                                <td>Complex</td>
                                <td>Physics</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>06</td>
                                <td>Experiment</td>
                                <td>20:00</td>
                                <td>hard</td>
                                <td>chemistry</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>07</td>
                                <td>Project</td>
                                <td>23:00</td>
                                <td>medium</td>
                                <td>chemistry</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>08</td>
                                <td>Challange</td>
                                <td>06:39</td>
                                <td>easy</td>
                                <td>Physics</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>09</td>
                                <td>Experiment</td>
                                <td>11:59</td>
                                <td>complex</td>
                                <td>chemistry</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                <tr>
                                <td>10</td>
                                <td>Challange</td>
                                <td>06:59</td>
                                <td>hard</td>
                                <td>Physics</td>
                                <td>view</td>
                                <td>0</td>
                                </tr>
                                
                            </tbody>
                        </table>
                </div>
            </div>
        </div>        
    </div>
</div>


        <?php
        include_once "../../../assets/PHP/footer.php";
    ?>



<?php
include_once "../../../../assets/PHP/header.php";
?>
<style>
   .bd-example thead{
        background:#13335b !important;
        opacity:0.8;
    }
    .ulist{
        list-style-type: none;
    }
    .table-responsive>.table{
        color:#13335b;
    }
    #searchbar{
        margin-left: 90px !important;
    }
    #search{
        width: 50%;
        border: 1px solid #13335b;
        justify-content: end;
        align-items: center;
    }
    #search_icon{
        margin: -33px;
    }
    .downicon{
        font-size: 25px;
        color: #13335b;
    }
    .studentAdd{
        margin-left: -3px !important;
    }
    #iconbttn{
        background: #f2f2f2;
        border: 1px solid #f2f2f2;
        outline: none !important;
    }
    .pagenationfull{
        margin-left: 953px;
    }
    ..savebttn{
        color: #13335b;
        background: #f2f2f2;
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
  
    <div class="bottom-nav mx-3 container-fluid flex-row d-flex fixed navbar-expand-md navbar-light mb-3 justify-content-start align-item-center" >

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

        <a href="../../Dashboard" class="nav nav-link ">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed active" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span>  &nbsp; Users</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0">     
                    <ul class="ulist" id="ulisOne">
                        <li class="ulist">
                            <a href="../students" class="nav nav-link flex-row d-flex"style="margin-left:-18px;">
                                <i class="bi bi-binoculars-fill"></i>
                                <span>&nbsp;Students</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="nav nav-link active" id="tech" style="margin-left:-18px;">
                                <i class="bi bi-people-fill" ></i>
                                <span>&nbsp;Teachers</span>
                            </a>
                        </li>

                        <li>
                            <a href="../instructors" class="nav nav-link" id="tech" style="margin-left:-18px;">
                                <i class="bi bi-person-plus-fill" ></i>
                                <span>&nbsp;Instructors</span>
                            </a>
                        </li>
                        </li>
                    </ul>

                    </div>
                </div>
            </a>

        </div>
        <a href="../department" class="nav nav-link">
            <i class="bi bi-house-door-fill"></i><span>  &nbsp; Department</span>
        </a>
       
        <a href="../../Forum" class="nav nav-link d-flex flex-row">
            <i class="bi bi-tree-fill"></i>
            <!-- <i class="material-icons">forum</i> -->
            
            <span>  &nbsp; UI Element</span>
        </a>
        <a href="../History" class="nav nav-link">
            <i class="bi bi-clock-history"></i><span>  &nbsp; History</span>
        </a>
        <a href="../public message" class="nav nav-link justify-content-lg-end align-items-center">
            <i class="bi bi-envelope-fill"></i><span> &nbsp; Public Message</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-3 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Users > Teachers</span>
        </div>
    
        <div class="container ">
                
            <div class="row">
      
                <!-- add student -->
                <div class="text-end mx-5 flex-row d-flex flex-end justify-content-end align-item-center studentAdd">
                    <button type="menu" class="btn btn-default" id="iconbttn"> <i class="bi bi-plus-circle-fill"></i> Add teacher</button>
                </div>

                <div class="d-flex flex-row p-3">
                    <div>
                        <a href="#"><i class="bi bi-box-arrow-in-down downicon"></i><span class="mx-1 text-decoration-none">Download</span></a>    
                    </div>
                    <div class="flex-row d-flex flex-end justify-content-end align-item-center mx-5 me-0" id="searchbar">
                        <input type="text" name="" id="search" placeholder="search">
                        <i class="bi bi-search" id="search_icon"></i>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered text-capitalize ">
                        <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">School Name</th>
                                <th scope="col">No. Student</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Rachel Mussa</td>
                                <td>RaqueIJr</td>
                                <td>uhuru</td>
                                <td>2400</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Paul Cavain</td>
                                <td>@Cavain</td>
                                <td>Jamhuri</td>
                                <td>2020</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Ombeni Ally</td>
                                <td>Sudo su</td>
                                <td>Makole</td>
                                <td>2001</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Asimwe Mwinyi</td>
                                <td>AsimweJr</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>
                                
                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>Vedasto001</td>
                                <td>Kizota</td>
                                <td>2000</td>
                                <td></td>
                                </tr>
                            </tbody>
                    </table>

                    <div class="text-end">
                        <button class="btn btn-default  savebttn">Save</button>
                    </div>
                    <div class="pagenationfull p-2">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                    
                                <li class="page-item">
                                    <a class="page-link" style="color: #13335b;" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only"></span>
                                    </a>
                                </li>

                                <li class="page-item active"><a class="page-link" style="background: #f2f2f2; color: #13335b" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" style="color: #13335b;" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" style="color: #13335b;" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" style="color: #13335b;" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" style="color: #13335b;" href="#">5</a></li>

                                <li class="page-item">
                                    <a class="page-link" style="color: #13335b;" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    

                </div>
            </div>
        </div>        
    </div>
</div>


    <?php
        include_once "../../../../assets/PHP/footer.php";
    ?>
</body>



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
    .savebttn{
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

        <a href="../Dashboard" class="nav nav-link ">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        
        <a href="#" class="nav nav-link active">
            <i class="bi bi-house-door-fill"></i><span>  &nbsp; Content</span>
        </a>
       
        <a href="../Student" class="nav nav-link">
            <i class="bi bi-clock-history"></i><span>  &nbsp; Student</span>
        </a>
        <a href="../History" class="nav nav-link justify-content-lg-end align-items-center">
            <i class="bi bi-envelope-fill"></i><span> &nbsp; History</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-3 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">instructor > Content</span>
        </div>
    
        <div class="container ">
                
            <div class="row">
      
                <!-- add student -->
                <div class="text-end mx-5 flex-row d-flex flex-end justify-content-end align-item-center studentAdd">
                    <button type="menu" class="btn btn-default" id="iconbttn"> <i class="bi bi-plus-circle-fill"></i> Add Contents</button>
                </div>

                <div class="d-flex flex-row p-3">
                    <div>
                        <a href=""><i class="bi bi-box-arrow-in-down downicon"></i><span class="mx-1">Download</span></a>    
                    </div>
                    <div class="flex-row d-flex flex-end justify-content-end ms-5" id="searchbar">
                        <input type="text" name="" id="search" placeholder="search">
                        <i class="bi bi-search" id="search_icon"></i>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered text-capitalize ">
                        <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Time Added</th>
                                <th scope="col">Department</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
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
                                <td>02</td>
                                <td>Rachel Mussa</td>
                                <td>Technology</td>
                                <td>10</td>
                                <td>13</td>
                                <td>03</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>03</td>
                                <td>Ombeni Ally</td>
                                <td>Engineering</td>
                                <td>07</td>
                                <td>31</td>
                                <td>19</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>04</td>
                                <td>Asimwe Mwinyi</td>
                                <td>Health</td>
                                <td>34</td>
                                <td>24</td>
                                <td>02</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>05</td>
                                <td>Silvio Travel</td>
                                <td>Mathematics</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>06</td>
                                <td>Silvio Travel</td>
                                <td>Arts</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td></td>
                                </tr>
                                
                                <tr>
                                <td>04</td>
                                <td>Asimwe Mwinyi</td>
                                <td>Health</td>
                                <td>34</td>
                                <td>24</td>
                                <td>02</td>
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
                                <td>02</td>
                                <td>Rachel Mussa</td>
                                <td>Technology</td>
                                <td>10</td>
                                <td>13</td>
                                <td>03</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>03</td>
                                <td>Ombeni Ally</td>
                                <td>Engineering</td>
                                <td>07</td>
                                <td>31</td>
                                <td>19</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>04</td>
                                <td>Asimwe Mwinyi</td>
                                <td>Health</td>
                                <td>34</td>
                                <td>24</td>
                                <td>02</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>05</td>
                                <td>Silvio Travel</td>
                                <td>Mathematics</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
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
                                <td>02</td>
                                <td>Rachel Mussa</td>
                                <td>Technology</td>
                                <td>10</td>
                                <td>13</td>
                                <td>03</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>03</td>
                                <td>Ombeni Ally</td>
                                <td>Engineering</td>
                                <td>07</td>
                                <td>31</td>
                                <td>19</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>04</td>
                                <td>Asimwe Mwinyi</td>
                                <td>Health</td>
                                <td>34</td>
                                <td>24</td>
                                <td>02</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>05</td>
                                <td>Silvio Travel</td>
                                <td>Mathematics</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td></td>
                                </tr>
                            </tbody>
                    </table>

                    <div class="p-2 justify-content-end text-end">
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



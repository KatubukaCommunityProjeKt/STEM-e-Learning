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
    .studentAdd>button{
        color:#13335b !important;
    }
    #iconbttn{
        background: #f2f2f2;
        border: 1px solid #f2f2f2;
        outline: none !important;
    }
    a{
        text-decoration:none
    }

   .pagenationfull>nav>ul>li>a{
        text-decoration:none;
        color:#13335b;
    }
    .pagenationfull>nav>ul>.active>a{
        background:#13335b !important;
        border:none;
    }
    .pagenationfull>nav>ul>li>a:hover{
        color:#13335b;
    }
    .auto-nav>span>a{
        color:#13335b;
    }

    form{
        overflow-y: auto;
    }
 
    .modal-content,.modal-content span{
        background:rgb(19, 51, 91,0.9) !important;
    }
    .modal-content input{
        background:rgb(19,20, 90,0.3) !important;
        color: #fff;
        border:none;
    }
    
    .modal-content select{
        background:rgb(19,20, 90,0.3) !important;
        color: #ccc;
        border:none;
    }
    .modal-content span{
        box-shadow: none;
        border:none;
        color:#ccc111;
    }
    .modal-content select:active{
        color: #fff;
        border:1px solid rgb(19,25,91,0.6);
        box-shadow: none;
    }
    .modal-content input:focus{
        color: #fff;
        border:1px solid rgb(19,25,91,0.6);
        box-shadow: none;
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

        <a href="./../../" class="nav nav-link ">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed active" data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span>  &nbsp; Users</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="users-collapse" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                <div class="accordion-body mb-0 ">
                        <a href="./../students/" class=" nav-link flex-row d-flex active"style="">
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-book-half"></i>&nbsp;<span>Students</span></span>
                        </a>
                        <a href="./../teachers/" class=" nav-link flex-row d-flex  "style="">
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-pen-fill"></i>&nbsp;<span>Teachers</span></span>
                        </a>

                        <a href="./" class=" nav-link flex-row d-flex"style="">
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
                        <a href="" class=" nav-link flex-row d-flex  "style="">
                            
                            <span class="d-flex flex-row pe-2"> <i class="bi bi-eye-fill"></i>&nbsp;<span>view</span></span>
                        </a>

                    </div>
                </div>
            </a>
        </div>
       
        <a href="../../Forum" class="nav nav-link d-flex flex-row">
            <i class="bi bi-tree-fill"></i>            
            <span>  &nbsp; UI Element</span>
        </a>
        <a href="#" class="nav nav-link">
            <i class="bi bi-clock-history"></i><span>  &nbsp; History</span>
        </a>
        <a href="#" class="nav nav-link justify-content-lg-end align-items-center">
            <i class="bi bi-envelope-fill"></i><span> &nbsp; Public Message</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-3 mb-3 border-bottom my-12 auto-nav" style="overflow-y:hidden;">
        <span class="card-title" style="padding:30px;"><a href="../../" style="text-decoration:none">Admin</a> > <a href="./"style="text-decoration:none"> Users > Students</a></span>
        </div>
    
        <div class="container ">
                
            <div class="row">
      
                <!-- add student -->
                <div class="text-end mx-5 flex-row d-flex flex-end justify-content-end align-item-center studentAdd">
                    <button type="menu" class="btn btn-default" id="iconbttn" data-bs-toggle="modal" data-bs-target="#addStudent-btn"> <i class="bi bi-plus-circle-fill"></i> Add Student</button>
                </div>
       

                <div class="d-flex flex-row p-3">
                    <div>
                        <a href=""><i class="bi bi-box-arrow-in-down downicon"></i><span class="mx-1">Download</span></a>    
                    </div>
                    <div class="flex-row d-flex flex-end justify-content-end align-item-center ms-5 me-0 " id="searchbar">
                        <input type="text" name="" id="search" placeholder="search" class="border">
                        <i class="bi bi-search" id="search_icon"></i>
                    </div>
                </div>

                <!-- modal form -->
                <div class="modal fade " id="addStudent-btn" tabindex="-1" aria-labelledby="studentAdds" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
                        <div class="modal-content">
                            <div class="modal-header text-center border-bottom-0">
                                <h5 class="modal-title text-white" style="margin:1px auto;" id="studentAdd-title">Add Student Details</h5>
                                <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                           <form action="">
                           <div class="modal-body">
                               <div class="input-group d-flex flex-row">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi bi-person-circle" ></i>
                                    </span>
                                    <input type="text" placeholder="Full Name" class="form-control">
                               </div>
                        
                               <div class="input-group d-flex flex-row justify-content-between p-2 text-white">
                                    <label for="gender">Gender</label>
                                    
                                    <div class="flex-row d-flex float-start justify-content-between align-items-center">
                                        <input type="radio" name="gender" value="Male" id="male">
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="flex-row d-flex  float-end" >
                                        <input type="radio" name="gender" value="Female" id="female">
                                        <label for="female">Female</label>
                                    </div>
                               </div>

                                <div class="input-group d-flex flex-row py-2" title="Parent's or Guardian's phone number">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi bi-telephone-fill"></i>
                                    </span>    
                                    <input class="form-control" type="tel" name="fullname" placeholder="0620000001" id="phone" /> 
                               </div>
                               <div class="input-group d-flex flex-row py-2" title="Parent's or Guardian's Email">
                                    <span class="input-group-text rounded-0"><i class="bi-envelope-fill"></i></span>
                                    <input class="form-control" type="text" name="email" placeholder="Parent's or Guardian's Email" /> 
                               </div>
                               <div class="input-group d-flex flex-row py-2" title="Region">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi-geo-alt-fill"></i>
                                    </span>
                                    <select name="state" id="Region" size="1" class="form-styling form-select">
                                        <option value="" class="text-white" selected="true" disabled >Select Region</option>
                                    </select>
                               </div>

                               <div class="input-group d-flex flex-row py-2" title="District">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi-geo-fill" ></i>
                                    </span>
                                    <select name="district" id="District" size="1" class="form-styling form-select">
                                        <option value="" class="input" selected="selected" selected disabled>Select District</option>
                                    </select>
                               </div>

                               <div class="input-group d-flex flex-row py-2">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi-envelope-open-fill"></i>
                                    </span> 
                                    <input class="form-control" type="text" name="pobox" placeholder="P. O. BOX 1234 Dar es salaam" id="pobox" />
                               </div>
                               <div class="input-group d-flex flex-row py-2">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>
                                    <input class="form-control" type="text" name="password" placeholder="password" /> 
                               </div>
                               <div class="input-group d-flex flex-row py-2">
                                    <span class="input-group-text rounded-0">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>
                                    <input class="form-control" type="text" name="Confirm password" placeholder="confirm password" /> 
                               </div>

                            </div> 
                            
                            <div class="modal-footer border-top-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning text-primary">Save Details</button>
                            </div>
                            
                           </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered text-capitalize ">
                        <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Exp. No</th>
                                <th scope="col">Challange</th>
                                <th scope="col">Project</th>
                                <th scope="col">School</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                <td>01</td>
                                <td>Vedasto Stem</td>
                                <td>STEM/0001</td>
                                <td>03</td>
                                <td>06</td>
                                <td>18</td>
                                <td>Kizota</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>02</td>
                                <td>Rachel Mussa</td>
                                <td>STEM/0002</td>
                                <td>10</td>
                                <td>13</td>
                                <td>03</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>03</td>
                                <td>Ombeni Ally</td>
                                <td>STEM/0003</td>
                                <td>07</td>
                                <td>31</td>
                                <td>19</td>
                                <td>Jamhuri</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>04</td>
                                <td>Asimwe Mwinyi</td>
                                <td>STEM/0004</td>
                                <td>34</td>
                                <td>24</td>
                                <td>02</td>
                                <td>Jamhuri</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>05</td>
                                <td>Silvio Travel</td>
                                <td>STEM/0005</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Kizota</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>06</td>
                                <td>Silvio Travel</td>
                                <td>STEM/0006</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>07</td>
                                <td>Silvio Travel</td>
                                <td>STEM/0007</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>08</td>
                                <td>Paul Cavain</td>
                                <td>STEM/0008</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Kizota</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>09</td>
                                <td>Sudo Su</td>
                                <td>STEM/0009</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Jamhuri</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>10</td>
                                <td>Abdallah Mtani</td>
                                <td>STEM/0010</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>11</td>
                                <td>Athumani Mtani</td>
                                <td>STEM/0011</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>12</td>
                                <td>Aziza Mtani</td>
                                <td>STEM/0012</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>13</td>
                                <td>Abdallah Mtani</td>
                                <td>STEM/0013</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Jamhuri</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>14</td>
                                <td>Abdallah Mtani</td>
                                <td>STEM/0014</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Uhuru</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>15</td>
                                <td>Jonathan Mtani</td>
                                <td>STEM/0015</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Kizota</td>
                                <td></td>
                                </tr>

                                <tr>
                                <td>16</td>
                                <td>Jozzie Bryan</td>
                                <td>STEM/0016</td>
                                <td>07</td>
                                <td>11</td>
                                <td>22</td>
                                <td>Jamhuri</td>
                                <td></td>
                                </tr>
                                
                            </tbody>
                    </table>

                    <div class="text-end">
                        <button class="btn btn-default text-white" style="background: #13335b">Save</button>
                    </div>
                    <div class="pagenationfull p-2 d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                    
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only"></span>
                                    </a>
                                </li>

                                <li class="page-item active"><a class="page-link" style="background: #13335b" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
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



<footer class="container-fluid relative-bottom footer text-center">
    <p class="text-center medium text-white alert-dismissible ">&copy;CapitalSpace2021</p>
    <p class="text-center medium text-white alert-dismissible text-large">V 1.0</p>
</footer>

<script src="./../../../../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="../../../../assets/js/region&districtTz.js"></script>
<!-- <script src="../../assets/js/Chart.js"></script>
<script src="../../assets/js/adminChart.js"></script>
</body> -->
</html>


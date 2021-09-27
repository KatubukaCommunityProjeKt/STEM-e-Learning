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

        <a href="../../Dashboard" class="nav nav-link ">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span>  &nbsp; Users</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0">     
                    <ul class="ulist" id="ulisOne">
                        <li class="ulist">
                            <a href="../students/index.php" class="nav nav-link flex-row d-flex"style="margin-left:-18px;">
                                <i class="bi bi-binoculars-fill"></i>
                                <span>&nbsp;Student</span>
                            </a>
                        </li>

                        <li>
                            <a href="../teachers/index.php" class="nav nav-link " id="tech" style="margin-left:-18px;">
                                <i class="bi bi-people-fill" ></i>
                                <span>&nbsp;Teacher</span>
                            </a>
                        </li>

                        <li>
                            <a href="../instructors/index.php" class="nav nav-link " id="tech" style="margin-left:-18px;">
                                <i class="bi bi-person-plus-fill" ></i>
                                <span>&nbsp;Instructor</span>
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
        <a href="../public message" class="nav nav-link active justify-content-lg-end align-items-center">
            <i class="bi bi-envelope-fill"></i><span> &nbsp; Public Message</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-3 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Admin > Users > Public Message</span>
        </div>
    
        <!-- <div class="container ">
                
            <div class="row"> -->
      
            
                <!-- tables -->
                <!-- <div class="table-responsive p-4">
                    <table class="table table-striped table-sm table-bordered text-capitalize ">
                        
                    </table>

                    <div class="text-end">
                        <button class="btn btn-default  savebttn">Save</button>
                    </div>
                    

                    

                </div>
            </div>
        </div>         -->

        <div class="container ">
                
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body message">
                            <form action="" class="card border-0 ">
                                <div class="form-group">
                                   <div class="input-group">
                                        <span class="input-group-text rounded-0">To :</span>
                                        <select name="users" id="" class="form-select border-bottom-0 rounded-0">
                                            <option value="" disabled selected >Choose respondent</option>
                                            <option value="all" class="form-control">All (Students, Teachers & Instructors)</option>
                                            <option value="student" class="form-control">Students</option>
                                            <option value="teacher" class="form-control">Teachers</option>
                                            <option value="instructor" class="form-control">Instructors</option>
                                        </select>
                                   </div>
                                   <div class="input-group">
                                       <span class="input-group-text rounded-0">Title : </span>
                                       <input type="text" class="form-control rounded-0 border-bottom-0" name="" placeholder="Conditions for system usage">
                                    </div>
                                    <textarea name="" class="form-control rounded-0 h-100" cols="100" rows="10" placeholder="Text Message" ></textarea>

                                </div>
                               <div class="d-flex justify-content-end py-3 button">
                                <button type="submit" class="btn btn-info  py-2 d-flex justify-content-center text-center text-white mybtn">Send &nbsp;<i class="bi bi-cursor-fill text-white"></i></button>
                               </div>
                            </form>
                        </div>
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



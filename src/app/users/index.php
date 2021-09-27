<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- dashboard -->
    <!-- bootstrap css 5 -->
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-5.0.2-dist/icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
      <!-- Custom styles for this template -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet"> -->



    
</head>
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    .form{
        background:rgb(19, 51, 91,0.7) !important;
    }
    form span,form input,select{
        background:rgb(19, 51, 91,0.8) !important;
        color:#fff;
    }
    form span>i{
        color:#ccc111;
    }
    select:active,select{
        color: #fff;
        border:1px solid rgb(19,25,91,0.6);
        box-shadow: none;
    }
  </style>


<body>
    <nav class="header navbar fixed-top navbar-expand-sm navbar-light mb-3 flex-row d-flex">
        <div class="container-fluid head" >
        <div class="flex-start  text-white" id="side1">
        <input type="checkbox" id="check1">
            <label for="check1">
                <i class="bi bi-list" ></i>
            </label>
        </div>
            <a href="./../../" title="Admin panel" class="nav-brand text-warning" style="margin-left: 49px;">
                <h3>STEM E-Learning</h3>
            </a>
            <span class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </span>

                <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="./../../">
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
                    <a href="./" class="nav-link text-white" title="Account">
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

        <a href="./../Dashboard" class="nav nav-link">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="" class="nav nav-link  collapsed " data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span>  &nbsp; Class</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0 ">

                        <a href="./../Classes/Science" class="nav nav-link flex-row d-flex"style="margin-left:-18px;">
                            <i class="bi bi-binoculars-fill"></i>
                            <span>&nbsp;Science</span>
                        </a>
                        <a href="./../Classes/Technology" class="nav nav-link " id="tech" style="margin-left:-18px;">
                            <i class="bi bi-laptop" ></i>
                            <span>&nbsp;Technology</span>
                        </a>
                       

                    </div>
                </div>
            </a>

        </div>
        <a href="./../Last_Activity" class="nav nav-link">
            <i class="bi bi-stopwatch"></i><span>  &nbsp; Last Activity</span>
        </a>
       
        <a href="./../Forum" class="nav nav-link d-flex flex-row">
            <i class="bi bi-chat-right-fill"></i>
            
            <span>  &nbsp; forum</span>
        </a>
        <a href="./../Library" class="nav nav-link">
            <i class="bi bi-collection-fill"></i><span>  &nbsp; Library</span>
        </a>
        <a href="./" class="nav nav-link justify-content-lg-end align-items-center active">
            <i class="bi bi-person-circle"></i><span> &nbsp; Account</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-2 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Account>Profile</span>
        </div>

        <!-- 12378 -->

        <div class="container rounded bg-white mt-1 mb-2">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-2">
                        <img alt="user profile image" class="rounded-circle mt-5" width="150px" height="150px" src="./../../assets/images/user3.jpg" >
                        <span class='font-weight-bolder'>STEM/2021/0012</span>
                        <span class="font-weight-bold">Richard Edogan</span>
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <span class="text-black-50 pe-0">0621234256</span>
                            <i class="bi bi-pencil-fill ps-2 text-black-50"></i>
                        </div>  
                        <div class="d-flex flex-row justify-content-center align-items-center p-0 m-0">
                            <span class="text-black-50">edogan@yahoo.com</span>
                            <i class="bi bi-pencil-fill ps-2 text-black-50"></i>
                        </div>
                        
                        <span class="text-black-50">Title: Student</span>  
                        
                        <div class="some text-black">
                            Your highiest score <strong>61%</strong>
                        </div>
                                                    
                    </div>   
                </div>

                <div class="card rounded col-md-5 border-right mt-4 pt-2 h-75 form">
                    <div class="p-3 py-3">
                        <div class="d-flex justify-content-center align-items-center mb-3 ms-4">
                            <h4 class="text-center text-warning">Profile settings</h4>
                        </div>
                            <form action="">
                                <div class="row mt-2">
                                    <div class="col-md-6 input-group">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi bi-person-circle" ></i>
                                        </span>
                                        <input type="text" class="form-control border-0 text-white" name="fullname" placeholder=" full name">
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi bi-telephone-fill"></i>
                                        </span> 
                                        <input type="tel" class="form-control border-0 text-white" name="form" placeholder="0621234256">
                                    </div>
                                    <div class="col-md-12 mt-2 input-group">
                                        <span class="input-group-text rounded-0 border-0"><i class="bi-envelope-fill"></i></span>
                                        <input class="form-control border-0 text-white" type="text" name="email" placeholder="Email" /> 
                                    </div>
                                    <div class="col-md-12 mt-2 input-group">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi-geo-alt-fill"></i>
                                        </span>
                                        <select name="state" id="Region" size="1" class="form-styling form-select border-0 text-white" name="region">
                                            <option value="" class="text-white" selected="true" disabled >Select Region</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2 input-group">
                                        <span class="input-group-text rounded-0 border-0"><i class="bi-geo-alt-fill"></i></span>
                                        <select name="District" id="District" size="1" class="form-styling form-select border-0 text-white" name="district">
                                            <option value="" class="text-white" selected="true" disabled >Select District</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 input-group mt-2">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi-envelope-open-fill"></i>
                                        </span> 
                                        <input class="form-control border-0 text-white" type="text" name="pobox" placeholder="P. O. BOX 1234 Dar es salaam" id="pobox" />
                                    </div>

                                    <div class="col-md-12 input-group mt-2">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input class="form-control border-0 text-white" type="password" name="password" placeholder="password" /> 
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 input-group mb-2">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input type="password" class="form-control border-0 text-white" placeholder="Enter New Password">
                                    </div>
                                    <div class="col-md-6 input-group">
                                        <span class="input-group-text rounded-0 border-0">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input type="password" class="form-control border-0 text-white" placeholder=" Confirm Password">
                                    </div>
                                </div>

                                <div class="mt-5 text-center">
                                    <button class="btn btn-warning text-white profile-button " type="submit"><strong>Save Changes</strong></button>
                                </div>

                            </form>
                    </div>
                </div>

                <div class="col-md-4 border-right mt-3 pt-2" >
                    <!-- card 1 -->
                    <div class="col-md-12 col-lg-4   accordion accordion-flush" id="one">
                        <div class="card-box alert alert-primary  ">
                            <div class="card-title d-flex flex-row p-0 m-0 justify-content-center align-items-center accordion-header">
                                <span class="ps-2 accordion-button collapsed bg-light" data-bs-toggle="collapse" data-bs-target="#experiment" aria-expanded="false" aria-controls="experiment"><h2 class="text-center text-dark card-title border-bottom-0">Experiments</h2></span>
                            </div>
                            <div id="experiment" class="accordion-collapse collapse" aria-labelledby="experiment" data-bs-parent="#one">
                                <div class="card-body accordion-body " >
                                    <p>
                                        <h4 class="card-subtitle text-center">
                                                        Your Performance
                                        </h4>
                                        <ul class="list-group card-text " style="text-align:justify;">
                                            <li class="list-group-item border-0"><strong>won</strong>&nbsp;16</li>
                                            <li class="list-group-item border-0 "><strong>failed</strong>&nbsp;8</li>
                                            <li class="list-group-item border-0"><strong>Total</strong>&nbsp;&equals;&nbsp;24</li>
                                        </ul>
                                    </p>         
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- card 1 -->
                    <div class="col-md-12 col-lg-4  accordion accordion-flush" id="one">
                        <div class="card-box alert alert-primary  ">
                            <div class="card-title d-flex flex-row p-0 m-0 justify-content-center align-items-center accordion-header">
                                <span class="ps-2 accordion-button collapsed bg-light" data-bs-toggle="collapse" data-bs-target="#challange" aria-expanded="false" aria-controls="challange"><h2 class="text-center text-dark card-title border-bottom-0 pe-4">Challanges</h2></span>
                            </div>
                            <div id="challange" class="accordion-collapse collapse" aria-labelledby="challange" data-bs-parent="#one">
                                <div class="card-body accordion-body " >
                                    <p>
                                        <h4 class="card-subtitle text-center">
                                                        Your Performance
                                        </h4>
                                        <ul class="list-group card-text " style="text-align:justify;">
                                            <li class="list-group-item border-0"><strong>won</strong>&nbsp;10</li>
                                            <li class="list-group-item border-0 "><strong>failed</strong>&nbsp;4</li>
                                            <li class="list-group-item border-0"><strong>Total</strong>&nbsp;&equals;&nbsp;14</li>
                                        </ul>
                                    </p>         
                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="col-md-12 col-lg-4  accordion accordion-flush" id="one">
                        <div class="card-box alert alert-primary  ">
                            <div class="card-title d-flex flex-row p-0 m-0 justify-content-center align-items-center accordion-header">
                                <span class="ps-2 accordion-button collapsed bg-light" data-bs-toggle="collapse" data-bs-target="#project" aria-expanded="false" aria-controls="project"><h2 class="text-center text-dark card-title border-bottom-0 pe-lg-5 ps-lg-4">Projects</h2></span>
                            </div>
                            <div id="project" class="accordion-collapse collapse" aria-labelledby="project" data-bs-parent="#one">
                                <div class="card-body accordion-body " >
                                    <p>
                                        <h4 class="card-subtitle text-center">
                                                        Project recorded
                                        </h4>
                                        <ul class="list-group card-text  text-center">
                                            <li class="list-group-item border-0"><strong>Submitted :</strong>&nbsp;15</li>
                                            <li class="list-group-item border-0 "><strong>Not Submitted :</strong>&nbsp;4</li>
                                            <li class="list-group-item border-0"><strong>Total</strong>&nbsp;&equals;&nbsp;19</li>
                                        </ul>
                                    </p>         
                                </div>
                            </div>
                        </div> 
                    </div>

                </div>


                
            </div>
        </div>
  
        <!-- 2378 -->
        <!-- <div class="card card-img page-header header-filter" data-parallax="true" style="background:url('./../../assets/images/user6.jpg') no-repeat center; height:140px"></div>
        <div class="main main-raised">
            <div class="profile-content">
                <div class="container">
                    <div class="row">
                        <center>
                        <div class="col-md-6 m-auto justify-content-center align-items-center">
                            <div class="profile">
                                <div class="avatar img"><img src="./../../assets/images/user2.jpg" alt="circle image" class="img-raised rounded-circle img-fluid"></div>
                                <div class="name">
                                    <h3 class="title">Christopher Putin</h3>
                                    <h6 class="text ">Student</h6>
                                    <a href="" class="btn btn-just-icon btn-link btn-dribble"><i class="bi bi-twitter"></i></a>
                                    <a href="" class="btn btn-just-icon btn-link btn-dribble text-danger"><i class="bi bi-google"></i></a>
                                    <a href="" class="btn btn-just-icon btn-link btn-dribble"><i class="bi bi-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                        </center>
                    </div>

                    <div class="descrption text-center">
                        <p>Lorem Ipsum is erdores moret dtahy matakspodze szelewky kovax murtedx domentinius</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a href="" class="nav-link" role="tab" data-toggle="tab">
                                            <i class="bi bi-camera"></i> Studio
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" role="tab" data-toggle="tab">
                                            <i class="bi bi-heart"></i> Studio
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" role="tab" data-toggle="tab">
                                            <i class="bi bi-palette"></i> Studio
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link" role="tab" data-toggle="tab">
                                            <i class="bi bi-gear"></i> Studio
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content tab-space">
                        <div class="tab-pane active text-center gallery" id="studio">
                            <div class="row">
                                <div class="col-md-3 ms-auto">
                                    <img src="./../../assets/images/user2.jpg" alt="user" class="rounded">
                                    <img src="./../../assets/images/user2.jpg" alt="user" class="rounded">
                                </div>
                                <div class="col-md-3 me-auto">
                                    <img src="./../../assets/images/user2.jpg" alt="user" class="rounded">
                                    <img src="./../../assets/images/user2.jpg" alt="user" class="rounded">
                                </div>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>
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

<script src="./../../assets/css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="./../../assets/js/region&districtTz.js"></script>



</boody>
</html>

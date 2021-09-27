<?php
include_once "../../assets/PHP/header.php";
?>

<link rel="stylesheet" href="../../assets/css/forum.css">
</head>

<body>
    <nav class="header navbar fixed-top navbar-expand-sm navbar-light mb-3 flex-row d-flex">
        <div class="container-fluid head" >
        <!-- <div class="flex-start  text-white" id="side1">
        <input type="checkbox" id="check1">
            <label for="check1">
                <i class="bi bi-list" ></i>
            </label>
        </div> -->
            <a href="../../"  class="nav-brand text-warning" style="margin-left: 49px;">
                <h3>STEM E-Learning</h3>
            </a>
            <span class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </span>

                <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="../../">
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
                    <a href="./../users" class="nav-link text-white" title="Account">
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

        <a href="../Dashboard" class="nav nav-link">
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
                        <a href="../Classes/Science" class="nav nav-link flex-row d-flex"style="margin-left:-18px;">
                            <i class="bi bi-binoculars-fill"></i>
                            <span>&nbsp;Science</span>
                        </a>
                        <a href="../Classes/Technology" class="nav nav-link " id="tech" style="margin-left:-18px;">
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
       
        <a href="" class="nav nav-link d-flex flex-row active">
            <i class="bi bi-chat-right-fill"></i>
            
            <span>  &nbsp; forum</span>
        </a>
        <a href="#" class="nav nav-link">
            <i class="bi bi-collection-fill"></i><span>  &nbsp; Library</span>
        </a>
        <a href="./../users" class="nav nav-link justify-content-lg-end align-items-center ">
            <i class="bi bi-person-circle"></i><span> &nbsp; Account</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-2 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Forum</span>
        </div>
        <main class="container">
            <div class="chat-box">

                    <!-- outgoing -->
                <div class="outgoing-chat d-flex flex-row text-align-center justify-content-center align-items-center">
                    <div class="chat outgoing d-flex flex-column p-3 ms-xxl-auto">
                        <div class="userprofile d-flex flex-row text-align-center justify-content-start ms-3 align-items-center">
                            <img src="../../assets/images/user1.jpg"class="rounded-circle me-4">
                            <span class="image-text ">Username</span>
                        </div>
                        <div class="datails text-break border-bottom">
                            <p>Hello! dudes I want to learn web based language but i don't know what is HTML?</p>
                        </div>
                        <div class="reply d-flex flex-row text-align-center justify-content-around align-items-center">
                            <span class="btn fw-bold">Reply</span>
                            <span Class="text-warning">Time</span>
                        </div>
                    </div>
                </div>
                        <!-- outgoing end -->

                        <!-- incoming -->
                <div class="incoming-chat d-flex flex-row text-align-center justify-content-center align-items-center me-xxl-auto">
                    <div class="chat incoming d-flex flex-column  px-4 py-3 w-100 ">
                        <div class="useranswer d-flex flex-row text-align-center justify-content-center align-items-center">
                                <div class="datails text-break ">
                                    <p>Hello! dudes I want to learn web based language but i don't know what is HTML?</p>
                                </div>
                            <div class="userprofile d-flex flex-row text-align-center justify-content-end align-items-center">
                                <span class="image-text ms-2 ">Username</span>
                                <img src="../../assets/images/user4.jpg"class="rounded-circle ms-3"> 
                            </div>
                        </div>
                    
                        <div class="datails text-break border-bottom ">
                            <p>Project Structure
                                After downloading, extract the files into the directory where your website is located. Your directory will look something like this.
                            </p>
                        </div>
                        <div class="reply d-flex flex-row align-items-center justify-content-around">
                            <span Class="text-warning">Time</span>
                            <span class="btn  fw-bold">Reply</span>
                        </div>
                    </div>

                    <div class="reactions  d-flex flex-column text-align-center justify-content-center align-items-center">
                        <div class="upper_rate d-flex flex-row justify-content-center align-items-center">
                            <i class="bi bi-caret-up-fill btn"></i>
                            <dd>100</dd>
                        </div>
                        <div class="row_rate d-flex flex-row justify-content-center align-items-center">
                            <i class="bi bi-caret-down-fill btn"></i>
                            <dd>100</dd>
                        </div>
                    </div>
                </div>
            
                    <!-- incoming end -->

                    <!-- outgoing -->
                <div class="outgoing-chat d-flex flex-row text-align-center justify-content-center align-items-center">
                    <div class="chat outgoing d-flex flex-column p-3 ms-xxl-auto">
                        <div class="userprofile d-flex flex-row text-align-center justify-content-start ms-3 align-items-center">
                            <img src="../../assets/images/user1.jpg"class="rounded-circle me-4">
                            <span class="image-text ">Username</span>
                        </div>
                        <div class="datails text-break border-bottom">
                            <p>Hello! dudes I want to learn web based language but i don't know what is HTML?</p>
                        </div>
                        <div class="reply d-flex flex-row text-align-center justify-content-around align-items-center">
                            <span class="btn fw-bold">Reply</span>
                            <span Class="text-warning">Time</span>
                        </div>
                    </div>
                </div>
                        <!-- outgoing end -->

                        <!-- incoming -->
                <div class="incoming-chat d-flex flex-row text-align-center justify-content-center align-items-center me-xxl-auto">
                    <div class="chat incoming d-flex flex-column px-4 py-3 w-100 ">
                        <div class="useranswer d-flex flex-row text-align-center justify-content-center align-items-center">
                                <div class="datails text-break ">
                                    <p>Hello! dudes I want to learn web based language but i don't know what is HTML?</p>
                                </div>
                            <div class="userprofile d-flex flex-row text-align-center justify-content-end align-items-center">
                                <span class="image-text ms-2 ">Username</span>
                                <img src="../../assets/images/user4.jpg"class="rounded-circle ms-3"> 
                            </div>
                        </div>
                    
                        <div class="datails text-break border-bottom">
                            <p>Project Structure
                                After downloading, extract the files into the directory where your website is located. Your directory will look something like this.
                            </p>
                        </div>
                        <div class="reply d-flex flex-row align-items-center justify-content-around">
                            <span Class="text-warning">Time</span>
                            <span class="btn  fw-bold">Reply</span>
                        </div>
                    </div>

                    <div class="reactions  d-flex flex-column text-align-center justify-content-center align-items-center">
                        <div class="upper_rate d-flex flex-row justify-content-center align-items-center">
                            <i class="bi bi-caret-up-fill btn"></i>
                            <dd>100</dd>
                        </div>
                        <div class="row_rate d-flex flex-row justify-content-center align-items-center">
                            <i class="bi bi-caret-down-fill btn"></i>
                            <dd>100</dd>
                        </div>
                    </div>
                </div>
            
                    <!-- incoming end -->

                    <!-- outgoing -->
                <div class="outgoing-chat d-flex flex-row text-align-center justify-content-center align-items-center">
                    <div class="chat outgoing d-flex flex-column p-3 ms-xxl-auto">
                        <div class="userprofile d-flex flex-row text-align-center justify-content-start ms-3 align-items-center">
                            <img src="../../assets/images/user1.jpg"class="rounded-circle me-4">
                            <span class="image-text ">Username</span>
                        </div>
                        <div class="datails text-break border-bottom">
                            <p>Hello! dudes I want to learn web based language but i don't know what is HTML?</p>
                        </div>
                        <div class="reply d-flex flex-row text-align-center justify-content-around align-items-center">
                            <span class="btn fw-bold">Reply</span>
                            <span Class="text-warning">Time</span>
                        </div>
                    </div>
                </div>
                        <!-- outgoing end -->

                        <!-- incoming -->
                <div class="incoming-chat d-flex flex-row text-align-center justify-content-center align-items-center me-xxl-auto">
                    <div class="chat incoming d-flex flex-column px-4 py-3 w-100 ">
                        <div class="useranswer d-flex flex-row text-align-center justify-content-center align-items-center">
                                <div class="datails text-break ">
                                    <p>Hello! dudes I want to learn web based language but i don't know what is HTML?</p>
                                </div>
                            <div class="userprofile d-flex flex-row text-align-center justify-content-end align-items-center">
                                <span class="image-text ms-2 ">Username</span>
                                <img src="../../assets/images/user4.jpg"class="rounded-circle ms-3"> 
                            </div>
                        </div>
                    
                        <div class="datails text-break border-bottom">
                            <p>Project Structure
                                After downloading, extract the files into the directory where your website is located. Your directory will look something like this.
                            </p>
                        </div>
                        <div class="reply d-flex flex-row align-items-center justify-content-around">
                            <span Class="text-warning">Time</span>
                            <span class="btn  fw-bold">Reply</span>
                        </div>
                    </div>

                    <div class="reactions  d-flex flex-column text-align-center justify-content-center align-items-center">
                        <div class="upper_rate d-flex flex-row justify-content-center align-items-center">
                            <i class="bi bi-caret-up-fill btn"></i>
                            <dd>100</dd>
                        </div>
                        <div class="row_rate d-flex flex-row justify-content-center align-items-center">
                            <i class="bi bi-caret-down-fill btn"></i>
                            <dd>100</dd>
                        </div>
                    </div>
                </div>
            
                    <!-- incoming end -->
            </div>

            <form action="" method="post" class="tyipng-area ">
                <input type="file" name="" id="fileAttach" hidden>
                <textarea name="" class="form" id="" placeholder="ask Question ..."></textarea>
                    
                <label for="fileAttach">
                        <i class="bi bi-paperclip"></i>
                </label>
                <button><i class="bi bi-cursor-fill text-primary"></i></button>
            </form>
        </main>

        </div>        
    </div>


<?php
    include_once("../../assets/PHP/footer.php");
?>

<template>
    <div id="main">
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                    <div class="sidebar-header">
                        <!-- <h3><a href=""><img src="img/favicon.gif" alt="">&nbsp;BobongMD</a></h3> -->
                        <a href=""><img src="img/bobongmd-icon-no-bg.png" width="200px" alt=""></a>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <img src="img/dp.png" class="img-circle" alt="">
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <p class="text-white"><i>"Not a dumb doctor" <br>- Bobong Tagayuna, MD</i></p>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-home"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Register
                            </a>

                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                Leave a Message
                            </a>

                            <div class="line"></div>

                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <i class="fa fa-copy"></i>
                                Pages
                            </a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="http://lifecoach.bobongmd.com/" target="_blank">
                                        <i class="fa fa-heartbeat"></i>&nbsp;
                                        Bobong tagayuna - Life Coach</a>
                                </li>
                                <li>
                                    <a href="http://vote.bobongmd.com/" target="_blank"><i class="fa fa-check-square">
                                        </i>&nbsp;Voting & Canvassing System</a>
                                </li>
                                <li>
                                    <a href="https://psp.com.ph/" target="_blank">
                                        <i class="fa fa-stethoscope"></i>&nbsp;
                                        Philippine Society of Pathologist, Inc.</a>
                                </li>
                            </ul>

                            
                        </li>
                    </ul>
                    
            </nav> <!-- nav -->

            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fa fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>&nbsp;Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-user"></i>&nbsp;Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-key"></i>&nbsp;Login</a>
                                </li>
                            </ul>

                           
                        </div> <!-- end collapse -->
                    </div> <!-- end container-fluid -->
                </nav>
                <!-- content -->
                <router-view></router-view>  

            </div><!-- end content -->
        </div> <!-- end wrapper -->
    </div> <!-- end main -->
</template>

<script>
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');  
    });
});
</script>

<style scoped>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 350px;
    max-width: 350px;
    background: #a1bf7c;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    /* margin-left: -250px; */
    min-width: 80px;
    max-width: 80px;
    text-align: center;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #a1bf7c;
    color: #333;
    text-align: center;
}

#sidebar.active .sidebar-header h3 {
    display: none;
}

/* Same dropdown links padding*/
#sidebar.active ul ul a {
    padding: 10px !important;
}

#sidebar.active .dropdown-toggle::after {
    top: auto;
    bottom: 10px;
    right: 50%;
    -webkit-transform: translateX(50%);
    -ms-transform: translateX(50%);
    transform: translateX(50%);
}

#sidebar ul.components {
    padding: 20px 0;
    /* border-bottom: 1px solid #4e8f00; */
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a {
    text-align: left;
}

#sidebar.active ul li a {
    padding: 20px 10px;
    text-align: center;
    font-size: 0.85em;
    
}

#sidebar.active ul li a i {
    margin-right:  0;
    display: block;
    font-size: 1.8em;
    margin-bottom: 5px;
    
}

#sidebar ul li a:hover {
    color: #333;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #b2d18c;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #bbd49d;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}

/* ---------------------------------------------------
    CIRCLE IMAGE
----------------------------------------------------- */
#sidebar.active a img {
    display: none;
}
#sidebar.active .img-circle {
    display: none;
}
#sidebar.active p {
    display: none;
}

.img-circle {
    width:180px;
    height:180px;
    background-size:cover;
    background-position:center;
    border-radius:50%;
}
</style>
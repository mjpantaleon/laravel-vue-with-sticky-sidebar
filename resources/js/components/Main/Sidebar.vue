<template>
    <nav id="sidebar">
            <!-- LOGO -->
            <div class="sidebar-header">
                <a href=""><img src="img/bobongmd-icon-no-bg.png" width="200px" alt=""></a>
            </div>
            <!-- PROFILE PICTURE -->
            <div class="row justify-content-center align-items-center">
                <img src="img/dp.png" class="img-circle" alt="">
            </div>
            <!-- OPENING REMARKS -->
            <div class="row justify-content-center align-items-center">
                <blockquote class="blockquote">
                    <p class="mb-0 text-white">"Not a dumb doctor"</p>
                    <footer class="blockquote-footer text-white"><cite title="Source Title">Bobong Tagayuna, MD</cite></footer>
                </blockquote>
            </div>

            <!-- NAVIGATIONS -->
            <ul class="list-unstyled components">
                <li class="active">
                    <router-link :to="{ name: 'home' }">
                        <i class="fa fa-home"></i>
                        Home
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'register'}">
                        <i class="fa fa-user-plus"></i>
                        Register
                    </router-link>

                    <router-link :to="{ name: 'message'}">
                        <i class="fa fa-envelope"></i>
                        Leave a Message
                    </router-link>

                    <router-link :to="{ name: 'news' }">
                        <i class="fa fa-info-circle"></i>
                        News & Updates
                    </router-link>

                    <router-link :to="{ name: 'terms-and-conditions' }">
                        <i class="fa fa-user-secret"></i>
                        Terms & Conditions
                    </router-link>

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
                        <!-- <li>
                            <a href="http://vote.bobongmd.com/" target="_blank"><i class="fa fa-check-square">
                                </i>&nbsp;Voting & Canvassing System</a>
                        </li> -->
                        <li>
                            <a href="https://psp.com.ph/" target="_blank">
                                <i class="fa fa-stethoscope"></i>&nbsp;
                                Philippine Society of Pathologist, Inc.</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- NAVIGATIONS -->
            
    </nav> <!-- nav -->
</template>

<script>

</script>

<style scoped>
/* @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"; */
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

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}
/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

#sidebar {
    min-width: 450px;
    max-width: 450px;
    background: #a1bf7c;
    color: #fff;
    transition: all 0.3s;
    
}

#sidebar.active {
    /* margin-left: -250px; */
    min-width: 100px;
    max-width: 100px;
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
    position: sticky;
    position: -webkit-sticky;
    top: 0;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
    
}

#sidebar ul li a {
    padding:  10px 25px;
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
    CIRCLE IMAGE
----------------------------------------------------- */
#sidebar.active a img {
    display: none;
}
#sidebar.active .img-circle {
    display: none;
}
#sidebar.active blockquote {
    display: none;
}

.img-circle {
    width:240px;
    height:240px;
    background-size:cover;
    background-position:center;
    border-radius:50%;
}
</style>
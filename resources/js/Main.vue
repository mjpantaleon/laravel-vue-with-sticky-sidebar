<template>
    <div id="main">
        <div class="wrapper">
            <!-- Sidebar  -->
            <Sidebar />

            <!-- Page Content  -->
            <div id="content">
                <!-- Topbar -->
                <Topbar />
                <!-- content -->
                <router-view></router-view>  

            </div><!-- end content -->
        </div> <!-- end wrapper -->
    </div> <!-- end main -->
</template>

<script>
import Sidebar from './components/Main/Sidebar.vue';
import Topbar from './components/Main/Topbar.vue';

export default {
    components: {Sidebar, Topbar},
}


$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');  
    });
});
</script>

<style scoped>
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

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    
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

</style>
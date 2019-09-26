<template>
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
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'home' }"><i class="fa fa-home"></i>&nbsp;Home</router-link>
                    </li>
                    <!-- <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'register' }"><i class="fa fa-user-plus"></i>&nbsp;Register</router-link>
                    </li> -->
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'message' }"><i class="fa fa-envelope"></i>&nbsp;Leave a Message</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'news' }"><i class="fa fa-info-circle"></i>&nbsp;News & Updates</router-link>
                    </li>
                    <!-- <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'login' }"><i class="fa fa-key"></i>&nbsp;Login</router-link>
                    </li> -->
                </ul>

                
            </div> <!-- end collapse -->
        </div> <!-- end container-fluid -->
    </nav>

</template>

<style scoped>
.navbar {
    position: sticky;
    position: -webkit-sticky;
    top: 0;
}

</style>
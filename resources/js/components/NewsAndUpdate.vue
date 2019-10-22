<template>
    <div>
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-info-circle"></i>&nbsp;News & Updates</li>
        </ol>

        <div class="jumbotron">
            <h1 class="display-4">
                <i class="fa fa-info-circle"></i>&nbsp;Notice</h1>
            <div class="line"></div>
            
            <p class="lead">Some features of the site is currently under construction. For questions or inquiries kindly leave a message.</p>
            <router-link class="btn btn-primary btn-lg" :to="{ name: 'message' }" role="button">
                <i class="fa fa-envelope"></i>&nbsp;
                Leave a Message</router-link>
        </div>

        <div class="jumbotron">
            <h1 class="display-4">
                <i class="fa fa-user-plus"></i>&nbsp;Register</h1>
            <div class="line"></div>
            <p class="lead">I encourage all new comers, friends, specially my students to register to gain access to the exclusive contents of this site.
                <br>Please be advised that the all user registry is subjected for approval. </p>
            <router-link class="btn btn-primary btn-lg" :to="{ name: 'register' }" role="button">
                <i class="fa fa-user-plus"></i>&nbsp;
                Register as User</router-link>
        </div>
    </div>
</template>

<style scoped>
.jumbotron {
  /* border: 1px solid rgb(216, 209, 197); */
  /* background: #F8F5F0; */
  background: transparent;
  width: 75%;
}
.jumbotron p {
     width: 100%;
}
.line {
  width: relative;
  height: 1px;
  border-bottom: 1px dashed #ddd;
  margin: 40px 0;
}
</style>

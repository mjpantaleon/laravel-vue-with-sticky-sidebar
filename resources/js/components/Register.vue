<template>
    <div>
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-user-plus"></i>&nbsp;Register</li>
        </ol>

         <!-- REGISTER DIV -->
        <div class="jumbotron">
            <h1 class="display-4">
                <i class="fa fa-user-plus"></i>&nbsp;Register</h1>
            <div class="line"></div>

            <p class="lead">All fields are required</p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-address-card"></i>&nbsp;
                    </span>
                </div>
                <input type="text" aria-label="First name" class="form-control" placeholder="First Name" v-model="fname" required>
                <input type="text" aria-label="Middle name" class="form-control" placeholder="Middle Initial/ Name" v-model="mname" required>
                <input type="text" aria-label="Last name" class="form-control" placeholder="Last Name" v-model="lname" required>
            </div>

            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-at"></i>&nbsp;
                    </span>
                </div>
                <input type="text" class="form-control col-7" placeholder="sample.email@gmail.com" aria-label="email" aria-describedby="basic-addon1" v-model="email" required>
            </div>
        </div> <!-- end jumbotron -->
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


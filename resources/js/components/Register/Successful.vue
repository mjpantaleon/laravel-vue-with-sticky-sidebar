<template>
  <div>
      <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><router-link :to="{ name: 'register'}"><i class="fa fa-user-plus"></i>&nbsp;Leave a Message</router-link></li>
            <li class="breadcrumb-item active"><i class="fa fa-user-plus"></i>&nbsp;Register Successful</li>
        </ol>

        <div class="jumbotron text-white">
            <h1 class="display-4">
                <i class="fa fa-thumbs-up"></i>&nbsp;Register Successful</h1>
            <div class="line"></div>
            <span class="lead">
              Please be advised that your registration is subjected for approval. 
              <br>A confirmation will be sent to your email once your registration has been approved.
              <br><br>Thank you!
            </span>
        </div>
  </div>
</template>

<script>
export default {
    name : 'register-success'
}
</script>

<style scoped>
.jumbotron {
  /* border: 1px solid rgb(216, 209, 197); */
  /* background: #F8F5F0; */
  background: seagreen;
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
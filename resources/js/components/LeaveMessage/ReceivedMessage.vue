<template>
  <div>
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><router-link :to="{ name: 'message'}"><i class="fa fa-envelope"></i>&nbsp;Leave a Message</router-link></li>
            <li class="breadcrumb-item active"><i class="fa fa-envelope"></i>&nbsp;Message Received</li>
        </ol>

        <div class="jumbotron text-white">
            <h1 class="display-4">
                <i class="fa fa-thumbs-up"></i>&nbsp;Message Received</h1>
            <div class="line"></div>
            <span class="lead">I'll get back to you as soon as possible. <br>Thank you!</span>
        </div>
  </div>
</template>

<script>
export default {
    name : 'received-message',
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
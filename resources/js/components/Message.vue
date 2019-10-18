<template>
    <div>
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-envelope"></i>&nbsp;Leave a Message</li>
        </ol>

        <!-- MESSAGE DIV -->
        <form method="POST" action="">

        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        <div class="jumbotron">
            <h1 class="display-4">
                <i class="fa fa-envelope"></i>&nbsp;Leave a Message</h1>
            <div class="line"></div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-at"></i>&nbsp;
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="sample_email@gmail.com" aria-label="email" aria-describedby="basic-addon1" required>
            </div>

            <div class="form-group">
                <label for="exampleTextarea">&nbsp;</label>
                <textarea class="form-control" id="exampleTextarea" rows="10" placeholder="Input your message here..." required></textarea>
            </div>

            <input type="submit" class="btn btn-warning btn-lg" value="SEND MESSAGE">
        </div>
        </form>
        
    </div>
</template>

<script>



</script>  

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


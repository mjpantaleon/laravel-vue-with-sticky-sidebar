<template>
  <div>
        <form @submit.prevent="register">
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
                <input type="text" name="fname" aria-label="First name" class="form-control" placeholder="First Name" v-model="fname" required>
                <input type="text" name="mname" aria-label="Middle name" class="form-control" placeholder="Middle Initial/ Name" v-model="mname" required>
                <input type="text" name="lname" aria-label="Last name" class="form-control" placeholder="Last Name" v-model="lname" required>
            </div>
            <div v-if="errors && errors.fname" class="text-danger"><strong>{{ errors.fname[0] }}</strong></div>
            <div v-if="errors && errors.mname" class="text-danger"><strong>{{ errors.mname[0] }}</strong></div>
            <div v-if="errors && errors.lname" class="text-danger"><strong>{{ errors.lname[0] }}</strong></div>

            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-at"></i>&nbsp;
                    </span>
                </div>
                <input type="email" class="form-control col-7" placeholder="sample.email@gmail.com" aria-label="email" aria-describedby="basic-addon1" v-model="email" required>
            </div>
            <div v-if="errors && errors.email" class="text-danger"><strong>{{ errors.email[0] }}</strong></div>

            <div class="line"></div>
            <p class="lead">Set your Username and Password</p>

            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-user"></i>&nbsp;
                    </span>
                </div>
                <input type="text" class="form-control col-7" placeholder="username" aria-label="username" aria-describedby="basic-addon1" v-model="username" required>
            </div>
            <div v-if="errors && errors.username" class="text-danger"><strong>{{ errors.username[0] }}</strong></div>

            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-key"></i>&nbsp;
                    </span>
                </div>
                <input type="password" class="form-control col-7" placeholder="password" aria-label="password" aria-describedby="basic-addon1" v-model="password" required>
            </div>
            <div v-if="errors && errors.password" class="text-danger"><strong>{{ errors.password[0] }}</strong></div>

            <div class="input-group mt-3">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-user-plus"></i>&nbsp;REGISTER</button>
            </div>
        </div> <!-- end jumbotron -->
        </form>
  </div>
</template>

<script>
export default {
    data(){
        return {
            fname : '',
            mname : '',
            lname : '',
            email : '',
            username : '',
            password : '',
            errors: '',
        }

    },
    methods :{
        register(){
            let { fname, mname, lname, email, username, password, errors } = this

            //dispatch an action call REGISTER
            this.$store.dispatch("REGISTER", {
                fname, mname, lname, email, username, password
            })
            .then(({data}) => {
                 //redirect to register success page
                this.$router.push({ name : 'register-success' })
                
                // // clear fields
                // this.fname = ''
                // this.mname = ''
                // this.lname = ''
                // this.email = ''
                // this.username = ''
                // this.password = ''
                // // console log
                // console.log();
            })
            .catch(errors => {
                this.errors = errors.response.data.errors
                console.log(errors.response.data.errors)
            })
        }
    }

}
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
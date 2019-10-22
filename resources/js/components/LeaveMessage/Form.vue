<template>
  <div>
      <!-- MESSAGE DIV -->
        <form @submit.prevent="leaveMsg">

        <div class="jumbotron">
            <h1 class="display-4">
                <i class="fa fa-envelope"></i>&nbsp;Leave a Message</h1>
            <div class="line"></div>

            <!-- <div class="alert alert-success" v-if="done">
                <i class="fa fa-check"></i>&nbsp;Thank you for your message. I'll get back to a soon as possible.
            </div> -->

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-at"></i>&nbsp;
                    </span>
                </div>
                <input type="email" class="form-control" v-model="email" name="email" id="email" placeholder="sample_email@gmail.com" aria-label="email" aria-describedby="basic-addon1" required>
                <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
            </div>

            <div class="form-group">
                <label for="message">&nbsp;</label>
                <textarea class="form-control" v-model="message" name="message" id="message" rows="10" placeholder="Input your message here..." required></textarea>
                <div v-if="errors && errors.message" class="text-danger">{{ errors.message }}</div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-envelope"></i>&nbsp;SEND MESSAGE</button>
            <!-- <input type="submit" class="btn btn-warning btn-lg" value="SEND MESSAGE"> -->

            <!-- {{welcomeMsg}} -->

            
        </div>
        </form>
  </div>
</template>

<script>
// fetch state in our vuex (store.js)
import { mapState } from 'vuex'; 

export default {
    data(){
        return {
            email : '',
            message : '',
            done : false,
            // fields : {},
            errors : null
        }
    },
    computed : mapState([
        // 'welcomeMsg'
    ]),
    methods: {
        leaveMsg: function() {
            let { email, message, done, errors } = this

            // dispath an action called LEAVE_MESSAGE
            this.$store.dispatch("LEAVE_MESSAGE", {
                email, message
            })
            .then(({data}) => {
                this.$router.push({ name: 'received-message' })
                // this.done = true;
                // this.email = null;
                // this.message = null;
                // console.log();
            })
            .catch(errors => {
                this.errors = errors.response.data

                console.log(errors.response.data)
            })

        },
        // end leaveMsg()
    },
    // end methods
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
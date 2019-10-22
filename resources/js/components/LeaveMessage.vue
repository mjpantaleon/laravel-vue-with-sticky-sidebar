<template>
    <div>
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-envelope"></i>&nbsp;Leave a Message</li>
        </ol>

        <!-- SPIT OUT FORM HERE -->
        <Form />
    </div>
</template>

<script>
// import from folder
import Form from './LeaveMessage/Form.vue';

export default{
    // initialize component to be used here
    components: { Form },    
}
</script>  

<style scoped>

</style>


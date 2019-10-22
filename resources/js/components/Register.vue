<template>
    <div>
        <!-- BREADCRUMB -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fa fa-user-plus"></i>&nbsp;Register</li>
        </ol>
        <!-- SPILT OUT THE REGISTER FORM HERE -->
        <register-form />
        
    </div>
</template>

<script>
import RegisterForm from './Register/Form.vue';
export default {
    components: { RegisterForm },
    name : 'register',
}
</script>

<style>

</style>




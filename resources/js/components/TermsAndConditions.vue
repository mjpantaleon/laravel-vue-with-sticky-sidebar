<template>
  <div>
    <!-- BREADCRUMB -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><i class="fa fa-user-secret"></i>&nbsp;Terms & Conditions</li>
    </ol>
    <!-- SPIT OUT CONTENT HERE -->
    <Content />
    
  </div>
</template>

<script>
import Content from './TermsAndConditions/Content.vue';
export default {
    components: {Content},
    name : 'terms-and-conditions'
}
</script>


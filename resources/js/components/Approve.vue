<template>

       <span>
            <button v-on:click="approveme" @click="approveme" class="btn btn-primary" >Approve me </button>
       </span>

</template>
<script>
export default {
    data() {
        return {


        }
    },
    methods: {
        approveme(){
            console.log("Test one")
            alert("test")
        }

    },

}
</script>
<style>

</style>

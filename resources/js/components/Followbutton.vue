<template>
    <div>
    <button class="btn btn-sm btn-primary" @click='followProfile'>S'abonner</button>
    </div>
</template>

<script>
    export default {
     
     props: ['profileId'],

     methods: {
     	followProfile(){
     	axios.post('/follows/' + this.profileId)
     	.then(response => {
     	          console.log(response.data);
     	     })
     	     .catch(errors => {
     	     if(errors.response.status == 401){
     	     window.location = '/login';
     	     }
     	     })
     	}
     }
    }
</script>

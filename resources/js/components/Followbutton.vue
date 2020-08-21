<template>
    <div>
    <button class="btn btn-sm btn-primary" @click='followProfile'>S'abonner</button>
    </div>
</template>

<script>
    export default {
     
     methods: {
     	followProfile(){
     	axios.post('/follows/1')
     	     .then(response => {
     	          console.log(response.data);
     	     })
     	}
     }
    }
</script>

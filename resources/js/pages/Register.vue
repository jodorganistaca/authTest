<template>
  <div class="container">
      <div class="card">
          <div class="card-header">
              Register
          </div>
          <div class="card-body">
            <div class="col-md-6 offset-md-6">
                <form v-on:submit.prevent="onSubmit">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name..." v-model="name">
                    </div>

                    <div class="form-group">
                        <label>UserName</label>
                        <input type="text" class="form-control" placeholder="Username..." v-model="userName">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password..." v-model="password">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control" placeholder="Confirm Password..." v-model="confirmPassword">
                    </div>

                    <button class="btn btn-succes">Register</button>
                </form>
            </div>               
          </div>
            
          
      </div>
  </div>
</template>

<script>
export default {
    name: 'register',
    props: ['app'],
    data(){
        return {
            name: '',
            username: '',
            password: '',
            confirmPassword: ''
        }
    },
    methods: {
        onSubmit(){
            this.errors = [];

            if(!this.name){
                this.errors.push('Name is required.')
            }

           if(!this.username){
               this.errors.push('Username is required');
           }

           if(!this.password){
               this.errors.push('Password is required');
           }

           if(!this.confirmPassword){
               this.errors.push('Pasword confirmation is required.');
           }

           if(this.password !== this.passwordAgain){
               this.errors.push('Passwords do no match.');
           }

           if(!this.errors.length){
               const data = {
                   name: this.name,
                   username: this.username,
                   password: this.password
               }

               this.app.req.post('authTest/register', data).then(response => {
                   this.app.user = response.data;
                   this.$router.push("/");
               }).catch(error => {
                   this.errors.push(error.response.data.error);
               });
           }
        }
    }
}
</script>

<style>

</style>
<template>
<div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" class="form-control" id="exampleInputName1"  v-model="user.name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="user.email">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" v-model="user.password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputConfirm1" v-model="user.c_password">
  </div>
  <button type="submit" @click="register" class="btn btn-primary">Register</button>
</div>

</template>

<script>
export default {
  data: () => ({
    user:{
      name: "",
      email:"",
      password:"",
      c_password: ""     
      }
    }),
    methods: {
    register() {
      this.$store.dispatch("currentUser/registerUser", this.user);
        
    }
  }
 
};
</script>
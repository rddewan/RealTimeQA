<template>
   <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="success">
                <v-toolbar-title>Login</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-form @submit.prevent="login">
                  <v-text-field prepend-icon="person" name="login" label="Login" type="text"
                                v-model="form.email"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" name="password" label="Password" type="password"
                                v-model="form.password"></v-text-field>
                  <v-card-actions>
                      <v-spacer></v-spacer>
                      <v-btn color="success" type="submit">Login</v-btn>
                  </v-card-actions>
                </v-form>
              </v-card-text>              
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
</v-content>
  
</template>

<script>
    import  User from '../../helpers/User';
export default {
    data(){
        return{
            form :{
                email:null,
                password:null
            }
        }
    },
    methods:{
        login(){
            User.login(this.form)
        }
    }

}
</script>

<style>

</style>

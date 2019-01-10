<template>
   <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="success">
                <v-toolbar-title>Login</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-tooltip bottom>
                  <v-btn
                    slot="activator"
                    :href="source"
                    icon
                    large
                    target="_blank"
                  >
                    <v-icon large>code</v-icon>
                  </v-btn>
                  <span>Source</span>
                </v-tooltip>
                <v-tooltip right>
                  <v-btn slot="activator" icon large href="https://codepen.io/johnjleider/pen/wyYVVj" target="_blank">
                    <v-icon large>mdi-codepen</v-icon>
                  </v-btn>
                  <span>Codepen</span>
                </v-tooltip>
              </v-toolbar>
              <v-card-text>
                <v-form @submit.prevent="login">
                  <v-text-field prepend-icon="person" name="login" label="Login" type="text" v-model="form.email"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" name="password" label="Password" type="password" v-model="form.password"></v-text-field>
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
export default {
    data(){
        return{
            form :{
                emai:null,
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

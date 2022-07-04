<template>
    <v-container fluid fill-height>
        <v-layout align-center justify-center>
            <v-flex xs12 sm8 md4>
                <v-card class="elevation-12">
                    <v-toolbar dark color="primary">
                        <v-toolbar-title>Registro</v-toolbar-title>
                    </v-toolbar>
                    <v-card-text>
                        <form>
                            <v-text-field
                                v-model="formregister.name"
                                label="name"
                                name="name"
                                type="input"
                                required

                            >Nombre</v-text-field>
                            <v-text-field
                                v-model="formregister.email"
                                name="email"
                                label="E-mail"
                                type="input"
                                required

                            ></v-text-field>
                            <v-text-field
                                v-model="formregister.password"
                                name="password"
                                label="Password"
                                type="password"
                                required
                            ></v-text-field>
                        </form>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="primary" @click="register()">Registrar</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import axios from 'axios';

export default {
  data(){
      return {
          formregister:{
              name : null,
              email : null,
              password :null
          }
      }
  },
  methods:{
      register(){
          axios.post('http://127.0.0.1:8000/login/register',this.formregister);
      }
  },
}
</script>

<style scoped>

</style>

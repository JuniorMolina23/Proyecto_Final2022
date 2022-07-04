<template>
    <v-main>
        <v-container>
            <h1>Perfil</h1>
            <v-row>
                <v-col
                cols="7"
                >
                    <form>
                        <v-text-field
                            v-model="name"
                            :error-messages="nameErrors"
                            label="name"
                            required
                            @input="$v.name.$touch()"
                            @blur="$v.name.$touch()"
                        ></v-text-field>
                        <v-text-field
                            v-model="email"
                            :error-messages="emailErrors"
                            label="E-mail"
                            required
                            @input="$v.email.$touch()"
                            @blur="$v.email.$touch()"
                        ></v-text-field>
                        <v-text-field
                            v-model="email"
                            :error-messages="emailErrors"
                            label="Direccion"
                            required
                            @input="$v.email.$touch()"
                            @blur="$v.email.$touch()"
                        ></v-text-field>
                        <v-text-field
                            v-model="email"
                            :error-messages="emailErrors"
                            label="Telefono"
                            :counter="9"
                            maxlength="9"
                            required
                            @input="$v.email.$touch()"
                            @blur="$v.email.$touch()"
                        ></v-text-field>
                        <v-btn
                            class="mr-4"
                            @click="submit"
                        >
                            Editar
                        </v-btn>
                        <v-btn @click="clear">
                            Cancelar
                        </v-btn>
                    </form>
                </v-col>
                <v-col cols="1"></v-col>
                <v-col
                cols="4"
                style="background: black"
                >
                    <v-img>
                    </v-img>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
</template>

<script>

export default {

}
</script>

<style scoped>

</style>

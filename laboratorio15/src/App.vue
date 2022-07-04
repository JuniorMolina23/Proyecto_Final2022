<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            style="background: coral"
            app>
            <v-list>
                <v-list-item>
                    <v-list-item-avatar>
                        <v-img src="https://cdn.vuetifyjs.com/images/john.png"></v-img>
                    </v-list-item-avatar>
                </v-list-item>

                <v-list-item link @click="profile()">
                    <v-list-item-content>
                        <v-list-item-title class="text-h6">
                            nombre de perfil
                        </v-list-item-title>
                        <v-list-item-subtitle>Email.ejemplo</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
            <v-divider></v-divider>
            <v-list>
                <v-list-group
                    :value="false"
                    prepend-icon="mdi-account-circle"
                >
                    <template v-slot:activator>
                        <v-list-item-title>Productos</v-list-item-title>
                    </template>

                    <v-list-item
                        link
                        v-for="categori in categoria" :key="categori._id"
                        @click="categoriapro(categori._id)"
                    >
                        <v-list-item-title>{{ categori.nombre }}</v-list-item-title>
                        <v-list-item-icon>
                            <v-icon>mdi-lock</v-icon>
                        </v-list-item-icon>
                    </v-list-item>
                </v-list-group>
                <v-list
                    nav
                >
                    <v-list-item-group>
                        <v-list-item
                            @click="shopping()"
                        >
                            <v-list-item-icon>
                                <v-icon>mdi-cart</v-icon>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title>Carrito de Compras</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                        <v-list-item>
                            <v-list-item-icon>
                                <v-icon>mdi-cart</v-icon>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title>Cerrar Sesion</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list-item-group>
                </v-list>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app style="background: sandybrown">
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title @click="productos()">Mi Pequeñito</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-title style="padding-right: 40px" >"Lo mejor para tu hijo"</v-toolbar-title>
        </v-app-bar>
        <router-view></router-view>
        <v-footer
            dark
            padless
        >
            <v-card
                class="flex"
                flat
                tile
            >
                <v-card-title class="teal">
                    <strong class="subheading">Get connected with us on social networks!</strong>

                    <v-spacer></v-spacer>

                    <v-btn
                        v-for="icon in icons"
                        :key="icon"
                        class="mx-4"
                        dark
                        icon
                    >
                        <v-icon size="24px">
                            {{ icon }}
                        </v-icon>
                    </v-btn>
                </v-card-title>

                <v-card-text class="py-2 white--text text-center">
                    {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
                </v-card-text>
            </v-card>
        </v-footer>
    </v-app>
</template>

<script>
import router from "@/router";
import axios from "axios";
export default {
    data: () => ({
        drawer: "",
        icons: [
            'mdi-facebook',
            'mdi-twitter',
            'mdi-linkedin',
            'mdi-instagram',
        ],
        categoria:[],
        perfil:[]
    }),
    methods:{
        shopping(){
            router.push('/carritocompras');
        },
        profile(){
            router.push('/perfil');
        },
        productos(){
            router.push('/productos');
        },
        categoriapro(){
            router.push('/perfil');
        }
    },
    mounted () {
        axios.get('http://127.0.0.1:8000/vuecategorias')
            .then(response => (this.categoria = response.data))
    }
}
</script>

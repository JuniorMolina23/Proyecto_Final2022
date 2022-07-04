<template>
    <v-main>
        <v-container>
            <v-row>
                <v-col md="4" xs="12">
                    <v-card class="card " >
                        <v-card-text class="card pa-2 d-flex flex-column">
                            <div class="red short"/>
                            <div class="green middle"/>
                            <v-spacer/>
                            <div class="blue short"/>
                        </v-card-text>
                    </v-card>
                </v-col>
                <v-col md="8" xs="12">
                    <v-carousel >
                        <v-carousel-item
                            v-for="(item,i) in items"
                            :key="i"
                            :src="item.src"
                            reverse-transition="fade-transition"
                            transition="fade-transition"
                        ></v-carousel-item>
                    </v-carousel>
                </v-col>
            </v-row>
            <v-row>
                <h1>Productos Similares</h1>
            </v-row>
            <v-row>
                <v-col
                    v-for="producto in info" :key="producto._id"
                >
                    <v-card
                        class="mx-auto"
                        max-width="400"
                        xs="10"
                        sm="6"
                        md="3"
                    >
                        <v-img
                            class="white--text align-end"
                            height="200px"
                            :src=producto.imagen
                        >
                        </v-img>

                        <v-card-subtitle class="pb-0">
                            {{ producto.nombre }}
                        </v-card-subtitle>

                        <v-card-text class="text--primary">
                            <div>{{ producto.precio }}</div>
                        </v-card-text>

                        <v-card-actions>
                            <v-btn
                                @click="añadir()"
                                color="orange"
                                text
                            >
                                Carrito
                            </v-btn>

                            <v-btn
                                @click="detalles()"
                                color="orange"
                                text
                            >
                                Detalles
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
</template>
<script>
import axios from "axios";

export default {
    data: () => ({
        info:[],
        items: [
            {
                src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
            },
            {
                src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
            },
            {
                src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
            },
            {
                src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
            },
        ]
    }),
    mounted () {
        axios
            .get('http://127.0.0.1:8000/vueproducto')
            .then(response => (this.info = response.data))
    }
}
</script>
<style scoped>
.red {
    background-color: red;
    margin-bottom: 5px;
}
.green {
    background-color: green;
    margin-bottom: 5px;
}
.blue {
    background-color: lightblue;
    margin-bottom: 5px;
}
.short {
    height: 50px;
}
.tall {
    height: 100px;
}
.middle {
    height: 75px;
}
.card {
    height: 100%;
}
</style>


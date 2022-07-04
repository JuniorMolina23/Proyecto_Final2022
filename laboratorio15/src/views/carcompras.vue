<template>
    <v-main class="lighten-3">
        <v-container>
            <h1>Mi Carrito de Compras</h1>
            <v-row>
                <v-col
                    xs="12"
                    sm="12"
                    md="8"
                >
                    <v-card
                        height="auto"
                        v-for="n in 6"
                        :key="n"
                        style="margin-bottom:15px "
                        class="mx-auto"
                        outlined
                    >
                        <v-list-item three-line>
                            <v-list-item-content>
                                <v-list-item-title class="text-h5 mb-1">
                                    Nombre Producto
                                </v-list-item-title>
                                <v-list-item-subtitle>Cantidad</v-list-item-subtitle>
                                <v-list-item-subtitle>$Precio</v-list-item-subtitle>
                                <v-list-item-subtitle>$SubTotal</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-avatar
                                tile
                                size="120"
                                color="grey"
                            ></v-list-item-avatar>
                        </v-list-item>
                    </v-card>
                </v-col>
                <v-col md="4">
                    <v-card
                        max-width="374"
                    >
                        <template>
                            <v-progress-linear
                                color="deep-purple"
                                height="10"
                                indeterminate
                            ></v-progress-linear>
                        </template>
                        <v-card-title>Detalle Total</v-card-title>
                        <v-card-text>
                            <v-card-actions>
                                <div class="text-subtitle-1">
                                    Total :
                                </div>
                                <v-spacer></v-spacer>
                                <div>50</div>
                            </v-card-actions>
                            <v-card-actions>
                                <div class="text-subtitle-1">
                                    Descuento :
                                </div>
                                <v-spacer></v-spacer>
                                <div>50</div>
                            </v-card-actions>
                            <v-card-actions>
                                <div class="text-subtitle-1">
                                    Cobro por entrega :
                                </div>
                                <v-spacer></v-spacer>
                                <div>50</div>
                            </v-card-actions>
                        </v-card-text>
                        <v-divider class="mx-4"></v-divider>
                        <v-card-text>
                            <v-card-actions>
                                <div class="text-subtitle-1">
                                    Total :
                                </div>
                                <v-spacer></v-spacer>
                                <div>150</div>
                            </v-card-actions>
                        </v-card-text>
                        <v-card-actions>
                            <v-btn
                                color="deep-purple lighten-2"
                                text
                                @click="reserve"
                            >
                                Pagos
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
</template>
<script>
export default {
    data: () => ({
        loading: false,
        selection: 1,
    }),

    methods: {
        reserve () {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
    },
}
</script>

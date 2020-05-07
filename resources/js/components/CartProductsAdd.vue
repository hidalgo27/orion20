<template>
    <div class="row">
        <div class="col">
            <div class="card" v-for="(product,index) in products" v-bind:key="product.id">
                {{ product.id }} - {{ product.name }} - {{ product.quantity }} - {{ product.conditions }}
<!--                <a href="" class="text-danger float-right">Eliminar</a>-->
                <button class="btn btn-danger btn-sm"
                        @click="eliminarProduct(product, index)">Eliminar</button>
            </div>
        </div>
    </div>
</template>
<script>
    import EventBus from '../event-bus.js';
    export default {
        data() {
            return {
                products: []
            }
        },
        created() {
            EventBus.$on('product-added', data => {
                this.products = data;
            });
        },
        mounted() {
            axios.get("/cart")
                .then(res => {
                    this.products = res.data;
                    // console.log(res.data);
                })
        },
        methods: {
            eliminarProduct(product, index){
                const confirmacion = confirm(`Eliminar product ${product.name}`);
                // const productoNueva = this.products;
                if(confirmacion){
                    axios.delete(`/cart/${product.id}`)
                        .then(()=>{
                            this.$delete(this.products, index);
                        })
                }
            },
        }
    }
</script>

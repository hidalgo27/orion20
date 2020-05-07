<template>
    <form @submit.prevent="agregar" v-else>

        <div class="form-group">
            <label for="id">id</label>
            <input type="text" class="form-control" name="id" id="id" v-model="producto.id">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" v-model="producto.name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" id="price" v-model="producto.price">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" v-model="producto.quantity">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</template>
<script>
    import EventBus from '../event-bus.js'
    export default {
        data() {
            return {
                productos: [],
                producto: {id: '', name: '', price: '', quantity: ''}
            }
        },
        methods:{
            agregar(){
                // console.log(this.producto.id, this.producto.name);
                if(this.producto.id.trim() === '' || this.producto.name.trim() === ''){
                    alert('Debes completar todos los campos antes de guardar');
                    return;
                }
                const productoNueva = this.producto;
                this.producto = {id: '', name: '', price: '', quantity: ''};
                axios.post('/add', productoNueva)
                    .then((res) =>{
                        const productoServidor = res.data;
                        this.productos.push(productoServidor);
                        EventBus.$emit('product-added', productoServidor.dataAdd);
                    })
            },
        }
    }
</script>

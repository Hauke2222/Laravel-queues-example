<script>
import { defineComponent } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default defineComponent({
    setup() {
        const { props } = usePage().component
        const products = props.products

        return { products }
    }
})
</script>
<template>
    <div>
        <h1>Products</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.name }}</td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.stock }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
import { defineComponent } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default defineComponent({
    setup() {
        const { props } = usePage().component
        const orders = props.orders

        return { orders }
    }
})
</script>
<template>
    <div>
        <h1>Orders</h1>
        <table>
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="order in orders" :key="order.id">
                    <td>{{ order.customer_name }}</td>
                    <td>{{ order.customer_email }}</td>
                    <td>{{ order.total_amount }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

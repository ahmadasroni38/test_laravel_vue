<template>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b" v-for="(item, index) in items" :key="index">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ index + 1 }}
                </th>
                <td class="px-6 py-4">
                    {{ item.nama }}
                </td>
                <td class="px-6 py-4">
                    {{ item.harga }}
                </td>
                <td class="px-6 py-4">
                    <Button label="Edit" link="update" :id="item.id" typeButton="success"/>
                    <Button label="Delete" typeButton="danger" @click="deleteData(item.id)"/>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</template>

<script>
import Button from '../../components/Button.vue';
import product from '../../service/product';

export default {
    components: {
        Button
    },
    data() {
        return {
            items: []
        }
    },
    methods: {
        getAll() {
            product.getAll()
            .then(response => {
                console.log(response);
                this.items = response.data.products;
            })
            .catch(e => {
                console.log(e)
            })
        },

        deleteData(id) {
            if (confirm('Are you sure you want to delete?')) {
                product.deleteData(id)
                .then(response => {
                    alert('data berhasil di hapus');
                    // get data
                    this.getAll();
                    console.log(response.data);
                })
                .catch(e => {
                    console.log(e)
                })
            }
        }
    },
    mounted() {
        this.getAll()
    }
}
</script>
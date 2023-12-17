<template>


<form class="max-w-sm mx-auto">
  <!-- alert -->
  <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert" v-if="errors != ''">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Danger</span>
      <div>
          <span class="font-medium">Perhatian</span>
          <ul class="mt-1.5 list-disc list-inside" v-for="(item, index) in errors" :key="index">
              <li>{{ item[0] }}</li>
          </ul>
      </div>
  </div>

  <Input label="Nama" type="text" v-model:value="nama"/>
  <Input label="Deskripsi" type="text" v-model:value="deskripsi"/>
  <Input label="Harga" type="number" v-model:value="harga"/>
  <Button label="Kirim" typeButton="success" @click="createData()"/>
</form>

</template>

<script>
import Input from '../../components/Input.vue';
import Button from '../../components/Button.vue';
import product from '../../service/product';

export default {
  name: 'Create',
  components: {Input, Button},
  data() {
    return {
      nama: '',
      deskripsi: '',
      harga: '',
      errors: ''
    }
  },
  methods: {
    createData() {
      var data = {
        nama: this.nama,
        deskripsi: this.deskripsi,
        harga: this.harga,
      };

      console.log(JSON.stringify(data))
      product.createData(JSON.stringify(data))
        .then(response => {
          alert('Berhasil di tambahkan')
          console.log(response.data);
        })
        .catch(e => {
          this.errors = e.response.data.errors
          console.log(this.errors)
        });
    },
  }
}
</script>
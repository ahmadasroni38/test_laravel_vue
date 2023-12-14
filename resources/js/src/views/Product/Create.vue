<template>


<form class="max-w-sm mx-auto">
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
      harga: ''
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
          alert(e.message)
          console.log(e);
        });
    },
  }
}
</script>
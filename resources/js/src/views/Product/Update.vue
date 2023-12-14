<template>


  <form class="max-w-sm mx-auto">
    <Input label="Nama" type="text" v-model:value="nama"/>
    <Input label="Deskripsi" type="text" v-model:value="deskripsi"/>
    <Input label="Harga" type="number" v-model:value="harga"/>
    <Button label="Kirim" link="update" id="1" typeButton="success" @click="updateCreate()"/>
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
      return{
        item: [],
        nama: '',
        deskripsi: '',
        harga: ''
      }
    },
    methods: {
      getDetail(id) {
        product.getDetail(id)
        .then(response => {
          this.item = response.data.product;
          this.nama = this.item.nama;
          this.deskripsi = this.item.deskripsi;
          this.harga = this.item.harga;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
      },
      updateCreate() {
        var data = {
          nama: this.nama,
          deskripsi: this.deskripsi,
          harga: this.harga,
        };

        console.log(JSON.stringify(data))
        product.updateData(this.$route.params.id,JSON.stringify(data))
          .then(response => {
            alert('Berhasil diperbaharui')
            console.log(response.data);
          })
          .catch(e => {
            alert(e.message)
            console.log(e);
          });
      },
    },
    mounted() {
      // console.log(this.$route.params.id);
      this.getDetail(this.$route.params.id);
    }
  }
  </script>
<template>
  <Navbar />
  <div class="container mx-auto py-4">
    <router-view/>
  </div>
  <Footer />
</template>

<script>
  import Navbar from '../components/navbar.vue';
  import Footer from '../components/footer.vue';
export default{
  components: {
    Navbar,
    Footer
  }
}
</script>
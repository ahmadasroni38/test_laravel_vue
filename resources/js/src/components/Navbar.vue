<template>
<div id="app" class="bg-gray-200">
    <nav class="h-16 text-white bg-teal-600 flex items-center shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex">
                    <a href="/" class="text-white font-semibold rounded-lg px-4 py-2 | hover:bg-teal-500">
                        Dashboard
                    </a>
                    <a href="/#/create" class="text-white font-semibold rounded-lg px-4 py-2 | hover:bg-teal-500">
                        Tambah
                    </a>
                </div>
                <div class="flex">
                    <div class="relative">
                        <button class="rounded-full overflow-hidden border-2 border-teal-500 w-10 h-10 flex justify-center items-center | hover:border-white focus:outline-none focus:border-white"
                                @click="isOpen2 = true">
                            <img src="https://i.pravatar.cc/150?u=1" alt="">
                        </button>

                        <div v-if="isOpen2" class="fixed inset-0 w-full h-screen z-20 bg-black opacity-25" @click="isOpen2 = false"></div>
                        <div class="absolute z-30 right-0 mt-2" :class="{'hidden': !isOpen2}">
                            <div class="bg-white rounded-lg shadow-lg py-2 w-48">
                                <button @click="authLogout()" class="block text-purple-600 font-semibold px-4 py-2 | hover:text-white hover:bg-purple-500">Log Out</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
</template>

<script>
import auth from '../service/auth';

export default {
    name:'Navbar',
    data() {
        return {
            isOpen1: true,
            isOpen2: false,
        }
    },
    methods: {
    authLogout() {

        auth.authLogout()
            .then(response => {
                console.log(response.data);
                alert('Berhasil logout')
                localStorage.removeItem('token')
                setTimeout(() => {
                    this.$router.push('/login');
                }, 100)
            })
            .catch(e => {
                alert(e.message)
                console.log(e);
            });
        },
    }
}

</script>
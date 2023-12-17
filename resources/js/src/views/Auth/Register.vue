<template>
<body class="bg-gray-200 font-sans text-gray-700">
    <div class="container mx-auto p-8 flex min-h-screen">
        <div class="max-w-md w-full mx-auto">
            <h1 class="text-4xl text-center mb-12 font-thin">REGISTER</h1>

            <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                <div class="p-8">

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

                    <form method="POST" class="" action="#" onsubmit="return false;">
                        <Input label="Nama" type="text" v-model:value="name"/>
                        <Input label="Email" type="email" v-model:value="email"/>
                        <Input label="Password" type="password" v-model:value="password"/>
                        <Button label="Kirim" typeButton="success" @click="createData()"/>
                    </form>

                    <div class="mt-4">
                            <a href="/#/login" class="pt-2 underline">Sudah punya akun? Login disini</a>
                        </div>
                </div>
                
                <div class="flex justify-between p-8 text-sm border-t border-gray-300 bg-gray-100">
                    <!-- <a href="#" class="font-medium text-indigo-500">Create account</a>

                    <a href="#" class="text-gray-600">Forgot password?</a> -->
                    <p>Project by : adisantikajaya@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>
</template>

<script> 
import Input from '../../components/Input.vue';
import Button from '../../components/Button.vue';
import auth from '../../service/auth';

export default {
    name: 'Create',
    components: {Input, Button},
    data() {
        return {
        name: '',
        email: '',
        password: '',
        errors: ''
        }
    },
    methods: {
        createData() {
        var data = {
            name: this.name,
            email: this.email,
            password: this.password,
        };

        // console.log(JSON.stringify(data))
        auth.authRegister(JSON.stringify(data))
            .then(response => {
                alert('Berhasil di tambahkan')
                console.log(response.data);
                // set token
                localStorage.setItem('token', response.data.token);
                // redirect
                setTimeout(() => {
                    this.$router.push('/');
                }, 1000);
            })
            .catch(e => {
                this.errors = e.response.data.errors
                console.log(this.errors)
                // console.log(e.response.data.errors);
            });
        },
    }
}
</script>
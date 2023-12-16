<template>
    <body class="bg-gray-200 font-sans text-gray-700">
        <div class="container mx-auto p-8 flex min-h-screen">
            <div class="max-w-md w-full mx-auto">
                <h1 class="text-4xl text-center mb-12 font-thin">LOGIN</h1>
    
                <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                    <div class="p-8">
                        <form method="POST" class="" action="#" onsubmit="return false;">
                            <Input label="Email" type="email" v-model:value="email"/>
                            <Input label="Password" type="password" v-model:value="password"/>
                            <Button label="Kirim" typeButton="success" @click="loginData()"/>
                        </form>
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
            email: '',
            password: ''
            }
        },
        methods: {
            loginData() {
            var data = {
                email: this.email,
                password: this.password,
            };
    
            // console.log(JSON.stringify(data))
            auth.authLogin(JSON.stringify(data))
                .then(response => {
                    alert('Berhasil login')
                    console.log(response.data);
                    // set token
                    localStorage.setItem('token', response.data.token);
                    // redirect
                    setTimeout(() => {
                        this.$router.push('/');
                    }, 1000);
                })
                .catch(e => {
                    alert(e.message)
                    // console.log(e.response.data.errors);
                });
            },
        }
    }
    </script>
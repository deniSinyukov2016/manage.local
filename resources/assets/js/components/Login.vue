<template>
    <section class="login_content">
        <form @submit.prevent='loginUser'>
            <h1>Login Form</h1>
            <div>
                <input type="text" class="form-control" placeholder="Email" required="" name="email" v-model="login.email"/>
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" v-model="login.password"/>
            </div>
            <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
            </div>
        </form>
    </section>
</template>

<script>

    export default {
        data() {
            return {
                login: {
                    email: '',
                    password: ''
                },
                errors: {}
            }
        },

        methods: {
            loginUser() {
                axios.post('/api/v1/login', this.login)
                    .then(function (resp) {
                        console.log(resp);
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        this.errors = resp.data;
                        alert(this.errors);
                    });
            }
        }
    }
</script>
<script setup>
import Button from "@/Components/Button.vue";
import Password from '@/Components/Form/Password.vue';
import TextField from "@/Components/Form/TextField.vue";
import RememberMe from '@/Pages/Auth/RememberMe.vue'
import LoginSocial from '@/Pages/Auth/LoginSocial.vue';
import { useForm } from '@inertiajs/vue3';
import { reactive } from "vue";

const form = useForm({
	email: '',
	password: '',
});

const form_state = reactive({
	invalid_email: false,
	invalid_password: false,
})

const auth = () => {
	form.post(route('auth.validate'), {
		preserveScroll: true,
		onSuccess: (response) => {
		},
		onError: (errors) => {
			if (errors.email) {
				form_state.invalid_email = true;
			}
			if (errors.password) {
				form_state.invalid_password = true;
			}
		},
		onFinish: () => null,
	});
};


</script>

<template>
	<section class="section">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<div class="login-brand">
						<img src="img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
					</div>
					<div class="card card-primary">
						<div class="card-header">
							<h4>Login</h4>
						</div>
						<div class="card-body">
							<TextField :title="'Email'" v-model="form.email" :hasError="form_state.invalid_email"
								:type="'email'" :name="'email'" />
							<Password :title="'Password'" v-model="form.password" :name="'password'"
								:hasError="form_state.invalid_password" :showForgot="true" />
							<RememberMe />
							<div class="form-group">
								<Button :title="'Login'" @click="auth" :type="'primary'" />
							</div>
							<LoginSocial />
						</div>
					</div>
					<div class="mt-5 text-muted text-center">
						Don't have an account? <a href="auth-register.html">Create One</a>
					</div>
					<div class="simple-footer">
						Copyright &copy; Stisla {{ new Date().getFullYear() }}
					</div>
				</div>
			</div>
		</div>
	</section>
</template>
<style scoped>
@import "/public/modules/bootstrap-social/bootstrap-social.css";
</style>

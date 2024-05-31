<script setup>
import Button from "@/Components/Button.vue";
import Password from '@/Components/Form/Password.vue';
import TextField from "@/Components/Form/TextField.vue";
import RememberMe from '@/Pages/Auth/RememberMe.vue'
import LoginSocial from '@/Pages/Auth/LoginSocial.vue';
</script>

<template>
	<section class="section">
		<div class="container mt-5">
			<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
					<div class="login-brand">
						<img src="img/stisla-fill.svg" alt="logo" width="100" 
							class="shadow-light rounded-circle">
					</div>
					<div class="card card-primary">
						<div class="card-header">
							<h4>Login</h4>
						</div>
						<div class="card-body">
							<form method="POST" action="#" class="needs-validation">
                                <TextField :title="'Email'" 
									:type="'email'" 
									:name="'email'"/>
									:name="'email'"/>
									:name="'email'"/>
								<Password :title="'Password'" 
									:showForgot="true"/>
								<RememberMe />
								<div class="form-group">
									<Button :title="'Login'" 
										:type="'primary'"/>
								</div>
							</form>
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

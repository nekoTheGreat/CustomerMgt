@extends('layouts.master')

@section('title')
	Auth
@endsection

@section('content')

<div class="row">
	<form method="POST" action="/_auth" class="col s12 offset-m1 m5 offset-l2 l4">
		<div class="card">
			<div class="card-panel cyan accent-2" style="margin:0;">
				Existing users
			</div>
			<div class="input-field col s12 m12 l12">
				<input type="text" id="username" name="username" class="validate"/>
				<label for="username">Email</label>
			</div>
			<div class="input-field col s12 m12 l12">
				<input type="password" id="password" name="password" />
				<label for="password">Password</label>
			</div>
			<div class="input-field right">
				<input type="Submit" value="Login" class="waves-effects btn"/>
			</div>
		</div>
	</form>
	<form class="col s12 m5 l4">
		<div class="card">
			<div class="card-panel cyan accent-2" style="margin:0;">
				Newbies
			</div>
			<div class="input-field col s12 m12 l12">
				<input type="email" id="username" name="username" class="validate"/>
				<label for="username">Email</label>
			</div>
			<div class="input-field col s12 m12 l12">
				<input type="password" id="password" name="password" />
				<label for="password">Password</label>
			</div>
			<div class="input-field col s12 m12 l12">
				<input type="password" name="confirm_password" />
				<label for="confirm_password">Confirm Password</label>
			</div>
			<div class="input-field right">
				<input type="Submit" value="Register" class="waves-effects btn"/>
			</div>
		</div>
	</form>
</div>

@endsection
@extends('layouts.master')

@section('title')
	Customer Management - Login
@endsection

@section('content')

<div class="row">
	<div class="col m2 l4">
		&nbsp;
	</div>
	<div class="col m8 l4">
		<div class="card">
			<form method="POST" action="/login">
				{{ csrf_field() }}
				<div class="input-field col s12">
					<input type="text" name="email" id="email" />
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input type="password" name="password" id="password" />
					<label for="password">Password</label>
				</div>
				<div class="input-field col s12">
			        <input type="checkbox" name="remember"> Remember Me
			    </div>
				<div class="col s12">
					<button class="btn btn-success right">
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col m2 l4">
		&nbsp;
	</div>
</div>
@endsection

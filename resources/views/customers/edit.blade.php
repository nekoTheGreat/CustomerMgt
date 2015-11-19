@extends('customers.master')

@section('title')
	Customer Management - Edit Customer
@endsection

@section('right_panel')

<div class="form">
	@if (Session::has('success'))
	<div class="row flash">
		<p> {{Session::get('success')}} </p>
	</div>
	@endif
	<form method="POST" action="/customers/process">
		<input type="hidden" name="ID" value="{{ $customer->ID }}"/>
		@include('customers.form')
		<div class="row">
			<div class="col s12">
				<p class="right-align">
					<button name="_action" type="submit" class="waves-effect btn red" value="Delete">
						Delete
					</button>
					<button name="_action" type="submit" class="waves-effect btn green" value="Save">
						Save
					</button>
				</p>
			</div>
		</div>
	</form>
</div>

@endsection
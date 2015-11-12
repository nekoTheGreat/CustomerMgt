@extends('customers.master')

@section('title')
	Customer Management - Add Customer
@endsection

@section('right_panel')

<div class="add_form">
	<form method="POST" action="/customers/add">
		@include('customers.form')
		<div class="row">
			<div class="col s12">
				<p class="right-align">
					<button type="submit" class="waves-effect btn green">
						Save
					</button>
				</p>
			</div>
		</div>
	</form>
</div>

@endsection
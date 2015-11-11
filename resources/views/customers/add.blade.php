@extends('customers.master')

@section('title')
	Customer Management - Add Customer
@endsection

@section('right_panel')

<div class="add_form">
	<form method="POST" action="/customers/add">
		@include('customers.form')
	</form>
</div>

@endsection
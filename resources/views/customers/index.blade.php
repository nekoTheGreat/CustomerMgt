@extends('customers.master')

@section('title')
	Customer Management - Customers
@endsection

@section('left_panel')
	parent()
@endsection

@section('right_panel')

@if (Session::has('error'))
	<div class="row flash">
		<p> {{Session::get('error')}} </p>
	</div>
@endif
<div class="search row">
	<form>
		<div class="hide-on-small-only col m4 l6">
			&nbsp;
		</div>
		<div class="input-field col s12 m8 l6">
			<i class="material-icons prefix">search</i>
			<input type="text" id="search" name="search">
			<label for="search">Search</label>
		</div>
	</form>
</div>
<div class="card">
	<table class="bordered stripped highlight">
		<tr>
			<th data-field="id">ID</th>
			<th data-field="name">Name</th>
			<th data-field="date_added">Date Added</th>
			<th>&nbsp;</th>
		</tr>
		<? foreach($customers as $customer): ?>
		<tr>
			<td>{{$customer->id}}</td>
			<td>{{$customer->lastname}}, {{$customer->firstname}}</td>
			<td>{{$customer->created_at}}</td>
			<td class="right">
				<a href="/customers/form/{{ $customer->id }}">
					<i class="material-icons">edit</i>
				</a>
				&nbsp;
				<a href="/customers/delete/{{ $customer->id }}"/>
					<i class="material-icons">delete</i>
				</a>
			</td>
		</tr>
		<? endforeach; ?>
	</table>
</div>

@endsection
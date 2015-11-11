@extends('customers.master')

@section('title')
	Customer Management - Customers
@endsection

@section('left_panel')
	parent()
@endsection

@section('right_panel')

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
		</tr>
		<tr>
			<td>REPAIRS-13131890213</td>
			<td>Marco, Polo</td>
			<td>December 12, 2014</td>
		</tr>
		<tr>
			<td>DOCTOR-12313123121</td>
			<td>Keanne Dew</td>
			<td>May 25, 2015</td>
		</tr>
		<tr>
			<td>CONSTRUCTIONS	-12313123121</td>
			<td>Samuel Park</td>
			<td>October 7, 2013</td>
		</tr>
	</table>
</div>

@endsection
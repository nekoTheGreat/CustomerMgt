@extends('customers.master')

@section('title')
	Customer Management - Asks
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
			<th data-field="name">Title</th>
			<th data-field="date_added">Date Added</th>
			<th>&nbsp;</th>
		</tr>
		<? foreach($asks as $ask): ?>
		<tr>
			<td>{{$ask->ID}}</td>
			<td>{{$ask->title}</td>
			<td>{{$ask->created_at}}</td>
			<td class="right">
				<a href="/customers/form/<?=$ask->ID;?>">
					<i class="material-icons">edit</i>
				</a>
				&nbsp;
				<a href="/customers/delete/<?=$customer->ID;?>"/>
					<i class="material-icons">delete</i>
				</a>
			</td>
		</tr>
		<? endforeach; ?>
	</table>
</div>

@endsection
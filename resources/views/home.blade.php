@extends('layouts.master')

@section('title')
	Customer Management
@endsection

@section('content')

<div class="row">
	<div class="col s12 m4 l3">
		<div class="card">
			<h5>Recently added</h5>
			<ul class="collection">
				<li class="collection-item">Marco Polo</li>
				<li class="collection-item">Keanne Dew</li>
				<li class="collection-item">Samuel Park</li>
			</ul>
		</div>
	</div>
	<div class="col s12 m8 l9">
		<div class="card">
			<img class="responsive-img"  src="images/stats.png"/>
		</div>
	</div>
</div>

@endsection
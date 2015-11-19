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
				@foreach($recentAdded as $recent)
				<li class="collection-item">{{$recent->lastname.', '.$recent->firstname}}</li>
				@endforeach
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
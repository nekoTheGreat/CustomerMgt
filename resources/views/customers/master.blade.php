@extends('layouts.master')

@section('left_mobile_menu')

<a href="#" data-activates="left-mobile-menu" class="hide-on-med-and-up button-collapse left-button-collapse">
	<i class="material-icons">view_module</i>
</a>
<ul class="side-nav" id="left-mobile-menu">
	<li><a href="/customers">List of Customers</a></li>
	<li><a href="/customers/form">Add Customer</a></li>
</ul>

@endsection

@section('content')

<div class="row">
	<div class="col hide-on-small-only m3 l2 blue lighten-4 submenu" style="padding:0px;">
		<ul class="collection">
			@foreach($subnav as $link)
			<li class="collection-item waves-effects">
				<a href="{{ $link['link' ]}}" class="waves-effects">{{ $link['name'] }}</a>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="col s12 m9 l10">
		@yield('right_panel')
	</div>
@endsection
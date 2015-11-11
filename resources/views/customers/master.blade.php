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
	<div class="col hide-on-small-only m4 l3 blue lighten-4 submenu" style="padding:0px;">
		<h5>Customer Options</h5>
		<ul class="collection">
			<li class="collection-item">
				<a href="/customers" class="waves-effects">List of Customers</a>
			</li>
			<li class="collection-item">
				<a href="/customers/form">Add Customer</a>
			</li>
		</ul>
	</div>
	<div class="col s12 m8 l9">
		@yield('right_panel')
	</div>
@endsection
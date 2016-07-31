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
	<div class="col hide-on-small-only m1 l1">&nbsp;</div>
	<div class="col s12 s1 m10 l10">
		@yield('right_panel')
	</div>
@endsection
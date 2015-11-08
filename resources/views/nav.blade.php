<nav>
	<div class="nav-wrapper blue darken-4">
		<a href="#" class="brand-logo">Blog Mobile</a>
		<ul class="right hide-on-med-and-down">
			@if ($auth)
				<li><a href="/">Account</a></li>
			@else
				<li><a href="/auth">Login/Register</a></li>
			@endif
		</ul>
	</div>
</nav>
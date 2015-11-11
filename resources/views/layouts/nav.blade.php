<nav>
	<div class="nav-wrapper blue darken-4">
		<a href="/" class="brand-logo">CustsMgt</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="/customers">Customers</a></li>
			<li><a href="/">Reports</a></li>
			<li><a href="/">Logout</a></li>
		</ul>
		<a href="#" data-activates="right-mobile-menu" class="button-collapse right right-button-collapse">
			<i class="material-icons">menu</i>
		</a>
		<ul class="side-nav" id="right-mobile-menu">
			<li><a href="/customers">Customers</a></li>
			<li><a href="/">Reports</a></li>
			<li><a href="/">Logout</a></li>
		</ul>
		@yield('left_mobile_menu')
	</div>
</nav>
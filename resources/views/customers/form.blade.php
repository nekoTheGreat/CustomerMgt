{{ csrf_field() }}
	
<div class="input-field col s12 m6 l6">
	<input type="text" name="firstname" id="firstname" value="{{$customer->firstname}}"/>
	<label for="firstname">First Name</label>
</div>
<div class="input-field col s12 m6 l6">
	<input type="text" name="lastname" id="lastname" value="{{$customer->lastname}}"/>
	<label for="lastname">Last Name</label>
</div>
<div class="input-field col s12 m6 l6">
	<input type="text" name="password" id="password" value="{{$customer->password}}"/>
	<label for="password">Password</label>
</div>
<div class="input-field col s12 m6 l6">
	<input type="text" name="confirm_password" id="confirm_password" value=""/>
	<label for="confirm_password">Confirm Password</label>
</div>
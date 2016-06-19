@extends('layouts.master')

@section('title')
    Customer Management - Login
@endsection

@section('content')

<div class="row">
    <div class="col m2 l4">
        &nbsp;
    </div>
    <div class="col m8 l4">
        <div class="card">
            <form method="POST" action="/auth/register">
                <div class="input-field col s12">
                    
                </div>
                {{ csrf_field() }}
                <div class="input-field col s12">
                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}"/>
                    <label for="firstname">First Name</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}"/>
                    <label for="lastname">Last Name</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" />
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="password" id="password" />
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12">
                    <input type="password" name="confirm_password" id="confirm_password" />
                    <label for="confirm_password">Confirm Password</label>
                </div>
                <div class="col s12">
                    <button class="btn btn-success right">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col m2 l4">
        &nbsp;
    </div>
</div>
@endsection

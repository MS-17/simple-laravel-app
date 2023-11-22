@extends('layouts.base')
@section('user_form')
    <div class="user-form">
        <form method="POST" action="/form">
            @csrf
            
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', 'name') }}">
            @error('name')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror

            <label>Last name</label>
            <input type="text" name="lastname" value="{{ old('lastname', 'lastname') }}">
            @error('lastname')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Email</label>
            <input type="text" name="email" value="{{ old('email', 'email') }}">
            @error('email')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <input type="submit" name="submit" value="Submit">

            @if (session('success_message'))
                <div style="color: green;">{{ session('success_message') }}</div>
            @endif

        </form>
    </div>
@endsection
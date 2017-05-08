@extends('layouts.master')
@section('content')
    <div class="centered">
            <a href="{{ route('home')}}">Back to Home</a>
        <h1> I want to {{ $action}} {{ $name }}</h1>
    </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome bodda, {{ Auth::user()->name }}!</p>
</div>
@endsection

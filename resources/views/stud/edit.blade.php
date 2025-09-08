@extends('layouts.app')
@section('title','editing')
@push('styles')
<style>
  label  {
        background-color: red;
    }
</style>
@endpush
@section('content')
<div class="row">
<div class="col-sm-6">
<form action="{{route('stud.update',$stud->id)}}" method="post">
    @csrf 
    @method('PATCH')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$stud->name}}">
    </div>

    <div>
        <label for="batch_no">Batc num</label>
        <input type="text" name="batch_no" id="batch_no"  value="{{$stud->batch_no}}">
    </div>

    <div>
        <label for="contact">COnt</label>
        <input type="date" name="date" id="contact" value="{{$stud->date}}">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="{{$stud->email}}">
    </div>
  <div>
    <button type="submit">update</button>
  </div>
  
</form>
</div>
</div>
@endsection
@extends('layouts.app')
@sections('title','create page to add ')
 @section('content')
 <form action="{{route('stud.store')}}" method="post">
    @csrf 
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="batch_no">Batc num</label>
        <input type="text" name="batch_no" id="batch_no">
    </div>
    <div>
        <label for="contact">COnt</label>
        <input type="date" name="date" id="contact">
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email">
    </div>
  <div>
    <button type="submit">save</button>
  </div>
  <a href="{{route('stud.index')}}">show</a>
</form>
@endsection
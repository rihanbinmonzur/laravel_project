@extends('layouts.app')
@section ('title','category show')
@section('content')
<a href="{{route('stud.create')}}">ADD NEW</a>
<table border="1">

<tr>
    <td>ID</td>
    <th>Name</th>
    <th>DATE</th>
    <th>Batch_no</th>
    <th>email</th>
    <th>action</th>
</tr>
@forelse ($data as $key=> $d)
<tr>
    <td>{{$key+1}}</td>
    <td>{{$d->name}}</td>
    <td>{{$d->date}}</td>
    <td>{{$d->batch_no}}</td>
    <td>{{$d->email}}</td>
    <td>
        <a href="{{route('stud.edit',$d->id)}}">update</a>
        <form action="{{route('stud.destroy',$d->id)}}" method="post" style="display:inline;">
            @csrf 
            @method('delete')
            <button type="submit">Delete</button>

        </form>
    </td>
</tr>
@empty
<tr>
    <td>no data found</td>
</tr>
@endforelse    
</table>
@endsection
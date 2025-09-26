@extends('layouts.app')
@section('daTitle','index page')

@section('content')
 		<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Basic</h2>
							</header>

							<form action="{{route('category.index')}}" method="get">
								<div class="row">
									<div class="col-sm-6">
										<label for="">Name</label>
										<input type="text" name="name" value="">
									</div>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary">Search</button>
										<a href="{{route('category.index')}}" class="btn btn-success">Reset</a>
								</div>
								</div>
							</form>



							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th>ID</th>
											<th>di</th>
											<th>NAme</th>
											<th>Batch_no</th>
											<th class="hidden-phone">Email</th>
											<th class="hidden-phone">Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<a href="{{route('stud.create')}}">Add New</a>
										@forelse ($datas as $data)
										<tr>
											<td> {{$loop->index+1}}</td>
											<td>{{$data->id}}</td>
											<td> {{$data->name}}</td>
											<td> {{$data->batch_no}}</td>
											<td> {{$data->email}}</td>
											<td> {{$data->date}}</td>
											<td>
												<a href="{{route('stud.edit',$data->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
												<a href="#" onclick="event.preventDefault(); if(confirm('are you sure you want to delete it ?')) {$('#delete{{$data->id}}').submit();}" class="btn btn-danger"  "><i class="fa-solid fa-trash-can"></i></a>
											
											<form action="{{route('stud.destroy',$data->id)}}" method="post"   id="delete{{$data->id}}">
												@csrf 
												@method('delete')
											</form>	
										</td>				


										</tr>


										@empty
                                               <tr><td>no data found</td></tr>
										@endforelse
										
									</tbody>
								</table>
							{{ $datas->onEachSide(5)->links('pagination::bootstrap-4') }}
						

							</div>
						</section>
						
@endsection
@push('scripts')

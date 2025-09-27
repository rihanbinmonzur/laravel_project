@extends('layouts.app')
@section('title', 'books pro')
@section('content')
    <a href="">
        Add new Books</a>
    <table border="1">
        <tr>

        </tr>

    </table>
    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Books </h2>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-md">
                        <button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                        <a href="{{ route('book.create') }}">add to</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none id="datatable-editable" style="width:100%">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>author_id</th>
                        <th>category_id</th>
                        <th>ISBN</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>stock</th>
                        <th>Pages</th>
                        <th>Format</th>
                        <th>Image</th>
                        <th>language</th>
                        <th>Publish date</th>
                        <th>Edition</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($data as  $i=>$d)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->author_id }}</td>

                            <td>{{ $d->isbn }}</td>
                            <td>{{ $d->description }}</td>
                            <td>{{ $d->price }}</td>
                            <td>{{ $d->stock }}</td>
                            <td>{{ $d->pages }}</td>
                            <td>{{ $d->format }}</td>
                            <td>
                                @if ($d->image_url)
                                    <img src="{{ asset('uploads/' . $d->image_url) }}" width="80">
                                @endif
                            </td>
                            <td>{{ $d->language }}</td>
                            <td>{{ $d->publish_date }}</td>
                            <td>{{ $d->edition }}</td>
                            <td><a href="{{ route('book.edit', $d->id) }}" class="btn btn-info"><i
                                        class="fa fa-pencil"></i></a>

                                <a href="#" class="btn btn-danger"
                                    onclick="$('#delete{{$data->id}}').submit()"><i class="fa fa-trash"> </i></a>
                                <form action=" {{ route('book.destroy', $data->id) }}" id="delete{{ $data->id }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>no data found</td>
                        </tr>
                </tbody>
                @endforelse
            </table>
        </div>
    </section>

@endsection
